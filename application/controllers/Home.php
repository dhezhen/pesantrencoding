<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pesantrencoding - Home';
        $data['sosmed'] = $this->db->get('sosmed')->result_array();
        $data['mitra'] = $this->db->get('mitra')->result_array();
        $data['services']    = $this->db->get('services')->result_array(); 
        $this->load->view('front/header_nav', $data);
        $this->load->view('front/index');
        $this->load->view('front/footer');
    }

    public function blog()
    {
        $data['title'] = 'Pesantrencoding - Blog';
        $this->load->view('front/header_nav', $data);
        $this->load->view('front/blog');
        $this->load->view('front/footer');
    }


    public function privacy()
    {
        $data['title'] = 'Pesantrencoding - privacy policy';
        $this->load->view('front/header_nav', $data);
        $this->load->view('front/privacy-policy');
        $this->load->view('front/footer');
    }




    public function terms()
    {
        $data['title'] = "Pesantrencoding - Term and Conditions";
        $this->load->view('front/header_nav', $data);
        $this->load->view('front/terms');
        $this->load->view('front/footer');
    }
}
