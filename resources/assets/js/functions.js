
/**
 * Alternatively, do some quick vanilla JavaScript or jQuery if necessary.
 */
 
/**
 * Find file input, and count and display uploads
 */
var inputs = document.querySelectorAll('.file');

Array.prototype.forEach.call(inputs, function(input) {
  var label = input.nextElementSibling,
  	  labelVal = label.innerHTML;
  
  input.addEventListener('change', function(e) {
    var fileName = '';
    
    if(this.files && this.files.length > 1)
        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
    else
        fileName = e.target.value.split('\\').pop();
  
    if(fileName)
        label.querySelector('.file-caption').innerHTML = fileName;
    else
        label.innerHTML = labelVal;
  });
});
 
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
