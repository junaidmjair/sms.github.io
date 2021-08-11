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

                
            <table id="example" class="display nowrap mt-2 " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Class Name</th>
                        
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $i=1; foreach($classes as $class){
                        
                         $all_student = $this->cm->select_data('student','std_id,class',array('class'=>$class['class_name']));
                         $main_all_count = 0;
                         $main_present_count = 0;

                         foreach($all_student as $student)
                           {
                         
                            $all_count = sizeof($this->cm->select_data('attendence_manage','status',array('student_id'=>$student['std_id'])));
   
                            $all_count_present = sizeof($this->cm->select_data('attendence_manage','status',array('student_id'=>$student['std_id'],'status'=>'Present')));

                            $main_all_count = $main_all_count+$all_count;
                            $main_present_count = $main_present_count+$all_count_present;
                           }
                        
                        ?>
                          <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $class['class_name'] ?></td>
                              
                              <td><?php echo $main_all_count * $main_present_count/100; ?>%</td>
                              <td><a href="<?php echo base_url('attendence/student_list/'.$class['class_id']) ?>" class="fa fa-eye"></a></td>
                          </tr>
                          <?php
                          $i++;
                    }
                          ?>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Class Name</th>
                           
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
                <h4 class="modal-title">ADD ATTENDENCE</h4>

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