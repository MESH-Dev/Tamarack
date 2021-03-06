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

            <div class="content-half effect-oscar" style="background-image: url(<?php echo $thumb; ?>)">
              <div class="content-rectangle-screen">
                <div class="content-text <?php echo get_sub_field('color'); ?>">
                    <div class="content-text-title">
                        <?php if(get_sub_field('url')) { ?><a href="<?php echo get_sub_field('url'); ?>"><?php } ?>
                            <?php echo get_sub_field('title'); ?>
                        <?php if(get_sub_field('url')) { ?></a><?php } ?>
                    </div>
                    <div class="content-text-cta">
                        <?php if(get_sub_field('url')) { ?><a href="<?php echo get_sub_field('url'); ?>"><?php } ?>
                            <?php echo get_sub_field('subtitle'); ?> <i class="fa fa-angle-double-right"></i>
                        <?php if(get_sub_field('url')) { ?></a><?php } ?>
                    </div>
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

            <div class="content-third effect-circle" style="background-image: url(<?php echo $thumb; ?>)">
              <div class="content-screen content-circle-screen animated fadeIn">
                <div class="content-text <?php echo get_sub_field('color'); ?>">
                  <div class="content-text-main">
                    <a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('title'); ?></a>
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

      elseif ($type == "text_block") {

        // check for rows (sub repeater)
        if( have_rows('text_block') ):

          while( have_rows('text_block') ): the_row();

            $title = get_sub_field('title');

            if( !empty($image) ):
              $thumb = $image['sizes']['large'];
            endif;

          ?>

          <div class="content-full">
            <div class="container">
              <div class="row">
                <div class="twelve columns">
                  <h2 class="center"><?php echo get_sub_field('title'); ?></h2>
                  <div class="text-block <?php if(get_field('text_two_columns')) { ?> text-two-columns <?php } ?>">
                    <?php echo get_sub_field('content'); ?>
                  </div>
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
