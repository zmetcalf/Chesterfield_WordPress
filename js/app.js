$(document).foundation();

$(function() {

  // Vegas Slideshow

  var slides = [];

  $.each($('.background_images'), function (index, image) {
    slides.push({ src: $(image).attr('data-image') });
  });

  $('body').vegas({
    slides: slides,
    timer: false
  });

  // Masonry

  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 0,
  });
});
