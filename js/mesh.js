jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  var divWidth = jQuery('.content-third').width();
  jQuery('.content-third').height(divWidth);

  jQuery(window).resize(function() {
    var divWidth = jQuery('.content-third').width();
    jQuery('.content-third').height(divWidth);
  });

  var divWidth = jQuery('.content-fourth').width();
  jQuery('.content-fourth').height(divWidth);

  jQuery(window).resize(function() {
    var divWidth = jQuery('.content-fourth').width();
    jQuery('.content-fourth').height(divWidth);
  });

  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  var active = 0;
  var prev = 0;

  $(".sidebar-" + active).addClass('active');

  $(window).scroll(function (event) {
    $( ".form-section" ).each(function( index ) {

      if ( $(this).offset().top < ($(window).scrollTop() + ($(window).height() * 0.3)) && ($(window).scrollTop() + ($(window).height() * 0.3)) < ($(this).offset().top + $(this).height()) ) {
        active = index;
      }

      $(".sidebar-item").removeClass('active');
      $(".sidebar-" + active).addClass('active');

    });
  });

  $('.menu-block-half-1').hover(function() {
    $('.sub-menu-block-1').toggle();
  });

  $('.menu-block-half-2').hover(function() {
    $('.sub-menu-block-2').toggle();
  });

  $(".footer-block").matchHeight();

  $(".filter-products-button").click(function() {
     $('.filter').hide();
     $(".filter-products").show();
  });

  $(".filter-skills-button").click(function() {
      $('.filter').hide();
     $(".filter-skills").show();
  });

  $(".filter-counties-button").click(function() {
      $('.filter').hide();
     $(".filter-counties").show();
  });

});
