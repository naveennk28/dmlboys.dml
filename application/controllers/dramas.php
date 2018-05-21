<?php
class Dramas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->model("dramas_model",'nav');
        $data=$this->nav->get_dramas();
        foreach ($data as $key => $value){
            $result[]=$value->dramas_name;
        }
//        print_r($result);
//        exit;
        $data2['ans']=$result;
//        print_r($data2);
//        exit;
        $this->load->view("dramas_view",$data2);
    }
}