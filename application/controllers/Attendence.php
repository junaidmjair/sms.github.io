<?php

class Attendence extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')){
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['classes'] = $this->cm->select_data('class', '*');
        
        
        $data['page_title'] = "Attendence";
        $this->load->view('pages/student-attendence/attendence', $data);
    }

    public function student_list($class_id)
    {
        $data['page_title'] = "Student List";

        $classes = $this->cm->select_data('class', 'class_name', array('class_id' => $class_id));

        $data['student_list'] = $this->cm->select_data('student', 'std_name,std_id', array('class' => $classes[0]['class_name']));

        $this->load->view('pages/student-attendence/student-list', $data);
    }

    public function add_attendence($student_id)
    {

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('remarks', 'Remarks', 'required');
            if ($this->form_validation->run() == 'true') {
                $_POST['student_id'] = $student_id;
                $resp = $this->db->insert('attendence_manage', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Attenddence Added Successfully');
                } else {
                    $arr = array('status' => 'false', 'message' => 'Attendence Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {



            $data['page_title'] = "Add-Attendence";
            $this->db->order_by('id', 'DESC');
            $data['all_attendence'] = $this->cm->select_data('attendence_manage', '*', array('student_id' => $student_id));
            $this->load->view('pages/student-attendence/add-attendence', $data);
        }
    }


    public function edit_attendence($id)
    {
        if ($this->input->method() == 'post') {

            $res = $this->cm->update_data('attendence_manage',$_POST,array('id'=>$id));

            if($res){
                echo "1";
            }else{
                echo "0";
            }
          
        } else {
            $data['page_title'] = "Edit-Attendence";
            $data['attendence_info'] = $this->cm->select_data('attendence_manage', '*', array('id' => $id));
                       
            $this->load->view('pages/student-attendence/edit-attendence', $data);
        }
    }




}
