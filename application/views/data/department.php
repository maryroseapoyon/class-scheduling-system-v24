<!-- Header-->
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Departments</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li class="active">Department</li>
              </ol>
          </div>
      </div>
    </div>
  </div>

  <div class="content mt-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="default-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" title="Add Data" href="#addDepartment" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active-department" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>
                  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Inactive</a>
                </div>
              </nav>
              <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                <!--ACTIVE -->
                <div class="tab-pane fade show active" id="active-department" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="row">
                    <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Data Table</strong>
                          </div>
                          <div class="card-body">
                            <table id="bootstrap-data-table-faculty" class="table table-striped table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Department</th>
                                  <th>Department Code</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php
                                  if ($department!=NULL) {
                                    foreach ($department as $row) {
                                      if($row->Status == 'A') {
                                      ?>
                                        <tr>
                                          <td><center><?php echo $row->DepartmentName; ?></center></td>
                                          <td><center><?php echo $row->DepartmentCode; ?></center></td>
                                          <td><center><?php echo $row->Status; ?></center></td>
                                          <td><center>
                                            <button value="<?php echo $row->DepartmentID; ?>" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="Update Department" data-target="#editdepartment" data-toggle="modal" data-backdrop="static"><i class="fa fa-pencil"></i> Update</button>
                                            <a href="<?php echo site_url('welcome_admin/deleteDepartment/'.$row->DepartmentID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                          </center></td>
                                        </tr>
                                      <?php
                                    }
                                  }
                                }
                                ?>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    <!--TABLE++++++++++++++++++++++++++++++++++++++++++-->
                  </div>
                </div>

                <!--INACTIVE -->
                <div class="tab-pane fade" id="inactive" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="row">
                    <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Data Table</strong>
                          </div>
                          <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Department</th>
                                  <th>Department Code</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php
                                  if ($department!=NULL) {
                                    foreach ($department as $row) {
                                      if($row->Status == 'D') {
                                      ?>
                                        <tr>
                                          <td><center><?php echo $row->DepartmentName; ?></center></td>
                                          <td><center><?php echo $row->DepartmentCode; ?></center></td>
                                          <td><center><?php echo $row->Status; ?></center></td>
                                          <td><center>
                                            <a href="<?php echo site_url('welcome_admin/activateDepartment/'.$row->DepartmentID.''); ?>" class="btn btn-outline-success" style="padding: 2px 6px 2px; border-radius: 3px;" title="Activate"><i class="fa fa-recycle"></i>Activate</a>
                                          </center></td>
                                        </tr>
                                      <?php
                                    }
                                  }
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    <!--TABLE++++++++++++++++++++++++++++++++++++++++++-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div> 
  </div>


<!--ADD DEPARTMENT MODAL ++++++++++++++++++++++++++++++++++++++++++-->
<div class="modal fade" id="addDepartment" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="alert alert-danger" align="center" style="display: none;"></div>
                </div>
                <div class="row form-group">
                    <div class="col-12 col-md-6">
                      <label class="col-md-12"><h6>Department Name</h6></label> 
                      <input type="text" id="ddepname" name="ddepname" placeholder="Department Name" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                      <label class="col-md-12"><h6>Department Code</h6></label>
                      <input type="text" id="ddepcode" name="ddepcode" placeholder="Department Code" class="form-control">
                    </div>
                </div>
            </div> 
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btn_department" name="btn_department">Confirm</button>
            </div>
            </form>
    </div>
  </div>
</div>
<!--ADD DEPARTMENT MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editdepartment" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Edit Department</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url('welcome_admin/editDepartment'.$row->DepartmentID);?>" method="post" class="form-horizontal" >
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-6">
                <label class="col-md-12"><h6>Department Name</h6></label>
                <input type="text" id="ddepname_upd" name="ddepname_upd" placeholder="Department Name" class="form-control">
              </div>  
              <div class="col-12 col-md-6">
                <label class="col-md-12"><h6>Department Code</h6></label> 
                <input type="text" id="ddepcode_upd" name="ddepcode_upd" placeholder="Department Code" class="form-control" disabled>
              </div>         
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="ddep_id" id="ddep_id">
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btnupd_department" name="btn_faculty">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->

