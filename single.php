<?php get_header(); ?>

<div class="main">

<div class="page-title">
    <h2> <?php echo $our_title = get_the_title( get_option('page_for_posts', true) ); ?> </h2>
  </div>

  <div class="container">

 
  <div class="content-sidebar">

    <div class="blog-content">
    <div class="blog-post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="blog-image">
          <?php echo get_the_post_thumbnail( $page->ID, 'url' ); ?>
        </div>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="date-comments">
            <p class="date"><?php echo get_the_date('F j, Y'); ?> / </p>
            <!-- <p class="comment-link"> --><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?><!-- </p> -->
          </div>

          <div class="author-category">
            <p class="author">Posted by <a href=""><?php echo get_the_author(); ?></a></p>
            <p>In <?php the_category(', '); ?></p>
          </div>

          <section class="entry-content">
            <?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
            <?php wp_link_pages( array(
                  'before' => '<div class="page-link"> Pages:',
                  'after' => '</div>'
              )); ?>
          </section><!-- .entry-content -->

        

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    
    </div> <!-- Blog-Post -->
  </div>  <!-- Blog-Content -->
  
    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>