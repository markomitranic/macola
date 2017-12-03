<?php

/**
 * Prepare variables
 */

$colors = parse_colors(get_field('boje'));
$models = get_field('iphone_models');
$firstImage = reset($colors)['image'];
$url = (get_field('custom_url')) ? get_field('custom_url') : 'http://www.macola.rs/kontakt/';
$buttonLabel = (get_field('custom_button_text')) ? get_field('custom_button_text') : 'Kako do nas?';

/**
 * Get the colors and form a cool array. Easy for searching.
 */
function parse_colors($repeater) {
	$arr = array();
	foreach ($repeater as $key => $value) {
		$arr[$value['naziv_boje']] = array(
			'color' => $value['color'],
			'image' => $value['image']['url']
		);
	}
	return $arr;
}
function get_colors_html($colors) {
	$output = "";
	$selected = "";
	foreach ($colors as $key => $color) {
		$selected = ($color == reset($colors)) ? 'selected' : '';
		$output .= '<div class="pick '. $selected .'" id="color" data-color="'. $key .'">';
		$output .= '<div class="colorbox" style="background-color:'. $color['color'] .';"></div>';
		$output .= '</div>';
	}
	return $output;		
}
function get_capacities_html($models) {
	$output = '';
	$selected = "";
	foreach ($models as $key => $model) {
		$selected = ($key == 0) ? 'selected' : '';
		$output .='<div class="pick '. $selected .'" id="color" data-model="'. $key .'">'. $model['model_capacity'] .'</div>';
	}
	return $output;
}

 ?>


<div class="row">
	<div class="span6 boxright">
	<img id="productpickerimage" src="<?php echo $firstImage; ?>" alt="">
	
	</div>

	<div class="span6 boxleft">
		
		<h1> <?php echo get_the_title(); ?></h1>

		<h2><span class="numberinbox">1</span>Odaberite kapacitet:</h2>

		<div class="pickermenu centertag" id="menu2">
			<?php echo get_capacities_html($models); ?>
		</div>

		<h2><span class="numberinbox">2</span>Odaberite boju:</h2>

		<div class="pickermenu centertag" id="menu1">
			<?php echo get_colors_html($colors); ?>
		</div>

		<h2><span class="numberinbox">3</span>Cena:</h2>
		<div class="pickermenu centertag" id="menu3">
			<div class="pick" id="calcprice">XXX dinara</div>
			<a href="<?=$url?>">
				<div class="pick" id="contactbutton"><?=$buttonLabel?></div>
			</a>
		</div>
		<div class="smalltext">*-Kupovina na 3 rate moguća samo karticama Banca Intesa.</div>

	</div>
</div>


<div class="hidden">
	<script type="text/javascript">

	</script>
</div>


<script type="text/javascript">
    $colorButtons = $('#menu1 #color');
    $prices = $('#menu2 .pick');
    $finalPrice = $('#calcprice');
    $image = $('#productpickerimage');

    let colors = <?php echo json_encode($colors); ?>;
    let models = <?php echo json_encode($models); ?>;

    setPrice(models[0]['model_price'], models[0]['broj_rata']) // Set initial price
    setTimeout(function() {
        pickColors(models[0].colors);
    }, 1000);

    function setPrice(newprice, brojRata) {
    	let formatPrice = newprice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		$finalPrice.text(formatPrice + ' dinara');
		// TODO: da se uradi calc rata
    }
    function pickColors(colorsArr) {
    	$colorButtons.hide();
    	colorsArr.forEach(function(value) {
    		$colorButtons.each(function() {
	    		if ($(this).data('color') === value) {
	    			$(this).show();
	    		}
	    	});
    	});
    }
    function changeImage(colorKey) {
    	let color = colors[colorKey];
    	$image.attr('src', color.image);
    }

    $prices.on('click', function() {
    	$(this).addClass('selected').siblings().removeClass('selected');
    	let model = models[$(this).data('model')];
    	setPrice(model.model_price, model.broj_rata);
    	pickColors(model.colors);
    });
    $colorButtons.on('click', function() {
    	$(this).addClass('selected').siblings().removeClass('selected');
    	changeImage($(this).data('color'));
    });





</script>





<style>

	.boxright img {
		margin: 50px 50px 0px 70px;
	}
	.numberinbox {
		font-size: 12px;
		border: solid 1px black;
		border-radius: 6px;
		padding: 5px 10px 5px 10px;
		margin-right: 12px;
	}
	.boxleft {
		padding: 50px 0px 0px 0px;
	}
	.boxleft h1 {
		color: black;
		font-size: 40px;
		margin-bottom: 20px;
	}
	.pickermenu {
		background-color: rgb(218, 218, 218);
		height: 60px;
		color: black;
		display: block;
		width: 100%;
		border-radius: 4px;
		border: 1px solid #c7c7c7;
		box-shadow: inset 0 0 4px 0px rgba(86, 86, 86, 0.72);
		overflow: hidden;
		margin-bottom: 20px;
	}
	.pick {
		display: inline-block;
		width: 70px;
		height: 100%;
		color: #4a4a4a;
		font-weight: 300;
		font-size: 15px;
		background-color: transparent;
		cursor: pointer;
	}
	.pick:hover::after {
		content: "";
		display: block;
		opacity: 0.1;
		background-color: white;
		width: 80%;
		height: 30px;
		position: relative;
		top: -45px;
		left: 0;
		border-radius: 5px;
	}
	#color.selected::after {
		content: "";
		display: block;
		opacity: 0.5;
		background-color: white;
		width: 80%;
		height: 30px;
		position: relative;
		top: -45px;
		left: 0;
		border-radius: 5px;
	}
	#menu1 .pick {
		flex: 1;
	}
	#menu2 .pick {
		width:32%;
		line-height: 60px;
	}
	#calcprice {
		width:64%;
		line-height: 60px;
		display: inline-block;
		font-size: 20px;
		font-weight: 600;
	}
	#calcprice:hover {
		background-color: transparent;
		color: white;
		cursor:pointer;
	}
	#contactbutton {
	    width: 32%;
	    height: 45px;
	    color: white;
	    line-height: 45px;
	    border-radius: 4px;
	    display: inline-block;
		background-color: #0088cc;
	}
	#contactbutton:hover {
		background-color: #343335;
		color: white;
		cursor:pointer;
	}
	#contactbutton::after {
		display: none;
	}
	.colorbox {
		width: 20px;
		height: 20px;
		border-radius: 12px;
		border: solid 2px black;
		margin: 18px auto;
	}

</style>
