<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="filter-row">
      <div class="filter-half filter-business-button filter-button">
        View All Collections
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-half filter-marketing-and-pr-button filter-button">
        View All Products
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div class="search">
          <div class="search-title">
            Current Search
          </div>
          <div class="search-items">

          </div>
          <div class="reset-filter filter">Reset filter <i class="fa fa-angle-double-right"></i></div>
          <!-- <div class="search-bar">
            <input type="text" class="search" placeholder="Search by..." />
            <div class="search-icon"><i class="fa fa-search"></i></div>
          </div> -->
        </div>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div id="collections">

          <?php
            $args = array( 'post_type' => 'collection', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

              <?php $rand = rand(1, 4); ?>

              <?php

              $c_i = get_field('collection_image');
              $c_i = $c_i['sizes']['large'];

              ?>

              <div class="content-half collection show mix animated fadeIn" style="background-image: url(<?php echo $c_i; ?>)">
                <div class="collection-inner">

                  <div class="collection-header">

                      <?php

                        $image = get_field('artist_image');

                        if( !empty($image) ):

                        	// thumbnail
                        	$size = 'thumbnail';
                        	$thumb = $image['sizes'][ $size ];
                        	?>

                          <a href="<?php echo get_permalink(); ?>">
                            <div class="directorylisting-picture">
                          		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                            </div>
                          </a>

                      <?php endif; ?>

                      <div class="directorylisting-title">
                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                      </div>

                    </div>
                  <div class="directorylisting-business-name">
                    <?php echo get_field('business_name'); ?>
                  </div>
                  <div class="directorylisting-skills">
                    <?php
                      $str = get_field('primary_creative_practice');
                      $str = ucfirst(str_replace("-", " ", $str));
                    ?>
                    <?php echo $str; ?>
                  </div>

                  <hr/>

                  <div class="directorylisting-description">
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </div>

            <?php
            endwhile; // end of the loop.
          ?>

        </div>
      </div>
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


  });
</script>

<?php get_footer(); ?>
