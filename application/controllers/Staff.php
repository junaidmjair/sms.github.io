<?php
 
 class Staff extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        if(!$this->session->userdata('admin_session')){
            redirect(base_url());
        }
    }

    public function add_staff(){

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('staff_name', 'Staff Name', 'required');
            $this->form_validation->set_rules('staff_father_name', 'Father', 'required');
            $this->form_validation->set_rules('staff_email', 'Staff Email', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('dob', 'Dob', 'required');
            $this->form_validation->set_rules('join_date', 'Join Date', 'required');
            $this->form_validation->set_rules('experience', 'Experience', 'required');
            $this->form_validation->set_rules('payment', 'Payment', 'required');
            if ($this->form_validation->run() == 'true') {
              
                $resp = $this->cm->insert_data('staff', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Staff Added Successfully', 'reload' => base_url('staff/add_staff'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Staff Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Add-Student";
          
            $data['all_staff'] = $this->cm->select_data('staff','*');
            $this->load->view('pages/staff/staff-registeration', $data);
        }

    
    }


    public function edit_staff($id){

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('staff_name', ' Name', 'required');
            $this->form_validation->set_rules('staff_father_name', 'Father', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('dob', 'DOB', 'required');
            $this->form_validation->set_rules('experience', 'Experience', 'required');
            $this->form_validation->set_rules('payment', 'Payment', 'required');
        
            if ($this->form_validation->run() == 'true') {
               
                $resp = $this->cm->update_data('staff', $_POST,array('staff_id'=>$id));

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Staff Updated Successfully', 'reload' => base_url('staff/add_staff'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Staff Updated to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Edit-Staff";
            
            $data['staff_info'] = $this->cm->select_data('staff','*',array('staff_id'=>$id));
            $this->load->view('pages/staff/edit-staff', $data);
        }



    }


    public function delete_staff($id){
        $resp = $this->cm->delete_data('staff',array('staff_id'=>$id));
        if($resp){
            redirect(base_url('staff/add_staff'));
        }
    }





 }

?>