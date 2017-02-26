<?php get_header(); ?>
<?php //index.php is the last resort template, if no other templates match ?>

<!-- <div class="test-logo">
            <?php 
              // global $wp_query;
              // $pageId = $wp_query->queried_object_id;
            ?>
      
            <?php // $pageheader = get_field('nav_logo', $pageId); ?>
            <img src="<?php // echo $pageheader['sizes']['medium']?>" alt="" >
 </div> -->

<div class="main">

	<div class="page-title black-background">
		<div class="dot-overlay">
			<h2> <?php echo $our_title = get_the_title( get_option('page_for_posts', true) ); ?> </h2>
		</div>
	</div>

  	<div class="container">


	<div class="content-sidebar clearfix">
	    <div class="blog-content">

	    	<?php get_template_part( 'loop', 'index' );	?>

	    </div> <!--/.content -->

	    <?php get_sidebar(); ?>
	 </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>