<?php
class Photos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {

        $this->load->model("photos_model",'nav');
        $data=$this->nav->get_images();
        foreach ($data as $key => $value){
            $result[]=$value->image_name;
        }
//        print_r($result);
//        exit;
        $data2['ans']=$result;
//        print_r($data2);
//        exit;
        $this->load->view("photos_view",$data2);
    }
}