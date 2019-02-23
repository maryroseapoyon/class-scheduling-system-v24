  <head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/table-style.css'); ?>">
  </head>

  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <?php foreach($room as $ro){ ?>
            <h1>Rooms <?php echo $ro->RoomNo; ?></h1>
            <?php 
          }
          ?>
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
            <div class="cd-schedule loading">
              <div class="timeline">
                <?php 
                  $times = array("06:00","07:00","08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00","22:00","23:00","24:00"); ?>
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
                          if ($hey!=NULL) {
                           foreach($hey as $h){ 
                                if($h->SchedDays=="monday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $h->SubjectName;?></em>
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
                           if ($hey!=NULL) {
                             foreach($hey as $h){ 
                                if($h->SchedDays=="tuesday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $h->SubjectName;?></em>
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
                           if ($hey!=NULL) {
                             foreach($hey as $h){ 
                                if($h->SchedDays=="wednesday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $h->SubjectName;?></em>
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
                          if ($hey!=NULL) {
                           foreach($hey as $h){ 
                              if($h->SchedDays=="thursday")
                            { ?>
                              <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                <a href="#0">
                                  <em class="event-name"><?php echo $h->SubjectName;?></em>
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
                           if ($hey!=NULL) {
                             foreach($hey as $h){ 
                                if($h->SchedDays=="friday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $h->SubjectName;?></em>
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

