<?php
class Dramas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_dramas()
    {
        $this->db->select('dramas_name');
        $query=$this->db->get('upload_dramas');
        return $query->result();
//        print_r($test);
//        exit;

    }
}