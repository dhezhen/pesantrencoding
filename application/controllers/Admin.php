<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function addNewRole()
    {
        $role_name = $this->input->post('role_name');
        $data =  [
            'role' => $role_name
        ];
        $this->Admin_model->addNewRole($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">New Role Added</div>');
        redirect('Admin/role');
    }




    public function deleteRole($id)
    {

        $this->Admin_model->deleteDatarole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger">Role Deleted</div>');
        redirect('Admin/role');
    }

    public function editRole($id)
    {
        $data['title'] = 'Update Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->Admin_model->getRoleById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-role', $data);
        $this->load->view('templates/footer');
    }

    public function updateRole()
    {
        $this->Admin_model->updateDataRole();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">Role Updated</div>');
        redirect('admin/role');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=1');
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">Access change</div>');
    }


    public function manage()
    {
        $data['title'] = 'Manage user';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['list_user'] = $this->Admin_model->getUserRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/footer');
    }

    public function editUserAccess($id)
    {
        $data['title'] = 'Update Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_role'] = $this->Admin_model->getUserById($id);
        $data['list_role'] = $this->db->get('user_role')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-access', $data);
        $this->load->view('templates/footer');
    }
    public function updateUserAccess()
    {

        $this->Admin_model->updateAccessUser();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">Acces Updated</div>');
        redirect('admin/manage');
    }

    public function deleteUser($id)
    {
        $this->Admin_model->deleteDataUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger">user Deleted</div>');
        redirect('Admin/manage');
    }
}
