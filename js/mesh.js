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

  $(".sidebar-" + active).addClass('active-item');

  $(window).scroll(function (event) {
    $( ".form-section" ).each(function( index ) {

      if ( $(this).offset().top < ($(window).scrollTop() + ($(window).height() * 0.3)) && ($(window).scrollTop() + ($(window).height() * 0.3)) < ($(this).offset().top + $(this).height()) ) {
        active = index;
      }

      $(".sidebar-item").removeClass('active-item');
      $(".sidebar-" + active).addClass('active-item');

    });
  });

  $('.menu-block-half-1').hover(function() {
    $('.sub-menu-block-1').toggle();
  });

  $('.menu-block-half-2').hover(function() {
    $('.sub-menu-block-2').toggle();
  });

  $(".footer-block").matchHeight();

  $(".filter-product-button").click(function() {
     $('.filter-box').hide();
     $(".filter-product").show();
  });

  $(".filter-skills-button").click(function() {
     $('.filter-box').hide();
     $(".filter-skills").show();
  });

  $(".filter-location-button").click(function() {
     $('.filter-box').hide();
     $(".filter-location").show();
  });

  $(".filter-business-button").click(function() {
    $('.filter-box').hide();
    $(".filter-business").show();
  });

  $(".filter-marketing-and-pr-button").click(function() {
    $('.filter-box').hide();
    $(".filter-marketing-and-pr").show();
  });

  $(".filter-legal-button").click(function() {
    $('.filter-box').hide();
    $(".filter-legal").show();
  });

  $(".filter-finance-button").click(function() {
    $('.filter-box').hide();
    $(".filter-finance").show();
  });

  $(".filter-collections-button").click(function() {
    $('.filter-box').hide();
    $(".filter-collections").show();
  });

  $(".filter-products-button").click(function() {
    $('.filter-box').hide();
    $(".filter-products").show();
  });

  $(".x").click(function() {
    $('.filter-box').hide();
  });

  // var divWidth = jQuery('.content-fourth').width();
  // jQuery('.content-fourth').height(divWidth);
  //
  // jQuery(window).resize(function() {
  //   var divWidth = jQuery('.content-fourth').width();
  //   jQuery('.content-fourth').height(divWidth);
  // });

  // New tabs

  /* ==========
     Variables
   ========== */
   var url = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');

  /* ==========
      Utilities
    ========== */
   function beginsWith(needle, haystack){
     return (haystack.substr(0, needle.length) == needle);
   };


  /* ==========
     Anchors open in new tab/window
   ========== */
   $('a').each(function(){

     if(typeof $(this).attr('href') != "undefined") {
      var test = beginsWith( url, $(this).attr('href') );
      //if it's an external link then open in a new tab
      if( test == false && $(this).attr('href').indexOf('#') == -1){
        $(this).attr('target','_blank');
      }
     }
   });

});
