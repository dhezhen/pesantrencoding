<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sosmed_model extends CI_Model
{

    public function getAll()
    {
        return $this->db->get('sosmed')->result_array();
    }

    public function addSosmed()
    {

        $name = $this->input->post('name', true);
        $url = $this->input->post('url', true);
        $icon = $this->input->post('icon', true);

        $data = [
            'name'  => $name,
            'url'   => $url,
            'icon'   => $icon
        ];
        $this->db->insert('sosmed', $data);
    }


    public function delete($id)
    {
        $this->db->delete('sosmed', ['id' => $id]);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'name' => $this->input->post('name'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
        ];

        $this->db->where('id', $id);
        $this->db->update('sosmed', $data);
    }
}
