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
                <form action="<?php echo base_url('exam/edit_time_table') ?>" class="form_operation">


                    <div class="form-group">
                        <label for="categoryname">Select Exam:</label>
                        <select name="exam_id" class="form-control">
                        <option value="">Select</option>
                                    <?php
                                    foreach ($all_exam as $exam) {
                                    ?>
                                        <option <?php if ($exam['exam_title'] == $time_table_info[0]['exam_id']) {
                                                    echo "selected";
                                                } ?>>
                                            <?php echo $exam['exam_title'] ?> </option>

                                    <?php } ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="file">Choose File:</label>
                        
                        <img src="<?php echo base_url('uploads/time_table/'.$time_table_info[0]['image']) ?>" style="width: 50px;height:50px;">

                    </div>

                    <button type="submit" class="btn btn-info float-left w-100">UPDATE</button>
                </form>
            </div>





        </div>
    </div>
</div>






<?php $this->load->view('include/footer') ?>