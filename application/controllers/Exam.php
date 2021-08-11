<?php

class Exam extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_session')) {
            redirect(base_url());
        }
    }

    public function add_exam()
    {

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('exam_title', 'Exam Title', 'required');
            $this->form_validation->set_rules('start_date', 'Date', 'required');
            $this->form_validation->set_rules('category', 'Categroy', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');
            if ($this->form_validation->run() == 'true') {

                $resp = $this->cm->insert_data('exam', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Exam Added Successfully', 'reload' => base_url('exam/add_exam'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Exam Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {



            $data['category'] = $this->cm->select_data('category', '*', array('status' => '1'));
            $data['all_exam'] = $this->cm->select_data('exam', '*');

            $data['page_title'] = "Add-Exam";
            $this->load->view('pages/exam-management/add-exam', $data);
        }
    }

    public function find_class()
    {

        // $this->db->like('category', $_POST['category']);
        $res = $this->cm->select_data('class', 'class_name', $_POST);

        if ($res) {

            echo "<option value=''>Select</option>";

            foreach ($res as $r1) { ?>
                <option><?php echo $r1['class_name']; ?></option>
<?php }
        } else {
            echo "<option value=''>Select</option>";
        }
    }


    public function edit_exam($id)
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('exam_title', 'Exam Title', 'required');
            $this->form_validation->set_rules('start_date', 'Date', 'required');
            $this->form_validation->set_rules('category', 'Categroy', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');

            if ($this->form_validation->run()) {

                $resp  = $this->cm->update_data('exam', $_POST, array('exam_id' => $id));

                if ($resp) {
                    $arr = array('status' => 'true', 'message' => 'Exam Updated Successfully', 'reload' => base_url('exam/add_exam'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Not Updated Successfully');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        } else {
            $data['page_title'] = "Edit-Exam";
            $data['exam_info'] = $this->cm->select_data('exam', '*', array('exam_id' => $id))[0];
            $data['category_info'] = $this->cm->select_data('category', '*', array('status' => '1'));
            $data['class_info'] = $this->cm->select_data('class', '*', array('category' => $data['exam_info']['category']));

            $this->load->view('pages/exam-management/edit-exam', $data);
        }
    }


    public function add_time_table()
    {







        if ($this->input->method() == 'post') {
            $img_resp = $this->file_lib->upload_image('uploads/time_table', 'image', 'PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
            $this->form_validation->set_rules('exam_id', 'Exam', 'required');


            if ($this->form_validation->run() == 'true') {
                $_POST['image'] = $img_resp['file_name'];


                $resp = $this->cm->insert_data('time_table', $_POST);
                if ($resp)
                    $arr = array('status' => 'true', 'message' => ' Time Table Successfully Added', 'reload' => base_url('exam/add_time_table'));
                else
                    $arr = array('status' => 'false', 'message' => 'Time not Added');
            } else {
                $arr = array('status', 'false', 'message' => validation_errors());
            }



            echo json_encode($arr);
        } else {

            $data['page_title'] = "ADD TIME TABLE";
            $data['all_exam'] = $this->cm->select_data('exam', '*', array('status' => '1'));
            $data['all_time_table'] = $this->cm->select_data('time_table', '*', array('status' => '1'));
            $this->load->view('pages/exam-management/add-time-table', $data);
        }
    }

    public function edit_time_table($id){
        $data['page_title'] = "EDIT TIME TABLE";
        $data['time_table_info'] = $this->cm->select_data('time_table','*',array('id'=>$id));
        
        $data['all_exam'] = $this->cm->select_data('exam','*',array('status'=>'1'));
        $this->load->view('pages/exam-management/edit-time-table',$data);
    }

    public function delete_time_table($id){

        $res = $this->cm->delete_data('time_table',array('id'=>$id));
        if($res){
            redirect(base_url('exam/add_time_table'));
        }
    }





}
