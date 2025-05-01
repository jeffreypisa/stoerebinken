import SimpleParallax from "simple-parallax-js/vanilla";

export function simple_parallax() {
	var images = document.getElementsByClassName('js-parallax');
	new SimpleParallax(images, {
		delay: 0,       
		overflow: false,   
		scale: 1.3,        
		orientation: 'down', 
	});
}