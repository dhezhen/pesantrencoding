<?php

class Service_model extends CI_Model{

public function add() {
    $data  = [
    'name'          => $this->input->post('name'),
    'description'   => $this->input->post('description'),
    'image'         => $this->input->post('image'),
    'is_active'     => 0
    ];

    $this->db->insert('service',$data);

}
public function update($id){

}

public function delete($id){
    $this->db->delete('service',['id'=>$id]);
}



    
}