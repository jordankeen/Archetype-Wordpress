<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="main-nav">
		<!-- Nav logo -->
		<?php if( is_home() && get_option('page_for_posts') ) { ?>
        	<?php $image = get_field('nav_logo', get_page( get_option('page_for_posts') )); ?>
        	<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
    			<img src="<?php echo $image['sizes']['medium']?>">
    		</a>

    	<?php } else if (is_single() && get_option('page_for_posts') ) { ?>
    		<?php $image = get_field('nav_logo', get_page( get_option('page_for_posts') )); ?>
    		<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
    			<img src="<?php echo $image['sizes']['medium']?>">
    		</a>

    	<?php } else if (is_tag() && get_option('page_for_posts') ) { ?>
    		<?php $image = get_field('nav_logo', get_page( get_option('page_for_posts') )); ?>
    		<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
    			<img src="<?php echo $image['sizes']['medium']?>">
    		</a>

    	<?php } else if (is_category() && get_option('page_for_posts') ) { ?>
    		<?php $image = get_field('nav_logo', get_page( get_option('page_for_posts') )); ?>
    		<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
    			<img src="<?php echo $image['sizes']['medium']?>">
    		</a>

    	<?php } else { ?>
        	<?php $image = get_field('nav_logo') ?>
        	<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        		<img src="<?php echo $image['sizes']['medium']?>">
        	</a>
      	<?php } ?>

		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'primary'
		)); ?>
		
		<button id="menu-btn"></button>

	</div> <!-- /.container -->
</header><!--/.header-->


