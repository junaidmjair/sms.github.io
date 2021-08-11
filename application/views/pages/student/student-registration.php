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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Category</th>
                            <th>Class</th>
                            <th>DOB</th>
                            <th>Join Date</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th >Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($all_students != '') {
                            $i = 1;
                            foreach ($all_students as $student) {
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><img src="<?php echo base_url('uploads/student_img/'.$student['image']) ?>" style="width:50px" ></td>
                                    <td><?php echo $student['std_name']; ?></td>
                                    <td><?php echo $student['std_father_name']; ?></td>
                                    <td><?php echo $student['category']; ?></td>
                                    <td><?php echo $student['class']; ?></td>
                                    <td><?php echo $student['dob']; ?></td>

                                    <td><?php echo $student['join_date']; ?></td>
                                    <td><?php echo $student['std_email']; ?></td>
                                    <td><input type="checkbox" name="active">Active</td>

                                    <td><a href="<?php echo base_url('student/edit_student/' . $student['std_id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url('student/delete_student/' . $student['std_id']) ?>" class="btn btn-danger">Delete</a>
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Category</th>
                            <th>Class</th>
                            <th>DOB</th>
                            <th>Join Date</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>>Action</th>

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
                <h4 class="modal-title">ADD NEW STUDENT</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <p id="validation" class="mt-2"></p>
            <div class="modal-body">
                <form action="<?php echo base_url('student/add_student') ?>" class="form_operation" style="height: 450px;">

                    <div class="row" style="line-height: 15px;">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="categoryname">Student Name:</label>
                                <input type="text" name="std_name" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="categoryname">Father's Name:</label>
                                <input type="text" name="std_father_name" class="form-control">

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
                                        <option><?php echo $cat['category_name'] ?></option>
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
                                        <option><?php echo $class['class_name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

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
                                <label for="categoryname">Email:</label>
                                <input type="text" name="std_email" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="categoryname">Password:</label>
                                <input type="text" name="std_password" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="file">Choose File:</label>
                                <input type="file" name="image" class="form-control-file">

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