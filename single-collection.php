<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="collection-single">
      <div class="container">
        <div class="ten columns offset-by-one">
          <div class="collection-intro">
            <?php echo get_field('intro'); ?>
          </div>
        </div>
      </div>
    </div>

    <div id="collections">

      <?php

      // check if the repeater field has rows of data
      if( have_rows('businesses') ):

       	// loop through the rows of data
          while ( have_rows('businesses') ) : the_row();
          ?>

            <?php

            $business = get_sub_field('business');
            $image = get_field('product_image_1', $business->ID);
            $thumb = $image['sizes']['large'];

            ?>

              <div class="content-fourth collection">
                <div class="collection-inner" style="background-image: url(<?php echo $thumb; ?>); background-size: cover;">
                  <div class="collection-inner-text">
                    <h3><?php echo get_the_title($business->ID); ?></h3>
                    <p><a href="<?php echo get_permalink($business->ID); ?>">This could link <i class="fa fa-angle-double-right"></i></a></p>
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
