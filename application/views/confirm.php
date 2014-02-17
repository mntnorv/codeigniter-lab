<div class="container">
	<h1>Confirmation</h1>

	<ol class="breadcrumb">
		<li><a href="<?=base_url('/cart')?>">Cart</a></li>
		<li><a href="<?=base_url('/cart/delivery')?>">Delivery information</a></li>
		<li class="active">Confirmation</li>
	</ol>

	<div class="row">
		<div class="col-md-6">
			<h4>Cart</h4>

			<table class="table">
				<?php foreach ($cart_items as $item): ?>
					<tr>
						<td><?= $food_items[$item->food_id]->name ?></td>
						<td class="align-right"><?= $item->amount ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
		<div class="col-md-6">
			<h4>Delivery information</h4>
			<table class="table">
				<colgroup>
					<col style="width: 25%;" />
				</colgroup>
				<tr>
					<td class="bold align-right">City:</td>
					<td><?= $city->name ?></td>
				</tr>
				<tr>
					<td class="bold align-right">Street:</td>
					<td><?= $order->street ?></td>
				</tr>
				<tr>
					<td class="bold align-right">Building No.:</td>
					<td><?= $order->building_no ?></td>
				</tr>
				<tr>
					<td class="bold align-right">Flat No.:</td>
					<td><?= $order->flat_no ?></td>
				</tr>
				<tr>
					<td class="bold align-right">Phone:</td>
					<td><?= $order->phone ?></td>
				</tr>
				<tr>
					<td class="bold align-right">Door code:</td>
					<td><?= $order->door_code ?></td>
				</tr>
				<tr>
					<td class="bold align-right">Comment:</td>
					<td><?= $order->comment ?></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<a href="<?=base_url('/cart/delivery')?>" class="btn btn-default btn-block btn-lg">
				&lt; Delivery
			</a>
		</div>
		<div class="col-md-offset-6 col-md-4">
			<a href="<?=base_url('/cart/order')?>" class="btn btn-primary btn-block btn-lg">
				Order
			</a>
		</div>
	</div>
</div>