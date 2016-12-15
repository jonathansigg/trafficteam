$(document).ready(function(){
  $('.main-header .hamburger').click(function(){
    $(this).toggleClass('is-active');
  });

  toggleContactbox = function(self) {
    $(self).parents('.contact-box').toggleClass('show');
  };
});
