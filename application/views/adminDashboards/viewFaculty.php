<?php 
$sub = '';  
$dayz = '';
foreach($day as $row){
  $dayz .= '<option value="'.$row->Day.'">'.$row->Day.'</option>';
  }
foreach($info as $row2) {
foreach($subjects as $row) {
  if($row->Status == 'A') {
  if($row->SubjectDeptCode == $row2->DepartmentCode) { 
    $sub .= '<option value="'.$row->SubjectCode.'">'.$row->SubjectName.'</option>';    
  }}
}}

?> 

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
                  <li><a href="<?php echo site_url('welcome_admin/faculty');?>">Faculty</a></li>
                  <li class="active">
                    <?php foreach ($data as $row) { ?>
                        <?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename[0].'.'; ?>
                    <?php }?></li>
              </ol>
          </div>
      </div>
    </div>
  </div>

  <div class="col-sm-2"></div>
  <div class="col-sm-8" style="position: center;">
    <div class="animated fadeIn">
    <div class="card">
      <div class="card-body">
        <div class="mx-auto d-block">
          <img class="mx-auto d-block" src="<?php echo base_url('assets/images/user.png');?>" alt="Card image cap">
          <h5 class="text-sm-center mt-2 mb-1"><?php                                           
            foreach ($data as $row) { ?>
                <?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename[0].'.'; ?>
            <?php
                }?>
          </h5><hr>
          <p class="text-sm-center mt-2 mb-1"> <?php                                          
            foreach ($info as $row) { ?>
                <?php echo $row->PositionName; ?>
            <?php
            }?>
          </p>                                                                                                       
        </div>
      </div>
    </div>
    </div>

    <div class="animated fadeIn">
    <div class="card">
      <div class="card-header" style="background-color: #c51e3a; border-color: #c51e3a; color: #fff;">
        <i class="fa fa-info-circle"></i>
        <strong class="card-title">Professor Information</strong>
      </div>
      <div class="card-body">

            <?php foreach ($info as $row) { ?>

            <h6>Department:</h6>
              <div class="card-body">
                  <div class="mx-auto d-block" style="color: grey;">
                    <p><h3><?php echo $row->DepartmentName; ?> DEPARTMENT</h3></p>
                  </div>
              </div>
            <hr>
            <h6>Preferred Time:</h6>
              <div class="card-body">
                <div class="mx-auto d-block">
                    <?php 
                      foreach ($info3 as $row) { ?>
                         <p><input type="checkbox" class="del_time" data-id="<?php echo $row->TimeLID; ?>"> <?php echo $row->Days; ?> <?php echo $row->Time; ?></p>
                       <?php
                      } 
                    ?>
                </div>
                <div class="card-footer" style="border-color:transparent; background-color: transparent;">
                  <input type="checkbox" id="master2"> Select All
                </div>
              </div>
            <hr>
            <?php } ?>

            <h6>Preferred Subjects:</h6>
              <div class="card-body">
                <div class="mx-auto d-block">
                  <?php foreach ($info as $row2) { ?>
                    <?php foreach ($info2 as $row) { if($row->ss == 'A') { if($row->sdept == $row2->DepartmentCode) { ?>
                         <p><input type="checkbox" class="del_subj" data-id="<?php echo $row->SubjectLID; ?>"> <?php echo $row->SubjectName; ?></p>
                       <?php } } } } ?>
                  
                </div>
                <div class="card-footer" style="border-color:transparent; background-color: transparent;">
                  <input type="checkbox" id="master"> Select All
                </div>
              </div>
          </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-danger" data-target="#editfaculty" data-toggle="modal" data-backdrop="static" title="Edit Information"><i class="fa fa-pencil"></i> Edit Info</button>
        <button type="button" class="btn btn-outline-danger delete_all"><i class="fa fa-trash"></i> Delete Subjects</button>
        <button type="button" class="btn btn-outline-danger delete_all2"><i class="fa fa-trash"></i> Delete Time</button>
        <button type="button" class="btn btn-outline-danger" data-target="#infosub" data-toggle="modal" data-backdrop="static" title="Add Subject"><i class="fa fa-plus-circle"></i> Add Subject</button>
        <button type="button" class="btn btn-outline-danger" data-target="#infotime" data-toggle="modal" data-backdrop="static" title="Add Subject"><i class="fa fa-plus-circle"></i> Add Time</button>
      </div>
    </div>
    </div>
  </div>
    

<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editfaculty" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Edit Faculty <?php echo $data[0]->ProfID;?></strong></h5>
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
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->Firstname;?>" id="ffname_upd" name="ffname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->Middlename;?>" id="fmname_upd" name="fmname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->Lastname;?>" id="flname_upd" name="flname" placeholder="Last Name" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" value="<?php echo $data[0]->Contact;?>" id="fcontact_upd" name="fcontact" placeholder="Contact No." class="form-control"></div>
              <div class="col-12 col-md-4">
                  <select name="fposition" id="fposition_upd" class="form-control">
                      <option value="<?php echo $info[0]->PositionCode;?>"><?php echo $info[0]->PositionName;?></option>
                      <?php
                          foreach($position as $row) { ?>
                          <option value="<?php echo $row->PositionCode ?>"><?php echo $row->PositionName ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>
              <div class="col-12 col-md-4">
                  <select name="fdepCodes" id="fdepCode_upd" class="form-control" >
                      <option value="<?php echo $info[0]->DepartmentCode;?>"><?php echo $info[0]->DepartmentName;?></option>
                      <?php
                          foreach($department as $row) { if($row->Status == 'A'){ ?>
                          <option value="<?php echo $row->DepartmentCode ?>"><?php echo $row->DepartmentName ?></option>
                      <?php
                          }}
                      ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="prof_id" id="profid" value="<?php echo $data[0]->ProfID;?>">
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btnupd_faculty" name="btn_faculty">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->


  <div class="modal fade" id="infosub" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Add Subject <?php echo $data[0]->ProfID;?></strong></h5>
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
              <div class="col-12 col-md-4">
                  <select name="sub_list[]" id="selectmenu" multiple>
                    <?php echo $sub ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="prof_id" id="profid" value="<?php echo $data[0]->ProfID;?>">
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btn_faculty_sub" name="btn_faculty">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="infotime" tabindex="-1" role="dialog" value="<?php echo $data[0]->ProfID;?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Add Time <?php echo $data[0]->ProfID;?></strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" id="timezone">
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4">
                  <select name="day" id="day" class="form-control">
                    <option value="">Select Day</option>
                    <?php echo $dayz ?>
                  </select>
                </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4">
                  <select name="shift" id="shift" class="form-control">
                    <option value="">Select Shift</option>
                     <!-- <?php echo $shifts ?> -->
                  </select>
              </div>
            </div>  
            <div class="row form-group">    
              <div class="col-12 col-md-4">
                  <select name="time_list[]" id="time" multiple>
                     <!-- <?php echo $timez ?>     -->
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="prof_id" id="profid" value="<?php echo $data[0]->ProfID;?>">
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btn_faculty_time" name="btn_faculty">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  