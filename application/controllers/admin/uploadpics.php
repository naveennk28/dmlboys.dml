<?php
class Uploadpics extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view("admin/uploadpics_view");
    }
    public function display()
    {
//        $this->load->model('admin/admin_model');
//        $data['ans']=$this->admin_model->admin_access();


    }
}
