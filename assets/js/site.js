import $ from "jquery";
import Bootstrap from 'bootstrap';

// Init plugins
import { AOS_init } from './scripts/aos_init.js';
import { slick_init } from './scripts/slick.js';
import { matchheight_init } from './scripts/matchheight_init.js';
import { menugrid } from './menugrid/index.js';
// import { lity_init } from './scripts/lity.js';

// Scripts
import { site_is_loaded } from './scripts/site_is_loaded.js';
import { footer_down } from './scripts/footer_down.js';
import { mobilemenu } from './scripts/mobilemenu.js';
import { scrolleffects } from './scripts/scrolleffects.js';
import { scrollto } from './scripts/scrollto.js';
import { sticky_header } from './scripts/sticky_header.js';
import { font } from './scripts/font.js';
import { text_animation } from './scripts/text_animation.js';
import { simple_parallax } from './scripts/simple_parallax.js';

slick_init();
matchheight_init();
font();
menugrid();
simple_parallax();

// lity_init();

$( document ).ready(function() {
	footer_down();
	mobilemenu();
	scrolleffects();
	scrollto();
	sticky_header();
	text_animation();
	function removenavup() {     
	  $('header').css('');
	}
	
	setTimeout(removenavup, 1000);
});

$(window).on('load', function() {
  site_is_loaded();
  AOS_init(); 	
  
});

$(window).on('resize', function() {

});