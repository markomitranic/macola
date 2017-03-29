<?php 
/*
Template Name: Pro Oprema Kategorija Template
*/


get_header();
get_template_part('partials/icon_menu/standard');

$manufacturer = (isset($_GET['manufacturer'])) ? $_GET['manufacturer'] : null;
$category = (isset($_GET['category'])) ? $_GET['category'] : null;
$page = (isset($_GET['page'])) ? $_GET['page'] : null;

$allManufacturers = get_terms('pro_proizvodjac');
$allCategories = get_terms($manufacturer.'_cat');

$queryTaxonomyParams = [
  [
      'taxonomy' => 'pro_proizvodjac',
      'field' => 'slug',
      'terms' => $manufacturer
  ]
];

if ($category) {
    array_push($queryTaxonomyParams, [
       'taxonomy' => 'blackmagic_cat',
        'field' => 'slug',
        'terms' => $category
    ]);
}

$pro_articles = get_posts(array(
    'numberposts'	=> -1,
    'post_type'		=> 'pro_artikl',
    'tax_query' => $queryTaxonomyParams
));

?>

	<div class="content">
		<div class="container">
            <div class="category-content" style="margin-top: 0px; margin-bottom: 0px;">

                <div class="row-fluid pro_header catrow" style="background-image: url(http://www.macola.rs/wp-content/themes/macola-theme/img/pro_headers/<?=$manufacturer?>.png);">
                        <div class="post-head" style="margin-top:35px; margin-bottom:30px;">
                            <div class="post-heading">
                                <h1 style="background-color:white; display:inline;"><?=get_term_by('slug', $manufacturer, 'pro_proizvodjac')->name?></h1>
                            </div>
                        </div>
                </div>

                <div class="row-fluid centertag"style=" margin-top: 20px; ">
                    <div class="span9">
                        <div class="category-nav">
                            <ul>
                                <?php
                                    $output = "";
                                    foreach ($allManufacturers as $singleManufacturer) {
                                        if ($singleManufacturer->slug == $manufacturer) {
                                            $output .= "<li class =\"active\"><a href=\"?manufacturer=$singleManufacturer->slug&category=$category\">$singleManufacturer->name</a></li>";
                                        } else {
                                            $output .= "<li><a href=\"?manufacturer=$singleManufacturer->slug\">$singleManufacturer->name</a></li>";
                                        }
                                    }
                                    echo $output;
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="category-nav drop-nav" style="width: 173px; margin-left:0;">
                            <ul>
                                <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <?php
                                                if (isset($category) && isset($manufacturer)) {
                                                    echo get_term_by('slug', $category, $manufacturer.'_cat')->name;
                                                } else {
                                                    echo 'Odaberite kategoriju';
                                                }
                                            ?>
                                        <div class="caret-border">
                                            <b class="caret"></b>
                                        </div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php
                                                $output = "<li><a href =\"?manufacturer=$manufacturer\">Odaberite kategoriju</a></li>";
                                                foreach ($allCategories as $singleCategory) {
                                                    if ($singleCategory->slug == $category) {
                                                        $output .= "<li><a href =\"?manufacturer=$manufacturer&category=$category\" selected>$singleCategory->name</a></li>";
                                                    } else {
                                                        $output .= "<li><a href =\"?manufacturer=$manufacturer&category=$singleCategory->slug\">$singleCategory->name</a></li>";
                                                    }
                                                }
                                                echo $output;
                                            ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
			    </div>

                <div class="row-fluid">
                <hr style="margin-bottom:20px;">
                </div>

                <div class="dodaci-red">
                    <div class="pro-article-wrapper">
                        <ul>
                            <?php foreach ($pro_articles as $article) :
                                    $article->permalink = get_permalink($article->ID);
                                    $article->thumbnail = wp_get_attachment_url( get_post_thumbnail_id($article->ID));

                                    $months = get_field('broj_rata', $article->ID);
                                    if($months == '') { $months = 12; };
                                    $monthlyPayment = str_replace(",00", "", get_field('cena', $article->ID));
                                    $monthlyPayment = str_replace(".", "", $monthlyPayment);
                                    $monthlyPayment = $monthlyPayment / $months;
                                    $monthlyPayment = round($monthlyPayment);
                                    if ($monthlyPayment != 0) {
                                        $monthlyPayment = number_format($monthlyPayment, 0, ',', '.');
                                    } else {
                                        $monthlyPayment = '--';
                                    }
                                    $article->monthlyPayment = $monthlyPayment;
                                ?>
                                <li>
                                    <a href="<?=$article->permalink?>" class="open">
                                        <div class="article-image" style="background-image: url(<?=$article->thumbnail?>);">
                                            <img src="<?=$article->thumbnail?>" alt="<?=$article->thumbnail['alt']?>">
                                        </div>
                                        <h3 class="article-name"><?=$article->post_title?></h3>
                                        <div class="article-price">
                                            <p class="price"><?=get_field('cena', $article->ID)?></p>
                                            <p class="monthly">(<?=$article->monthlyPayment?> mesečno)</p>
                                        </div>
                                        <p class="article-sub"><?=get_field('kratak_opis', $article->ID)?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div id="lightbox" class="lightbox" style="display: none;"></div>

