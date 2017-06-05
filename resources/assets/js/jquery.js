
/**
 * Alternatively, do some jQuery if necessary.
 */
 
/**
 * Toggle dashboard nav-burger upon click
 */
$(function() {
  var header = $(".header-burger-wrapper"),
      title = $(".header-title-wrapper"),
      burger = $(".header-burger"),
      li = $(".dashboard-li"),
      home = $("#home");
      
  burger.on('click', function(e) {
    e.preventDefault();
    header.toggleClass("slide");
    title.toggleClass("slide");
    li.toggleClass("accelerate");
    home.toggleClass("toggled");
  });
});

/**
 * Focus on textarea upon click on div
 */
$(function() {
  $('div').on('click', function() {
    $(this).find('textarea').focus();
  });
});
