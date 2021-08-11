<?php $this->load->view('include/header') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2><?php echo $page_title; ?></h2>
        </div>
        <div class="col-sm-6">
            <nav aria-label="breadcrumb" style="float:right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <form action="<?php echo base_url('index.php/attendence/edit_attendence/' . $this->uri->segment(3)) ?>" class="attendence_update_form_operation">
                <div class="form-group">
                    <label for="">Enter Status:</label>
                    <input type="hidden" name="student_id" id="student_id" value="<?php echo $attendence_info[0]['student_id'] ?>">

                    <input type="radio" class="radio" name="status" value="Present" <?php if ($attendence_info[0]['status'] == 'Present') {
                                                                                        echo "checked";
                                                                                    } ?>>Present &nbsp;
                    <input type="radio" class="radio" name="status" value="Absent" <?php if ($attendence_info[0]['status'] == 'Absent') {
                                                                                        echo "checked";
                                                                                    } ?>>Absent




                </div>

                

                <div class="form-group">
                    <label for="categoryname">Select Date:</label>
                    <input type="date" name="date" id="date" value="<?php echo $attendence_info[0]['date'] ?>" class="form-control">


                </div>

                <div class="form-group">
                    <label for="categoryname">Remarks:</label>
                    <textarea name="remarks" class="form-control" id="remarks"><?php echo $attendence_info[0]['remarks'] ?></textarea>

                </div>
                <button type="submit" class="btn btn-info float-left w-100">UPDATE</button>
            </form>
        </div>
    </div>




</div>











<!-- modal closed -->


<?php $this->load->view('include/footer') ?>