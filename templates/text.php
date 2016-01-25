<?php /*
* Template Name: Text
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">

      <div class="ten columns offset-by-one">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

              <h2><?php the_title(); ?></h2>

              <div class="content <?php if(get_field('text_two_columns')) { ?> text-two-columns <?php } ?>">
                  <?php the_content(); ?>
              </div>

          <?php endwhile; ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>