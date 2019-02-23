<!-- Header-->
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Section</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li class="active">Section</li>
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
              <div class="tab-content pl-3 pt-2" id="nav-tabContent">
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
		                          <th>School Year</th>
		                          <th>Level</th>
		                          <th>Semester</th>
		                          <th>Section</th>
		                          <th>Department</th>
		                          <th>Action</th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                         <?php
		                          if ($data!=NULL) {
		                            foreach ($data as $row) {
		                              ?>
		                                <tr>
		                                  <td><center><?php echo $row->SectionID; ?></center></td>
		                                  <td><center><?php echo $row->SectionSchoolYr; ?></center></td>
		                                  <td><center><?php echo $row->SectionYearLvl; ?></center></td>
		                                  <td><center><?php echo $row->SectionSemester; ?></center></td>
		                                  <td><center><?php echo $row->CourseCode.'-'.$row->SectionYearLvl[0].''.$row->SectionCode; ?></center></td>
		                                  <td><center><?php echo $row->DepartmentName; ?></center></td>
		                                  <td><center>
                                          <a href="<?php echo site_url('');?>" class="btn btn-outline-info" style="border-radius: 3px;" title="View Schedule"><i class="fa fa-eye"></i> View</a>
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


