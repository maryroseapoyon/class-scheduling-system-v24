  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Faculty</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li><a href="<?php echo site_url('welcome_admin/department');?>">Department</a></li>
                  <li class="active">
                    <?php foreach ($data as $row) { ?>
                        <?php echo $row->DepartmentName; ?> Department
                    <?php }?></li>
              </ol>
          </div>
      </div>
    </div>
  </div>

	<div class="col-md-12">
 	 <div class="animated fadeIn">
	    <div class="card">
	        <div class="card-body">
	            <div class="mx-auto d-block">
	                <img class="mx-auto d-block" src="<?php echo base_url('assets/images/tup.png');?>" alt="Card image cap">
	                <h2 class="text-sm-center mt-2 mb-1">
	                    <?php foreach ($data as $row) { ?>
	                        <?php echo $row->DepartmentName; ?> Department
	                    <?php
	                        } ?>
	                </h2>
	                <p class="text-sm-center mt-2 mb-1">
	                    <?php foreach ($data as $row) { ?>
	                        <?php echo $row->DepartmentCode; ?>
	                    <?php
	                        } ?>
	                </p>
	            </div><hr>
	             <div class="col-md-12">
	                <div class="card">
	                    <div class="card-header">
	                        <i class="fa fa-info-circle"></i>
	                        <strong class="card-title">Department Information</strong>
	                        <button type="button" class="btn btn-sm btn-info" data-target="#editdepartment" data-toggle="modal" data-backdrop="static">Edit</button><span class="fa fa-pencil"></span>
	                    </div>
	                    <div class="card-body">
	                    <h6> Department Dean : </h6><p>
	                	<?php 
	                	foreach($data2 as $row){
	                	  if($row->pc == 'Dean'){
	                	  ?>
		                   	<?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename; ?>
		                	<?php }} ?></p>
		                <h6> Department Head : </h6><p>
		                <?php 
	                	foreach($data2 as $row){
	                	  if($row->pc == 'Head'){
	                	  ?>
		                   	<?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename; ?>
		                	<?php }} ?></p>
		                  
	                    </div>
	                </div>
	            </div>         
	        </div>                        
	    </div>
   </div>
	</div>

<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editdepartment" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Edit Department <?php echo $data[0]->DepartmentName;?></strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" >
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <label class="col-md-12">Department Name</label>
              <div class="col-12 col-md-12"><input type="text" value="<?php echo $data[0]->DepartmentName;?>" id="ddepname_upd" name="ddepname_upd" placeholder="First Name" class="form-control">
              </div>  
            </div>
            <div class="row form-group">
              <label class="col-md-12">Department Code</label> 
              <div class="col-12 col-md-12"><input type="text" value="<?php echo $data[0]->DepartmentCode;?>" id="ddepcode_upd" name="ddepcode_upd" placeholder="First Name" class="form-control">
              </div>         
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="ddep_id" id="ddep_id" value="<?php echo $data[0]->DepartmentID;?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btnupd_department" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->