<table id="cart-table" class="table table-striped cart-table">
	<colgroup>
		<col class="food-column" />
		<col class="amount-column" />
		<col class="price-column" />
		<col class="actions-column" />
	</colgroup>
	<thead>
		<tr>
			<th>Food</th>
			<th class="align-right">Amount</th>
			<th class="align-right">Price</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td>Total:</td>
			<td></td>
			<td class="align-right">
				$<span id="full-price"><?php printf('%.2f', $total_price); ?></span>
			</td>
		</tr>
	</tfoot>
	<tbody>
		<?php foreach ($cart_items as $item): ?>
			<tr
				class="cart-item"
				data-food="<?= $item->food_id ?>"
				data-price="<?= $food_items[$item->food_id]->price ?>"
			>
				<td><?= $food_items[$item->food_id]->name ?></td>
				<td class="align-right">
					<input type="text" class="amount-input" value="<?= $item->amount ?>" />
				</td>
				<td class="align-right">
					$<span class="price"><?php
						printf('%.2f', $food_items[$item->food_id]->price * $item->amount);
					?></span>
				</td>
				<td>
					<button class="btn btn-xs btn-danger remove-button fa fa-times"></button>
				</td>
			</tr>
		<?php endforeach ?>

		<?php if (count($cart_items) === 0): ?>
			<tr>
				<td>Cart empty</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		<?php endif ?>
	</tbody>
</table>