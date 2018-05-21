<?php
class Videos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_videos()
    {
        $this->db->select('video_name');
        $query=$this->db->get('upload_videos');
        return $query->result();
//        print_r($test);
//        exit;

    }
}