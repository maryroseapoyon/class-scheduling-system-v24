<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/table-style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/some-css.css'); ?>">
  </head>

    <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Schedules</h1>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Schedule</a></li>
                  <li><a href="<?php echo site_url('welcome_admin/viewSched');?>">View</a></li>
                  <?php if ($faculty!=NULL){
                   echo '<li class="active">';
                     foreach ($faculty as $f) {
                        echo $f->Lastname.',&nbsp;'.$f->Firstname;
                   echo '</li>';
                 }
               }

                   if ($faculty==NULL){
                   echo '<li class="active">';
                     foreach ($faculty as $f) {
                        echo 'Chenelin';
                   echo '</li>';
                 }
                }
              ?>

              </ol>
          </div>
      </div>
    </div>

  <div class="content mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="navbar-2">
          <?php
              if ($department!=NULL){
                foreach ($department as $d){
                   ?>
                    <div class="dropdown-2">
                     <button class="dropbtn dropdown-toggle"><?php echo $d->DepartmentName; ?>&nbsp;Department</button>

                      <?php if($d->DepartmentCode=='MATH'){ ?>
                        <div class="dropdown-content-2 force-scroll">
                          <?php
                            if ($math!=NULL){
                               foreach ($math as $m){
                               ?>
                                  <a href="<?php echo site_url('welcome_admin/schedule/'.$m->ProfID.'');?>"><?php echo $m->Lastname.', '.$m->Firstname.'&nbsp; - &nbsp;'.$m->PositionName; ?></a>
                                <?php
                              }
                            }
                          ?>
                        </div>
                      <?php } ?>

                      <?php if($d->DepartmentCode=='PHYS'){ ?>
                        <div class="dropdown-content-2 force-scroll">
                          <?php
                            if ($phys!=NULL){
                               foreach ($phys as $p){
                               ?>
                                  <a href="<?php echo site_url('welcome_admin/schedule/'.$p->ProfID.'');?>"><?php echo $p->Lastname.', '.$p->Firstname.'&nbsp; - &nbsp;'.$p->PositionName; ?></a>
                                <?php
                              }
                            }
                          ?>
                        </div>
                        
                      <?php } ?>

                      <?php if($d->DepartmentCode=='CHEM'){ ?>
                        <div class="dropdown-content-2 force-scroll">
                          <?php
                            if ($chem!=NULL){
                               foreach ($chem as $c){
                               ?>
                                  <a href="<?php echo site_url('welcome_admin/schedule/'.$c->ProfID.'');?>"><?php echo $c->Lastname.', '.$c->Firstname.'&nbsp; - &nbsp;'.$c->PositionName; ?></a>
                                <?php
                              }
                            }
                          ?>
                        </div>
                      <?php } ?>


                    </div>
                <?php
                }
              }
            ?> 

        </div>
      </div>
    </div>
    <div class="row">

    <div class="col-md-12">
            <div class="cd-schedule loading">
              <div class="timeline">
                <?php 
                  $times = array("06:00","07:00","08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00"); ?>
                  <ul>                            
                    <?php foreach($times as $t){ ?>
                        <li><span><?php echo $t ?></span></li>
                    <?php }
                    ?>
                  </ul>
              </div> <!-- .timeline -->

              <div class="events">
                <ul>
                  <li class="events-group">
                    <div class="top-info"><span>Monday</span></div>
                     <ul>
                          <?php
                          if ($sched!=NULL) {
                           foreach($sched as $s){ 
                                if($s->SchedDays=="Monday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Tuesday</span></div>
                     <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="Tuesday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Wednesday</span></div>
                        <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="Wednesday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                  ?>
                        </ul>

                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Thursday</span></div>
                      <ul>
                          <?php
                          if ($sched!=NULL) {
                           foreach($sched as $s){ 
                              if($s->SchedDays=="Thursday")
                            { ?>
                              <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                <a href="#0">
                                  <em class="event-name"><?php echo $s->SubjectName;?></em>
                                </a>
                              </li>
                            <?php }
                              }
                            }
                          ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Friday</span></div>
                    <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="Friday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Saturday</span></div>
                    <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="Saturday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>
                </ul>
              </div>

              <div class="event-modal">
                <header class="header">
                  <div class="content">
                    <span class="event-date"></span>
                    <h3 class="event-name"></h3>
                  </div>

                  <div class="header-bg"></div>
                </header>

                <div class="body">
                  <div class="event-info"></div>
                  <div class="body-bg"></div>
                </div>
              </div>

              <div class="cover-layer"></div>
            </div> <!-- .cd-schedule -->
          </div>
  </div>
</div>

