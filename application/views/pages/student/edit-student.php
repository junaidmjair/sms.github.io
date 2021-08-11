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
            <form action="<?php echo base_url('student/edit_student/'.$student_info[0]['std_id']) ?>" class="form_operation">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Student Name:</label>
                            <input type="text" name="std_name" value="<?php echo $student_info[0]['std_name'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Father's Name:</label>
                            <input type="text" name="std_father_name"value="<?php echo $student_info[0]['std_father_name'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="categoryname">Category:</label>
                            <select name="category" class="form-control">
                                <option value="">Select</option>
                                <?php
                                foreach ($all_category as $cat) {
                                ?>
                                    <option <?php if($cat['category_name']==$student_info[0]['category']){echo "selected";}?>><?php echo $cat['category_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="categoryname">Class:</label>
                            <select name="class" class="form-control">
                                <option value="">Select</option>
                                <?php
                                foreach ($all_class as $class) {
                                ?>
                                    <option <?php if($class['class_name']==$student_info[0]['class']){echo "selected";}?>><?php echo $class['class_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="categoryname">DOB:</label>
                            <input type="date" name="dob"value="<?php echo $student_info[0]['dob'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="categoryname">Join Date:</label>
                            <input type="date" name="join_date" value="<?php echo $student_info[0]['join_date'] ?>"class="form-control">

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="categoryname">Email:</label>
                            <input type="text" name="std_email" value="<?php echo $student_info[0]['std_email'] ?>"class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Password:</label>
                            <input type="password" name="std_password"value="<?php echo $student_info[0]['std_password'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12 ">
                            <div class="form-group">
                                <label for="file">Choose File:</label>
                                <input type="file" name="image" class="form-control-file">
                                <img src="<?php echo base_url('uploads/student_img/'.$student_info[0]['image']) ?>" style="width:100px;padding-top:20px">

                            </div>
                        </div>
                </div>


                <button type="submit" class="btn btn-info float-left w-100">UPDATE</button>

            </form>
        </div>
    </div>
</div>





<?php $this->load->view('include/footer') ?>