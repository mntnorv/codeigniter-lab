<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url()?>">Pizzasys</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?=base_url('/cart')?>">
					Cart (<span id="cart-size">0</span>)
				</a></li>

				<?php if ($logged_in): ?>
					<li><a href="<?=base_url('/user/logout')?>">
						Logout (<?= $user_data['username'] ?>)
					</a></li>
				<?php else: ?>
					<li><a href="<?=base_url('/user/login')?>">
						Login
					</a></li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>