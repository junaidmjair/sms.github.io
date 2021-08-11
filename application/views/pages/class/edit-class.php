<?php $this->load->view('include/header') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card " style="padding: 15px 22px;">
            <div class="card-header bg-primary text-white">
                <h3>Edit Class</h3>
            </div>
            <div class="card-body bg-secondary text-white  ">
                <form action="<?php echo base_url() . 'school/edit_class/' . $class_info[0]['class_id'] ?>" class="form_operation">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="  ">Class:</label>
                                <input type="text" name="class_name" value="<?php echo $class_info[0]['class_name'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="  ">Category:</label>
                                <select name="category" id="" class="form-control">

                                    <option value="">Select</option>
                                    <?php
                                    foreach ($all_category as $cat) {
                                    ?>
                                        <option <?php if ($cat['category_name'] == $class_info[0]['category']) {
                                                    echo "selected";
                                                } ?>>
                                            <?php echo $cat['category_name'] ?> </option>

                                    <?php } ?>
                                </select>
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

<?php $this->load->view('include/footer') ?>