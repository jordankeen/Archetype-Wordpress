<?php get_header();  ?>

<div class="main">
	<div class="page-title black-background">
		<div class="dot-overlay">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<section class="contact-info">
		<div class="contact-phone">
			<i class="fa fa-2x fa-phone"></i>
			<a href="tel: <?php echo get_field('page_phone'); ?> "> <?php echo get_field('page_phone'); ?> </a>
		</div>
		<div class="contact-address">
			<i class="fa fa-2x fa-map-marker"></i>
			<p> <?php echo get_field('page_address'); ?> </p>
		</div>
		<div class="contact-email">
			<i class="fa fa-envelope"></i>
			<a href="mailto: <?php echo get_field('page_email'); ?> "> <?php echo get_field('page_email'); ?> </a>
		</div>
	</section>
	<section class="form-map">
		<div class="form">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end the loop?>
		</div>
		<div class="map">
			<?php 
				$location = get_field('google_map');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
		</div>
	</section> <!-- /.form-map -->
</div> <!-- /.main -->

<?php get_footer(); ?>