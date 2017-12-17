// DODATAK ZA IZRACUNAVANJE RATA!
function IzracunajRate() {
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    $.each($(".RATA"), function(key, element) {
        var $element = $(element);
        var punaCena = parseInt($element.attr("data-punacena"));
        var brojRata = $element.attr("data-brojrata");
        if (brojRata === 3) {
            var cenaJedneRate = punaCena / brojRata;
        } else {
            var cenaJedneRate = (punaCena * (1 + (brojRata * 0.01))) / brojRata;
        }
        
        cenaJedneRate = numberWithCommas(Math.ceil(cenaJedneRate));
        $element.text("Već od " + cenaJedneRate + " dinara mesečno!");
    });
}
setTimeout(IzracunajRate, 500);