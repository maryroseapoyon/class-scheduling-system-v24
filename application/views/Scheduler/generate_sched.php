<header>
<link rel="stylesheet" href="<?php echo base_url('assets/css/circle.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/circle-style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/range-slider-style.css'); ?>">


</header>


<div class="animated fadeIn">
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Generate Schedule</h1>
        </div>
      </div>
    </div>
  </div>

<div class="content mt-3">
    <div class="col-sm-12 col-lg-12">

      <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Setup Scheduling Session</strong>
                </div>
                <div class="card-body">
                     <div class="row">
                        <div class="col-lg-12">
                          <div class="card-body">
                            <div class="default-tab">
                              <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="nav-profile" aria-selected="false">Algorithm Settings</a>
                                </div>
                              </nav>

                              <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="nav-home-tab">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <h6> Mutation Probability </h6>
                                              <br>
                                              <p> The probability of a bad schedule to correctly move it's classes randomly each generation </p>
                                              <div class="range-slider">
                                                  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
                                                  <span class="range-slider__value">0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                              <h6> Mutation Size </h6>
                                                <br>
                                                <p> The portion of mutating schedule's bad classes randomly each generation. </p>
                                                <div class="range-slider">
                                                  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
                                                  <span class="range-slider__value">0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h6> Cross Over Probability </h6>
                                                <br>
                                                <p> The probability of two best schedules to clone/ mix the positions of its classes. </p>
                                                <div class="range-slider">
                                                  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
                                                  <span class="range-slider__value">0</span>
                                                </div>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <h6> Cross Over Points</h6>
                                              <br>
                                              <p> The number of part to combine alternately from the best schedules. </p>
                                              <div class="range-slider">
                                                  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
                                                  <span class="range-slider__value">0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                              <h6> Sample Size </h6>
                                                <br>
                                                <p> The number of schedule instances to test. </p>
                                               <div class="range-slider">
                                                  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
                                                  <span class="range-slider__value">0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h6> Generation Interval</h6>
                                                <br>
                                                <p> The limit of continuously having no best results has been reached, the user will be interrupted for an exit confirmation. </p>
                                                <div class="range-slider">
                                                  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
                                                  <span class="range-slider__value">0</span>
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
                          </div>
                       </div>
                </div>
            </div>
        </div>
  </div>

      <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Stimulate Scheduling</strong>
                </div>
                <div class="card-body">
                     <div class="row">
                     	<div class="col-md-4">
                     		 <div class="c100 p50 big">
			                    <span>50%</span>
			                    <div class="slice">
			                        <div class="bar"></div>
			                        <div class="fill"></div>
			                    </div>
			                </div>
                     	</div>

                     	<div class="col-lg-6">
                            <div class="card-body">
                            	<h4>Preparing Individual Classes</h4>
                            	<hr>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <h4>Estimating Required Rooms</h4>
                            	<hr>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <h4>Estimating Conflicts</h4>
                            	<hr>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               	<div class="card-body">
                                    <button type="button" class="btn btn-success">Schedule</button>
                                    <button type="button" class="btn btn-info">View Result</button> 
                                    <button type="button" class="btn btn-danger">Force Stop</button>
                        </div>
                       </div>
                     </div>
                </div>
            </div>
        </div>
	</div>
</div>
