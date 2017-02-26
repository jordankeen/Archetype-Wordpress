<?php get_header();  ?>

<div class="main">

	<div class="page-title black-background">
		<div class="dot-overlay">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="container">
		<section class="about-section">
		<div class="about-container">
			<h2> <?php echo get_field('about_title') ?> </h2>

			<?php $image = get_field('accent'); ?>
        	<img class="accent" src="<?php echo $image['sizes']['medium']?>">

			<p> <?php echo get_field('about_paragraph'); ?> </p>

			<div class="about-images">
				<div class="about-image">
					<?php $image = get_field('about_image1'); ?>
							<img src="<?php echo $image['sizes']['large']?>">
							<h4> <?php echo get_field('about_name1'); ?> </h4>
							<p> <?php echo get_field('about_title1'); ?> </p>
				</div>
				<div class="about-image">
					<?php $image = get_field('about_image2'); ?>
							<img src="<?php echo $image['sizes']['large']?>">
							<h4> <?php echo get_field('about_name2'); ?> </h4>
					<p> <?php echo get_field('about_title2'); ?> </p>
				</div>
				<div class="about-image">
					<?php $image = get_field('about_image3'); ?>
							<img src="<?php echo $image['sizes']['large']?>">
							<h4> <?php echo get_field('about_name3'); ?> </h4>
							<p> <?php echo get_field('about_title3'); ?> </p>
				</div>
				<div class="about-image">
					<?php $image = get_field('about_image4'); ?>
							<img src="<?php echo $image['sizes']['large']?>">
							<h4> <?php echo get_field('about_name4'); ?> </h4>
							<p> <?php echo get_field('about_title4'); ?> </p>
				</div>
			</div>

		</div>
		</section>

	

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>