<!-- Header-->
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Rooms</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li class="active">Rooms</li>
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
                <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" title="Add Data" href="#addRoom" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active" role="tab" aria-controls="nav-profile" aria-selected="false">Physical Room</a>
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Dummy Room</a>
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
                            <strong class="card-title">Physical Rooms</strong>
                        </div>
                        <div class="card-body" >
                          <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Room</th>
                                <th>Department</th>
                                <th>View</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                               if ($list!=NULL){
                                foreach($list as $l){
                                  if ($l->RoomStatus == 'Physical'){ ?>
                                  <tr>
                                       <td><center><?php echo $l->RoomNo; ?></center></td>
                                       <td><center><?php echo $l->DepartmentName; ?></center></td>
                                       <td><center>
                                          <a href="<?php echo site_url('welcome_admin/viewroomSched/'.$l->RoomID.'');?>" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="View Profile"><i class="fa fa-eye"></i> View</a>
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

              <div class="tab-pane fade" id="inactive" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">

                  <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Dummy Rooms</strong>
                        </div>
                        <div class="card-body" >
                          <table id="bootstrap-data-table-room" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Room</th>
                                <th>Department</th>
                                <th>View</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                               if ($list!=NULL){
                                foreach($list as $l){
                                  if ($l->RoomStatus == 'Dummy'){ ?>
                                  <tr>
                                       <td><center><?php echo $l->RoomNo; ?></center></td>
                                       <td><center><?php echo $l->DepartmentName; ?></center></td>
                                       <td><center>
                                          <a href="<?php echo site_url('welcome_admin/viewroomSched/'.$l->RoomID.'');?>" class="btn btn-outline-info" style="padding: 2px 6px 2px; border-radius: 3px;" title="View Profile"><i class="fa fa-eye"></i> View</a>
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
  </div> <!-- .content -->


<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addRoom" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Room</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger alert-dismissible fade show" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" id="room_no" name="room_no" placeholder="Room Number" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="room_type" name="room_type" placeholder="Room Type" class="form-control">
              </div>
              <div class="col-12 col-md-4">
                  <select data-placeholder="Department" name="dep" id="dep" class="form-control">
                      <?php
                          foreach($dep_list as $row) { ?>
                          <option value="<?php echo $row->DepartmentID ?>"><?php echo $row->DepartmentName ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>
            </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" value="submit" id="btn_room" name="btn_room">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

 <form>
            <div class="modal fade" id="confirm_modal">
              <div class="modal-dialog" style="width: 30%">
                <div class="modal-content" style="background-color: #edfafd">
                  <div class="modal-header" style="background-color: #aed9da">
                    <h4><center>Confirmation</center></h4>
                  </div>
                  <div class="modal-body">
                    
                      <div class="container">
                        <div class="row">
                            Are you sure you want to save this data?
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer" style="background-color: #aed9da">
                    <button type="button" class="btn btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" type="button" id="btn_confirm" class="btn btn-primary btn-sm">Confirm</button>
                  </div>
                </div>
              </div>
            </div> 
            </form>