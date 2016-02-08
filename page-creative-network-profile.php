<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part('partials/account', 'header'); ?>

  </div>

  <div class="container">

      <div class="eight columns offset-by-two">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

        <?php endwhile; ?>

        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
