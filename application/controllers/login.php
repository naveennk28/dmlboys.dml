<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
    public function index()
    {

    }
    public function login()
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $this->load->model('login_model');
        $data=$this->login_model->user_access($user);
//        print_r($data);
//        exit;
        foreach ($data as $key => $value){
            $pwd[]=$value->password;
            $name[]=$value->name;
            $dp[]=$value->user_dp;
            $login_time[]=$value->last_login;
        }
//        print_r($pwd);
//        print_r($name);
//        print_r($dp);
//        exit;
        if($pwd[0]== $pass)
        {
            $session_arr=array(
                'user' => $name[0],
                'email' => $user,
                'dp' =>$dp[0],
                'last_login' =>$login_time[0]
            );
//            print_r($session_arr);
//            exit;
//            $this->load->library('session');
            $this->session->set_userdata('user',$session_arr);
            redirect('home');
        }
        else{
            redirect('first');
        }
    }
}