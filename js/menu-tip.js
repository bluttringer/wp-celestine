jQuery( document ).ready(function( $ ) {
	
	$(function() {
		
		$('.menu a').each(function() {	
			var elt = $(this);
			elt.attr('menu-tip', elt.attr('title'));
			elt.removeAttr('title');
		});
	});

});