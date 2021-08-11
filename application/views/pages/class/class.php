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
                            <th>Class Name</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=1;
                        foreach($all_class as $class){ ?>
                        <tr>
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $class['class_name'];  ?></td>
                            <td><?php echo $class['category'];  ?></td>

                            <td><input type="checkbox" name="active">active</td>

                            <td><a href="<?php echo base_url('school/edit_class/'.$class['class_id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('school/delete_class/'.$class['class_id']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; }  ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Class Name</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                </table>



            </div>
        </div>
    </div>
    <div>


        <!-- modal of category -->
        <div class=" modal fade" id="addcategorymodal" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title">ADD NEW CLASS</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>

                    <!-- Modal body -->
                    <p id="validation" class="mt-2"></p>
                    <div class="modal-body">
                        <form action="<?php echo base_url('school/class') ?>" class="form_operation">
                            <div class="form-group">
                                <label for="categoryname">Enter Class Name:</label>
                                <input type="text" name="class_name" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="categoryname">Select Category:</label>
                                <select name="category" id="" class="form-control">
                                   
                                    <option value="">Select</option>
                                    <?php  foreach($all_category as $cat) {?>
                                      <option> <?php echo $cat['category_name']?></option>
                                      <?php
                                      }
                                      ?>
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