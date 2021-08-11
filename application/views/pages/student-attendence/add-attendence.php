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

                <a href="" name="addcategory" class="btn btn-primary " data-toggle="modal" data-target="#addcategorymodal" style="width:200px;margin: 8px 800px;"><i class=" fas fa-plus"></i> ADD ATTENDENCE</a>

                <table id="example" class="display nowrap mt-2 " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>

                            <th>Status</th>
                            <th>Reamrks</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=1; 
                    foreach($all_attendence as $attendence){ ?>
                          <tr>
                              <td><?php echo $i;?></td>
                              <td><?php echo $attendence['date'] ?></td>
                              <td><?php echo $attendence['status'] ?></td>
                              <td><?php echo $attendence['remarks'] ?></td>
                             
                              <td><a href="<?php echo base_url('index.php/attendence/edit_attendence/'.$attendence['id']) ?>" class="fas fa-edit"></a></td>
                          </tr>
                          <?php
                          $i++;
                    }
                          ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>

                            <th>Status</th>
                            <th>Reamrks</th>
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
                <form action="<?php echo base_url('index.php/attendence/add_attendence/'.$this->uri->segment(3)) ?>" class="attendence_form_operation">
                     <div class="form-group">
                        <label for="">Enter Status:</label>
                        
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="radio" name="status" value="Present">
                            <label class="form-check-label">Present</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="Absent">
                            <label class="form-check-label">Absent</label>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="categoryname">Select Date:</label>
                        <input type="date" name="date" value="" class="form-control">


                    </div>

                    <div class="form-group">
                        <label for="categoryname">Remarks:</label>
                        <textarea name="remarks" class="form-control"></textarea>

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