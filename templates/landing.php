<?php /*
* Template Name: Landing
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part( 'partials/content', 'blocks' ); ?>

  </div>

  <div class="container">

      <div class="twelve columns">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
