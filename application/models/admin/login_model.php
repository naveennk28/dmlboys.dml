<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function admin_access($user)
    {
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('username',$user);
        $query=$this->db->get();
        $test=$query->result();
        return $test;
    }
}