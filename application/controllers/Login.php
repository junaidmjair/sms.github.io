<?php

class Login extends CI_Controller{



    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin_session')){
            redirect(base_url('admin'));
        }

        if($this->session->userdata('user_session')){
            redirect(base_url('student_account'));
        }
    }

    public function index(){

        
        if($this->input->method()=='post'){

             $_POST['std_password']=md5($_POST['std_password']);
             $res = $this->cm->select_data('student','std_id,std_name,image,type',$_POST);

             
            
              
             if($res){
                 if($res[0]['type'] == 1){
                     $this->session->set_userdata('admin_session',$res);
                     echo 1;
                 }else{
                     $this->session->set_userdata('user_session',$res);
                     echo 2;
                 }
             }



        }else{

            $this->load->view('pages/login/login');
        }
    }

    
}


?>