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
            <form action="<?php echo base_url('staff/edit_staff/'.$staff_info[0]['staff_id']) ?>" class="form_operation">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Staff Name:</label>
                            <input type="text" name="staff_name" value="<?php echo $staff_info[0]['staff_name'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Father's Name:</label>
                            <input type="text" name="staff_father_name"value="<?php echo $staff_info[0]['staff_father_name'] ?>" class="form-control">

                        </div>
                    </div>

                    

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Email:</label>
                            <input type="email" name="staff_email"value="<?php echo $staff_info[0]['staff_email'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Mobile:</label>
                            <input type="text" name="mobile" value="<?php echo $staff_info[0]['mobile'] ?>"class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="categoryname">DOB:</label>
                            <input type="date" name="dob" value="<?php echo $staff_info[0]['dob'] ?>"class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="categoryname">Join Date:</label>
                            <input type="date" name="join_date"value="<?php echo $staff_info[0]['join_date'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Experience:</label>
                            <input type="text" name="experience"value="<?php echo $staff_info[0]['experience'] ?>" class="form-control">

                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Payment:</label>
                            <input type="text" name="payment"value="<?php echo $staff_info[0]['payment'] ?>" class="form-control">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoryname">Other_Information:</label>
                            <textarea name="other_information" class="form-control"><?php echo $staff_info[0]['other_information'] ?></textarea>

                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-info float-left w-100">UPDATE</button>

            </form>
        </div>
    </div>
</div>





<?php $this->load->view('include/footer') ?>