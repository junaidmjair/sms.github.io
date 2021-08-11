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

                <a href="" name="addcategory" class="btn btn-primary " data-toggle="modal" data-target="#addcategorymodal" style="width:200px;margin: 8px 800px;"><i class=" fas fa-plus"></i> ADD NEW </a>

                <table id="example" class="display nowrap mt-2 " style="width:100%">
                
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Moblie</th>
                            <th>DOB</th>
                            <th>Join Date</th>
                            <th>Experience</th>
                            <th>Payment</th>
                            <th>Other_Information</th>
                            <th >Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($all_staff != '') {
                            $i = 1;
                            foreach ($all_staff as $staff) {
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $staff['staff_name']; ?></td>
                                    <td><?php echo $staff['staff_father_name']; ?></td>
                                    <td><?php echo $staff['staff_email']; ?></td>
                                    <td><?php echo $staff['dob']; ?></td>
                                    <td><?php echo $staff['join_date']; ?></td>

                                    <td><?php echo $staff['experience']; ?></td>
                                    <td><?php echo $staff['mobile']; ?></td>
                                    <td><?php echo $staff['payment']; ?></td>

                                    <td><?php echo $staff['other_information']; ?></td>
                                   

                                    <td><a href="<?php echo base_url('staff/edit_staff/' . $staff['staff_id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url('staff/delete_staff/' . $staff['staff_id']) ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>


                        <?php
                            $i++;
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Moblie</th>
                            <th>DOB</th>
                            <th>Join Date</th>
                            <th>Experience</th>
                            <th>Payment</th>
                            <th>Other_Information</th>
                            <th >Action</th>

                        </tr>
                    </tfoot>
                </table>



            </div>
        </div>
    </div>

</div>


<!-- modal of category -->
<div class=" modal fade" id="addcategorymodal" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px;">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title">ADD NEW STAFF</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <p id="validation" class="mt-2"></p>
            <div class="modal-body">
                <form action="<?php echo base_url('staff/add_staff') ?>" class="form_operation" style="height: 450px;">
                    <div class="row" style="line-height: 15px;">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="categoryname"> Name:</label>
                                <input type="text" name="staff_name" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="categoryname">Father's Name:</label>
                                <input type="text" name="staff_father_name" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">Email:</label>
                                <input type="email" name="staff_email" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">Experience:</label>
                                <input type="text" name="experience" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">Mobile:</label>
                                <input type="text" name="mobile" class="form-control">

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">DOB:</label>
                                <input type="date" name="dob" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">Join Date:</label>
                                <input type="date" name="join_date" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">Payment:</label>
                                <input type="text" name="payment" class="form-control">

                            </div>
                        </div>

                        

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="categoryname">Other_Information:</label>
                                <input type="text" name="other_information" class="form-control">

                            </div>
                        </div>
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info float-left w-100">ADD</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal closed -->


<?php $this->load->view('include/footer') ?>