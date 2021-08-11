<?php
 
 class Student extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        if(!$this->session->userdata('admin_session')){
            redirect(base_url());
        }
    }

    public function add_student(){

        if ($this->input->method() == 'post') {

            $file_data = $this->file_lib->upload_image('uploads/student_img/','image','JPG|PNG|JPEG|jpg|png|jpeg');
         

            $this->form_validation->set_rules('std_name', 'Category Name', 'required');
            $this->form_validation->set_rules('std_father_name', 'Father', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');
            $this->form_validation->set_rules('join_date', 'Join Date', 'required');
            $this->form_validation->set_rules('std_email', 'Email', 'required');
            $this->form_validation->set_rules('std_password', 'Password', 'required');
            if ($this->form_validation->run() == 'true') {
                $_POST['image'] = $file_data['file_name'];
                
                
                $_POST['std_password'] = md5($_POST['std_password']);
                $resp = $this->cm->insert_data('student', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Student Added Successfully', 'reload' => base_url('student/add_student'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Student Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Add-Student";
            $data['all_category'] = $this->cm->select_data('category', '*');
            $data['all_class'] = $this->cm->select_data('class', '*');
            $data['all_students'] = $this->cm->select_data('student','*');
            $this->load->view('pages/student/student-registration', $data);
        }

    
    }


    public function edit_student($id){

        if ($this->input->method() == 'post') {

            $file_data = $this->file_lib->upload_image('uploads/student_img/','image','JPG|PNG|JPEG|jpg|png|jpeg');

            $this->form_validation->set_rules('std_name', 'Category Name', 'required');
            $this->form_validation->set_rules('std_father_name', 'Father', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');
            $this->form_validation->set_rules('join_date', 'Join Date', 'required');
            $this->form_validation->set_rules('std_email', 'Email', 'required');
        
            if ($this->form_validation->run() == 'true') {
                $_POST['image'] = $file_data['file_name'];

                $_POST['std_password'] = md5($_POST['std_password']);
               
               
                $resp = $this->cm->update_data('student', $_POST,array('std_id'=>$id));

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Student Updated Successfully', 'reload' => base_url('student/add_student'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Student Updated to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Edit-Student";
            $data['all_category'] = $this->cm->select_data('category', '*');
            $data['all_class'] = $this->cm->select_data('class', '*');
            $data['student_info'] = $this->cm->select_data('student','*',array('std_id'=>$id));
            $this->load->view('pages/student/edit-student', $data);
        }



    }


    public function delete_student($id){
        $resp = $this->cm->delete_data('student',array('std_id'=>$id));
        if($resp){
            redirect(base_url('student/add_student'));
        }
    }





 }

?>