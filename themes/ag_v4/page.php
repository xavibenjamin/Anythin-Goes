<?php get_header(); ?>

  <?php the_post (); ?>

  <section class="main-content" role="main">
    <div class="contain">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

      <p><a href="<?php bloginfo('url');?>">Back to the homepage</a>.</p>

    </div><!-- end .contain -->
  </section><!-- end .main-content -->

<?php get_footer(); ?>