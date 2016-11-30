<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php

      $product_image_1 = get_field('product_image_1');
      $product_image_2 = get_field('product_image_2');
      $product_image_3 = get_field('product_image_3');
      $product_image_4 = get_field('product_image_4');
      $product_image_5 = get_field('product_image_5');
      $product_image_6 = get_field('product_image_6');
      $product_image_7 = get_field('product_image_7');
      $product_image_8 = get_field('product_image_8');
      $product_image_9 = get_field('product_image_9');

    ?>

    <?php if ($product_image_1 or $product_image_2 or $product_image_3 or $product_image_4 or $product_image_5 or $product_image_6 or $product_image_7 or $product_image_8 or $product_image_9) { ?>

        <div class="frame crazy" id="crazy">
    		<ul class="clearfix">
    			<?php if ($product_image_1) { ?><li><img src="<?php echo $product_image_1['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_2) { ?><li><img src="<?php echo $product_image_2['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_3) { ?><li><img src="<?php echo $product_image_3['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_4) { ?><li><img src="<?php echo $product_image_4['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_5) { ?><li><img src="<?php echo $product_image_5['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_6) { ?><li><img src="<?php echo $product_image_6['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_7) { ?><li><img src="<?php echo $product_image_7['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_8) { ?><li><img src="<?php echo $product_image_8['sizes']['large']; ?>" /></li><?php } ?>
                <?php if ($product_image_9) { ?><li><img src="<?php echo $product_image_9['sizes']['large']; ?>" /></li><?php } ?>
    		</ul>

        <?php if ($product_image_1 && $product_image_2){ ?>
            <div class="prevPage"><i class="fa fa-angle-left"></i></div>
            <div class="nextPage"><i class="fa fa-angle-right"></i></div>
        <?php } ?>
    	</div>

    <?php } ?>


    <div id="marketplace-single">

      <div class="container">
        <div class="row">
          <div class="nine columns">
            <div class="marketplace-main">
              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                  <?php $title = get_the_title(); ?>

                  <h2><?php the_title(); ?></h2>

                  <?php the_content(); ?>

              <?php endwhile; ?>

              <?php

              if (get_field('video')) { ?>
                  <div class="marketplace-video">
                      <?php the_field('video'); ?>
                  </div>
              <?php }

              ?>

              <?php if (get_field('web_address')) { ?>
                <a href="<?php echo get_field('web_address'); ?>">
                  <div class="marketplace-button background-1">
                    Shop <?php echo get_the_title(); ?>
                  </div>
                </a>
              <?php } ?>

              <div class="marketplace-section">
                <?php if (get_field('section_title')) { ?>
                    <div class="marketplace-section-title"><?php echo get_field('section_title'); ?></div>
                <?php } ?>
                <div class="marketplace-section-content">
                 <?php if (get_field('about_your_creative_process')) { ?>
                  <div class="marketplace-content-half">
                    <div class="marketplace-content-title">
                      Creative Process
                    </div>
                    <hr>
                    <div class="marketplace-content-body">
                      <?php echo get_field('about_your_creative_process'); ?>
                    </div>
                  </div>
                 <?php } ?>
                 <?php if (get_field('sets_your_business_apart')) { ?>
                  <div class="marketplace-content-half">
                    <div class="marketplace-content-title">
                      My Business
                    </div>
                    <hr>
                    <div class="marketplace-content-body">
                      <?php echo get_field('sets_your_business_apart'); ?>
                    </div>
                  </div>
                 <?php } ?>
                 <?php if (get_field('honors_or_awards')) { ?>
                  <div class="marketplace-content-half">
                    <div class="marketplace-content-title">
                      Honors and Awards
                    </div>
                    <hr>
                    <div class="marketplace-content-body">
                      <?php echo get_field('honors_or_awards'); ?>
                    </div>
                  </div>
                 <?php } ?>
                 <?php if (get_field('work_inspiration')) { ?>
                  <div class="marketplace-content-half">
                    <div class="marketplace-content-title">
                      Inspirations
                    </div>
                    <hr>
                    <div class="marketplace-content-body">
                      <?php echo get_field('work_inspiration'); ?>
                    </div>
                  </div>
                 <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="three columns">

            <div class="marketplace-sidebar">
              <?php
                //get_the_author_id() is depreciated, changed to the below
                $author_id = get_the_author_meta('ID');
                $current_id = get_the_id();

                $args = array( 'post_type' => 'directorylisting', 'posts_per_page' => 1, 'author' => $author_id );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>

                  <div class="marketplace-sidebar-address">
                    <?php echo get_field('street_address', get_the_id()); ?>
                  </div>
                  <div class="marketplace-sidebar-location">
                    <?php echo get_field('city_state_zip', get_the_id()); ?>
                  </div>

                  <div class="marketplace-sidebar-phone">
                    <?php echo get_field('phone', get_the_id()); ?>
                  </div>
                  <div class="marketplace-sidebar-website">
                    <a href="<?php echo get_field('website', get_the_id()); ?>"><?php echo $title; ?></a>
                  </div>
                  <div class="marketplace-sidebar-social">
                    <span>Follow:</span>
                    <?php if(get_field('facebook', get_the_id())) { ?>
                      <a href="<?php echo get_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
                    <?php } ?>
                    <?php if(get_field('twitter', get_the_id())) { ?>
                      <a href="<?php echo get_field('twitter'); ?>"><i class="fa fa-twitter"></i></a>
                    <?php } ?>
                    <?php if(get_field('instagram', get_the_id())) { ?>
                      <a href="<?php echo get_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
                    <?php } ?>
                  </div>

                  <div class="marketplace-sidebar-image">
                    <?php

                    $image = get_field('artist_image', get_the_id());
                    $thumb = $image['sizes']['directorylisting'];

                    ?>

                    <img src="<?php echo $thumb; ?>" />
                  </div>

                <?php
                endwhile; wp_reset_postdata();
              ?>
            </div>

          </div>
        </div>
      </div>

    </div>

    <div class="marketplace-press">
      <div class="press-third press-1">
        <?php 
          $current_id = get_the_id();
          $fq_1 = get_field('favorite_quote_1');
          $fq_1_link = get_field('link_1');
          $fq_2 = get_field('favorite_quote_2');
          $fq_2_link = get_field('link_2');
          $fq_3 = get_field('favorite_quote_3');
          $fq_3_link = get_field('link_2');
        ?>
        <?php if ($fq_1) { ?>
            <div class="press-tag">Notable Press</div>
            <div class="press-quote"> 
              "<?php echo $fq_1; ?>"
            </div>
            <div class="press-cta">
              <a href="<?php echo $fq_1_link; ?>">Read more <i class="fa fa-angle-double-right"></i></a>
            </div>
        <?php } ?>
      </div>
      <div class="press-third press-2">
        <?php if ($fq_2) { ?>
            <div class="press-tag">Notable Press</div>
            <div class="press-quote">
              "<?php echo $fq_2 ?>"
            </div>
            <div class="press-cta">
              <a href="<?php echo $fq_2_link; ?>">Read more <i class="fa fa-angle-double-right"></i></a>
            </div>
        <?php } ?>
      </div>
      <div class="press-third press-3">
        <?php if ($fq_3) { ?>
            <div class="press-tag">Notable Press</div>
            <div class="press-quote">
              "<?php echo $fq_3; ?>"
            </div>
            <div class="press-cta">
              <a href="<?php echo $fq_3_link; ?>">Read more <i class="fa fa-angle-double-right"></i></a>
            </div>
        <?php } ?>
      </div>
    </div>



    <script src="<?php echo get_template_directory_uri(); ?>/js/sly.min.js"></script>

    <script type="text/javascript">
    $('.crazy').imagesLoaded(function(){
    var options = {
      horizontal: 1,
      itemNav: 'basic',
      speed: 300,
      mouseDragging: 1,
      touchDragging: 1,
      nextPage: $('.nextPage'),
      prevPage: $('.prevPage')
    };
    var frame = new Sly('#crazy', options).init(

       $('.crazy ul li').each(function(){
    var img_width = $(this).find('img').width();
    $(this).width(img_width);
     })

      );
    });

    $(function() {
        jQuery('.marketplace-content-half').matchHeight({
            byRow: false,
            property: 'height',
            target: null,
            remove: false
        });
    });

    $( window ).resize(function() {
        $(function() {
            jQuery('.marketplace-content-half').matchHeight({
                byRow: false,
                property: 'height',
                target: null,
                remove: false
            });
        });
    });

    </script>


</main><!-- #main -->

<?php get_footer(); ?>
