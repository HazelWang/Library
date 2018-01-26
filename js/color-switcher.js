<<<<<<< HEAD
$(document).ready(function() {
	$('.color-pallet').click(function(e) {
		var color = $(this).attr('title');
		$('#scheme-source').attr('href', 'css/schemes/' + color + '.css');
		e.preventDefault();
	});
	
	$('.panel-ticker').click(function() {
		$('#section-colors').toggleClass('panel-close', 'panel-open', 1000);
		$('#section-colors').toggleClass('panel-open', 'panel-close', 1000);
	})
	return false;
=======
$(document).ready(function() {
	$('.color-pallet').click(function(e) {
		var color = $(this).attr('title');
		$('#scheme-source').attr('href', 'css/schemes/' + color + '.css');
		e.preventDefault();
	});
	
	$('.panel-ticker').click(function() {
		$('#section-colors').toggleClass('panel-close', 'panel-open', 1000);
		$('#section-colors').toggleClass('panel-open', 'panel-close', 1000);
	})
	return false;
>>>>>>> 0f1b17a81f92c4eb18d367a85abecc4f176f0b39
});