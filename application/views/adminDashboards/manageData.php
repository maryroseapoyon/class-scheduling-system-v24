<!-- Header-->
<div class="breadcrumbs">
<div class="col-sm-4">
<div class="page-header float-left">
  <div class="page-title">
      <h1>Manage Data</h1>
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
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="nav-home" aria-selected="true">Faculty</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#section" role="tab" aria-controls="nav-profile" aria-selected="false">Section</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#room" role="tab" aria-controls="nav-contact" aria-selected="false">Rooms</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#course" role="tab" aria-controls="nav-contact" aria-selected="false">Courses</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#dep" role="tab" aria-controls="nav-contact" aria-selected="false">Departments</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#subj" role="tab" aria-controls="nav-contact" aria-selected="false">Subjects</a>
                </div>
              </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="faculty" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="row">
                         <div style="margin: 15px;">
                           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addfaculty">
                             <i class="fa fa-plus"></i>
                          </button>
                        </div>

                        <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Data Table</strong>
                                  </div>
                                  <div class="card-body">
                                      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
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
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $row->prof_id; ?></center></td>
                                                      <td><center><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name; ?></center></td>
                                                      <td><center><?php echo $row->position_name; ?></center></td>
                                                      <td><center><?php echo $row->department_name; ?></center></td>
                                                      <td><center><?php echo $row->contact; ?></center></td>
                                                      <td><center>
                                                          <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                           <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->prof_id.'');?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                           <a href="<?php echo site_url('welcome_admin/deleteFaculty/'.$row->prof_id.''); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                      </center></td>
                                                    </tr>
                                                  <?php
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
                    <div class="tab-pane fade" id="section" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="room" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="dep" role="tabpanel" aria-labelledby="nav-contact-tab">

                        <div style="margin: 15px;">
                                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#adddepartment">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>

                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Department</strong>
                                    </div>
                                    <div class="card-body">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>ID</th>
                                                    <th>Department</th>
                                                    <th>Department Code</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                if ($department!=NULL) {
                                                  foreach ($department as $row) {
                                                    ?>
                                                      <tr>
                                                        <td><center><?php echo $row->department_id; ?></center></td>
                                                        <td><center><?php echo $row->department_name; ?></center></td>
                                                        <td><center><?php echo $row->department_code; ?></center></td>
                                                        <td><center>
                                                           <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                             <a href="<?php echo site_url('welcome_admin/viewDepartment/'.$row->department_id.'');?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                           <a href="<?php echo site_url('welcome_admin/deleteDepartment/'.$row->department_id.''); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </center></td>
                                                      </tr>
                                                    <?php
                                                  }
                                                }
                                              ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="subj" role="tabpanel" aria-labelledby="nav-contact-tab">

                        <div style="margin: 15px;">
                                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addsubject">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>

                       <div class="col-md-12">
                                <div class="card">

                                    <div class="card-header">
                                        <strong class="card-title">Subject</strong>
                                    </div>
                                    <div class="card-body">
                                        <table id="bootstrap-data-table-subject" class="table table-striped table-bordered">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>ID</th>
                                                    <th>Subject Code</th>
                                                    <th>Descriptive Title</th>
                                                    <th>Units</th>
                                                    <th>Hours</th>
                                                    <th>Type</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                if ($subjects!=NULL) {
                                                  foreach ($subjects as $row) {
                                                    ?>
                                                      <tr>
                                                        <td><center><?php echo $row->subject_id; ?></center></td>
                                                        <td><center><?php echo $row->subject_code; ?></center></td>
                                                        <td><center><?php echo $row->subject_name; ?></center></td>
                                                        <td><center><?php echo $row->subject_unit; ?></center></td>
                                                        <td><center><?php echo $row->subject_hrs; ?></center></td>
                                                        <td><center><?php echo $row->subject_type; ?></center></td>
                                                        <td><center>
                                                            <a href="<?php echo site_url('welcome_admin/editSubject/'.$row->subject_id.''); ?>" class="btn btn-sm btn-info" data-target="#editsubject" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                                           <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->subject_id.''); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </center></td>
                                                      </tr>
                                                    <?php
                                                  }
                                                }
                                              ?>
                                            </tbody>
                                        </table>
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


</div> <!-- .content -->

<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addfaculty" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form class="form-horizontal">
          <div class="modal-header">
            <h5 class="modal-title" id="scrollmodalLabel">Add Faculty</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <div class="row form-group">
                <div class="col-12 col-md-4"><input type="text" id="ffname" name="first_name" placeholder="First Name" class="form-control">
                </div>
                <div class="col-12 col-md-4"><input type="text" id="fmname" name="middle_name" placeholder="Middle Name" class="form-control">
                </div>
                <div class="col-12 col-md-4"><input type="text" id="flname" name="last_name" placeholder="Last Name" class="form-control">
                </div>
              </div> 
              <div class="row form-group">
                <div class="col-12 col-md-4"><input type="contact" id="fcontact" name="contact" placeholder="Contact No." class="form-control"></div>
                <!-- <div class="col-12 col-md-4"><input type="text" id="fposition" name="Position" placeholder="Position" class="form-control"></div> -->
                <div class="col-12 col-md-4">
                    <select name="depname" id="fdepCode" class="form-control" >
                        <?php
                            foreach($department as $row) { 
                        ?>
                            <option value="<?php echo $row->department_code ?>"><?php echo $row->department_name ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>    
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btn_faculty" name="submit" value="Done" class="btn btn-primary">Confirm</button>
          </div>
        </form>
          </div>
  </div>
</div>
<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++++-->


<!--ADD DEPARTMENT MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="adddepartment" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-12 col-md-12"><input type="text" id="text-input" name="depname" placeholder="Department Name" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-12 col-md-12"><input type="text" id="text-input" name="depcode" placeholder="Department Code" class="form-control">
                    </div>
                </div>

            </div> 

               
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" name="submit" value="Done" class="btn btn-primary">Confirm</button>
            </div>
            </form>
    </div>
  </div>
</div>
<!--ADD DEPARTMENT MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

<!--ADD SUBJECT MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addsubject" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                   <form action="<?php echo site_url('welcome_admin/addSubject');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="modal-header">
                      <h5 class="modal-title" id="scrollmodalLabel">Add Department</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="subj_code" placeholder="Subject Code" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="subj_name" placeholder="Subject Name" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="units" placeholder="Units" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="hrs" placeholder="Hours" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="type" placeholder="Type" class="form-control">
                          </div>
                      </div>

                  </div> 

                     
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" name="submit" value="Done" class="btn btn-primary">Confirm</button>
                  </div>
                  </form>
          </div>
  </div>
</div>
<!--ADD SUBJECT MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

<!--EDIT SUBJECT MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editsubject" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                   <form action="<?php echo site_url('welcome_admin/editSubject');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="modal-header">
                      <h5 class="modal-title" id="scrollmodalLabel">Edit Subject</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="subj_code" placeholder="Subject Code" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="subj_name" placeholder="Subject Name" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="units" placeholder="Units" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="hrs" placeholder="Hours" class="form-control">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-12 col-md-12"><input type="text" id="text-input" name="type" placeholder="Type" class="form-control">
                          </div>
                      </div>

                  </div> 

                     
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" name="submit" value="Done" class="btn btn-primary">Confirm</button>
                  </div>
                  </form>
          </div>
  </div>
</div>
<!--EDIT SUBJECT MODAL ++++++++++++++++++++++++++++++++++++++++++++-->


