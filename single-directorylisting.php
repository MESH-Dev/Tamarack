<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">

    <div class="directory-single">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="three columns">
          <div class="content-container">
              <div class="directory-sidebar">
                <div class="directory-sidebar-image background-3">
                  <?php
                    $image = get_field('artist_image');
                    $thumb = $image['sizes']['directorylisting'];
                  ?>
                  <img src="<?php echo $thumb; ?>" />
                </div>
                <div class="directory-sidebar-text">
                  <?php if(get_field('website')) { ?>
                    <div class="directorylisting-business-name">
                      <a href="<?php echo get_field('website'); ?>"><?php echo get_field('business_name'); ?></a>
                    </div>
                  <?php } ?>
                  <div class="directorylisting-skills">
                    <?php
                      $str = get_field('primary_creative_practice');
                      $str = ucfirst(str_replace("-", " ", $str));
                    ?>
                    <?php echo $str; ?>
                  </div>
                  <?php if (get_field('hide_address_from_public') == "No") { ?>
                    <div class="directorylisting-address">
                      <?php echo get_field('street_address'); ?><br/>
                      <?php echo get_field('city_state_zip'); ?>
                    </div>
                  <?php } ?>
                  <?php if (get_field('county')) { ?>
                    <div class="directorylisting-county">
                      <?php echo ucfirst(get_field('county')); ?> County
                    </div>
                  <?php } ?>
                  <?php if (get_field('hide_phone_from_public') == 'No') { ?>
                    <div class="directorylisting-phone">
                      <?php echo get_field('phone'); ?>
                    </div>
                  <?php } ?>
                  <?php if (get_field('degree_or_certification')) { ?>
                  <div class="directorylisting-degree">
                    <?php echo get_field('degree_or_certification'); ?>
                  </div>
                  <?php } ?>
                  <?php if (get_the_author_meta('user_email')) { ?>
                    <div class="directorylisting-email">
                      <a href="mailto:<?php echo get_the_author_meta( 'user_email'); ?>"><?php echo get_the_author_meta( 'user_email'); ?></a>
                    </div>
                  <?php } ?>
                </div>
                <div class="directory-sidebar-social">
                  <?php if(get_field('facebook')) { ?>
                    <span>Follow: </span><a href="<?php echo get_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
                  <?php } ?>
                  <?php if(get_field('twitter')) { ?>
                    <a href="<?php echo get_field('twitter'); ?>"><i class="fa fa-twitter"></i></a>
                  <?php } ?>
                  <?php if(get_field('instagram')) { ?>
                    <a href="<?php echo get_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
                  <?php } ?>
                </div>
                <div class="directory-sidebar-categories">
                  <?php
                    foreach(get_field("creative_skills") as $c) { echo ucfirst(str_replace("-", " ", $c)); if ($c == end(get_field("creative_skills"))) {} else { echo ", "; } } ?>
                </div>
              </div>
          </div>
      </div>

      <div class="nine columns">

          <div class="content-container">
              <h2><?php echo get_the_title(); ?></h2>

              <?php the_content(); ?>

              <?php if (get_field('biography')) { ?>
                <h5>Biography</h5>
              <?php } ?>

              <p><?php echo get_field('biography'); ?></p>
          </div>

      </div>

      <?php endwhile; ?>

    </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
