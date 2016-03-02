<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="filter-row">
    <div class="filter-half filter-collections-button filter-button">
      View All Collections
      <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
    </div>
    <div class="filter-half filter-businesses-button filter-button">
      View All Businesses
      <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
    </div>
  </div>

  <div class="filter-row">
    <div class="twelve columns">
      <div class="controls">
        <div class="filter-box filter-collections">
            <div class="x">x</div>
            <p>Collections coming soon!</p>
        </div>
        <div class="filter-box filter-businesses">
            <div class="filter-inner">


                <div class="filter-inner-right">
                    <div class="filter-row">
                        <div class="filter-inner-button filter-inner-right-half" data-section="filter-product">
                            Sort by product
                            <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
                        </div>
                        <div class="filter-inner-button filter-inner-right-half" data-section="filter-location">
                            Sort by location
                            <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
                        </div>
                    </div>
                </div>

                <div class="filter-row">
                    <div class="twelve columns">
                      <div class="filters">
                        <div class="filter-inner-box filter-product animated fadeIn">
                            <div class="x">x</div>
                                <ul>
                                    <li><div class="filter-checkbox filter" data-filter=".painting"></div><span class="filter-title">Painting</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".drawing"></div><span class="filter-title">Drawing</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".photography"></div><span class="filter-title">Photography</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".printmaking"></div><span class="filter-title">Printmaking</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".sculpture"></div><span class="filter-title">Sculpture</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".installation"></div><span class="filter-title">Installation</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".public-art"></div><span class="filter-title">Public Art</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".new-media-and-video"></div><span class="filter-title">New Media & Video</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".mixed-media-and-collage"></div><span class="filter-title">Mixed Media & Collage</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".ceramics"></div><span class="filter-title">Ceramics</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".pottery"></div><span class="filter-title">Pottery</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".glass"></div><span class="filter-title">Glass</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".paper"></div><span class="filter-title">Paper</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".jewelry"></div><span class="filter-title">Jewelry</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".textile"></div><span class="filter-title">Textile</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".wood"></div><span class="filter-title">Wood</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".furniture"></div><span class="filter-title">Furniture</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".leather"></div><span class="filter-title">Leather</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".metal"></div><span class="filter-title">Metal</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".baskets"></div><span class="filter-title">Baskets</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".candles"></div><span class="filter-title">Candles</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".bath-and-body"></div><span class="filter-title">Bath & Body</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".architecture"></div><span class="filter-title">Architecture</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".graphic-design"></div><span class="filter-title">Graphic Design</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".fashion"></div><span class="filter-title">Fashion</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".industrial-design"></div><span class="filter-title">Industrial Design</span></li>
                                </ul>
                            </div>
                            <div class="filter-inner-box filter-location animated fadeIn">
                                <div class="x">x</div>
                                <ul>
                                    <li><div class="filter-checkbox filter" data-filter=".barbour"></div><span class="filter-title">Barbour</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".berkeley"></div><span class="filter-title">Berkeley</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".boone"></div><span class="filter-title">Boone</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".braxton"></div><span class="filter-title">Braxton</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".brooke"></div><span class="filter-title">Brooke</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".cabell"></div><span class="filter-title">Cabell</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".calhoun"></div><span class="filter-title">Calhoun</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".clay"></div><span class="filter-title">Clay</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".doddridge"></div><span class="filter-title">Doddridge</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".fayette"></div><span class="filter-title">Fayette</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".gilmer"></div><span class="filter-title">Gilmer</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".grant"></div><span class="filter-title">Grant</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".greenbrier"></div><span class="filter-title">Greenbrier</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".hampshire"></div><span class="filter-title">Hampshire</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".hancock"></div><span class="filter-title">Hancock</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".hardy"></div><span class="filter-title">Hardy</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".harrison"></div><span class="filter-title">Harrison</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".jackson"></div><span class="filter-title">Jackson</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".jefferson"></div><span class="filter-title">Jefferson</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".kanawha"></div><span class="filter-title">Kanawha</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".lewis"></div><span class="filter-title">Lewis</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".lincoln"></div><span class="filter-title">Logan</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".marion"></div><span class="filter-title">Marion</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".marshall"></div><span class="filter-title">Marshall</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".mcdowell"></div><span class="filter-title">McDowell</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".mercer"></div><span class="filter-title">Mercer</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".mineral"></div><span class="filter-title">Mineral</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".mingo"></div><span class="filter-title">Mingo</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".monongalia"></div><span class="filter-title">Monongalia</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".monroe"></div><span class="filter-title">Monroe</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".morgan"></div><span class="filter-title">Morgan</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".nicholas"></div><span class="filter-title">Nicholas</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".ohio"></div><span class="filter-title">Ohio</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".pendleton"></div><span class="filter-title">Pendleton</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".pleasants"></div><span class="filter-title">Pleasants</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".pocahontas"></div><span class="filter-title">Pocahontas</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".preston"></div><span class="filter-title">Preston</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".putnam"></div><span class="filter-title">Putnam</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".raleigh"></div><span class="filter-title">Raleigh</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".randolph"></div><span class="filter-title">Randolph</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".ritchie"></div><span class="filter-title">Ritchie</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".roane"></div><span class="filter-title">Roane</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".summers"></div><span class="filter-title">Summers</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".taylor"></div><span class="filter-title">Taylor</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".tucker"></div><span class="filter-title">Tucker</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".tyler"></div><span class="filter-title">Tyler</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".upshur"></div><span class="filter-title">Upshur</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".wayne"></div><span class="filter-title">Wayne</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".webster"></div><span class="filter-title">Webster</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".wetzel"></div><span class="filter-title">Wetzel</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".wirt"></div><span class="filter-title">Wirt</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".wood"></div><span class="filter-title">Wood</span></li>
                                    <li><div class="filter-checkbox filter" data-filter=".wyoming"></div><span class="filter-title">Wyoming</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <div class="filter-row">
    <div class="twelve columns">
      <div class="search">
        <div class="filter-bar">
          <div class="search-title">
            Current Search
          </div>
          <div class="search-items">
          </div>
          <div class="reset-filter filter">View All <i class="fa fa-angle-double-right"></i></div>
        </div>
        <div class="search-bar">
          <input type="text" class="search white-bg" placeholder="Search by business name" />
          <div class="search-icon"><i class="fa fa-search"></i></div>
        </div>
      </div>
    </div>
  </div>



  <div id="marketplace">

    <?php
      $args = array( 'post_type' => 'marketplacelisting', 'posts_per_page' => 12 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <?php

          $image = get_field('product_image_1');
          $thumb = $image['sizes']['large'];

          ?>

          <?php
            $author_id = get_the_author_id();
            $current_id = get_the_id();

            $inner_args = array( 'post_type' => 'directorylisting', 'posts_per_page' => 1, 'author' => $author_id );
            $inner_loop = new WP_Query( $inner_args );
            while ( $inner_loop->have_posts() ) : $inner_loop->the_post(); ?>

                <div class="content-fourth marketplace-collection <?php echo get_field('primary_creative_practice', get_the_id()); ?> <?php foreach(get_field("creative_skills", get_the_id()) as $c) { echo $c . " "; } ?>">
                  <div class="marketplace-collection-inner" style="background-image: url(<?php echo $thumb; ?>); background-size: cover;">
                    <div class="marketplace-collection-inner-text">
                      <h3><?php echo get_the_title($current_id); ?></h3>
                      <p><a href="<?php echo get_permalink($current_id); ?>">This could link <i class="fa fa-angle-double-right"></i></a></p>
                    </div>
                  </div>
                </div>

            <?php
            endwhile;
          ?>

        <?php
        endwhile;
    ?>

    <div class="content-full">
        <div class="more-button">
            View More Businesses
        </div>
    </div>

  </div>

</main><!-- #main -->

<script>
  $(document).ready(function(){

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

    // Resource Library Filter Toggles
    $(".filter-inner-button").click(function() {

      var section = $(this).attr('data-section');
      section = "."+section;
      //console.log(section);
      $(".filter-inner-box").hide();
      $(".filter-inner-button").removeClass('white-bg');

      $(section).fadeIn('400');
      $(this).addClass('white-bg');
      $(section).addClass('white-bg');
    });


    $('.reset-filter').click(function() {

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
