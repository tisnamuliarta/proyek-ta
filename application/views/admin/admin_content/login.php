<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>Login</title>

    <link href="<?php echo base_url('admin/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('admin/css/simple-line-icons.css'); ?>" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="<?php echo base_url('admin/css/style.css'); ?>" rel="stylesheet">

</head>

<body>
    <div class="container d-table">
        <div class="d-100vh-va-middle">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card-group">
                        <div class="card p-2">
                            <div class="card-block">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                                <?php
                                  $attribute = array('name' => 'LoginForm');
                                  echo form_open('auth_su/login', $attribute); ?>
                                    <div class="input-group mb-1">
                                        <span class="input-group-addon"><i class="icon-user"></i>
                                        </span>
                                        <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username">

                                    </div>
                                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                                    <div class="input-group mb-2">
                                        <span class="input-group-addon"><i class="icon-lock"></i>
                                        </span>
                                        <input type="password" name="password" class="form-control" placeholder="Password">

                                    </div>
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="submit" class="btn btn-primary px-2">Login</button>
                                        </div>

                                    </div>
                                  <?php echo form_close(); ?>
                                <!-- <form class="form-horizontal" role="form" action="<?php echo site_url('auth_su/login') ?>" method="post">

                                </form> -->
                                <div style="margin-top: 20px;">
                                  <?php echo $this->session->flashdata('msg') ?>
                                </div>
                            </div>
                        </div>
                        <div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">
                            <div class="card-block text-xs-center">
                                <div>
                                    <h2>Welcome :)</h2>
                                    <p>Don't make mistake.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap and necessary plugins -->
    <script src="<?php echo base_url('admin/bower_components/jquery/dist/jquery.min.js'); ?> "></script>
    <script src="<?php echo base_url('admin/bower_components/tether/dist/js/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>



</body>

</html>
