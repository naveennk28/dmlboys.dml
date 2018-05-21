<?php
class Admin extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->model("admin/admin_model",'nk');
        $data['image']=$this->nk->img_cnt();
        $data['drama']=$this->nk->dram_cnt();
        $data['video']=$this->nk->vid_cnt();
//        print_r($img);
//        print_r($drama);
//        print_r($video);
//        exit;
        $data2=$this->nk->display_pics();
        $data3=$this->nk->display_videos();
        $data4=$this->nk->display_dramas();
        foreach ($data2 as $key => $value)
        {
            $image[]=$value->image_name;
            $id_img[]=$value->id;
        }
        $data['images']=$image;
        $data['id_img']=$id_img;

        foreach ($data3 as $key => $value)
        {
            $video[]=$value->video_name;
            $id_vid[]=$value->id;
        }
        $data['videos']=$video;
        $data['id_vid']=$id_vid;

        foreach ($data4 as $key => $value)
        {
            $drama[]=$value->dramas_name;
            $id_dram[]=$value->id;
        }
        $data['dramas']=$drama;
        $data['id_dram']=$id_dram;
        $this->load->view("admin/admin_view",$data);
    }
    public function display()
    {
//        $this->load->model('admin/admin_model');
//        $data['ans']=$this->admin_model->admin_access();
    }
    public function upload_pics()
    {
        if(!empty($_FILES['pics']['name'])){
            $config['upload_path'] = 'upload/photos/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['pics']['name'];

            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('pics')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }
        }

        $data=array(
            'image_name'=> $_FILES['pics']['name']
        );

//        print_r($data);
//        exit;
        $this->load->model("admin/admin_model","nav");
        $ans=$this->nav->upload_pics($data);
        if($ans){
            $message = "Photo uploaded successfully.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            $message = "Some problems occured, please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        $this->load->helper('url');
        redirect('admin/admin');
    }
    public function upload_videos()
    {
        if(!empty($_FILES['up_video']['name'])){
            $config['upload_path'] = 'upload/videos/';
            $config['allowed_types'] = 'mp4|mpeg|mpg|mov|avi|mpe|qt|3gp|vob';
            $config['file_name'] = $_FILES['up_video']['name'];
            $config['max_size']         = '';
            $config['overwrite']        = FALSE;
            $config['remove_spaces']    = TRUE;
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('up_video')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }
        }

        $data=array(
            'video_name'=> $_FILES['up_video']['name']
        );

//        print_r($data);
//        exit;
        $this->load->model("admin/admin_model","nav");
        $ans=$this->nav->upload_videos($data);
        if($ans){
            echo "Video uploaded successfully";
        }else{
            echo "Some problems occured, please try again";
        }
        $this->load->helper('url');
        redirect('admin/admin');
    }
    public function upload_dramas()
    {
        if(!empty($_FILES['up_drama']['name'])){
            $config['upload_path'] = 'upload/dramas/';
            $config['allowed_types'] = 'mp4|mpeg|mpg|mov|avi|mpe|qt|3gp|vob';
            $config['file_name'] = $_FILES['up_drama']['name'];
            $config['max_size']         = '';
            $config['overwrite']        = FALSE;
            $config['remove_spaces']    = TRUE;
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('up_drama')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }
        }

        $data=array(
            'dramas_name'=> $_FILES['up_drama']['name']
        );

//        print_r($data);
//        exit;
        $this->load->model("admin/admin_model","nav");
        $ans=$this->nav->upload_dramas($data);
        if($ans){
            echo "Drama Video uploaded successfully";
        }else{
            echo "Some problems occured, please try again";
        }
        $this->load->helper('url');
        redirect('admin/admin');
    }
    public function logout()
    {
        $email=($this->session->userdata['user']['user']);
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
        $this->load->model('admin/admin_model');
        $this->admin_model->logout($date,$email);
        $session_array=array(
            'username' => ''
        );
        $this->session->unset_userdata('userout',$session_array);
        redirect('admin/login');
    }
    public function delete_pics()
    {
        $id=$_POST['id'];
//        print_r($id);
//        exit;
        $this->load->model('admin/admin_model');
        $this->admin_model->delete_pics($id);
    }
    public function delete_vid()
    {
        $id=$_POST['id'];
//        print_r($id);
//        exit;
        $this->load->model('admin/admin_model');
        $this->admin_model->delete_vid($id);
    }
    public function delete_dram()
    {
        $id=$_POST['id'];
//        print_r($id);
//        exit;
        $this->load->model('admin/admin_model');
        $this->admin_model->delete_dram($id);
    }

}
