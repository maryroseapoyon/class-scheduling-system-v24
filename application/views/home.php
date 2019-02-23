<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Class Scheduling System</title>
	 <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/dist/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" type="text/css">
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
   <link rel="icon" href="<?php echo base_url('assets/img/logo.jpg'); ?>" /> 
  


</head>
<body class="bg-dark">

  <div class="main">
    <div class="container">
      <center>
        <div class="clearfix"></div>
      <div class="middle">
        <div id="login">
          <?php
            $error_msg = $this->session->flashdata('error_msg');
            if ($error_msg) {
              ?>
                <div style="font-size: 12px; margin-bottom: 12px" class="text-danger">
                  <?php echo $error_msg; ?>
                </div>
              <?php
            }
          ?>
          <form class="form" action="<?php echo site_url('Home/login'); ?>" method='post'>
            <fieldset class="clearfix">
              <p><span class="fa fa-users"></span><input type="text" name="username"  Placeholder="Username"></p> <!-- JS because of IE support; better: placeholder="Username" -->
              <p><span class="fa fa-lock"></span><input type="password" name="password"  Placeholder="Password"></p> <!-- JS because of IE support; better: placeholder="Password" -->
              <div>
                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#"></a></span>
                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Sign In"></span>
              </div>
              </fieldset>
            <div class="clearfix"></div>
          </form>
          <div class="clearfix"></div>
        </div> <!-- end login -->
        <div class="logo"><a class="navbar-brand" href="<?php echo site_url('welcome_admin');?>"><img style="width: 80%; height: 80%;" src="<?php echo base_url('assets/img/logo.jpg'); ?>"></a>
            <div class="clearfix"></div>
        </div>
      </div>
      </center>
    </div>

  </div>

</body>

<div class="container-fluid" id="foot5">
  <h6 class="text-center text-muted">© 2003-2015. Technological University of the Philippines. All rights reserved.</h6>
</div>
</html> 