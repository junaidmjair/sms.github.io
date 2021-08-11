<?php $this->load->view('include/header') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card " style="padding: 15px 22px;">
            <div class="card-header bg-primary text-white">
                <h3>Edit Course</h3>
            </div>
            <div class="card-body bg-secondary text-white  ">
                <form action="<?php echo base_url() . 'school/edit_course/'.$course_info[0]['course_id'] ?>" class="form_operation">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="  ">Course Name:</label>
                                <input type="text" name="course_name" value="<?php echo $course_info[0]['course_name']  ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="  ">Course Duration:</label>
                                <input type="text" name="course_duration" value="<?php echo $course_info[0]['course_duration']  ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="  ">Course Fees:</label>
                                <input type="text" name="fees" value="<?php echo $course_info[0]['fees']  ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="  ">Course Started:</label>
                                <input type="text" name="started" value="<?php echo $course_info[0]['started']  ?>" class="form-control">
                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>





        </div>
    </div>
</div>

<?php $this->load->view('include/footer') ?>