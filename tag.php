<?php get_header(); ?>

<div class="page-title">
    <h2> <?php echo $our_title = get_the_title( get_option('page_for_posts', true) ); ?> </h2>
  </div>
  
<div class="main">
	<div class="container">
  		<div class="content-sidebar">
		    <div class="blog-content">
		      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
		      <?php get_template_part( 'loop', 'tag' ); ?>
		    </div> <!-- /.content -->
		    
		    <?php get_sidebar(); ?>
		</div>
	</div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>