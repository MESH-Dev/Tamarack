<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">

    <div class="directory-single">

      <div class="three columns">

        <div class="directory-sidebar">
          <div class="directory-sidebar-image background-3">
            <?php
              $image = get_field('artist_image');
              $thumb = $image['sizes']['directorylisting'];
            ?>
            <img src="<?php echo $thumb; ?>" />
          </div>
          <div class="directory-sidebar-text">
            <div class="directorylisting-business-name">
              <?php echo get_field('business_name'); ?>
            </div>
            <div class="directorylisting-skills">
              <?php echo get_field('primary_creative_practice'); ?>
            </div>
            <div class="directorylisting-address">
              <?php echo get_field('street_address'); ?><br/>
              <?php echo get_field('city_state_zip'); ?>
            </div>
            <div class="directorylisting-phone">
              <?php echo get_field('phone'); ?>
            </div>
            <div class="directorylisting-degree">
              <?php echo get_field('degree_or_certification'); ?>
            </div>
            <div class="directorylisting-website">
              <a href="<?php echo get_field('website'); ?>">My Website</a>
            </div>
          </div>
          <div class="directory-sidebar-social">
            <?php if(get_field('facebook')) { ?>
              <a href="<?php echo get_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
            <?php } ?>
            <?php if(get_field('twitter')) { ?>
              <a href="<?php echo get_field('twitter'); ?>"><i class="fa fa-twitter"></i></a>
            <?php } ?>
            <?php if(get_field('instagram')) { ?>
              <a href="<?php echo get_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
            <?php } ?>
          </div>
          <div class="directory-sidebar-categories">
            <?php foreach(get_field("creative_skills") as $c) { echo $c; if ($c == end(get_field("creative_skills"))) {} else { echo ", "; } } ?>
          </div>
        </div>

      </div>

      <div class="nine columns">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2><?php echo get_the_title(); ?></h2>

            <?php the_content(); ?>

            <p><?php echo get_field('biography'); ?></p>

        <?php endwhile; ?>

      </div>

    </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
