import $ from "jquery";
import AOS from 'aos';

export function AOS_init() {
	$('body').addClass('start');
	
	AOS.init({
		offset: 200,
		anchorPlacement: 'top-bottom',
		duration: 800, // values from 0 to 3000, with step 50ms
		easing: 'ease-in-out-quart', // default easing for AOS animations
	});
}