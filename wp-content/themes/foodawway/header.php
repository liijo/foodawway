<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">

	<?php wp_head(); ?> 
</head>
<body>
	<header>
		<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
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
		<div class="H_banner home">
            <div class="main_pitch">
                <h1 class="page_title">Order Online Your Food</h1>
                <h3 class="cntct">Call us<span class="call_desk"><a href="tel:+01234567890" id="typewriter_num">01 234 567 890</a></span></h3>
            </div>
        </div>
        <div class="bottom_pitch">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_bpitch">
                            <ul>
                                <li class="pizza active"><a href="menu.html" class="trans" title="Pizza"><span class="icon">Pizza</span></a></li>
                                <li class="burger1"><a href="menu.html" class="trans" title="Burgers"><span class="icon">Burgers</span></a></li>
                                <li class="salads"><a href="menu.html" class="trans" title="Salads"><span class="icon">Salads</span></a></li>
                                <li class="fries"><a href="menu.html" class="trans" title="Fries"><span class="icon">Fries</span></a></li>
                                <li class="drinks"><a href="menu.html" class="trans" title="Drinks"><span class="icon">Drinks</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</header>