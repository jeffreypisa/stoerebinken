import $ from "jquery";
import AOS from 'aos';

export function AOS_init() {
	$('body').addClass('start');
	
	AOS.init({
		offset: 200,
		anchorPlacement: 'top-bottom'
	});
}