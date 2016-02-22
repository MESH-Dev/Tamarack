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
        <div class="controls">
          <div class="filter-box filter-business animated fadeIn">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".foundation-building" id="foundation-building"></div><span class="filter-title">Foundation Building</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".business-plan" id="business-plan"></div><span class="filter-title">Business Plan</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".time-management" id="time-management"></div><span class="filter-title">Time Management</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".trade-show-markets" id="trade-show-markets"></div><span class="filter-title">Trade Show Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".fairs-and-festivals-markets" id="fairs-and-festivals-markets"></div><span class="filter-title">Fairs & Festivals Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".online-markets" id="online-markets"></div><span class="filter-title">Online Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".gallery-and-retail-shop-markets" id="gallery-and-retail-shop-markets"></div><span class="filter-title">Gallery & Retail Shop Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".artists-representatives" id="artists-representatives"></div><span class="filter-title">Artist Representatives</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".advocacy-policy-and-research" id="advocacy-policy-and-research"></div><span class="filter-title">Advocacy, Policy & Research</span></li>
              </ul>
          </div>
          <div class="filter-box filter-marketing-and-pr animated fadeIn">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".asset-building"></div><span class="filter-title">Asset Building</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".strategy"></div><span class="filter-title">Strategy</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".branding"></div><span class="filter-title">Branding</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".portfolio"></div><span class="filter-title">Portfolio</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".artist-statement"></div><span class="filter-title">Artist Statement</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".social-media"></div><span class="filter-title">Social Media</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".website"></div><span class="filter-title">Website</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".earned-media-pr"></div><span class="filter-title">Earned Media / PR</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".customer-service"></div><span class="filter-title">Customer Service</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".salesmanship-skills"></div><span class="filter-title">Salesmanship Skills</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".email-marketing"></div><span class="filter-title">Email Marketing</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".booth-presentation"></div><span class="filter-title">Booth Presentation</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".print-materials"></div><span class="filter-title">Print Materials</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".advertising"></div><span class="filter-title">Advertising</span></li>
              </ul>
          </div>
          <div class="filter-box filter-legal animated fadeIn">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".considerations"></div><span class="filter-title">Considerations</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".contracts"></div><span class="filter-title">Contracts</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".trademark-patent-and-copyright"></div><span class="filter-title">Trademark, Patent and Copyright</span></li>
              </ul>
          </div>
          <div class="filter-box filter-finance animated fadeIn">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".pricing"></div><span class="filter-title">Pricing</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".accounting"></div><span class="filter-title">Accounting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".revenue-streams"></div><span class="filter-title">Revenue Streams</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".selling-wholesale"></div><span class="filter-title">Selling Wholesale</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".selling-retail"></div><span class="filter-title">Selling Retail</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".grantwriting"></div><span class="filter-title">Grantwriting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".commissions"></div><span class="filter-title">Commissions</span></li>
              </ul>
          </div>
        </div>
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
        <div id="resources">

          <?php
            $args = array( 'post_type' => 'marketplacelisting', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

              <?php $rand = rand(1, 4); ?>

              <div class="content-fourth directorylisting show mix animated fadeIn <?php echo get_field('county'); ?> <?php echo get_field('primary_creative_practice'); ?> <?php foreach(get_field("creative_skills") as $c) { echo $c . " "; } ?>">
                <div class="directorylisting-inner background-<?php echo $rand; ?>">

                  <div class="directorylisting-header">

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
