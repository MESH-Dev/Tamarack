<?php /*
* Template Name: Text
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">

      <div class="ten columns offset-by-one">
          <div class="content-full text-content">
              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                  <div class="content <?php if(get_field('text_two_columns')) { ?> text-two-columns <?php } ?>">
                      <?php the_content(); ?>
                  </div>

              <?php endwhile; ?>
          </div>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
