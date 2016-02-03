<?php /*
* Template Name: Register
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part( 'partials/content', 'blocks' ); ?>

  </div>

  <div class="container">

      <div class="six columns offset-by-three">

        <h2><?php the_title(); ?></h2>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) ); ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
