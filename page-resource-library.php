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
      <div class="filter-quarter">
        Business
      </div>
      <div class="filter-quarter">
        Marketing & PR
      </div>
      <div class="filter-quarter">
        Legal
      </div>
      <div class="filter-quarter">
        Finance
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">

      </div>
    </div>

    <div class="row">

      <div class="twelve columns">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <?php

            // check if the repeater field has rows of data
            if( have_rows('form_section') ):

              $i = 0;

            // loop through the rows of data
              while ( have_rows('form_section') ) : the_row();

                  // display a sub field value
                  echo "<div id='" . $i . "' class='form-section'>";
                  echo "<h2>" . get_sub_field('form_section_title') . "</h2>";
                  echo "<p>" . get_sub_field('form_section_content') . "</p>";
                  echo "</div>";

                  $i++;

              endwhile;

            else :

              // no rows found

            endif;

            ?>

          <?php endwhile; ?>

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
