<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">

    <div class="directory-single">

      <div class="three columns">

        <div class="directory-sidebar">
          <div class="directory-sidebar-image">
            <img src="" />
          </div>
          <div class="directory-sidebar-text">
            <p>Business Name here</p>
            <p>medium, multiple mediums</p>
            <p>25 Normal St. Belvedere, WV 12345-1234</p>
            <p>555-555-5555</p>
            <p>test@test.com</p>
            <p>Master of Studio Art</p>
            <p><a href="">My Website</a></p>
          </div>
          <div class="directory-sidebar-social">
            Facebook, Twitter, Instagram
          </div>
          <div class="directory-sidebar-categories">
            <p>Categories, Tags, Categories, Tags, Categories, Tags, Categories, Tags</p>
          </div>
        </div>

      </div>

      <div class="nine columns">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2>Test Testerson</h2>

            <p>Praesent adipiscing. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Sed aliquam ultrices mauris. Fusce vel dui. Praesent adipiscing. Phasellus accumsan cursus velit. Aenean ut eros et nisl sagittis vestibulum. Aenean vulputate eleifend tellus. Praesent blandit laoreet nibh. Phasellus tempus. Praesent adipiscing. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Sed aliquam ultrices mauris. Fusce vel dui. Praesent adipiscing. Phasellus accumsan cursus velit. Aenean ut eros et nisl sagittis vestibulum. Aenean vulputate eleifend tellus. Praesent blandit laoreet nibh. Phasellus tempus.</p>

            <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent adipiscing. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Sed aliquam ultrices mauris. Fusce vel dui. Praesent adipiscing. Phasellus accumsan cursus velit. Aenean ut eros et nisl sagittis vestibulum. Aenean vulputate eleifend tellus. Praesent blandit laoreet nibh. Phasellus tempus.</p>

        <?php endwhile; ?>

      </div>

    </div>

  </div>

</main><!-- #main -->

<?php get_footer(); ?>
