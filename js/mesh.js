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



  $(".footer-block").matchHeight();

  $('.press-third').matchHeight();

  // Creative Network

  $(".filter-product-button").click(function() {
     $('.filter-box').hide();
     $(".filter-product").toggle();
  });

  $(".filter-skills-button").click(function() {
     $('.filter-box').hide();
     $(".filter-skills").show();
  });

  $(".filter-location-button").click(function() {
     $('.filter-box').hide();
     $(".filter-location").show();
  });

  // Resource Library

  $(".filter-business-button").click(function() {
    $(".filter-marketing-and-pr").hide();
    $(".filter-legal").hide();
    $(".filter-finance").hide();
    $(".filter-business").toggle();
  });

  $(".filter-marketing-and-pr-button").click(function() {
    $(".filter-business").hide();
    $(".filter-legal").hide();
    $(".filter-finance").hide();
    $(".filter-marketing-and-pr").toggle();
  });

  $(".filter-legal-button").click(function() {
    $(".filter-marketing-and-pr").hide();
    $(".filter-business").hide();
    $(".filter-finance").hide();
    $(".filter-legal").toggle();
  });

  $(".filter-finance-button").click(function() {
    $(".filter-marketing-and-pr").hide();
    $(".filter-legal").hide();
    $(".filter-business").hide();
    $(".filter-finance").toggle();
  });


  // Made in West Virginia

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

});
