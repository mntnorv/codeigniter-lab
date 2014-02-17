<div class="container">
	<h1>Orders</h1>

	<table id="cart-table" class="table table-striped cart-table">
		<thead>
			<tr>
				<th>Where</th>
				<th>Phone</th>
				<th>Price</th>
				<th>State</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($orders as $order): ?>
				<tr>
					<td><?= $order->address ?></td>
					<td><?= $order->phone ?></td>
					<td>$<?php printf('%.2f', $order->final_price); ?></td>
					<td><?= $states[$order->state] ?></td>
				</tr>
			<?php endforeach ?>

			<?php if (count($orders) == 0): ?>
				<tr>
					<td>No pending orders</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			<?php endif ?>
		</tbody>
	</table>
</div>