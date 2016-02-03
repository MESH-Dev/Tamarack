<?php /*
* Template Name: Login
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part( 'partials/content', 'blocks' ); ?>

  </div>

  <div class="container">





      <div class="six columns offset-by-three">

        <h2><?php the_title(); ?></h2>
        <?php echo do_shortcode('[frm-login label_username="email"]'); ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
