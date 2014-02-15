<!DOCTYPE html>
<html>
<head>
	<title>Pizzasys</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<script type="text/javascript">
		var BASE_URL = '<?= base_url() ?>';
	</script>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
	<?= $stylesheets ?>

	<?= jquery('1.10.1') ?>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<?= $javascripts ?>
</head>
<body>
	
	<?php $this->load->view('partials/navbar'); ?>
	<?php $this->load->view('partials/messages'); ?>

	<?php echo $body; ?>

	<?php $this->load->view('partials/footer'); ?>
	
</body>
</html>
