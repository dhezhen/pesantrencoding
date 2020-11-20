<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function addNewRole($data)
    {
        $this->db->insert('user_role', $data);
    }

    public function deleteDatarole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateDataRole()
    {
        $id = $this->input->post('id');
        $data = [
            'role' => $this->input->post('role', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('user_role', $data);
    }
    public function updateAccessUser()
    {
        $id = $this->input->post('id');

        $data = [
            'role_id' => $this->input->post('role_id')
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function getUserRole()
    {
        $query = "select user.id, user.name, user.role_id,user.is_active, user_role.role from user join user_role on user.role_id=user_role.id where user.role_id!=1";
        return  $this->db->query($query)->result_array();
    }

    public function deleteDatauser($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
