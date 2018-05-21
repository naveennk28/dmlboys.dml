<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('date');
    }
    public function index()
    {
//        $email = ($this->session->userdata['user']['email']);
////        print_r($email);
////        exit;
//        $this->load->model('home_model');
//        $data=$this->home_model->user_details($email);
//        foreach ($data as $key => $value)
//        {
//            $result[]=$value -> user_dp;
//        }
//        $data2['dp']=$result;
////        print_r($data2);
////        exit;
        $this->load->view("home_view");
    }
    public function logout()
    {
        $email=($this->session->userdata['user']['email']);
        if(function_exists('date_default_timezone_set')) {
            date_default_timezone_set("Asia/Kolkata");
        }
//        $sys_timestamp=date('d-m-y h:i:s');
//        $sys_timestamp = gmdate("l jS \of F Y h:i:s A");
//        print_r($sys_timestamp);
//        exit;
        $date=array(
            'last_login' => date('d-m-y h:i:s')
        );
//        print_r($date);
//        exit;
        $this->load->model('home_model');
        $this->home_model->logout($date,$email);
        $session_arr=array(
            'user' => ''
        );
        $this->session->unset_userdata('user',$session_arr);
        redirect('first');
    }
}