<?php /*
* Template Name: Frontpage
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <?php

    // check if the repeater field has rows of data
    if( have_rows('content_block_section') ):
     	// loop through the rows of data
        while ( have_rows('content_block_section') ) : the_row();

          $type = get_sub_field('block_section_type');

          if ($type == "half_width") {

            // check for rows (sub repeater)
            if( have_rows('half_width') ):

              while( have_rows('half_width') ): the_row();

                $image = get_sub_field('background_image');

                if( !empty($image) ):
                	$thumb = $image['sizes']['large'];
                endif;

              ?>

                <div class="content-half" style="background-image: url(<?php echo $thumb; ?>)">
                  <div class="content-rectangle-screen">
                    <div class="content-text <?php echo get_sub_field('color'); ?>">
                      <span class="white-line"></span>
                        <?php echo get_sub_field('title'); ?>
                      <span class="white-line"></span>
                    </div>
                  </div>
                </div>

              <?php endwhile;

            endif;

          }

          elseif ($type == "third_width") {

            // check for rows (sub repeater)
            if( have_rows('third_width') ):

              while( have_rows('third_width') ): the_row();

                $image = get_sub_field('background_image');

                if( !empty($image) ):
                	$thumb = $image['sizes']['large'];
                endif;

              ?>

                <div class="content-third" style="background-image: url(<?php echo $thumb; ?>)">
                  <div class="content-circle-screen">
                    <div class="content-text <?php echo get_sub_field('color'); ?>">
                      <div class="content-text-main">
                        <?php echo get_sub_field('title'); ?>
                      </div>
                      <div class="content-text-cta">
                        <a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('link_text'); ?> <i class="fa fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile;

            endif;

          }

          elseif ($type == "fourth_width") {

            // check for rows (sub repeater)
            if( have_rows('fourth_width') ):

              while( have_rows('fourth_width') ): the_row();

                $image = get_sub_field('background_image');

                if( !empty($image) ):
                	$thumb = $image['sizes']['large'];
                endif;

              ?>

                <div class="content-fourth" style="background-image: url(<?php echo $thumb; ?>)">
                  <div class="content-rectangle-screen">
                    <div class="content-text <?php echo get_sub_field('color'); ?>">
                      <div class="content-text-main">
                        <?php echo get_sub_field('title'); ?>
                      </div>
                      <div class="content-text-cta">
                        <a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('link_text') ?> <i class="fa fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile;

            endif;

          }

        endwhile;

    else :

        // no rows found

    endif;

    ?>

  </div>

  <div class="container">

      <div class="twelve columns">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
