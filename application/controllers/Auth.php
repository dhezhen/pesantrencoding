<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Page ";
            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            //validasi sukse
            $this->_login();
        }
    }

    private function _login()
    {
        $email =  $this->input->post('email');
        $password =  $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //jika user aktif

            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    //jika password benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="danger">wrong password</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="danger">Email not activated</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="danger">Email not registered</div>');
            redirect('auth');
        }
    }



    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('name', 'NAME', 'required|trim');
        $this->form_validation->set_rules('email', 'EMAIL', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'email already used']);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[4]|matches[password2]', ['matches' => 'password too short']);
        $this->form_validation->set_rules('password2', 'password', 'required|min_length[4]|trim|matches[password1]', ['matches' => 'password too short']);

        if ($this->form_validation->run() == false) {
            $data['title'] = "Registration Page ";
            $this->load->view('auth/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [

                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image'  => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()

            ];


            //siapkan token 
            $token =  base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            $this->db->insert('user_token', $user_token);
            $this->db->insert('user', $data);
            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account has been created, please activate your acount</div>');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'dedehusenn@gmail.com';
        $config['smtp_pass'] = '04051992';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");



        $this->email->from('dedehusenn@gmail.com', 'Pesantren Coding');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message("clik here to verify your account : <a href ='" . base_url() . "auth/verify?email=" . $this->input->post('email') . "&token=" . urlencode($token) . "' > Activate </a>");
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message("clik here to reset your password : <a href ='" . base_url() . "auth/resetpassword?email=" . $this->input->post('email') . "&token=" . urlencode($token) . "' > Reset Password</a>");
        }
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }


    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated, please login</div>');
                    redirect('auth');
                } else {
                    $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Token Expired</div>');
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong token</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Wrong email</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">You  have been logout </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Blocked by sistem';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('auth/blocked');
        $this->load->view('templates/footer');
    }


    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'EMAIL', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Forgot Password";
            $this->load->view('auth/header', $data);
            $this->load->view('auth/forgot-password');
            $this->load->view('auth/footer');
        } else {
            $email = $this->input->post('email');
            $user =  $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                $this->db->insert('user_token', $user_token);

                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Check your email to reset your password</div>');
                redirect('auth/forgotpassword');
            } else {

                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Email not registered or not active</div>');
                redirect('auth/forgotpassword');
            }
        }
    }


    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Reset Password Failed, Invalid token</div>');
                redirect('auth/forgotpassword');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Reset Password Failed, Email is  not registered or not active</div>');
            redirect('auth/forgotpassword');
        }
    }



    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        } else {
        }
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Change Password";
            $this->load->view('auth/header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('auth/footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">Password success changed, please login</div>');
            redirect('auth');
        }
    }
}
