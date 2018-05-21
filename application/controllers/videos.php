<?php
class Videos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->model("videos_model",'nav');
        $data=$this->nav->get_videos();
        foreach ($data as $key => $value){
            $result[]=$value->video_name;
        }
//        print_r($result);
//        exit;
        $data2['ans']=$result;
//        print_r($data2);
//        exit;
        $this->load->view("videos_view",$data2);
    }
}