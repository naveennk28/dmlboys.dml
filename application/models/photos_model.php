<?php
class Photos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_images()
    {
        $this->db->select('image_name');
        $query=$this->db->get('upload_images');
        return $query->result();
//        print_r($test);
//        exit;

    }
}