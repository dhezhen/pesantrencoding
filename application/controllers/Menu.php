<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Menu_model');
    }


    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $idsegment = $this->uri->segment(3);
        // $data['MenuById'] = $this->db->get_where('user_menu', ['menu' => $idsegment]);

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been added </div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been deleted </div>');
        redirect('menu');
    }

    public function updateMenu()
    {
        $this->Menu_model->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been Updated </div>');
        redirect('menu');
    }

    public function subMenu()
    {
        $data['title'] = "Submenu Management";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Menu_model->addSubMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Submenu Has Been Added </div>');
            redirect('menu/submenu');
        }
    }

    public function editsubmenu()
    {
        $this->Menu_model->updateSubMenu();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Has Been Updated </div>');
        redirect('menu/submenu');
    }

    public function deleteSubMenu($id)
    {
        $this->Menu_model->deleteSubmenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been deleted </div>');
        redirect('menu/submenu');
    }
}
