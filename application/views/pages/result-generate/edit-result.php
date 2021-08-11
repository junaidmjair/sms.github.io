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
        <div class="col-sm-12">
            <div class="card " style="padding: 15px 22px;">
                <form action="<?php echo base_url('index.php/result/edit_result/' . $this->uri->segment(3)) ?>" class="form_operation">


                    <div class="form-group">
                        <label for="categoryname">Select Student:</label>
                        <select name="student_id" id="select_student" class="form-control">
                            <option value="">Select</option>
                            <?php foreach ($all_student as $student) { ?>

                                <option <?php if ($all_result[0]['student_id'] == $student['std_id']) {
                                            echo "selected";
                                        } ?> id="st_<?php echo $student['std_id'] ?>" data-val="<?php echo $student['class'] ?>" value="<?php echo $student['std_id'] ?>"> <?php echo $student['std_name'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Select Exam:</label>
                        <select name="exam_name" id="exam" class="form-control">
                            <option value="">Select</option>

                            <?php foreach ($all_exam as $exam) {
                            ?>

                                <option <?php if ($all_result[0]['exam_name'] == $exam['exam_title']) {
                                            echo "selected";
                                        } ?>> <?php echo $exam['exam_title']; ?></option>
                            <?php }
                            ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Result:</label>

                        <input type="text" name="result" id="result" value="<?php echo $all_result[0]['result'] ?>" class="form-control">



                        </select>

                    </div>

                    <button type="submit" class="btn btn-info float-left w-100">UPDATE</button>
                </form>
            </div>





        </div>
    </div>
</div>






<?php $this->load->view('include/footer') ?>