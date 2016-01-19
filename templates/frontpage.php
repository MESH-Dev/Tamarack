<?php /*
* Template Name: Frontpage
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">
    <div class="content-half" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-1.png)">
      <div class="content-rectangle-screen">
        <div class="content-text">
          <span class="white-line"></span>
          Build your creative business
          <span class="white-line"></span>
        </div>
      </div>
    </div>
    <div class="content-half" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-2.png)">
      <div class="content-rectangle-screen">
        <div class="content-text">
          <span class="white-line"></span>
          Join our network of creatives
          <span class="white-line"></span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="content-third" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-left.png)">
      <div class="content-circle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="content-third" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-middle.png)">
      <div class="content-circle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="content-third" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-right.png)">
      <div class="content-circle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="content-fourth" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-left.png)">
      <div class="content-rectangle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="content-fourth" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-left.png)">
      <div class="content-rectangle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="content-fourth" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-left.png)">
      <div class="content-rectangle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="content-fourth" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/background-left.png)">
      <div class="content-rectangle-screen">
        <div class="content-text">
          <div class="content-text-main">
            This can be a text Call to Action right here
          </div>
          <div class="content-text-cta">
            <a href="">This could link <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

      <div class="twelve columns">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

              <h1><?php the_title(); ?></h1>

              <?php the_content(); ?>

          <?php endwhile; ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
