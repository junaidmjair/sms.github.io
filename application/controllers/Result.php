<?php

class Result extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_session')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('student_id', 'Student Name', 'required');
            $this->form_validation->set_rules('exam_name', 'Exam Name', 'required');
            $this->form_validation->set_rules('result', 'Result', 'required');
            if ($this->form_validation->run() == 'true') {
                $resp = $this->cm->insert_data('result', $_POST);

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Result Added Successfully', 'reload' => base_url('index.php/result/'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Result Added to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);

        } else {

            $data['page_title'] = "Add-Result";
            $data['all_student'] = $this->cm->select_data('student', 'std_id,std_name,class');
            $this->db->join('student','result.student_id=std_id'); // for fetch student name from student table //
            $data['all_result'] = $this->cm->select_data('result','result.*,student.std_name as sname');
            $this->load->view('pages/result-generate/result', $data);
        }
    }


    function find_exam()
    {
        $all_exam = $this->cm->select_data('exam', 'exam_title', $_POST);

        echo "<option value=''>Select</option>";

        if ($all_exam) {
            foreach ($all_exam as $exam) {

?><option><?php echo $exam['exam_title']; ?></option>
<?php


            }
        }
    }




    public function edit_result($id){

        if($this->input->method()=='post'){

            $this->form_validation->set_rules('student_id', 'Student Name', 'required');
            $this->form_validation->set_rules('exam_name', 'Exam Name', 'required');
            $this->form_validation->set_rules('result', 'Result', 'required');
            if ($this->form_validation->run() == 'true') {
                $resp = $this->cm->update_data('result', $_POST,array('id'=>$id));

                if ($resp) {

                    $arr = array('status' => 'true', 'message' => 'Result Updated Successfully', 'reload' => base_url('index.php/result/'));
                } else {
                    $arr = array('status' => 'false', 'message' => 'Result Update to falied');
                }
            } else {
                $arr = array('status' => 'false', 'message' => validation_errors());
            }

            echo json_encode($arr);
        }else{

            $data['page_title'] = "Add-Result";
            $data['all_student'] = $this->cm->select_data('student','std_id,std_name,class');

            $this->db->join('student','result.student_id=std_id');

            $data['all_result'] = $this->cm->select_data('result','result.*,student.class',array('id'=>$id));

            

            $data['all_exam'] = $this->cm->select_data('exam','exam_id,exam_title',array('class'=>$data['all_result'][0]['class']));

            
            $this->load->view('pages/result-generate/edit-result', $data);

        }
    }
}
