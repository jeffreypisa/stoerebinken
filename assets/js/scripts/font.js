import $ from "jquery";

export function font() {
	
	var font_nr = 1;
	
	$('.gb-font').each(function (){
		$(this).find('.font_nr').text(font_nr);
		
		font_nr = font_nr + 1;
	});
}