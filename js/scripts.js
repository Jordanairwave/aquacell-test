var site = {
	menuOpen: 'close',
	//Init function
	init: function() {
		//Timer delay for lightening animation on first page load
		setTimeout(site.lightening, 2000);
		
		//Mobile Hamburger Icon function
		$('#mobile-menu').on('click', function() {
			if(site.menuOpen == 'close') {
				$('#main-nav ul').slideDown();
				site.menuOpen = 'open';
			} else {
				$('#main-nav ul').slideUp();
				site.menuOpen = 'close';
			}
		})
		
		
    },
    //lightening animation for background image
    lightening: function() {
	    $('#core-still-lightening').fadeIn(100).fadeOut(100).fadeIn(50).fadeOut(50).fadeIn(50).fadeOut(50).fadeIn(50).fadeOut(50).fadeIn(50).fadeOut(50, function() {
		    setTimeout(site.lightening, 1000);
	    });
    }
};

$(document).ready(function(){ site.init(); });