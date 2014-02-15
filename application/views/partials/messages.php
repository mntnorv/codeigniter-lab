<?php if ($alert_error != FALSE): ?>
	<div class="alert alert-danger">
		<div class="container">
			<?= $alert_error ?>
		</div>
	</div>
<?php endif ?>

<?php if ($alert_info != FALSE): ?>
	<div class="alert alert-info">
		<div class="container">
			<?= $alert_info ?>
		</div>
	</div>
<?php endif ?>

<?php if ($alert_success != FALSE): ?>
	<div class="alert alert-success">
		<div class="container">
			<?= $alert_success ?>
		</div>
	</div>
<?php endif ?>