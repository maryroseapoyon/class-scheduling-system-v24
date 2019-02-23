<?php 
$pos = '';
$depart = '';
foreach($position as $row){
  $pos .= '<option value="'.$row->PositionCode.'">'.$row->PositionName.'</option>';
  }
foreach($department as $row2){ if($row2->Status == 'A' ) {
  $depart .= '<option value="'.$row2->DepartmentCode.'">'.$row2->DepartmentName.'</option>';
  } }
?> 

<!-- Header-->
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
                  <li class="active">Faculty</li>
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
                <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" title="Add Data" href="#addfaculty" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Inactive</a>
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#unassigned" role="tab" aria-controls="nav-contact" aria-selected="false">Unassigned</a>
              </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
              <!--ACTIVE -->
              <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body" >
                          <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Department Code</th>
                                <th>Contact</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                               <?php
                                if ($data!=NULL) {
                                  foreach ($data as $row) {
                                    if($row->ds == 'A') {
                                    if($row->fs == 'A') {
                                    ?>
                                      <tr>
                                        <td><center><?php echo $row->ProfID; ?></center></td>
                                        <td><center><?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename; ?></center></td>
                                        <td><center><?php echo $row->PositionName; ?></center></td>
                                        <td><center><?php echo $row->DepartmentName; ?></center></td>
                                        <td><center><?php echo $row->Contact; ?></center></td>
                                        <!-- <td><center><?php echo $row->fs; ?></center></td> -->
                                        <td><center>
                                          <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->ProfID.'');?>" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="View Profile"><i class="fa fa-eye"></i> View</a>
                                          <a href="<?php echo site_url('welcome_admin/deleteFaculty/'.$row->ProfID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                        </center></td>
                                      </tr>
                                    <?php
                                  }
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
                          <table id="bootstrap-data-table-faculty" class="table table-striped table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Position</th>
                                  <th>Department Code</th>
                                  <th>Contact</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php
                                  if ($data!=NULL) {
                                    foreach ($data as $row) {
                                      if($row->fs == 'D') {
                                      ?>
                                        <tr>
                                          <td><center><?php echo $row->ProfID; ?></center></td>
                                          <td><center><?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename; ?></center></td>
                                          <td><center><?php echo $row->PositionName; ?></center></td>
                                          <td><center><?php echo $row->DepartmentName; ?></center></td>
                                          <td><center><?php echo $row->Contact; ?></center></td>
                                          <!-- <td><center><?php echo $row->fs; ?></center></td> -->
                                          <td><center>
                                            <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->ProfID.'');?>" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="View Profile"><i class="fa fa-eye"></i> View</a>
                                            <a href="<?php echo site_url('welcome_admin/activateFaculty/'.$row->ProfID.''); ?>" class="btn btn-outline-success" style="padding: 2px 6px 2px; border-radius: 3px;" title="Activate"><i class="fa fa-recycle"></i> Activate</a>
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

              <!--UNASSIGNED -->
              <div class="tab-pane fade" id="unassigned" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table-faculty2" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Department Code</th>
                                <th>Contact</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                               <?php
                                if ($data!=NULL) {
                                  foreach ($data as $row) {
                                    if($row->ds == 'D') {
                                    if($row->fs == 'A') {
                                    ?>
                                      <tr>
                                        <td><center><?php echo $row->ProfID; ?></center></td>
                                        <td><center><?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename; ?></center></td>
                                        <td><center><?php echo $row->PositionName; ?></center></td>
                                        <td><center><?php echo $row->DepartmentName; ?></center></td>
                                        <td><center><?php echo $row->Contact; ?></center></td>
                                        <td><center>
                                          <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->ProfID.'');?>" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="View Profile"><i class="fa fa-eye"></i> View</a>
                                          <a href="<?php echo site_url('welcome_admin/deleteFaculty/'.$row->ProfID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                        </center></td>
                                      </tr>
                                    <?php
                                  }
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
  </div> <!-- .content -->

<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addfaculty" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Faculty</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
              <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" id="ffname" name="ffname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="fmname" name="fmname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="flname" name="flname" placeholder="Last Name" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" id="fcontact" name="fcontact" placeholder="Contact No." class="form-control"></div>
              <div class="col-12 col-md-4">
                  <select name="fposition" id="fposition" class="form-control">
                    <option value="">Select Position</option>
                    <?php echo $pos ?>
                  </select>

                  
              </div>
              <div class="col-12 col-md-4">
                  <select name="fdepCode" id="fdepCode" class="form-control" >
                    <option value="">Select Department</option>
                    <?php echo $depart ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btn_faculty" name="btn_faculty">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++++-->
