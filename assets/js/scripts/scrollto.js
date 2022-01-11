import $ from "jquery";

export function scrollto() {
	$('.js-scrollto').on('click', function() {
    var href = $(this).attr("href");
    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500);
    return false;
  });
  $('.js-scrolltonextsection').on('click', function() {
    var href = $(this).closest('section').next();
    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500);
    return false;
  });
}