<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="filter-row">
      <div class="filter-third filter-product-button filter-button" data-section="filter-product">
        Product
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-third filter-skills-button filter-button" data-section="filter-skills">
        Skills
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
      <div class="filter-third filter-location-button filter-button" data-section="filter-location">
        Location
        <span class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-dark.png" /></span>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div class="filters">
          <div class="filter-box filter-product animated fadeIn">
              <div class="x">x</div>
              <ul>
                <li><div class="filter-checkbox filter" data-filter=".architecture"></div><span class="filter-title">Architecture</span></li>
                <li><div class="filter-checkbox filter" data-filter=".baskets"></div><span class="filter-title">Baskets</span></li>
                <li><div class="filter-checkbox filter" data-filter=".bath-and-body"></div><span class="filter-title">Bath &amp; Body</span></li>
                <li><div class="filter-checkbox filter" data-filter=".candles"></div><span class="filter-title">Candles</span></li>
                <li><div class="filter-checkbox filter" data-filter=".ceramics"></div><span class="filter-title">Ceramics</span></li>
                <li><div class="filter-checkbox filter" data-filter=".drawing"></div><span class="filter-title">Drawing</span></li>
                <li><div class="filter-checkbox filter" data-filter=".fashion"></div><span class="filter-title">Fashion</span></li>
                <li><div class="filter-checkbox filter" data-filter=".furniture"></div><span class="filter-title">Furniture</span></li>
                <li><div class="filter-checkbox filter" data-filter=".glass"></div><span class="filter-title">Glass</span></li>
                <li><div class="filter-checkbox filter" data-filter=".graphic-design"></div><span class="filter-title">Graphic Design</span></li>
                <li><div class="filter-checkbox filter" data-filter=".industrial-design"></div><span class="filter-title">Industrial Design</span></li>
                <li><div class="filter-checkbox filter" data-filter=".jewelry"></div><span class="filter-title">Jewelry</span></li>
                <li><div class="filter-checkbox filter" data-filter=".installation"></div><span class="filter-title">Installation</span></li>
                <li><div class="filter-checkbox filter" data-filter=".leather"></div><span class="filter-title">Leather</span></li>
                <li><div class="filter-checkbox filter" data-filter=".metal"></div><span class="filter-title">Metal</span></li>
                <li><div class="filter-checkbox filter" data-filter=".mixed-media-and-collage"></div><span class="filter-title">Mixed Media &amp; Collage</span></li>
                <li><div class="filter-checkbox filter" data-filter=".new-media-and-video"></div><span class="filter-title">New Media &amp; Video</span></li>
                <li><div class="filter-checkbox filter" data-filter=".painting"></div><span class="filter-title">Painting</span></li>
                <li><div class="filter-checkbox filter" data-filter=".paper"></div><span class="filter-title">Paper</span></li>
                <li><div class="filter-checkbox filter" data-filter=".photography" selected="selected" data-i="0"></div><span class="filter-title">Photography</span></li>
                <li><div class="filter-checkbox filter" data-filter=".pottery"></div><span class="filter-title">Pottery</span></li>
                <li><div class="filter-checkbox filter" data-filter=".printmaking"></div><span class="filter-title">Printmaking</span></li>
                <li><div class="filter-checkbox filter" data-filter=".public-art"></div><span class="filter-title">Public Art</span></li>
                <li><div class="filter-checkbox filter" data-filter=".sculpture"></div><span class="filter-title">Sculpture</span></li>
                <li><div class="filter-checkbox filter" data-filter=".textile"></div><span class="filter-title">Textile</span></li>
                <li><div class="filter-checkbox filter" data-filter=".wood"></div><span class="filter-title">Wood</span></li>
              </ul>
          </div>
          <div class="filter-box filter-skills animated fadeIn">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".painting"></div><span class="filter-title">Painting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".drawing"></div><span class="filter-title">Drawing</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".photography"></div><span class="filter-title">Photography</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".printmaking"></div><span class="filter-title">Printmaking</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".sculpting"></div><span class="filter-title">Sculpting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".sound"></div><span class="filter-title">Sound</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".video"></div><span class="filter-title">Video</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".animation"></div><span class="filter-title">Animation</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".installation-art-design-and-production"></div><span class="filter-title">Installation Art Design & Production</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".public-art-design-and-production"></div><span class="filter-title">Public Art Design & Production</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".ceramics-and-pottery"></div><span class="filter-title">Ceramics & Pottery</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".jewelry-making"></div><span class="filter-title">Jewelry-making</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".papermaking-and-crafting"></div><span class="filter-title">Papermaking & Crafting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".woodworking"></div><span class="filter-title">Woodworking</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".leather-crafting"></div><span class="filter-title">Leather Crafting</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".metalworking"></div><span class="filter-title">Metalworking</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".basketmaking"></div><span class="filter-title">Basketmaking</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".candlemaking"></div><span class="filter-title">Candlemaking</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".textile-design-and-artistry"></div><span class="filter-title">Textile Design & Artistry</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".glassworking-and-forming"></div><span class="filter-title">Glasswording & Forming</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".bath-and-body-product-making"></div><span class="filter-title">Bath & Body Product-making</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".architecture"></div><span class="filter-title">Architecture</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".graphic-design"></div><span class="filter-title">Graphic Design</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".fashion-design"></div><span class="filter-title">Fashion Design</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".industrial-design"></div><span class="filter-title">Industrial Design</span></li>
              </ul>
          </div>
          <div class="filter-box filter-location animated fadeIn">
              <div class="x">x</div>
              <ul>
                  <li><div class="filter-checkbox filter" data-filter=".barbour"></div><span class="filter-title">Barbour</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".berkeley"></div><span class="filter-title">Berkeley</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".boone"></div><span class="filter-title">Boone</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".braxton"></div><span class="filter-title">Braxton</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".brooke"></div><span class="filter-title">Brooke</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".cabell"></div><span class="filter-title">Cabell</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".calhoun"></div><span class="filter-title">Calhoun</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".clay"></div><span class="filter-title">Clay</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".doddridge"></div><span class="filter-title">Doddridge</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".fayette"></div><span class="filter-title">Fayette</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".gilmer"></div><span class="filter-title">Gilmer</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".grant"></div><span class="filter-title">Grant</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".greenbrier"></div><span class="filter-title">Greenbrier</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".hampshire"></div><span class="filter-title">Hampshire</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".hancock"></div><span class="filter-title">Hancock</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".hardy"></div><span class="filter-title">Hardy</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".harrison"></div><span class="filter-title">Harrison</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".jackson"></div><span class="filter-title">Jackson</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".jefferson"></div><span class="filter-title">Jefferson</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".kanawha"></div><span class="filter-title">Kanawha</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".lewis"></div><span class="filter-title">Lewis</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".lincoln"></div><span class="filter-title">Logan</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".marion"></div><span class="filter-title">Marion</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".marshall"></div><span class="filter-title">Marshall</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".mcdowell"></div><span class="filter-title">McDowell</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".mercer"></div><span class="filter-title">Mercer</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".mineral"></div><span class="filter-title">Mineral</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".mingo"></div><span class="filter-title">Mingo</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".monongalia"></div><span class="filter-title">Monongalia</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".monroe"></div><span class="filter-title">Monroe</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".morgan"></div><span class="filter-title">Morgan</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".nicholas"></div><span class="filter-title">Nicholas</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".ohio"></div><span class="filter-title">Ohio</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".pendleton"></div><span class="filter-title">Pendleton</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".pleasants"></div><span class="filter-title">Pleasants</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".pocahontas"></div><span class="filter-title">Pocahontas</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".preston"></div><span class="filter-title">Preston</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".putnam"></div><span class="filter-title">Putnam</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".raleigh"></div><span class="filter-title">Raleigh</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".randolph"></div><span class="filter-title">Randolph</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".ritchie"></div><span class="filter-title">Ritchie</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".roane"></div><span class="filter-title">Roane</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".summers"></div><span class="filter-title">Summers</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".taylor"></div><span class="filter-title">Taylor</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".tucker"></div><span class="filter-title">Tucker</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".tyler"></div><span class="filter-title">Tyler</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".upshur"></div><span class="filter-title">Upshur</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".wayne"></div><span class="filter-title">Wayne</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".webster"></div><span class="filter-title">Webster</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".wetzel"></div><span class="filter-title">Wetzel</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".wirt"></div><span class="filter-title">Wirt</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".wood"></div><span class="filter-title">Wood</span></li>
                  <li><div class="filter-checkbox filter" data-filter=".wyoming"></div><span class="filter-title">Wyoming</span></li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div class="search">
          <div class="filter-bar">
            <div class="search-title">
              Currently Filtered By
            </div>
            <div class="search-items">
            </div>
            <div class="reset-filter filter">View All <i class="fa fa-angle-double-right"></i></div>
          </div>
          <div class="search-bar">
            <input type="text" class="search" placeholder="Search by..." />
            <div class="search-icon"><i class="fa fa-search"></i></div>
          </div>
        </div>
      </div>
    </div>

    <div class="filter-row">
      <div class="twelve columns">
        <div id="directorylistings">

      		<?php
            $args = array( 'post_type' => 'directorylisting', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

              <?php $rand = rand(1, 4); ?>

              <div class="content-fourth directorylisting mix <?php echo strtolower(get_field('county')); ?> <?php echo get_field('primary_creative_practice'); ?> <?php foreach(get_field("creative_skills") as $c) { echo $c . " "; } ?>">
                <div class="directorylisting-inner background-<?php echo $rand; ?>">

                  <div class="directorylisting-header">

                      <?php

                        $image = get_field('artist_image');

                        if( !empty($image) ):

                        	// thumbnail
                        	$size = 'thumbnail';
                        	$thumb = $image['sizes'][ $size ];
                        	?>

                          <a href="<?php echo get_permalink(); ?>">
                            <div class="directorylisting-picture">
                          		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                            </div>
                          </a>

                      <?php endif; ?>

                      <div class="directorylisting-title">
                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                      </div>

                    </div>
                  <div class="directorylisting-business-name">
                    <?php echo get_field('business_name'); ?>
                  </div>
                  <div class="directorylisting-skills">
                    <?php
                      $str = get_field('primary_creative_practice');
                      $str = ucfirst(str_replace("-", " ", $str));

                    ?>
                    <?php echo $str; ?>
                  </div>

                  <hr/>

                  <div class="directorylisting-description">
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </div>

            <?php
            endwhile; // end of the loop.
          ?>

        </div>
      </div>
    </div>


</main><!-- #main -->



<script>
  $(document).ready(function(){
    var init_filters = '.painting,.drawing,.photography,.printmaking,.sculpture,.installation,.public-art,.new-media-and-video,.mixed-media-and-collage,.ceramics,.pottery,.glass,.paper,.jewelry,.textile,.wood,.furniture,.leather,.metal,.baskets,.candles,.bath-and-body,.architecture,.graphic-design,.fashion,.industrial-design,.painting,.drawing,.photography,.printmaking,.sculpting,.sound,.video,.animation,.installation-art-design-and-production,.public-art-design-and-production,.ceramics-and-pottery,.jewelry-making,.papermaking-and-crafting,.woodworking,.leather-crafting,.metalworking,.basketmaking,.candlemaking,.textile-design-and-artistry,.glassworking-and-forming,.bath-and-body-product-making,.architecture,.graphic-design,.fashion-design,.industrial-design,.barbour,.berkeley,.boone,.braxton,.brooke,.cabell,.calhoun,.clay,.doddridge,.fayette,.gilmer,.grant,.greenbrier,.hampshire,.hancock,.hardy,.harrison,.jackson,.jefferson,.kanawha,.lewis,.lincoln,.marion,.marshall,.mcdowell,.mercer,.mineral,.mingo,.monongalia,.monroe,.morgan,.nicholas,.ohio,.pendleton,.pleasants,.pocahontas,.preston,.putnam,.raleigh,.randolph,.ritchie,.roane,.summers,.taylor,.tucker,.tyler,.upshur,.wayne,.webster,.wetzel,.wirt,.wood,.wyoming';

    var first = true;

    var click = 0;
    $('#directorylistings').mixItUp({
        load: {
           //filter:init_filters
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

    // Resource Library Filter Toggles
    $(".filter-button").click(function() {

    var section = $(this).attr('data-section');
    section = "."+section;
    //console.log(section);
    $(".filter-box").hide();
    $(".filter-button").removeClass('white-bg');

    $(section).fadeIn('400');
    $(this).addClass('white-bg');
    $(section).addClass('white-bg');
    });


    //Update currenly selected filter string
    var active = [];

    $('.filter-checkbox').click(function() {

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

      console.log(filter_string);

      //trigger filter
      $('#directorylistings').mixItUp('filter', filter_string);



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
    $('.reset-filter, input.search').click(function() {

      $('.filter-checkbox').removeClass('active');
      active = [];
      $('.search-items').html("");
      first = true;
      $('#directorylistings').mixItUp('filter', init_filters);
    });



    //Live Search Global Network
    $("input.search").keyup(function(){
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val();
        // Loop through grid items
        $("#directorylistings .directorylisting").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).fadeIn();
            }
        });
    });

    $(function() {
        jQuery('.directorylisting').matchHeight({
            byRow: false,
            property: 'height',
            target: null,
            remove: false
        });
    });

    $( window ).resize(function() {
        $(function() {
            jQuery('.directorylisting').matchHeight({
                byRow: false,
                property: 'height',
                target: null,
                remove: false
            });
        });
    });


  });
</script>

<?php get_footer(); ?>
