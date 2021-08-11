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
                            <th>Student</th>
                            <th>Exam</th>
                            <th>Result</th>
                            <th>Created_AT</th>
                            <th>Action</th>

                        </tr>


                    </thead>

                    <tbody>
                      <?php  $i=1; foreach($all_result as $result){ ?>
                          <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $result['sname'];?></td>
                              <td><?php echo $result['exam_name'];?></td>
                              <td><?php echo $result['result'];?></td>
                              <td><?php echo $result['created_at'];?></td>
                              <td><a href="<?php echo base_url('index.php/result/delete_result/'.$result['id']) ?>"class="btn btn-danger">Delete</a>
                              <a href="<?php echo base_url('index.php/result/edit_result/'.$result['id']) ?>"class="btn btn-info">Edit</a></td>
                          </tr>
                          <?php $i++; }?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Exam</th>
                            <th>Result</th>
                            <th>Created_AT</th>
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
                <h4 class="modal-title">ADD RESULT</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <p id="validation" class="mt-2"></p>
            <form action="<?php echo base_url('index.php/result/') ?>" class="form_operation">
                <div class="modal-body">



                    <div class="form-group">
                        <label for="categoryname">Select Student:</label>
                        <select name="student_id" id="select_student" class="form-control">
                            <option value="">Select</option>
                            <?php foreach ($all_student as $student) { ?>

                                <option id="st_<?php echo $student['std_id'] ?>" data-val="<?php echo $student['class'] ?>" value="<?php echo $student['std_id'] ?>"><?php echo $student['std_name'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Select Exam:</label>
                        <select name="exam_name" id="exam" class="form-control">
                            <option value="">Select</option>
                            

                                
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Result:</label>
                       
                            <input type="text" name="result" id="result" class="form-control">
                            

                                
                        </select>

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