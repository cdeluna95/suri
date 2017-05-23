
/**
 * Alternatively, do some jQuery if necessary.
 */
$(function() {
  var burger = $(".dashboard-burger"),
      home = $("#home");
  
  burger.on('click', function(e) {
    e.preventDefault();
    burger.toggleClass("shift");
    home.toggleClass("toggled");
  });
});
