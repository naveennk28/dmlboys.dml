<?php
class Userprofile_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function display_user($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query=$this->db->get();
        $test=$query->result();
//        print_r($test);
//        exit;
        return $test;
    }
    public function update_user($data,$email)
    {
        $this->db->where('email',$email);
        $this->db->update('users',$data);
    }
}