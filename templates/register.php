<?php /*
* Template Name: Register
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part( 'partials/content', 'blocks' ); ?>

  </div>

  <div class="container">
      <div class="six columns">
        <h2><?php the_title(); ?></h2>
        <p>The West Virginia Creative Network, West Virginia Made and Trails are gateways to connect you to fellow artists and creatives, training and business opportunities, new customers, and more. The Creative Network promotes your range of creative skills and abilities to open up new pathways for professional success, and West Virginia Made showcases your creative business by telling the story of how and why your work matters. The Trails bring foot traffic to your shop or studio. </p>
        <p>Ready to join? Let's go!</p>
      </div>

      <div class="six columns">
        <div class="input-form">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
  </div>
</main><!-- #main -->

<?php get_footer(); ?>
