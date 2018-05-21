<?php
class Userprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        $email=($this->session->userdata['user']['email']);
        $this->load->model('userprofile_model');
        $data=$this->userprofile_model->display_user($email);
        foreach ($data as $key => $value )
        {
            $result[]=$value->name;
            $result1[]=$value->email;
            $result2[]=$value->mobile;
            $result3[]=$value->user_dp;
        }
        $data2['name']=$result[0];
        $data2['email']=$result1[0];
        $data2['mobile']=$result2[0];
        $data2['dp']=$result3[0];
//        print_r($result);
//        exit;
        $this->load->view('userprofile_view',$data2);
    }
    public function update_name()
    {
        $data=array(
            'name' => $_POST['name'],
        );
//        print_r($data);
//        exit;
        $email=($this->session->userdata['user']['email']);
        $this->load->model('userprofile_model');
        $this->userprofile_model->update_user($data,$email);
        redirect('userprofile');
    }
    public function update_password()
    {
        $data=array(
            'password' => $_POST['pass']
        );
//        print_r($data);
//        exit;
        $email=($this->session->userdata['user']['email']);
        $this->load->model('userprofile_model');
        $this->userprofile_model->update_user($data,$email);
        redirect('userprofile');
    }
    public function update_dp()
    {
        $data=array(
            'user_dp' => $_FILES['dp']['name']
        );
//        print_r($data);
//        exit;
        $email=($this->session->userdata['user']['email']);
        $this->load->model('userprofile_model');
        $this->userprofile_model->update_user($data,$email);
        redirect('userprofile');
    }
}