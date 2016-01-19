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
  })

});
