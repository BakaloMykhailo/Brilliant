<header class="banner">
	<div class="row">
		<div class="column small-4">
			<div class="menu-button">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="column small-4">
			<a class="brand" title="<?php bloginfo('name'); ?>" href="<?= esc_url(home_url('/')); ?>"><img src="<?php  ?>"></a>
		</div>
		<div class="column small-4">
			<div class="cart-button">

	   	</div>
	   </div>
  </div>
	<div class="container">
		<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

	</div>
</header>

<div class="off-canvas-menu">
  <nav class="nav-primary">
		@if (has_nav_menu('primary_navigation'))
		{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
		@endif
	</nav>
</div>

