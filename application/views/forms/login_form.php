<?= form_open('user/login', array('class' => 'form-horizontal')) ?>

	<!-- Username field -->
	<div class="form-group">
		<?= form_label('Vartotojo vardas:', 'username', array('class' => 'col-md-4 control-label')) ?>
		<div class="col-md-8">
			<?= form_input(array(
				'name'        => 'username',
				'id'          => 'username',
				'placeholder' => 'Vartotojo vardas',
				'class'       => 'form-control'
			)) ?>
		</div>
	</div>

	<!-- Password field -->
	<div class="form-group">
		<?= form_label('Slaptažodis:', 'password', array('class' => 'col-md-4 control-label')) ?>
		<div class="col-md-8">
			<?= form_password(array(
				'name'        => 'password',
				'id'          => 'password',
				'placeholder' => 'Slaptažodis',
				'class'       => 'form-control'
			)) ?>
		</div>
	</div>

	<!-- Submit button -->
	<div class="form-group">
		<div class="col-md-offset-4 col-md-8">
			<?= form_submit(array(
				'name'  => 'login',
				'value' => 'Prisijungti',
				'class' => 'btn btn-primary btn-block btn-lg'
			)) ?>
		</div>
	</div>

<?= form_close() ?>
