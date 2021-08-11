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
            <form action="<?php echo base_url('exam/edit_exam/' . $exam_info['exam_id']) ?>" class="form_operation">


                <div class="form-group">
                    <label for="categoryname">Exam Title:</label>
                    <input type="text" name="exam_title" value="<?php echo $exam_info['exam_title'] ?>" class="form-control">


                </div>

                <div class="form-group">
                    <label for="categoryname">Start Date:</label>
                    <input type="date" name="start_date" value="<?php echo $exam_info['start_date'] ?>" class="form-control">

                </div>

                <div class="form-group">
                    <label for="categoryname">Select Category:</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Select</option>
                        <?php foreach ($category_info as $cat) { ?>

                            <option <?php if ($exam_info['category'] == $cat['category_name']) {
                                        echo "selected";
                                    } ?>> <?php echo $cat['category_name'] ?></option>
                        <?php } ?>
                    </select>

                </div>

                <div class="form-group">
                    <label for="categoryname">Select Class:</label>
                    <select name="class" id="class" class="form-control">
                        <option value="">Select</option>
                        <?php foreach ($class_info as $class) { ?>

                            <option <?php if ($exam_info['class'] == $class['class_name']) {
                                        echo "selected";
                                    } ?>> <?php echo $class['class_name'] ?></option>
                        <?php } ?>
                    </select>

                </div>
                <button type="submit" class="btn btn-info float-left w-100">UPDATE</button>
            </form>
        </div>
    </div>




</div>











<!-- modal closed -->


<?php $this->load->view('include/footer') ?>