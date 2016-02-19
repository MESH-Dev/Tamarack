<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="trail-description">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>

      <?php endwhile; ?>
    </div>

    <div id="trailstops">

      <?php

      // check if the repeater field has rows of data
      if( have_rows('trail_stops') ):

       	// loop through the rows of data
          while ( have_rows('trail_stops') ) : the_row();
          ?>

            <?php

            $trail_stop = get_sub_field('trail_stop');

            ?>

              <div class="trail-third trailstop">
                <div class="trailstop-inner">
                  <div class="trailstop-inner-text">
                    <h3><?php echo get_the_title($trail_stop->ID); ?></h3>
                    <p><a href="<?php echo get_permalink($trail_stop->ID); ?>">This could link <i class="fa fa-angle-double-right"></i></a></p>
                  </div>
                </div>
              </div>

          <?php
          endwhile;

      else :

          // no rows found

      endif;

      ?>

    </div>




</main><!-- #main -->

<?php get_footer(); ?>
