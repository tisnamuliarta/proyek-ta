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
             <div id="messages"></div>
             <div class="messages"></div>
             <?php echo $content; ?>
          </div>
        </div>

        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
      			<!--Content-->
      			<div class="modal-content">
      				<!--Header-->
      				<div class="modal-header">
      					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      						<span aria-hidden="true">&times;</span>
      					</button>
      					<h4 class="modal-title" id="myModalLabel">Add Channel</h4>
      				</div>
      				<!--Body-->
      				<div class="modal-body">

      					<?php
                  $attributes = array('class' => 'form-horizontal', 'id' => 'addChannelForm');

                  echo form_open_multipart('su/create_channel', $attributes);
                ?>
                  <div class="form-group ">
                    <label for="channel_name">Channel Name</label>
                    <div class="input-group mb-1">
                      <span class="input-group-addon"><i class="icon-people"></i>
                      </span>
                      <input type="text" name="channel_name" id="channel_name"  class="form-control" placeholder="Channel Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="channel_description">Channel Description</label>
                    <div class="input-group mb-1">
                      <span class="input-group-addon"><i class="icon-layers"></i>
                      </span>
                      <input type="text" name="channel_description" id="channel_description" value="<?php echo set_value('channel_description'); ?>" class="form-control" placeholder="Channel description">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="channel_icon">Channel Icon</label>
                    <div class="input-group mb-1">
                      <span class="input-group-addon"><i class="icon-paper-clip"></i>
                      </span>
                      <input type="file" name="channel_icon" id="channel_icon"  class="form-control" placeholder="Channel icon">
                    </div>
                  </div>

                  <div class="row modal-footer">
                      <div class="col-xs-6 push-md-6 push-xs-6">
                          <button type="submit" class="btn btn-primary form-control">Create</button>
                      </div>
                  </div>

                <?php echo form_close(); ?>
      				</div>
      				<!--Footer-->
      				<!-- <div class="modal-footer">
      					<button type="button" class="btn btn-primary">Save changes</button>
      				</div>
      			</div> -->
      			<!--/.Content-->
          </div>
        </div>
    </main>

    <?php echo $aside_menu; ?>

    <?php echo $footer; ?>

    <!-- Bootstrap and necessary plugins -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
    <!-- <script src="<?php echo base_url('admin/bower_components/jquery/dist/jquery.min.js'); ?> "></script> -->
    <script src="<?php echo base_url('admin/media/js/jquery.dataTables.min.js'); ?> "></script>
    <script src="<?php echo base_url('admin/media/js/dataTables.jqueryui.js'); ?> "></script>
    <script src="<?php echo base_url('admin/bower_components/tether/dist/js/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin/media/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin/bower_components/pace/pace.min.js'); ?>"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="<?php echo base_url('admin/bower_components/chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- GenesisUI main scripts -->
    <script src="<?php echo base_url('admin/js/app.js'); ?>"></script>
    <script src="<?php echo base_url('admin/js/dataTable.js'); ?>" charset="utf-8"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <!-- <script src="<?php echo base_url('admin/js/views/main.js'); ?>"></script> -->
  </body>
</html>
