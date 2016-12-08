<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <head>
      <?php $this->load->view('template/head') ?>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/user.css') ?>">
    </head>
  </head>
  <body>
    <div class="view">

      <div class="container">
        <div class="row">
          <a href="<?php echo site_url('home'); ?>" class="card-link white-text active">BPRENER</a>
            <div class="col-md-5 m-x-auto pull-xs-none">

                <!--Panel-->
                <div class="card card-block z-depth-5 white-text">
                  <a href="<?php echo site_url('login'); ?>" class="card-link black-text active">SING IN</a>
                  <a href="<?php echo site_url('register'); ?>" class="card-link black-text">SING UP</a>
                  <div id="messages"></div>
                  <?php 
                  $attributes = array('class' => 'form-horizontal', 'id' => 'loginform');
                  echo form_open('login/process', $attributes)?>
                    <div class="md-form m-t-3 form-group">
                        <input type="text" id="username" name="username" class="form-control">
                        <label for="form1" class="">Username</label>
                    </div>
                    <div class="md-form form-group">
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password" class="">Password</label>
                    </div>

                    <div class="text-xs-center">
                        <button type="submit" name="submit" class="btn btn-indigo">LOGIN</button>
                        <h5><a href="#" class="white-text">Forgot password?</a></h5>
                    </div>
                  <?php echo form_close(); ?>

                </div>
              </div>
          </div>
      </div>
    </div>


  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.3.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/tether.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/login.js') ?>"></script>
  </body>
</html>
