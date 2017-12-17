'use strict';

$(document).ready(function () {

	var $carousel = $('.carousel');
	$carousel.carousel({
		interval: 3000
	});
	$carousel.carousel('cycle');

	$("a#product").fancybox({
		'titleShow': false,
		'openEffect': 'fade',
		'closeEffect': 'fade',
		'openSpeed': '50',
		'closeSpeed': '50',
		'openMethod': 'zoomIn',
		'closeMethod': 'zoomOut',
		'padding': 0,
		'margin': [40, 0, 0, 0],
		'helpers': {
			'overlay': {
				'locked': true,
				'css': { 'position': 'fixed' }
			}
		}
	});
});
"use strict";

// DODATAK ZA IZRACUNAVANJE RATA!
function IzracunajRate() {
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    $.each($(".RATA"), function (key, element) {
        var $element = $(element);
        var punaCena = parseInt($element.attr("data-punacena"));
        var brojRata = $element.attr("data-brojrata");
        if (brojRata === 3) {
            var cenaJedneRate = punaCena / brojRata;
        } else {
            var cenaJedneRate = punaCena * (1 + brojRata * 0.01) / brojRata;
        }

        cenaJedneRate = numberWithCommas(Math.ceil(cenaJedneRate));
        $element.text("Već od " + cenaJedneRate + " dinara mesečno!");
    });
}
setTimeout(IzracunajRate, 500);