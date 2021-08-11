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
                <div class="card-header bg-primary text-white">
                    <h3>Edit Category</h3>
                </div>
                <div class="card-body bg-secondary text-white  ">
                    <form action="<?php echo base_url() . 'school/edit_category/' . $category_info[0]['category_id'] ?>" class="form_operation">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="  ">Category Name:</label>
                                    <input type="text" name="category_name" value="<?php echo $category_info[0]['category_name'] ?>" class="form-control">
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


</div>




<?php $this->load->view('include/footer') ?>