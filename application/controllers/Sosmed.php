<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sosmed extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Sosmed_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Manage Sosmed';
        // $data['sosmed'] = $this->Sosmed_model->getAll();
        $data['sosmed'] = $this->db->get('sosmed')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('sosmed/index', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Sosmed_model->addSosmed();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">New Sosmed Added</div>');
            redirect('sosmed');
        }
    }

    public function updateSosmed()
    {
        $this->Sosmed_model->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">Sosmed Updatedd</div>');
        redirect('sosmed');
    }

    public function deleteSosmed($id)
    {
        $this->Sosmed_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="danger">Sosmed Deleted</div>');
        redirect('sosmed');
    }
}
