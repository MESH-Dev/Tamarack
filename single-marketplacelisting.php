<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="frame crazy" id="crazy">
			<ul class="clearfix">

        <?php

          $product_image_1 = get_field('product_image_1');
          $product_image_2 = get_field('product_image_2');
          $product_image_3 = get_field('product_image_3');
          $product_image_4 = get_field('product_image_4');
          $product_image_5 = get_field('product_image_5');

          $thumb_1 = $product_image_1['sizes']['large'];
          $thumb_2 = $product_image_2['sizes']['large'];
          $thumb_3 = $product_image_3['sizes']['large'];
          $thumb_4 = $product_image_4['sizes']['large'];
          $thumb_5 = $product_image_5['sizes']['large'];

        ?>

				<li><img src="<?php echo $thumb_1; ?>" /></li>
        <li><img src="<?php echo $thumb_2; ?>" /></li>
        <li><img src="<?php echo $thumb_3; ?>" /></li>
        <li><img src="<?php echo $thumb_4; ?>" /></li>
        <li><img src="<?php echo $thumb_5; ?>" /></li>
			</ul>
		</div>


    <div id="marketplace-single">

      <div class="container">
        <div class="row">
          <div class="nine columns">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>

            <?php endwhile; ?>
          </div>
          <div class="three columns">

            <div class="marketplace-sidebar">
              <p>25 Normal St. Belvedere, WV 11283-2553</p>
              <p>555-555-5555<br/><a href="">My Website</a></p>
              <div class="marketplace-sidebar-social">
                Twitter, Facebook, Instagram
              </div>
              <div class="marketplace-sidebar-image">
                <?php echo get_field('artist_image'); ?>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <div class="marketplace-press">
      <div class="press-third press-1">
        <div class="press-tag">Notable Press</div>
        <div class="press-quote">
          "Wow, some really notable press quotes can be styled this way."
        </div>
        <div class="press-cta">
          <a href="">Read more <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="press-third press-2">
        <div class="press-tag">Notable Press</div>
        <div class="press-quote">
          "Wow, some really notable press quotes can be styled this way."
        </div>
        <div class="press-cta">
          <a href="">Read more <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="press-third press-3">
        <div class="press-tag">Notable Press</div>
        <div class="press-quote">
          "Wow, some really notable press quotes can be styled this way."
        </div>
        <div class="press-cta">
          <a href="">Read more <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/sly.min.js"></script>

    <script type="text/javascript">

    var options = {
      horizontal: 1,
      itemNav: 'basic',
      speed: 300,
      mouseDragging: 1,
      touchDragging: 1
    };
    var frame = new Sly('#crazy', options).init();

    </script>


</main><!-- #main -->

<?php get_footer(); ?>
