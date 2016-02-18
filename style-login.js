jQuery(document).ready(function($){

  var str = window.location.href;
  var last = str.substring(0, str.lastIndexOf("/") + 1, str.length);

  $('#nav a:contains("Register")').attr("href", last + "register");

  $('#backtoblog a').hide();

});
