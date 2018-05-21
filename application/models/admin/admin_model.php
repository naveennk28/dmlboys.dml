<?php
class Admin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();

    }
    public function img_cnt(){
        $query_img=$this->db->count_all_results('upload_images');
        return $query_img;
    }
    public function vid_cnt(){
        $query_video=$this->db->count_all_results('upload_videos');
        return $query_video;
    }
    public function dram_cnt(){
        $query_drama=$this->db->count_all_results('upload_dramas');
        return $query_drama;
    }
    public function admin_access()
    {
        $query=$this->db->get('admin_user');
        $test=$query->result();
        return $test;
    }
    public function upload_pics($data)
    {
        $ans=$this->db->insert('upload_images', $data);
//        print_r($ans);
//        exit;
        return $ans;
    }
    public function upload_videos($data)
    {
        $ans=$this->db->insert('upload_videos', $data);
//        print_r($ans);
//        exit;
        return $ans;
    }
    public function upload_dramas($data)
    {
        $ans=$this->db->insert('upload_dramas', $data);
//        print_r($ans);
//        exit;
        return $ans;
    }
    public function logout($date,$email)
    {
        $this->db->where('username',$email);
        $this->db->update('admin_user',$date);
    }
    public function delete_pics($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('upload_images');
    }
    public function display_pics()
    {
        $this->db->select('*');
        $this->db->from('upload_images');
        $query=$this->db->get();
        return $query->result();
    }
    public function display_videos()
    {
        $this->db->select('*');
        $this->db->from('upload_videos');
        $query=$this->db->get();
        return $query->result();
    }
    public function delete_vid($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('upload_videos');
    }
    public function display_dramas()
    {
        $this->db->select('*');
        $this->db->from('upload_dramas');
        $query=$this->db->get();
        return $query->result();
    }
    public function delete_dram($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('upload_dramas');
    }
}