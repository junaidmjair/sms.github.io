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

                <a href="" name="addcategory" class="btn btn-primary " data-toggle="modal" data-target="#addcategorymodal" style="width:200px;margin: 8px 800px;"><i class=" fas fa-plus"></i> ADD NEW CATEGORY</a>

                <table id="example" class="display nowrap mt-2 " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($all_category != '') {
                            $i = 1;
                            foreach ($all_category as $cat) {
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cat['category_name']; ?></td>
                                    <td><input type="checkbox" name="status" value="" > </td>

                                    <td><a href="<?php echo base_url('school/edit_category/' . $cat['category_id']) ?>" class="btn btn-warning">Edit</a>
                                        <a  href="<?php echo base_url('school/delete_category/' . $cat['category_id']) ?>" class="btn btn-danger" id="deletebtn">Delete</a>
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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>

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
                <h4 class="modal-title">ADD NEW CATEGORY</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <p id="validation" class="mt-2"></p>
            <div class="modal-body">
                <form action="<?php echo base_url('school/category') ?>" class="form_operation">
                    <div class="form-group">
                        <label for="categoryname">Enter Category Name:</label>
                        <input type="text" name="category_name" class="form-control">

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

