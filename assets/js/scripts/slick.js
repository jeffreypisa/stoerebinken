import $ from "jquery";
import 'slick-carousel';

export function slick_init() {
	$('.js-slick').slick({
	  centerMode: true,
	  centerPadding: '14%',
	  slidesToShow: 1,
	  arrows: true,
	  speed: 1000,
	  easing: 'easeInOutQuint'
	});
	
	$('.js-slick-blog').slick({
		centerPadding: '14%',
	  slidesToShow: 1,
	  arrows: true,
	  speed: 1000,
	  easing: 'easeInOutQuint'
	});
}