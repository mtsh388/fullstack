<?php

class Upload_model extends CI_Model
{

    public function cek_image()
    {
        $this->db->limit(1);
        $this->db->order_by('id_group_image', 'DESC');
        return $this->db->get('multiple_image')->row_array();
    }
    public function upload($insert, $data)
    {
        $this->db->insert_batch('multiple_image', $insert);
        $this->db->set('main_image', 1);
        $this->db->where('image', $data);
        $this->db->update('multiple_image');
    }
    public function cek_image_artikel()
    {
        $this->db->limit(1);
        $this->db->order_by('id_group_image', 'DESC');
        return $this->db->get('multiple_image_artikel')->row_array();
    }
    public function upload_artikel($insert, $data)
    {
        $this->db->insert_batch('multiple_image_artikel', $insert);
        $this->db->set('main_image', 1);
        $this->db->where('image', $data);
        $this->db->update('multiple_image_artikel');
    }
}
