<?php

class Service_model extends CI_Model{



    public function add()
    {
        $name           =  $this->input->post('name');
        $description   = $this->input->post('description');
        $detail        = $this->input->post('detail');
        $image         = $this->input->post('image');
        $is_active     = 1;
        $upload_image = $_FILES['image']['name'];

        if($upload_image){
            $config['upload_path']      = './assets/img/service';
            $config['allowed_types']    = 'svg|gif|jpg|jpeg|png|image/svg+xml';
            $config['max_size']         = '2048';
            $config['encrypt_name']     = 'true';
            $config['remove_space']     = 'true';
            $config['file_name'] = $name;


            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image')){
                echo $this->upload->display_errors();
                die();
            }else{
                $image = $this->upload->data('file_name');
            }
            $data = [
                'name'          =>$name,
                'description'   =>$description,
                'detail'        =>$detail,
                'image'         =>$image,
                'is_active'     =>$is_active
            ];
            $this->db->insert('services',$data);
            redirect('service');
         }else{

        }
    }
public function update($id){

}

public function delete($id){
    $this->db->delete('services',['id'=>$id]);
}



    
}