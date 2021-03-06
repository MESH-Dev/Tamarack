<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="filter-row">
      <div class="filter-quarter filter-business-button filter-button" data-section="filter-business">
        <span class="resource-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/business.png" /></span>
        Business
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-quarter filter-marketing-and-pr-button filter-button" data-section="filter-marketing-and-pr">
        <span class="resource-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/marketing.png" /></span>
        Marketing & PR
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-quarter filter-legal-button filter-button" data-section="filter-legal">
        <span class="resource-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/legal.png" /></span>
        Legal
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-quarter filter-finance-button filter-button" data-section="filter-finance">
        <span class="resource-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/finance.png" /></span>
        Finance
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div class="controls">
          <div class="filter-box filter-business ">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".foundation-building" id="foundation-building"></div><span class="filter-title">Foundation Building</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".business-plan" id="business-plan"></div><span class="filter-title">Business Plan</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".time-management" id="time-management"></div><span class="filter-title">Time Management</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".trade-show-markets" id="trade-show-markets"></div><span class="filter-title">Trade Show Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".fairs-and-festivals-markets" id="fairs-and-festivals-markets"></div><span class="filter-title">Fairs & Festivals Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".online-markets" id="online-markets"></div><span class="filter-title">Online Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".gallery-and-retail-shop-markets" id="gallery-and-retail-shop-markets"></div><span class="filter-title">Gallery & Retail Shop Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".artist-representatives" id="artists-representatives"></div><span class="filter-title">Artist Representatives</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".advocacy-policy-and-research" id="advocacy-policy-and-research"></div><span class="filter-title">Advocacy, Policy & Research</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".awards-and-fellowships" id="awards-and-fellowships"></div><span class="filter-title">Awards and Fellowships</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".residencies" id="residencies"></div><span class="filter-title">Residencies</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".alternative-markets" id="alternative-markets"></div><span class="filter-title">Alternative Markets</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".shipping-and-transporting-work" id="shipping-and-transporting-work"></div><span class="filter-title">Shipping & Transporting Work</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".studio-and-retail-management" id="studio-and-retail-management"></div><span class="filter-title">Studio & Retail Management</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".inventory-management" id="inventory-management"></div><span class="filter-title">Inventory Management</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".professional-development" id="professional-development"></div><span class="filter-title">Professional Development</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".other-business" id="other-business"></div><span class="filter-title">Other</span></li>
              </ul>
          </div>
          <div class="filter-box filter-marketing-and-pr  ">
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
                  <li><div class="filter-checkbox filter" data-filter=".podcasting"></div><span class="filter-title">Podcasting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".outreach-and-promotion"></div><span class="filter-title">Outreach & Promotion</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".product-presentation"></div><span class="filter-title">Product Presentation</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".other-marketing-and-pr" id="other-marketing-and-pr"></div><span class="filter-title">Other</span></li>
              </ul>
          </div>
          <div class="filter-box filter-legal  ">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".considerations"></div><span class="filter-title">Considerations</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".contracts"></div><span class="filter-title">Contracts</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".trademark-patent-and-copyright"></div><span class="filter-title">Trademark, Patent and Copyright</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".risks-and-protections"></div><span class="filter-title">Risks and Protections</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".reproduction-rights"></div><span class="filter-title">Reproduction Rights</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".estate"></div><span class="filter-title">Estate</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".other-legal" id="other-legal"></div><span class="filter-title">Other</span></li>
              </ul>
          </div>
          <div class="filter-box filter-finance  ">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".pricing"></div><span class="filter-title">Pricing</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".accounting"></div><span class="filter-title">Accounting & Taxes</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".revenue-streams"></div><span class="filter-title">Revenue Streams</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".selling-wholesale"></div><span class="filter-title">Selling Wholesale</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".selling-retail"></div><span class="filter-title">Selling Retail</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".grantwriting"></div><span class="filter-title">Grantwriting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".commissions"></div><span class="filter-title">Commissions</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".grants-and-scholarships"></div><span class="filter-title">Grants and Scholarships</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".loans"></div><span class="filter-title">Loans</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".other-finance" id="other-finance"></div><span class="filter-title">Other</span></li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div class="search-by">
          <div class="filter-bar">
            <div class="search-title">
              Currently Filtered By:
            </div>
            <div class="search-items">
            </div>
            <div class="reset-filter filter">View All <i class="fa fa-angle-double-right"></i></div>
          </div>
          <div class="search-bar">
            <input type="text" class="search-by" placeholder="Search by..." />
            <div class="search-icon"><i class="fa fa-search"></i></div>
          </div>
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

                  $randomer = rand(1, 4);
                  $resource = '';

                  if(get_sub_field('resource_type') == 'Business') {
                    $n = get_template_directory_uri() . "/img/business.png";
                    $color = "blue";
                    $arrow = "blue-arrow.png";
                    $resource = get_sub_field('resource_type_business');
                  }
                  elseif(get_sub_field('resource_type') == 'Finance') {
                    $n = get_template_directory_uri() . "/img/finance.png";
                    $color = "purple";
                    $arrow = "purple-arrow.png";
                    $resource = get_sub_field('resource_type_finance');
                  }
                  elseif(get_sub_field('resource_type') == 'Legal') {
                    $n = get_template_directory_uri() . "/img/legal.png";
                    $color = "red";
                    $arrow = "red-arrow.png";
                    $resource = get_sub_field('resource_type_legal');
                  }
                  elseif(get_sub_field('resource_type') == 'Marketing and PR') {
                    $n = get_template_directory_uri() . "/img/marketing.png";
                    $color = "dark-gray";
                    $arrow = "black-arrow.png";
                    $resource = get_sub_field('resource_type_marketing_and_pr');
                  }
                  else {

                  }

                  $resource_business = get_sub_field('resource_type_business');
                  $resource_marketing = get_sub_field('resource_type_marketing_and_pr');
                  $resource_legal = get_sub_field('resource_type_legal');
                  $resource_finance = get_sub_field('resource_type_finance');                ?>

                  <div class="content-fourth resource <?php echo $color; ?> mix <?php echo $resource; ?>">

                    <div class="resource-inner">
                      <div class="resource-type">
                        <?php echo '<img src="' . $n . '" />'; ?>
                      </div>
                      <div class="resource-title">
                        <a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('title'); ?></a>
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
    var init_filters = '.foundation-building,.business-plan,.time-management,.trade-show-markets,.fairs-and-festivals-markets,.online-markets,.gallery-and-retail-shop-markets,.artist-representatives,.advocacy-policy-and-research,.awards-and-fellowships,.residencies,.alternative-markets,.shipping-and-transporting-work,.studio-and-retail-management,.inventory-management,.professional-development,.asset-building,.strategy,.branding,.portfolio,.artist-statement,.social-media,.website,.earned-media-pr,.customer-service,.salesmanship-skills,.email-marketing,.booth-presentation,.print-materials,.advertising,.podcasting,.outreach-and-promotion,.product-presentation,.considerations,.contracts,.trademark-patent-and-copyright,.risks-and-protections,.reproduction-rights,.estate,.pricing,.accounting,.revenue-streams,.selling-wholesale,.selling-retail,.grantwriting,.commissions,.grants-and-scholarships,.loans';

    var first = true;

    var click = 0;
    $('#resources').mixItUp({
        load: {
           filter:init_filters
        },
        animation: {
          duration: 400,
          effects: 'fade scale(0.87)',
          easing: 'cubic-bezier(0.47, 0, 0.745, 0.715)'
        },
        controls: {
          //toggleFilterButtons: true,
          enable: false

        },
        callbacks: {
          onMixEnd: function(state){
            if(click == 0){
              $('.filter-checkbox').removeClass('active')
              click = click+1;
            }
          }
        }
      });


    //Update currenly selected filter string
    var active = [];

    $('.filter-checkbox').click(function() {

        // $(function() {
        //     jQuery('.resource').matchHeight({
        //         byRow: true,
        //         property: 'height',
        //         target: null,
        //         remove: false
        //     });
        // });

      //show filter bar
       $('.filter-bar').show();


      //toggle active class on checkbox
      if($(this).hasClass('active')){
        $(this).removeClass('active');
      }
      else{
        $(this).addClass('active');
      }


      var filters = [];

      var item = $(this).next("span").html();

      //get filter string
      $('.filter-checkbox.active').each(function() {
          var this_filter = $(this).attr('data-filter');
          filters.push(this_filter);
      });
      var filter_string = filters.join(",");

      //if filters are blank, show all
      if(filter_string == ""){
        filter_string = init_filters;
      }

      //trigger filter
      $('#resources').mixItUp('filter', filter_string);



      //update html filtered string
      if(jQuery.inArray(item, active) == -1 ) {
        active.push(item);
        $('.search-items').html(active.join(", "));

      } else {
        active.splice(jQuery.inArray(item, active), 1);
        $('.search-items').html(active.join(", "));
      }




    });



     //Reset Button
    $('.reset-filter, input.search-by').click(function() {
      // $('.filter-box').hide();
      // $('.filter-bar').hide();
      //$('.resource').addClass('show');
      $('.filter-checkbox').removeClass('active');
      active = [];
      $('.search-items').html("");
      first = true;
      $('#resources').mixItUp('filter', init_filters);
    });


    $(function() {
        jQuery('.resource').matchHeight({
            byRow: false,
            property: 'height',
            target: null,
            remove: false
        });
    });

    $( window ).resize(function() {
        $(function() {
            jQuery('.resource').matchHeight({
                byRow: false,
                property: 'height',
                target: null,
                remove: false
            });
        });
    });

    $(".resource-title").hover(function() {
        $p = $(this).parent();
        $p.find('.resource-link').toggleClass('hover-opacity');
    });

    $(".resource-link").hover(function() {
        $p = $(this).parent();
        $p.find('.resource-title').toggleClass('hover-opacity');
    });

    //Live Search
    $("input.search-by").keyup(function(){
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val();
        // Loop through grid items
        $("#resources .resource").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).fadeIn();
            }
        });
    });

  });
</script>

<?php get_footer(); ?>
