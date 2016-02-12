<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="row">

        <div class="content-third" style="background-image: url('http://tamarack.bkfk-t5yk.accessdomain.com/wp-content/uploads/2016/01/Placeholder-Image.png')">
          <div class="content-circle-screen">
            <div class="content-text ">
              <div class="content-text-main">
                Your Creative Network Profile
              </div>
              <div class="content-text-cta">
                <a href="http://tamarack.bkfk-t5yk.accessdomain.com/creative-network-profile/">Join the Creative Network <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="content-third" style="background-image: url('http://tamarack.bkfk-t5yk.accessdomain.com/wp-content/uploads/2016/01/Placeholder-Image.png')">
          <div class="content-circle-screen">
            <div class="content-text ">
              <div class="content-text-main">
                Your West Virginia Made Profile
              </div>
              <div class="content-text-cta">
                <a href="http://tamarack.bkfk-t5yk.accessdomain.com/west-virginia-made-profile/">Join West Virginia Made <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="content-third" style="background-image: url('http://tamarack.bkfk-t5yk.accessdomain.com/wp-content/uploads/2016/01/Placeholder-Image.png')">
          <div class="content-circle-screen">
            <div class="content-text ">
              <div class="content-text-main">
                Your Trail Profile
              </div>
              <div class="content-text-cta">
                <a href="http://tamarack.bkfk-t5yk.accessdomain.com/trail-profile/">Join a Trail <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>

    </div>

    <div class="row">
      <div class="filter-quarter filter-business-button filter-button">
        Business
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-quarter filter-marketing-and-pr-button filter-button">
        Marketing & PR
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-quarter filter-legal-button filter-button">
        Legal
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-quarter filter-finance-button filter-button">
        Finance
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <div class="filter filter-business">
                <div class="x">x</div>
                <ul>
                    <li>Foundation Building</li>
                    <li>Business Plan</li>
                    <li>Time Management</li>
                    <li>Trade Show Markets</li>
                    <li>Fairs & Festivals Markets</li>
                    <li>Online Markets</li>
                    <li>Gallery & Retail Shop Markets</li>
                    <li>Artist Representatives</li>
                    <li>Advocacy, Policy & Research</li>
                </ul>
            </div>
            <div class="filter filter-marketing-and-pr">
                <div class="x">x</div>
                <ul>
                    <li>Asset Building</li>
                    <li>Strategy</li>
                    <li>Branding</li>
                    <li>Portfolio</li>
                    <li>Artist Statement</li>
                    <li>Social Media</li>
                    <li>Website</li>
                    <li>Earned Media / PR</li>
                    <li>Customer Service</li>
                    <li>Salesmanship Skills</li>
                    <li>Email Marketing</li>
                    <li>Booth Presentation</li>
                    <li>Print Materials</li>
                    <li>Advertising</li>
                </ul>
            </div>
            <div class="filter filter-legal">
                <div class="x">x</div>
                <ul>
                    <li>Considerations</li>
                    <li>Contracts</li>
                    <li>Trademark, Patent and Copyright</li>
                </ul>
            </div>
            <div class="filter filter-finance">
                <div class="x">x</div>
                <ul>
                    <li>Pricing</li>
                    <li>Accounting</li>
                    <li>Revenue Streams</li>
                    <li>Selling Wholesale</li>
                    <li>Selling Retail</li>
                    <li>Grantwriting</li>
                    <li>Commissions</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">

      <div class="twelve columns">

          <div class="resources">

              <?php

              // check if the repeater field has rows of data
              if( have_rows('resource') ):

               	// loop through the rows of data
                  while ( have_rows('resource') ) : the_row();
                  ?>

                      <div class="content-fourth">
                          <?php

                          echo get_sub_field('resource_type');
                          echo "<br/>";
                          echo get_sub_field('title');
                          echo "<br/>";
                          echo get_sub_field('description');
                          echo "<br/>";
                          echo get_sub_field('link_text');
                          echo "<br/>";
                          echo get_sub_field('link');

                          ?>
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

  <script>
    $(document).ready(function(){
      $('#sidebar').css('position', 'fixed');
      console.log('at least');
    });
  </script>

</main><!-- #main -->

<?php get_footer(); ?>
