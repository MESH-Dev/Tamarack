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

          // check if the repeater field has rows of data
          if( have_rows('resource') ):

           	// loop through the rows of data
              while ( have_rows('resource') ) : the_row();
              ?>

                <?php

                $rand = rand(1, 4);
                if ($rand == 1) {
                  $color = "red";
                }
                elseif($rand == 2) {
                  $color = "purple";
                }
                elseif($rand == 3) {
                  $color = "blue";
                }
                elseif($rand == 4) {
                  $color = "dark-gray";
                }
                else {

                }


                ?>

                  <div class="content-fourth resource show animated fadeIn <?php echo $color; ?> mix <?php echo get_sub_field('resource_type_business'); echo get_sub_field('resource_type_marketing_and_pr'); echo get_sub_field('resource_type_legal'); echo get_sub_field('resource_type_finance'); ?>">

                    <div class="resource-inner">
                      <div class="resource-type">
                        <?php
                          echo get_sub_field('resource_type');
                        ?>
                      </div>
                      <div class="resource-title">
                        <?php
                          echo get_sub_field('title');
                        ?>
                      </div>
                      <div class="resource-description">
                        <?php
                          echo get_sub_field('description');
                        ?>
                      </div>
                      <div class="resource-link">
                        <a href="<?php echo get_sub_field('url'); ?>">
                          <?php echo get_sub_field('link_text'); ?>
                          <span class="resource-link-image">
                            <?php
                              if ($rand == 1) {
                                $arrow = "red-arrow.png";
                              }
                              elseif($rand == 2) {
                                $arrow = "purple-arrow.png";
                              }
                              elseif($rand == 3) {
                                $arrow = "blue-arrow.png";
                              }
                              elseif($rand == 4) {
                                $arrow = "black-arrow.png";
                              }
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $arrow; ?>" />
                          </span>
                        </a>
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