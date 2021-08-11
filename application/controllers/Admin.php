<?php

class Admin extends CI_Controller{



    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')){
            redirect(base_url());
        }
    }

    public function index(){
        $session = $this->session->userdata('admin_session');
        $data['all_category'] = $this->cm->select_data('category', '*');
        $data['all_class'] = $this->cm->select_data('class', '*');
        $data['all_course'] = $this->cm->select_data('course','*');
        $this->load->view('admin-dashboard',$data);
    }

    public function logout(){
        $this->session->unset_userdata('admin_session');
        redirect(base_url());
    }

    public function change_status($tbl,$id){
        $this->db->where('id',$id);
        $res = $this->db->update($tbl,$_POST);
        if($res){
        echo 1;
        }else{
            echo 0;
        }
    }

    
}


?>