<script>
//NAPRAVI SENKU
if($('.lightbox-shadow').size() == 0){
		var theShadow = $('<div id="lightbox-shadow"/>');
		$(theShadow).click(function(e){
			closeLightbox();
		});
		$(theShadow).click(function(e){
			closeLightbox();
		});
		$('body').append(theShadow);
	}

$("a.open").click(function(e) {
    e.preventDefault();
    $("#lightbox").after( theShadow );
    $("#lightbox").show();
    $("#lightbox-shadow").show();
    document.getElementById("header2").style.visibility= 'hidden';
    $('body').css('overflow', 'hidden');
    $('body').css('padding-right', '15px');
    $('#lightbox').empty();
    $('#lightbox').append('<p class="ajaxloading">Učitavanje...</p>');
    $.ajax({
        type: 'POST',
        evalScripts: true,
        dataType: 'html',
        data: { id: this.title,
                cat: '<?=$manufacturer.'_cat'?>',
                tag: '<?=$manufacturer?>',
                pro: '<?=$category?>',
                curr_page: '0',
                tip: 'pro',
                  },
        url: 'http://www.macola.rs/ajax/',
        success:function(data){
    // DODAJ AJAX
            $('#lightbox').empty();
            $('#lightbox').append(data);
        }
    });
});

function closeLightbox(){
	// hide lightbox and shadow <div/>'s
	$('.lightbox').hide();
	$('#lightbox-shadow').hide();
	document.getElementById("header2").style.visibility= 'visible';
	$('body').css('overflow', 'scroll');
	$('body').css('padding-right', '0px');
	$('#lightbox').empty();
}
</script>


<!-- ARTIKLI LAJTBOX ZAVRSAVAJU OVDE -->

<hr class="category-endhr">	

<!-- PAGINACIJA2 POCINJE OVDE -->

		<div class="row-fluid">
		<div class="span12 centertag"style=" margin-left: 0; margin-top: 10px; margin-bottom:10px;">

				<?php if($page_num!=0) { ?>
					<div class="pagination" style="margin:0;">
						<ul>
							<?php if($curr_page!=0) {?>
							<li><a href="?tag=<?php echo $_GET['tag']; ?>&cat=<?php echo $_GET['cat']; ?>&curr_page=<?php echo $_GET['curr_page']-1;?>">&laquo;</a></li>
							<?php }?>
							<?php for($j=1; $j<=$page_num; $j++) { 
							$p=$_GET['curr_page']+1;
							if($p!=$j) {  ?>
							<li><a href="?tag=<?php echo $_GET['tag']; ?>&cat=<?php echo $_GET['cat']; ?>&curr_page=<?php echo $j-1;?>"><?php echo $j; ?></a></li>
							<?php } else { ?><li class="active"><a href="?tag=<?php echo $_GET['tag']; ?>&cat=<?php echo $_GET['cat']; ?>&curr_page=<?php echo $j-1;?>"><?php echo $j; ?></a></li><?php }?>
							<?php } ?>
							<?php if($curr_page!=$page_num-1) {?>
							<li><a href="?tag=<?php echo $_GET['tag']; ?>&cat=<?php echo $_GET['cat']; ?>&curr_page=<?php echo $_GET['curr_page']+1;?>">&raquo;</a></li>
							<?php }?>
						</ul>
					</div>
					<?php } ?>
					
		</div>	
		</div>
<!-- PAGINACIJA2 ZAVRSAVA OVDE -->
<!-- category-navigation /div --></div>
<!-- category-content /div --></div>

 <?php get_footer(); ?>