<?php /*
* Template Name: Register
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part( 'partials/content', 'blocks' ); ?>

  </div>

  <div class="container">

      <div class="twelve columns">
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="six columns">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; ?>

      </div>

      <div class="six columns">

        <?php echo do_shortcode("[wppb-register]"); ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
