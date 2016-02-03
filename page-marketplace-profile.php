<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part('partials/account', 'header'); ?>

  </div>

  <div class="container">

      <div class="eight columns offset-by-two">

          <h2><?php the_title(); ?></h2>

          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 9, 'title' => false, 'description' => false ) ); ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
