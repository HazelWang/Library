/* ----------------------------- 
Backgroung slider
----------------------------- */
$(window).ready(function() {
	'use strict';
	$.vegas('slideshow', {
	  backgrounds:[
		{ src:'images/10.jpg', fade:1000 },
		{ src:'images/11.jpg', fade:1000 },
		{ src:'images/12.jpg', fade:1000 }
	  ]
	})();
});