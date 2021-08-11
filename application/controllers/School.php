<?php

class School extends CI_Controller
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
        $data['all_category'] = $this->cm->select_data('category', '*');
        $data['all_class'] = $this->cm->select_data('class', '*');
        $data['all_course'] = $this->cm->select_data('course','*');
        $this->load->view('admin-dashboard',$data);
    }

    public function category()
    {
        if ($this->input->method() == 'post') {

          
            if ($this->form_validation->run() == 'true') {
                $resp = $this->cm->insert_data('category', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Category Added Successfully', 'reload' => base_url('school/category'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Category Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Category";
            $data['all_category'] = $this->cm->select_data('category', '*');
            
            $this->load->view('pages/category/category', $data);
        }
    }

    public function edit_category($id)
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('category_name', 'Category', 'required');
            if ($this->form_validation->run()) {

                $resp  = $this->cm->update_data('category', $_POST, array('category_id' => $id));

                if ($resp) {
                    $arr = array('status' => 'true', 'message' => 'Category Updated Successfully', 'reload' => base_url('school/category'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Not Updated Successfully');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Edit-Category";
            $data['category_info'] = $this->cm->select_data('category', '*', array('category_id' => $id));
            $this->load->view('pages/category/edit-category', $data);
        }
    }

    public function delete_category($id)
    {
        $resp = $this->cm->delete_data('category', array('category_id' => $id));

        if ($resp) {
            echo '<script type="text/javascript">';
            echo 'alert("Are you Sure Want to Delete")';
            echo '</script>';
            redirect(base_url('school/category'));
        }
    }

    public function class()
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('class_name', 'Class Name', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            if ($this->form_validation->run() == 'true') {
                $resp = $this->cm->insert_data('class', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Class Added Successfully', 'reload' => base_url('school/class'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Class Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Class";
            $data['all_class'] = $this->cm->select_data('class', '*');
            $data['all_category'] = $this->cm->select_data('category', '*');
            $this->load->view('pages/class/class', $data);
        }
    }

    public function edit_class($id)
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('class_name', 'Class', 'required');
           
            if ($this->form_validation->run()) {

                $resp  = $this->cm->update_data('class', $_POST, array('class_id' => $id));

                if ($resp) {
                    $arr = array('status' => 'true', 'message' => 'Class Updated Successfully', 'reload' => base_url('school/class'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Not Updated Successfully');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Edit-Class";
            $data['class_info'] = $this->cm->select_data('class', '*', array('class_id' => $id));
            $data['all_category'] = $this->cm->select_data('category', '*',array('status'=>'1'));
            $this->load->view('pages/class/edit-class', $data);
        }
    }

    public function delete_class($id)
    {
        $resp = $this->cm->delete_data('class', array('class_id' => $id));

        if ($resp) {
            redirect(base_url('school/class'));
        }
    }

    public function course()
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('course_name', 'Category Name', 'required');
            $this->form_validation->set_rules('course_duration', 'Duration', 'required');
            $this->form_validation->set_rules('fees', 'Fees', 'required');
            $this->form_validation->set_rules('started', 'Started Date', 'required');
            if ($this->form_validation->run() == 'true') {
                $resp = $this->cm->insert_data('course', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Course Added Successfully', 'reload' => base_url('school/course'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Course Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Course";
            $data['all_course'] = $this->cm->select_data('course','*');
            $this->load->view('pages/course/course', $data);
        }
    }

    public function edit_course($id)
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('course_name', 'Category Name', 'required');
            $this->form_validation->set_rules('course_duration', 'Duration', 'required');
            $this->form_validation->set_rules('fees', 'Fees', 'required');
            $this->form_validation->set_rules('started', 'Started Date', 'required');
           
            if ($this->form_validation->run()) {

                $resp  = $this->cm->update_data('course', $_POST, array('course_id' => $id));

                if ($resp) {
                    $arr = array('status' => 'true', 'message' => 'Course Updated Successfully', 'reload' => base_url('school/course'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Not Updated Successfully');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Edit-Course";
            $data['course_info'] = $this->cm->select_data('course', '*', array('course_id' => $id));
          
            $this->load->view('pages/course/edit-course', $data);
        }
    }

    public function delete_course($id)
    {
        $resp = $this->cm->delete_data('course', array('course_id' => $id));

        if ($resp) {
            redirect(base_url('school/course'));
        }
    }
}
