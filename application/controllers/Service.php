<?php

class Service extends CI_Controller
{

    public function index()
    {

        $data['title'] = 'Manage Service';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/index', $data);
        $this->load->view('templates/footer', $data);
    }


    public function addService()
    {
    }

    public function editService($id)
    {
    }
    public function deleteService($id){
        $this->Service_model->delete($id);
    }
}
