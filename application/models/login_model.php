<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function user_access($user)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$user);
        $query=$this->db->get();
        $test=$query->result();
        return $test;
    }
}