import $ from "jquery";

export function text_animation() {
	
	var words = $("#texteffect").text().split(" ");
	$("#texteffect").empty();
	$.each(words, function(i, v) {
	    $("#texteffect").append($("<span>").text(v));
	});
	
	$.each($('#texteffect span'), function() {
		$(this).wrap('<span>');
	});
	
	$("#texteffect span").first().remove();
}