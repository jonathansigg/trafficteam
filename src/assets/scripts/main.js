$(document).ready(function(){
  $('.main-header .hamburger').click(function(){
    $(this).toggleClass('is-active');
    $('.main-header .navbar .nav').toggleClass('active');
  });

  toggleContactbox = function(self) {
    $(self).parents('.contact-box').toggleClass('show');
  };
});
