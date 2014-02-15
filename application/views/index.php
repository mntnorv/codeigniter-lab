<div class="container">
	<div class="col-md-3">
		<ul class="category-list">
			<li><a href="#">Everything</a></li>

			<?php foreach ($food_types as $food_type): ?>
				<li data-food-type="<?= $food_type->name ?>">
					<a href="#<?= $food_type->name ?>">
						<?= $food_type->display_name ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="col-md-9">
		<div id="home-food-list" class="row food-list">
		</div>
	</div>
</div>