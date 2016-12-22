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
	<script src="<?php echo base_url('admin/media/js/jquery.dataTables.min.js'); ?> "></script>
    <script src="<?php echo base_url('admin/media/js/dataTables.jqueryui.js'); ?> "></script>
    <script src="<?php echo base_url('admin/media/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/app.js'); ?>"></script>

	<script>
		$(document).ready(function() {
		var dataTable = $('#member_data').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax":{
				url: "<?php echo site_url('data/fetch_member')?>",
				type: "POST"
			},
			"columnDefs": [
				{
					"target": [0,3,4],
					"orderable":false
				}
			]
		});
	})
	</script>
	
</body>
</html>