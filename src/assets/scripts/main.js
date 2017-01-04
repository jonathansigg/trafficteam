$(document).ready(function(){
  $('.main-header .hamburger').click(function(){
    $(this).toggleClass('is-active');
    $('.main-header .navbar .nav').toggleClass('active');
  });

  toggleContactbox = function(self) {
    $(self).parents('.contact-box').toggleClass('show');
  };

  $('a.scrollto').click(function(e){
    e.preventDefault();
    var target = $($(this).attr('href'));
    $('html, body').animate({
        scrollTop: target.offset().top - $('.main-header').height() * 4
    }, 1000);
  });
});
