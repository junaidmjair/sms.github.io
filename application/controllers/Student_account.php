<?php

class Student_account extends CI_Controller{



    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_session')){
            redirect(base_url());
        }
    }

    public function index(){
        $session_info  =$this->session->userdata('user_session');
        $student_info = $this->cm->select_data('student','*',array('std_id'=>$session_info[0]['std_id']));
        $this->load->view('profile',['student_info'=>$student_info]);
    }

    public function profile(){
        $session_info = $this->session->userdata('user_session');
        $student_info = $this->cm->select_data('student','*',array('std_id'=>$session_info[0]['std_id']));
        
        $this->load->view('profile',['student_info'=>$student_info]);
    }

    public function logout(){
        $this->session->unset_userdata('user_session');
        redirect(base_url());
    }

    public function time_table(){
        
        $session_info = $this->session->userdata('user_session');
        $data['all_time_table'] = $this->cm->select_data('time_table','*',array('status'=>'1'));
        
        $this->load->view('pages/student_data/time-table',$data);
    }

    public function fee(){
        
        
        $this->load->view('pages/student_data/fee');
    }

    public function result(){
        $session_info = $this->session->userdata('user_session');
        $result_info = $this->cm->select_data('result','*',array('student_id'=>$session_info[0]['std_id']));
        
        $this->load->view('pages/student_data/result',['result_info'=>$result_info]);
    }
}


?>