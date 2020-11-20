<?php


class Mitra_model extends CI_model
{
    public function addDataMitra()
    {
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path']      = './assets/img/mitra';
            $config['allowed_types']    = 'gif|jgp|png';
            $config['max_size']         = '2048';
            $config['encrypt_name']     = 'true';
            $config['remove_space']     = 'true';
            $config['file_name'] = $name . '_' . $city;


            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Upload Gagal";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }

            $data = [
                'name' => $name,
                'city' => $city,
                'image' => $image
            ];
            $this->db->insert('mitra', $data);
        } else {
        }
    }

    public function deleteMitra($id)
    {

        $image = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('mitra');
        unlink(FCPATH . 'assets/img/mitra/' . $image);
    }

    public function editMitra($id)
    {
    }
}
