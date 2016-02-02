<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="row">

    <div class="content-third" style="background-image: url('http://localhost/tamtam/wp-content/uploads/2016/01/background-2.png')">
      <div class="content-circle-screen">
        <div class="content-text ">
          <div class="content-text-main">
            Your Directory Profile
          </div>
          <div class="content-text-cta">
            <a href="http://localhost/tamtam/directory-profile/">Edit Directory Profile <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="content-third" style="background-image: url('http://localhost/tamtam/wp-content/uploads/2016/01/background-2.png')">
      <div class="content-circle-screen">
        <div class="content-text ">
          <div class="content-text-main">
            Your Marketplace Profile
          </div>
          <div class="content-text-cta">
            <a href="http://localhost/tamtam/marketplace-profile/">Edit Marketplace Profile <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="content-third" style="background-image: url('http://localhost/tamtam/wp-content/uploads/2016/01/background-2.png')">
      <div class="content-circle-screen">
        <div class="content-text ">
          <div class="content-text-main">
            Your Trail Profile
          </div>
          <div class="content-text-cta">
            <a href="http://localhost/tamtam/trail-profile/">Edit Trail Profile <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container">

      <div class="twelve columns">
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="twelve columns">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; ?>

      </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
