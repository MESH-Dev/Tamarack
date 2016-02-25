<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="filter-row">
    <div class="filter-half filter-product-button filter-button">
      Collections
      <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
    </div>
    <div class="filter-half filter-skills-button filter-button">
      Businesses
      <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
    </div>
  </div>

  <div id="marketplace">

    <?php
      $args = array( 'post_type' => 'marketplacelisting', 'posts_per_page' => -1 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <?php

          $image = get_field('product_image_1');
          $thumb = $image['sizes']['large'];

          ?>

            <div class="content-fourth collection">
              <div class="collection-inner" style="background-image: url(<?php echo $thumb; ?>); background-size: cover;">
                <div class="collection-inner-text">
                  <h3><?php echo get_the_title(); ?></h3>
                  <p><a href="<?php echo get_permalink(); ?>">This could link <i class="fa fa-angle-double-right"></i></a></p>
                </div>
              </div>
            </div>

        <?php
        endwhile;
    ?>

  </div>

</main><!-- #main -->

<script>
  $(document).ready(function(){
    $('#sidebar').css('position', 'fixed');

    var first = true;

    $('#resources').mixItUp({
      load: {
        filter: ''
      },
      animation: {
        enable: false
      },
      controls: {
        toggleFilterButtons: true
      },
      callbacks: {
        onMixEnd: function(state){

        }
      }
    });

    $('.reset-filter').click(function() {
      $('.resource').addClass('show');
      $('.filter-checkbox').removeClass('active');
      active = [];
      $('.search-items').html("");
      first = true;
      $('#resources').mixItUp('destroy', true);
      $('#resources').mixItUp({
        load: {
          filter: ''
        },
        animation: {
          enable: false
        },
        controls: {
          toggleFilterButtons: true
        },
        callbacks: {
          onMixEnd: function(state){

          }
        }
      });
    });

    var active = [];
    $('.filter-checkbox').click(function() {

      if (first == true) {
        $('.resource').removeClass('show');
        first = false;
      }


      var item = $(this).next("span").html();
      if(jQuery.inArray(item, active) == -1 ) {
        active.push(item);
        $('.search-items').html(active.join(", "));
      } else {
        active.splice(jQuery.inArray(item, active), 1);
        $('.search-items').html(active.join(", "));
      }

    });

    var divWidth = jQuery('.content-fourth').width();
    jQuery('.content-fourth').height(divWidth);

    jQuery(window).resize(function() {
      var divWidth = jQuery('.content-fourth').width();
      jQuery('.content-fourth').height(divWidth);
    });


  });
</script>

<?php get_footer(); ?>
