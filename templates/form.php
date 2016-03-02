<?php /*
* Template Name: Form
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div id="slidebar">
    <ul>

      <?php

        if( have_rows('form_section') ):

          $i = 0;

          while ( have_rows('form_section') ) : the_row();

            echo "<li class='sidebar-item sidebar-" . $i . "'><a class='sidebar-menu-item' href='#" . $i . "'>" . get_sub_field('form_section_title') . "</a></li>";

            $i++;

          endwhile;
        else :

        endif;

      ?>

    </ul>
  </div>

  <div class="container">

      <div class="ten columns offset-by-one">
          <div class="content-full">

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

  </div>

  <script>
    $(document).ready(function(){
      $('#slidebar').css('position', 'fixed');
      console.log('at least');
    });
  </script>

</main><!-- #main -->

<?php get_footer(); ?>
