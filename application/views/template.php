<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<?php echo $_head; ?>
</head>
<body>
	<header>
		<?php echo $_navbar; ?>	
	</header>
	<main>
		<?php echo $_content; ?>
	</main>
	<footer class="page-footer center-on-small-only primary-color-dark">
		<?php echo $_footer; ?>
	</footer>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.3.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/tether.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js') ?>"></script>

</body>
</html>