$(document).ready(function () {

	const $carousel = $('.carousel');
    $carousel.carousel({
		  interval: 3000
	});
    $carousel.carousel('cycle');

	$("a#product").fancybox({
		'titleShow'     : false,
		'openEffect'	: 'fade',
		'closeEffect'	: 'fade',
		'openSpeed'		: '50',
		'closeSpeed'	: '50',
		'openMethod'	: 'zoomIn',
		'closeMethod'	: 'zoomOut',
		'padding'		: 0,
		'margin'		: [40,0,0,0],
		'helpers'		: {
			'overlay': {
			    'locked': true,
			    'css' : {'position' : 'fixed'}
			}
		}
	});

});
