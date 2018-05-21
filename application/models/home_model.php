<?php
class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('date');
    }
    public function user_details($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query=$this->db->get();
        $details=$query->result();
//        print_r($details);
//        exit;
        return $details;
    }
    public function logout($date,$email)
    {
        $this->db->where('email',$email);
        $this->db->update('users',$date);
    }
}