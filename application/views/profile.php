<?php $this->load->view('student_include/student_header') ?>

<div class="container">

    <div class="row">

        <div class="col">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        

                    <div class="col-sm-12 pb-5">
                         <div>
                           <img src="<?php echo base_url('uploads/student_img/'.$student_info[0]['image'])  ?>" style="width:150px;">
                         </div>
                     </div><br>
                    
                     <div class="col-sm-6">
                         <div>
                             <p><b>NAME:</b>  <?php echo $student_info[0]['std_name']; ?></p>
                         </div>
                     </div>

                     <div class="col-sm-6">
                         <div>
                             <p><b>FATHER NAME:</b>  <?php echo $student_info[0]['std_father_name']; ?></p>
                         </div>
                     </div>

                     <div class="col-sm-6">
                         <div>
                             <p><b>CATEGORY:</b>  <?php echo $student_info[0]['category']; ?></p>
                         </div>
                     </div>

                     <div class="col-sm-6">
                         <div>
                             <p><b>CLASS:</b>  <?php echo $student_info[0]['class']; ?></p>
                         </div>
                     </div>

                     <div class="col-sm-6">
                         <div>
                             <p><b>DOB:</b>  <?php echo $student_info[0]['dob']; ?> </p>
                         </div>
                     </div>

                     <div class="col-sm-6">
                         <div>
                             <p><b>JOIN DATE:</b> <?php echo $student_info[0]['join_date']; ?></p>
                         </div>
                     </div>

                     <div class="col-sm-6">
                         <div>
                             <p><b>EMAIL:</b>  <?php echo $student_info[0]['std_email']; ?></p>
                         </div>
                     </div>

                    

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<?php $this->load->view('student_include/student_footer') ?>