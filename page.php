<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php get_template_part( 'partials/content', 'blocks' ); ?>

  </div>

  <div class="container">

      <div class="ten columns offset-by-one">
          <div class="content-full">

              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
              <?php endwhile; ?>

          </div>
      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
