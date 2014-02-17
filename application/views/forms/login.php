<?= form_open('user/login', array('class' => 'form-horizontal')) ?>

	<!-- Username field -->
	<div class="form-group">
		<?= form_label('Username:', 'username', array('class' => 'col-md-4 control-label')) ?>
		<div class="col-md-8">
			<?= form_input(array(
				'name'           => 'username',
				'id'             => 'username',
				'placeholder'    => 'Username',
				'class'          => 'form-control',
				'data-toggle'    => 'tooltip',
				'data-trigger'   => 'manual',
				'data-placement' => 'right',
				'data-container' => 'body',
				'title'          => form_error("username")
			)) ?>
		</div>
	</div>

	<!-- Password field -->
	<div class="form-group">
		<?= form_label('Password:', 'password', array('class' => 'col-md-4 control-label')) ?>
		<div class="col-md-8">
			<?= form_password(array(
				'name'           => 'password',
				'id'             => 'password',
				'placeholder'    => 'Password',
				'class'          => 'form-control',
				'data-toggle'    => 'tooltip',
				'data-trigger'   => 'manual',
				'data-placement' => 'right',
				'data-container' => 'body',
				'title'          => form_error("password")
			)) ?>
		</div>
	</div>

	<!-- Submit button -->
	<div class="form-group">
		<div class="col-md-offset-4 col-md-8">
			<?= form_submit(array(
				'name'  => 'login',
				'value' => 'Login',
				'class' => 'btn btn-primary btn-block btn-lg'
			)) ?>
		</div>
	</div>

<?= form_close() ?>
