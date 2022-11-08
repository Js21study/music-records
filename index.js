

function slowScroll(id) {
  $("html, body").animate({
    scrollTop: $(id).offset().top
  }, 500);
  return false;
};

$(document).scroll(function() {
  if($(document).width() < 1024)
    return false;

  if($(document).scrollTop() > $('.services').height() / 2)
    $(".aside-men"). addClass("fixed");
  else
    $(".aside-men"). removeClass("fixed");
});

$("#show-menu").on("click", function() {
  $("#hidden-menu").animate({
    "right": 0
  }, 500);

});


$("#hidden-menu .close").on("click", function() {
  $("#hidden-menu").animate({
    "right": "-280px"
  }, 200);


});



$(document).ready(function() {
  $("#slider").slick({
    dots: false,
    prevArrow: '<div class="arrow-prev"><i class="fa-solid fa-arrow-left"></i></div>',
    nextArrow: '<div class="arrow-next"><i class="fa-solid fa-arrow-right"></i></div>',
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2
  });
});

$('audio').bind('contextmenu', function(e) {
      return false;
     });

$('audio').attr('controlslist', 'nodownload');


// $( "div#music-1" ).html('<audio controls><source src="myAudio.mp3" type="audio/mpeg"><source src="myAudio.ogg" type="audio/ogg"><p>Ваш браузер не підтримує HTML5 аудіо. Надаємо<a href="myAudio.mp4">посилання на аудіо</a></p></audio>');
