//js file
jQuery(document).ready(function( $ ) {
  //must use $ for jQuery command, rather than jQuery.
  var openSearch = false;
  $(".open-search").click(function(e){
    e.preventDefault();
    if(openSearch == false) {
      $(".search-form-container").slideDown();
      openSearch = true;
    } else {
      $(".search-form-container").slideUp();
      openSearch = false;
    }
  })
});

console.log("js-main is working");
