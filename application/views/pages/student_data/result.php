<?php $this->load->view('student_include/student_header') ?>

<div class="container">
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card " style="padding: 15px 22px;">

                

                <table id="addcategorytable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                           
                            <th>Exam</th>
                            <th>Result</th>
                            <th>Created_AT</th>
                           

                        </tr>


                    </thead>

                    <tbody>
                         <?php $i=1; ?>
                          <tr>
                              <td><?php echo $i++; ?></td>
                             
                              <td><?php echo $result_info[0]['exam_name'];?></td>
                              <td><?php echo $result_info[0]['result'];?></td>
                              <td><?php echo $result_info[0]['created_at'];?></td>
                              
                          </tr>
                          
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            
                            <th>Exam</th>
                            <th>Result</th>
                            <th>Created_AT</th>
                           


                        </tr>
                    </tfoot>
                </table>



            </div>
        </div>
    </div>

</div>





<?php $this->load->view('student_include/student_footer') ?>