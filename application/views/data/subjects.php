<?php 
$type ='';
$depart ='';
  $type .= '<option value="Laboratory">Laboratory</option>
                  <option value="Lecture">Lecture</option>';

foreach($department as $row2){ if($row2->Status == "A"){
  $depart .= '<option value="'.$row2->DepartmentCode.'">'.$row2->DepartmentName.'</option>';
  }
}

?>

<!-- Header-->
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Subjects</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li class="active">Subjects</li>
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
                  <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" href="#addsubjects" role="tab" aria-controls="nav-home" aria-selected="true"></a>
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
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Descriptive Title</th>
                                    <th>Department</th>
                                    <th>Hours</th>
                                    <th>Units</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    if ($subject!=NULL) {
                                      foreach ($subject as $row) {
                                        if($row->Status == 'A') {
                                          if($row->ss == 'A') {
                                          if($row->SubjectType == 'Lecture') {
                                          ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LecHours; ?></center></td>
                                            <td><center><?php echo $row->LecUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <button value="<?php echo $row->SubjectID; ?>" data-target="#editsubjects" data-toggle="modal" data-backdrop="static" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="Update Subject"><i class="fa fa-edit"></i> Update</button>
                                              <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->SubjectID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                            </center></td>
                                          </tr>
                                        <?php
                                        }
                                        else{ ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LabHours; ?></center></td>
                                            <td><center><?php echo $row->LabUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <button value="<?php echo $row->SubjectID;?>" data-target="#editsubjects" data-toggle="modal" data-backdrop="static" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="Update Subject"><i class="fa fa-edit"></i> Update</button>
                                              <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->SubjectID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                            </center></td>
                                          </tr>
                                          <?php 
                                        }
                                      }
                                    }}
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
                                    <th>Subject</th>
                                    <th>Descriptive Title</th>
                                    <th>Department</th>
                                    <th>Hours</th>
                                    <th>Units</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    if ($subject!=NULL) {
                                      foreach ($subject as $row) {
                                          if($row->ss == 'D') {
                                          if($row->SubjectType == 'Lecture') {
                                        ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LecHours; ?></center></td>
                                            <td><center><?php echo $row->LecUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <a href="<?php echo site_url('welcome_admin/activateSubject/'.$row->SubjectID.''); ?>" class="btn btn-outline-success" style="padding: 2px 6px 2px; border-radius: 3px;" title="Activate"><i class="fa fa-recycle"></i> Activate</a>
                                            </center></td>
                                          </tr>
                                        <?php
                                        }
                                        else{
                                          ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LabHours; ?></center></td>
                                            <td><center><?php echo $row->LabUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <a href="<?php echo site_url('welcome_admin/activateSubject/'.$row->SubjectID.''); ?>" class="btn btn-outline-success" style="padding: 2px 6px 2px; border-radius: 3px;" title="Activate"><i class="fa fa-recycle"></i> Activate</a>
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
                              <table id="bootstrap-data-table-subject2" class="table table-striped table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Descriptive Title</th>
                                    <th>Department</th>
                                    <th>Hours</th>
                                    <th>Units</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    if ($subject!=NULL) {
                                      foreach ($subject as $row) {
                                        if($row->Status == 'D') {
                                          if($row->ss == 'A') {
                                          if($row->SubjectType == 'Lecture') {
                                          ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LecHours; ?></center></td>
                                            <td><center><?php echo $row->LecUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <button value="<?php echo $row->SubjectID; ?>" data-target="#editsubjects" data-toggle="modal" data-backdrop="static" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="Update Subject"><i class="fa fa-edit"></i> Update</button>
                                              <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->SubjectID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                            </center></td>
                                          </tr>
                                        <?php
                                        }
                                        else{ ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LabHours; ?></center></td>
                                            <td><center><?php echo $row->LabUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <button value="<?php echo $row->SubjectID;?>" data-target="#editsubjects" data-toggle="modal" data-backdrop="static" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="Update Subject"><i class="fa fa-edit"></i> Update</button>
                                              <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->SubjectID.''); ?>" class="btn btn-outline-danger" style="padding: 2px 6px 2px; border-radius: 3px;" title="Deactivate"><i class="fa fa-trash"></i> Delete</a>
                                            </center></td>
                                          </tr>
                                          <?php 
                                        }
                                      }
                                    }}
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
  

<!--ADD SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addsubjects" tabindex="-1" role="dialog">
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
              <div class="col-12 col-md-4"><input type="text" id="subcode" name="subcode" placeholder="Subject Code" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="subname" name="subname" placeholder="Subject Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="units" name="units" placeholder="No. of units" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" id="hrs" name="hrs" placeholder="No. of hrs" class="form-control"></div>
              <div class="col-12 col-md-4">
                <select name="type" id="type" class="form-control">
                  <option value="">Select Type</option>
                  <?php echo $type ?>
                </select>
              </div>

              <div class="col-12 col-md-4">
                <select name="department" id="dep" class="form-control" >
                  <option value="">Select Department</option>
                  <?php echo $depart ?>
                </select>
              </div>
            </div>
          </div> 
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-outline-info" style="border-radius: 3px;" id="btn_subject" name="submit">Confirm</button>
            </div>
          </form>
    </div>
  </div>
</div>
<!--ADD SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++++-->


<!--EDIT SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editsubjects" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><strong>Edit Subject</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <form action="<?php echo base_url('welcome_admin/editSubject'.$row->SubjectID);?>" method="post" class="form-horizontal" >     
        <div class="modal-body">
            <div class="form-group">
                <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4">
                <label class="col-md-12"><h6>Subject Code</h6></label>
                <input type="text" id="upsubcode" name="upsubcode" placeholder="Subject Code" class="form-control" disabled>
              </div>
              <div class="col-12 col-md-4">
                <label class="col-md-12"><h6>Subject Name</h6></label>
                <input type="text" id="upsubname" name="upsubname" placeholder="Subject Name" class="form-control">
              </div>
              <div class="col-12 col-md-4">
                <label class="col-md-12"><h6>No. of units</h6></label>
                <input type="text" id="upunits" name="upunits" placeholder="No. of units" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4">
                <label class="col-md-12"><h6>No. of hours</h6></label>
                <input type="contact" id="uphrs" name="uphrs" placeholder="No. of hrs" class="form-control"></div>
              <div class="col-12 col-md-4">
                <label class="col-md-12"><h6>Subject Type</h6></label>

                <select name="uptype" id="uptype" class="form-control">
                  <?php echo $type ?>
                </select>
              </div>
              <div class="col-12 col-md-4">
                <label class="col-md-12"><h6>Department Name</h6></label>

                <select name="updepartment" id="updepartment" class="form-control" >
                  <?php echo $depart ?>
                </select>
              </div>
            </div>
        </div> 
        <div class="modal-footer">
          <input type="hidden" name="sub_id" id="upid">
          <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-outline-info" style="border-radius: 3px;" id="btnupd_subject" name="submit">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--EDIT SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

