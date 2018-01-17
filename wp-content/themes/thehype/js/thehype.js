(function($) {
	"use strict"; 

	$('body').scrollspy({
	  target: '#mainNav',
	  offset: 54
	});
  

	var navbarCollapse = function() {
	  if ($("#mainNav").offset().top > 100) {
		$("#mainNav").addClass("navbar-shrink");
	  } else {
		$("#mainNav").removeClass("navbar-shrink");
	  }
	};

	navbarCollapse();

	$(window).scroll(navbarCollapse);


  })(jQuery); 