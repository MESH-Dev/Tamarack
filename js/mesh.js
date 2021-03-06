jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

//FIxes the frame width for Sly slider, since we are using auto widths on images (children of slider)
//Be sure that this loads before the sly slider
//Addition from SD - 4/13/16

  //function singleSlider () {
  $('.crazy ul li').each(function(){
    var img_width = $(this).find('img').width();
    $(this).width(img_width);
    console.log(img_width);
  });
//}

//$(document).ready(singleSlider);
//$(window).resize(singleSlider);

//============================================================

  var divWidth = jQuery('.content-third').width();
  jQuery('.content-third').height(divWidth);

  jQuery(window).resize(function() {
    var divWidth = jQuery('.content-third').width();
    jQuery('.content-third').height(divWidth);
  });

  $(function() {
    $('a[href*=\\#]:not([href=\\#])').click(function() {
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

  $(".content-text-title").hover(function() {
      $p = $(this).parent();
      $p.find('.content-text-cta a').toggleClass('hover-opacity');
  });

  $(".content-text-cta").hover(function() {
      $p = $(this).parent();
      $p.find('.content-text-title').toggleClass('hover-opacity');
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



  $(".footer-block").matchHeight();

  $('.press-third').matchHeight();


  // Resource Library/Directory Filter Toggles
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

 // Filter Toggles
    $(".filter-inner-button").click(function() {

      var section = $(this).attr('data-section');
      section = "."+section;
      //console.log(section);
      $(".filter-inner-box").hide();
      $(".filter-inner-button").removeClass('white-bg');

      $(section).fadeIn('400');
      $(this).addClass('white-bg');
      $(section).addClass('white-bg');
    });





  // Made in West Virginia

  $(".filter-collections-button").click(function() {
    $('.filter-box').hide();
    $(".filter-collections").show();
  });

  $(".filter-businesses-button").click(function() {
    $('.filter-box').hide();
    $(".filter-businesses").show();
  });

  $(".x").click(function() {
    $('.filter-box').hide();
    $(".filter-button").removeClass('white-bg');
  });






  $('.learn, .learn-sub')
    .mouseenter(function() {
      $('.learn-sub').show();
    })
    .mouseleave(function() {
      $('.learn-sub').hide();
    });

  $('.learn-sub')
    .mouseenter(function() {
      $('.learn').addClass('menu-active');
    })
    .mouseleave(function() {
      $('.learn').removeClass('menu-active');
    });

  $('.build, .build-sub')
    .mouseenter(function() {
      $('.build-sub').show();
    })
    .mouseleave(function() {
      $('.build-sub').hide();
    });

  $('.build-sub')
    .mouseenter(function() {
      $('.build').addClass('menu-active');
    })
    .mouseleave(function() {
      $('.build').removeClass('menu-active');
    });

  $('.fund, .fund-sub')
    .mouseenter(function() {
      $('.fund-sub').show();
    })
    .mouseleave(function() {
      $('.fund-sub').hide();
    });

  $('.fund-sub')
    .mouseenter(function() {
      $('.fund').addClass('menu-active');
    })
    .mouseleave(function() {
      $('.fund').removeClass('menu-active');
    });

  $('.connect, .connect-sub')
    .mouseenter(function() {
      $('.connect-sub').show();
    })
    .mouseleave(function() {
      $('.connect-sub').hide();
    });

  $('.connect-sub')
    .mouseenter(function() {
      $('.connect').addClass('menu-active');
    })
    .mouseleave(function() {
      $('.connect').removeClass('menu-active');
    });

  $('.grow, .grow-sub')
    .mouseenter(function() {
      $('.grow-sub').show();
    })
    .mouseleave(function() {
      $('.grow-sub').hide();
    });

  $('.grow-sub')
    .mouseenter(function() {
      $('.grow').addClass('menu-active');
    })
    .mouseleave(function() {
      $('.grow').removeClass('menu-active');
    });

  $('.shop, .shop-sub')
    .mouseenter(function() {
      $('.shop-sub').show();
    })
    .mouseleave(function() {
      $('.shop-sub').hide();
    });

  $('.shop-sub')
    .mouseenter(function() {
      $('.shop').addClass('menu-active');
    })
    .mouseleave(function() {
      $('.shop').removeClass('menu-active');
    });

  $('.effect-circle')
    .mouseenter(function() {
      $(this).find('.content-screen').addClass('content-square-screen');
      $(this).find('.content-screen').removeClass('content-circle-screen');
    })
    .mouseleave(function() {
      $(this).find('.content-screen').addClass('content-circle-screen');
      $(this).find('.content-screen').removeClass('content-square-screen');
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

   $('.frm_submit').click(function() {
     $('.frm_ajax_loading').show();
   });

   $('#sidebar h3').append('<img src="http://tamarackfoundation.org/wp-content/themes/Tamarack/img/down-arrow.png"/>');

   $(document).ready(function(){

       $("#sidebar h3").click(function() {
           $(this).toggleClass('sidebar-open');
           $(this).next('ul').slideToggle();
       });

   });

});
