<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<?php echo $_head; ?>
</head>
<body >
<!-- 	<header>
	</header> -->
	<?php echo $_navbar; ?>	
	<main>
		<?php echo $_content; ?>
	</main>
	<footer class="page-footer center-on-small-only primary-color-dark">
		<?php echo $_footer; ?>
	</footer>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js'); ?>"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/app.js'); ?>"></script> -->
	<script>
	    // SideNav init
	    $(".button-collapse").sideNav();
	 </script>
	
</body>
</html>