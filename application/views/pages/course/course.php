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

            <a href="" name="addcategory" class="btn btn-primary " data-toggle="modal" data-target="#addcategorymodal" style="width:125px;margin: 8px 915px;"><i class=" fas fa-plus"></i> ADD NEW</a>

            <table id="example" class="display nowrap mt-2 " style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Duration</th>
                        <th>Started</th>
                        <th>Fees</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $i=1;  foreach($all_course as $course){
                        ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $course['course_name'] ?></td>
                        <td><?php echo $course['course_duration'] ?></td>
                        <td><?php echo $course['started'] ?></td>
                        <td><?php echo $course['fees'] ?></td>
                        <td><input type="checkbox" id="status" name="active" >active</td>
                        <td><a href="<?php echo base_url('school/edit_course/'.$course['course_id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url('school/delete_course/'.$course['course_id']) ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                    $i++; } 
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Duration</th>
                        <th>Started</th>
                        <th>Fees</th>
                        <th>Status</th>
                        <th>Action</th>

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
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title">ADD NEW COURSE</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <p id="validation" class="mt-2"></p>
            <div class="modal-body">
                <form action="<?php echo base_url('school/course') ?>" class="form_operation">
                    <div class="form-group">
                        <label for="categoryname">Enter Course Name:</label>
                        <input type="text" name="course_name" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Course Duration :</label>
                        <input type="text" name="course_duration" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Course Fees:</label>
                        <input type="text" name="fees" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="categoryname"> Course Started:</label>
                        <input type="text" name="started" class="form-control">

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