<?php

class Service extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Service_model');
    }

    public function index()
    {
        
        $data['title']      = 'Manage Service';
        $data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['services']    = $this->db->get('services')->result_array(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/index', $data);
        $this->load->view('templates/footer', $data);
    }


    public function addService()
    {
        $data['title']      = 'Add Service';
        $data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('detail','Detail','required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/add-service', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Service_model->add();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Service was adedd</div>');
            redirect('service');
        }
    }

    public function edit($id)
    {
    }
    public function delete($id){
        $this->Service_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Service was deleted</div>');
        redirect('service');


    }
}
