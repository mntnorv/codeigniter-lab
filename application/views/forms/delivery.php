<?= form_open('cart/delivery', array('class' => 'form-horizontal')) ?>

	<div class="row">
		<div class="col-md-6">
			<!-- City field -->
			<div class="form-group">
				<?= form_label('City:', 'city', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_dropdown('city', $cities, $order->city, 'class="form-control"') ?>
				</div>
			</div>

			<!-- Address fields -->
			<div class="form-group">
				<?= form_label('Street:', 'street', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_input(array(
						'name'           => 'street',
						'id'             => 'street',
						'placeholder'    => 'Street',
						'value'          => $order->street,
						'class'          => 'form-control',
						'data-toggle'    => 'tooltip',
						'data-trigger'   => 'manual',
						'data-placement' => 'right',
						'data-container' => 'body',
						'title'          => form_error("street")
					)) ?>
				</div>
			</div>

			<div class="form-group">
				<?= form_label('Building No.:', 'building_no', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_input(array(
						'name'           => 'building_no',
						'id'             => 'building_no',
						'placeholder'    => 'Building No.',
						'value'          => $order->building_no,
						'class'          => 'form-control',
						'data-toggle'    => 'tooltip',
						'data-trigger'   => 'manual',
						'data-placement' => 'right',
						'data-container' => 'body',
						'title'          => form_error("building_no")
					)) ?>
				</div>
			</div>

			<div class="form-group">
				<?= form_label('Flat No.:', 'flat_no', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_input(array(
						'name'           => 'flat_no',
						'id'             => 'flat_no',
						'placeholder'    => 'Flat No.',
						'value'          => $order->flat_no,
						'class'          => 'form-control',
						'data-toggle'    => 'tooltip',
						'data-trigger'   => 'manual',
						'data-placement' => 'right',
						'data-container' => 'body',
						'title'          => form_error("flat_no")
					)) ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<!-- Telephone number field -->
			<div class="form-group">
				<?= form_label('Phone No.:', 'phone', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_input(array(
						'name'           => 'phone',
						'id'             => 'phone',
						'placeholder'    => 'Phone No.',
						'value'          => $order->phone,
						'class'          => 'form-control',
						'data-toggle'    => 'tooltip',
						'data-trigger'   => 'manual',
						'data-placement' => 'right',
						'data-container' => 'body',
						'title'          => form_error("phone")
					)) ?>
				</div>
			</div>

			<!-- Door code field -->
			<div class="form-group">
				<?= form_label('Door code:', 'door_code', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_input(array(
						'name'           => 'door_code',
						'id'             => 'door_code',
						'placeholder'    => 'Door code',
						'value'          => $order->door_code,
						'class'          => 'form-control',
						'data-toggle'    => 'tooltip',
						'data-trigger'   => 'manual',
						'data-placement' => 'right',
						'data-container' => 'body',
						'title'          => form_error("door_code")
					)) ?>
				</div>
			</div>

			<!-- Comment field -->
			<div class="form-group">
				<?= form_label('Comment:', 'comment', array('class' => 'col-md-4 control-label')) ?>
				<div class="col-md-8">
					<?= form_textarea(array(
						'name'           => 'comment',
						'id'             => 'comment',
						'placeholder'    => 'Comment',
						'value'          => $order->comment,
						'class'          => 'form-control',
						'data-toggle'    => 'tooltip',
						'data-trigger'   => 'manual',
						'data-placement' => 'right',
						'data-container' => 'body',
						'title'          => form_error("comment")
					)) ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Submit button -->
	<div class="form-group">
		<div class="col-md-2">
			<a href="<?=base_url('/cart')?>" class="btn btn-default btn-block btn-lg">
				&lt; Cart
			</a>
		</div>
		<div class="col-md-offset-6 col-md-4">
			<?= form_submit(array(
				'name'  => 'confirmation',
				'value' => 'Confirmation >',
				'class' => 'btn btn-primary btn-block btn-lg'
			)) ?>
		</div>
	</div>

<?= form_close() ?>
