<?php
class First_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function signin($data)
    {
        $this->db->insert('users',$data);
    }
}