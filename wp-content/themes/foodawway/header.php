<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">

	<?php wp_head(); ?> 
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-sm">
			<a href="<?php bloginfo('home') ?>" class="navbar-brand">
			<?php $logo = ot_get_option('logo'); 
			if( $logo ) echo '<img src="'.$logo.'" alt="'.get_bloginfo('name').'" />';
			else '<h5 class="">'.get_bloginfo('name').'</h5>';
			?>		
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample03">
				<ul class="navbar-nav ml-auto">
					<?php wp_nav_menu(array(
	                'theme_location' => 'primary_menu',
	                'menu_id' => 'primary_menu',
	                'container' => '',
	                'items_wrap' => '%3$s'
	            )); ?>
				</ul>
			</div>
		</nav>
	</header>