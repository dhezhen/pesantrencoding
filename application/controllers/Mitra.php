<?php

class Mitra extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mitra_model');
    }

    public function index()
    {
        $data['title'] = 'Manage Mitra';
        $data['mitra'] = $this->db->get('mitra')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mitra/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Mitra_model->addDataMitra();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mitra was adedd</div>');
            redirect('mitra');
        }
    }

    public function delete($id)
    {
        $this->Mitra_model->deleteMitra($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Mitra was deleted</div>');
        redirect('mitra');
    }
}
