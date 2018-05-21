<?php
class First extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('first_view');
    }
    public function signin()
    {
        $pass = $_POST['pass'];
        $con_pass = $_POST['con_pass'];
        if ($pass == $con_pass)
        {
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'password' => $_POST['pass'],
                'user_dp' => $_FILES['dp']['name']
            );
//            print_r($data);
//            exit;
            $this->load->model('first_model');
            $this->first_model->signin($data);
            redirect('first');
        }
        else
            echo 'Passwords not Matched';
    }
}