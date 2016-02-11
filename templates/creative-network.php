<?php /*
* Template Name: Creative Network
*/
get_header(); ?>

<main id="main" class="site-main" role="main">



      <div class="row">
          <div class="filter-third filter-products-button">
            Product
          </div>
          <div class="filter-third filter-skills-button">
            Skills
          </div>
          <div class="filter-third filter-counties-button">
            Location
          </div>
      </div>

      <div class="row">
          <div class="twelve columns">
              <div class="filter filter-products">
                  <div class="x">x</div>
                  <ul>
                    <li>Painting</li>
                    <li>Drawing</li>
                    <li>Photography</li>
                    <li>Printmaking</li>
                    <li>Sculpture</li>
                    <li>Installation</li>
                    <li>Public Art</li>
                    <li>New Media & Video</li>
                    <li>Mixed Media & Collage</li>
                    <li>Ceramics</li>
                    <li>Pottery</li>
                    <li>Glass</li>
                    <li>Paper</li>
                    <li>Jewelry</li>
                    <li>Textile</li>
                    <li>Wood</li>
                    <li>Furniture</li>
                    <li>Leather</li>
                    <li>Metal</li>
                    <li>Baskets</li>
                    <li>Candles</li>
                    <li>Bath & Body</li>
                    <li>Architecture</li>
                    <li>Graphic Design</li>
                    <li>Fashion</li>
                    <li>Industrial Design</li>
                  </ul>
              </div>
              <div class="filter filter-skills">
                  <div class="x">x</div>
                  <ul>
                    <li>Painting</li>
                    <li>Drawing</li>
                    <li>Photography</li>
                    <li>Printmaking</li>
                    <li>Sculpting</li>
                    <li>Sound</li>
                    <li>Video</li>
                    <li>Animation</li>
                    <li>Installation Art Design & Production</li>
                    <li>Public Art Design & Production</li>
                    <li>Ceramics and Pottery</li>
                    <li>Jewelry-making</li>
                    <li>Papermaking & Crafting</li>
                    <li>Woodworking</li>
                    <li>Leather Crafting</li>
                    <li>Metalworking</li>
                    <li>Basketmaking</li>
                    <li>Candlemaking</li>
                    <li>Textile Design & Artistry</li>
                    <li>Glassworking & Forming</li>
                    <li>Bath & Body Product-making</li>
                    <li>Architecture</li>
                    <li>Graphic Design</li>
                    <li>Fashion Design</li>
                    <li>Industrial Design</li>
                  </ul>
              </div>
              <div class="filter filter-counties">
                  <div class="x">x</div>
                  <ul>
                      <li>Barbour</li>
                      <li>Berkeley</li>
                      <li>Boone</li>
                      <li>Braxton</li>
                      <li>Brooke</li>
                      <li>Cabell</li>
                      <li>Calhoun</li>
                      <li>Clay</li>
                      <li>Doddridge</li>
                      <li>Fayette</li>
                      <li>Gilmer</li>
                      <li>Grant</li>
                      <li>Greenbrier</li>
                      <li>Hampshire</li>
                      <li>Hancock</li>
                      <li>Hardy</li>
                      <li>Harrison</li>
                      <li>Jackson</li>
                      <li>Jefferson</li>
                      <li>Kanawha</li>
                      <li>Lewis</li>
                      <li>Lincoln</li>
                      <li>Logan</li>
                      <li>Marion</li>
                      <li>Marshall</li>
                      <li>Mason</li>
                      <li>McDowell</li>
                      <li>Mercer</li>
                      <li>Mineral</li>
                      <li>Mingo</li>
                      <li>Monongalia</li>
                      <li>Monroe</li>
                      <li>Morgan</li>
                      <li>Nicholas</li>
                      <li>Ohio</li>
                      <li>Pendleton</li>
                      <li>Pleasants</li>
                      <li>Pocahontas</li>
                      <li>Preston</li>
                      <li>Putnam</li>
                      <li>Raleigh</li>
                      <li>Randolph</li>
                      <li>Ritchie</li>
                      <li>Roane</li>
                      <li>Summers</li>
                      <li>Taylor</li>
                      <li>Tucker</li>
                      <li>Tyler</li>
                      <li>Upshur</li>
                      <li>Wayne</li>
                      <li>Webster</li>
                      <li>Wetzel</li>
                      <li>Wirt</li>
                      <li>Wood</li>
                      <li>Wyoming</li>
                  </ul>
              </div>
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
