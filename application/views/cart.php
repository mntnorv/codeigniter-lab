<div class="container">
	<h1>Cart</h1>

	<ol class="breadcrumb">
		<li class="active">Cart</li>
		<li>Delivery information</li>
		<li>Confirmation</li>
	</ol>

	<?php $this->load->view('partials/cart_table'); ?>
	
	<div class="row">
		<div class="col-md-offset-8 col-md-4">
			<a href="<?= base_url('/cart/delivery') ?>" class="btn btn-lg btn-primary btn-block">
				Order
			</a>
		</div>
	</div>
</div>