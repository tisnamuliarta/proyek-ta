<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php echo $head; ?>
  </head>
  <body class="navbar-fixed sidebar-nav fixed-nav">
    <?php echo $navbar; ?>

    <?php echo $sidebar; ?>

    <!-- Main content -->
    <main class="main">
       <!-- Breadcrumb -->
       <ol class="breadcrumb">
           <li class="breadcrumb-item">Home</li>
           <li class="breadcrumb-item"><a href="#">Admin</a>
           </li>
           <li class="breadcrumb-item active">Dashboard</li>

           <!-- Breadcrumb Menu-->
           <li class="breadcrumb-menu">
               <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                   <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                   <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                   <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
               </div>
           </li>
       </ol>
       <div class="container-fluid">
           <div class="animated fadeIn">
             <?php echo $content; ?>
          </div>
        </div>
    </main>

    <?php echo $aside_menu; ?>

    <?php echo $footer; ?>

    <!-- Bootstrap and necessary plugins -->
    <script src="<?php echo base_url('admin/bower_components/jquery/dist/jquery.min.js'); ?> "></script>
    <script src="<?php echo base_url('admin/bower_components/tether/dist/js/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin/bower_components/pace/pace.min.js'); ?>"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="<?php echo base_url('admin/bower_components/chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- GenesisUI main scripts -->
    <script src="<?php echo base_url('admin/js/app.js'); ?>"></script>
    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="<?php echo base_url('admin/js/views/main.js'); ?>"></script>
  </body>
</html>
