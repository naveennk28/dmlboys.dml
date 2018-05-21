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
        $this->load->view('admin/login_view');
    }
    public function login()
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $this->load->model('admin/login_model');
        $data=$this->login_model->admin_access($user);
        foreach ($data as $key => $value){
            $result[]=$value->password;
            $name[]=$value->name;
            $dp[]=$value->admin_dp;
            $login_time[]=$value->last_login;
        }
        $data2=$result;
//        print_r($data2[0]);
//        exit;
        if($result[0]== $pass)
        {
            $session_data=array(
                'user' => $user,
                'name' => $name[0],
                'dp' =>$dp[0],
                'last_login' =>$login_time[0]
            );
//            print_r($session_data);
//            exit;
//            $this->load->library('session');
            $this->session->set_userdata('user',$session_data);
            redirect('admin/admin');
        }
        else{
            redirect('admin/login');
        }
    }
}