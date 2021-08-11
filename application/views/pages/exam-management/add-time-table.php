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

                <a href="" name="addcategory" class="btn btn-primary " data-toggle="modal" data-target="#addcategorymodal" style="width:200px;margin: 8px 800px;"><i class=" fas fa-plus"></i> ADD TIME TABLE</a>

                <table id="example" class="display nowrap mt-2 " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Exam Name</th>
                            <th>File</th>
                            <th>Created_AT</th>
                            <th>Action</th>

                        </tr>


                    </thead>

                    <tbody>
                      <?php $i=1; foreach($all_time_table as $time) {?>
                   <tr>
                       <td><?php echo $i; ?></td>
                       <td><?php echo $time['exam_id'] ?></td>
                       <td><?php echo $time['image'] ?></td>
                       <td><?php echo $time['created_at'] ?></td>
                       <td><a href="<?php echo base_url('exam/delete_time_table/'.$time['id']) ?>" class="btn btn-danger">Delete</a>
                       <a href="<?php echo base_url('exam/edit_time_table/'.$time['id']) ?>" class="btn btn-info">Edit</a></td>
                   </tr>
                   <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Exam Name</th>
                            <th>File</th>
                            <th>Created_AT</th>


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
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title">ADD TIME TABLE</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <p id="validation" class="mt-2"></p>
            <form action="<?php echo base_url('exam/add_time_table') ?>" class="form_operation" >
                <div class="modal-body">



                    <div class="form-group">
                        <label for="categoryname">Select Exam:</label>
                        <select name="exam_id" class="form-control">
                            <option value="">Select</option>
                            <?php foreach ($all_exam as $exam) { ?>

                                <option><?php echo $exam['exam_title'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="file">Choose File:</label>
                        <input type="file" name="image" class="form-control-file">

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