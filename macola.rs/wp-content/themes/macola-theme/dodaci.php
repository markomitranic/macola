 <?php 
/*
Template Name: ARTIKLI Dodaci Template
*/

?> 

<?php get_header(); ?>
		<div class="header2" id="header2">
		<div class="container">
			<div class="row">
			<div class="span9">
				<img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/home/authorization.png">
				</div>
				<div class="span3">
				<form class="navbar-search pull-right" action="<? echo home_url('/'); ?> ">
					<!-- <?php get_search_form(); ?> -->
					<input type="text" class="search-query" placeholder="Pretraga..." value="<?php get_search_query(); ?>" name="s" id="s" />
				</form>
				</div>
			</div>

			<div class="row">
				<div class="span2">
					<a href="http://www.macola.rs/dodaci/?articleCat=novo&articleDev=&articlePro=">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/headphonemenuicon.png">
					<div class="menutext">Novo u Ponudi</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/dodaci/?articleCat=specijalna-ponuda&articleDev=&articlePro=">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/percentmenuicon.png">
					<div class="menutext">Specijalna Ponuda</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/dodaci/?articleCat=zastite&articleDev=iphone-6&articlePro=">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/iphoneiphone.png">
					<div class="menutext">Maske za iPhone</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/dodaci/?articleCat=slusalice&articleDev=&articlePro=">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/headphonemenuicon.png">
					<div class="menutext">Slušalice</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/dodaci/?articleCat=torbe&articleDev=&articlePro=">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/bagmenuicon.png">
					<div class="menutext">Rančevi i Torbe</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/profesionalna-oprema/">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/reelmenuicon.png">
					<div class="menutext">Prof. Oprema</div>
					</a>
				</div>

			</div>

		</div>	
		
		</div>	
	</div>
	<div class="content">
		<div class="container">
<?php 


 /*session_start();*/


if(!isset($_SESSION['page'])){
	$_SESSION['page'] = 0;
}

	
if(!isset($_SESSION['articleCat'])){
	$_SESSION['articleCat'] = "specijalna-ponuda";
}




if(isset($_GET['articleCat'])){
		 $_SESSION['articleCat'] = $_GET['articleCat']; 
}
else{

}
if(isset($_GET['articleDev'])){
		 $_SESSION['articleDev'] = $_GET['articleDev']; 
}
else{

}

if(isset($_GET['articlePro'])){
		 $_SESSION['articlePro'] = $_GET['articlePro']; 
}
else{

}
$cat = $_GET['articleCat'];
$dev = $_GET['articleDev'];
$pro = $_GET['articlePro'];

$categoriesdropdown = get_categories(array('taxonomy'=> 'artikl_kategorija','hide_empty'=>1));
$devicesdropdown = get_categories(array('taxonomy'=> 'artikl_uredjaj','hide_empty'=>1));
$prodropdown = get_categories(array('taxonomy'=> 'artikl_proizvodjac','hide_empty'=>1));

$tax_query = array();
if(isset($cat) && $cat != ""){
	array_push($tax_query, array(
	     'taxonomy' => 'artikl_kategorija', 	
	     'field' => 'slug',
	     'terms' => $cat
	    ));
}
if(isset($pro) && $pro != ""){
	array_push($tax_query, array(
	     'taxonomy' => 'artikl_proizvodjac', 	
	     'field' => 'slug',
	     'terms' => $pro
	    ));
}
if(isset($dev) && $dev != ""){
	array_push($tax_query, array(
	     'taxonomy' => 'artikl_uredjaj', 	
	     'field' => 'slug',
	     'terms' => $dev
	    ));
}
$tax_query['posts_per_page'] = -1;


	$args = array('posts_per_page'   => -1, 'post_type'=> array('artikli'), 
	'tax_query'=>$tax_query
	 );



$myposts = get_posts($args);

$a = 0;
$brojac = 0;
while( $myposts[$a] !=null) { $brojac++ ; $a++;}

if($brojac%20 == 0){
	$page_num = floor($brojac/20);
}
else{
	$page_num = floor($brojac/20) + 1;
}


$curr_page = $_GET['curr_page'];
$z =0 + $_GET['curr_page']*20;
$broj = 0; 
while( $myposts[$z] != null) { $broj++; $z++; }

$row_num = 0; 

if ($broj%20 == 0 && $broj!=0){
	
	$row_num = 5; 
} else {
	 

	if ($broj%4 == 0){
	$row_num = $broj/4; 
	} 
	else {
	$row_num = floor($broj/4) + 1; 
	}

	if($row_num>5){$row_num = 5;} 

}

?>
<div class="category-content" style="margin-top: 0px; margin-bottom: 0px;">

<!-- IZBORNIK POCINJE OVDE -->
<div class="row-fluid catrow">
	<div class="span4" style="margin-left: 20px;">
						<div class="category-nav drop-nav dropdaunbox1">
						<ul>
							<li class="dropdown">
									<a class="dropdown-toggle" style="border: 0; width: 288px; height:46px;" data-toggle="dropdown" href="#"><h2 class="dropdauntekst">
									<img src="/wp-content/themes/macola-theme/img/caret.png" style="margin-bottom: 4px; margin-right: 4px;">
											
											<?php
											if(isset($cat) && $cat != ""){
											
											$obj = get_term_by( 'slug', $cat , 'artikl_kategorija' );
											
											echo $obj->name;  }
											else { echo 'Kategorije'; }
											?></h2>
									<div class="caret-border" style="display: none;">
										<b class="caret"></b>
									</div>
									</a>
									<ul class="dropdown-menu">

										<?php
											echo '<li><a href ="?articleCat=&articleDev='.$dev.'&articlePro='.$pro.'">Sve kategorije</a></li>';

											foreach($categoriesdropdown as $catt){	
													echo '<li><a href="?articleCat='.$catt->slug.'&articleDev='.$dev.'&articlePro='.$pro.'">'.$catt->name.'</a></li>';		} ?>
										
										
									</ul>
							</li>
						</ul>
					</div></div>
	<div class="span4" style="margin-left:2px;">
						<div class="category-nav drop-nav dropdaunbox2">
						<ul>
							<li class="dropdown">
									<a class="dropdown-toggle" style="border: 0; width: 288px; height:46px;" data-toggle="dropdown" href="#"><h2 class="dropdauntekst">
											<img src="/wp-content/themes/macola-theme/img/caret.png" style="margin-bottom: 4px; margin-right: 4px;">

											<?php
											if(isset($dev) && $dev != ""){
											
											$obj = get_term_by( 'slug', $dev , 'artikl_uredjaj' );
											echo $obj->name;  }
											else { echo 'Uređaji'; }
											?></h2>
									<div class="caret-border" style="display: none;">
										<b class="caret"></b>
									</div>
									</a>
									<ul class="dropdown-menu">

										<?php
											echo '<li><a href ="?articleCat='.$cat.'&articleDev=&articlePro='.$pro.'">Svi uređaji</a></li>';


											foreach($devicesdropdown as $catt){	
													echo '<li><a href="?articleCat='.$cat.'&articleDev='.$catt->slug.'&articlePro='.$pro.'">'.$catt->name.'</a></li>';		} ?>
										
										
									</ul>
							</li>
						</ul>
					</div></div>
	<div class="span4" style="margin-left:1px;">
						<div class="category-nav drop-nav dropdaunbox2">
						<ul>
							<li class="dropdown">
									<a class="dropdown-toggle" style="border: 0; width: 288px; height:46px;" data-toggle="dropdown" href="#"><h2 class="dropdauntekst">
											<img src="/wp-content/themes/macola-theme/img/caret.png" style="margin-bottom: 4px; margin-right: 4px;">

											
											<?php
											if(isset($pro)&& $pro != ""){
											
											$obj = get_term_by( 'slug', $pro , 'artikl_proizvodjac' );
											echo $obj->name;  }
											else { echo 'Proizvođači'; }
											?></h2>
									<div class="caret-border" style="display: none;">
										<b class="caret"></b>
									</div>
									</a>
									<ul class="dropdown-menu">

										<?php
											echo '<li><a href ="?articleCat='.$cat.'&articleDev='.$dev.'&articlePro=">Svi proizvođači</a></li>';

											foreach($prodropdown as $catt){	
													echo '<li><a href="?articleCat='.$cat.'&articleDev='.$dev.'&articlePro='.$catt->name.'">'.$catt->name.'</a></li>';		} ?>										
										
									</ul>
							</li>
						</ul>
					</div>
			</div>
	</div>			

		
<!-- IZBORNIK ZAVRSAVA OVDE -->

<div class="category-navigation">

<!-- BREADCRUMB POCINJE OVDE -->
	
<?php $cattt = get_term_by( 'slug', $cat , 'artikl_kategorija' );
	  $devv = get_term_by( 'slug', $dev , 'artikl_uredjaj' );
	  $proo = get_term_by( 'slug', $pro , 'artikl_proizvodjac' );?>

<div class="row-fluid category-address breadcrumbartikl" style=" margin-top: 14px; "><div class="span12" style=" margin-left: 12px;">
					<h4><a href="<?php echo home_url(); ?>">Naslovna Strana</a>
					<img src="/wp-content/themes/macola-theme/img/breadcrumb.png" style="margin-left: 4px; margin-right: 4px;">
					 <a href="?articleCat=&articleDev=&articlePro=">Katalog Artikala</a>
					<img src="/wp-content/themes/macola-theme/img/breadcrumb.png" style="margin-left: 4px; margin-right: 4px;">
					  <?php if(isset($cat) && $cat != ""){ echo '<a href="?articleCat='.$cat.'&articleDev=&articlePro=">'.$cattt->name.'</a>';} else { echo '<a href="?articleCat=&articleDev=&articlePro=">Sve Kategorije</a>';} ?>
					<img src="/wp-content/themes/macola-theme/img/breadcrumb.png" style="margin-left: 4px; margin-right: 4px;">
					  <?php if(isset($dev) && $dev != ""){ echo '<a href="?articleCat='.$cat.'&articleDev='.$dev.'&articlePro=">'.$devv->name.'</a>';} else { echo '<a href="?articleCat='.$cat.'&articleDev=&articlePro=">Svi Uređaji</a>';} ?>
					<img src="/wp-content/themes/macola-theme/img/breadcrumb.png" style="margin-left: 4px; margin-right: 4px;">
					  <?php if(isset($pro) && $pro != ""){ echo '<a href="?articleCat='.$cat.'&articleDev='.$dev.'&articlePro='.$proo->name.'">'.$proo->name.'</a>';} else { echo '<a href="?articleCat='.$cat.'&articleDev='.$dev.'&articlePro=">Svi Proizvođači</a>';} ?>						 </h4>											
</div>
</div>

<!-- BREADCRUMB ZAVRSAVA OVDE -->

<!-- ORANGE BOX POCINJE OVDE -->

<div class="row-fluid category-address breadcrumbartikl btn-warning" style=" margin-top: 14px; ">



<?php if($row_num == 0) { echo '<h2 class="centertag" style="margin-top: 50px;">Na žalost, odabrani proizvođač nema u ponudi tražene artikle.<br>Pokušajte ponovo sa drugačijim kriterijumima pretrage.</h2>

		<div class="centertag" style="margin-top: 50px; margin-bottom:50px;"><a href="javascript: window.history.go(-1)"><button class="btn btn-info" type="button">< Prethodna strana</button></a>
		<a href="http://www.macola.rs/dodaci/?articleCat=specijalna-ponuda&articleDev=&articlePro="><button class="btn btn-success" type="button">Specijalna Ponuda ></button></a></div>
		
		
		';} else {?>

<?php if ($cat!=='specijalna-ponuda' & $cat!=='novo') {echo '<div class="span10 offset1 centertag" style="margin-bottom:10px; margin-top:10px;"><h3>Dobrodošli na Macola online katalog. Klikom na tri dugmeta iznad možete sortirati po kategorijama, uređaju koji imate ili proizvođaču. Neka potraga počne! :)</h3></div>';} ?>


  <?php if ($cat=='specijalna-ponuda') {echo '<div class="span10 offset1 centertag" style="margin-bottom:10px; margin-top:10px;"><h3>Na ovoj strani se prodaje nova oprema ili oprema koje je bila upotrebljena u svrhu demonstracije proizvoda pod specijalnim uslovima sa značajno sniženom cenom.<br><strong>Sva oprema ima punu garanciju od datuma kupovine, Apple oprema 24 meseca, profesionalne kamere 36 meseci. Nadamo se da će vam ove stvari biti od koristi.</h3></div>';} ?>

<?php if ($cat=='novo') {echo '<div class="span10 offset1 centertag" style="margin-bottom:10px; margin-top:10px;"><h3>U ovoj kategoriji možete pronaći prinove našoj ponudi. Macola uvek stremi ka tome da vam donese najneobičniju, najkorisniju i najjeftiniju ponudu dodataka i uređaja. Rado prihvatamo vaše predloge i sugestije, i želimo da dovedemo na srpsko tržište one dodatke koji baš vama trebaju.</h3></div>';} }?>


</div>

<!-- ORANGE BOX ZAVRSAVA OVDE -->

<!-- PAGINACIJA POCINJE OVDE -->

		<div class="row-fluid">
		<div class="span12 centertag"style=" margin-left: 0; margin-top: 10px; margin-bottom:10px;">

				<?php if($page_num!=0) { ?>
					<div class="pagination" style="margin:0;">
						<ul>
							<?php if($curr_page!=0) {?>
							<li><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $_GET['curr_page']-1;?>">&laquo;</a></li>
							<?php }?>
							<?php for($j=1; $j<=$page_num; $j++) { 
							$p=$_GET['curr_page']+1;
							if($p!=$j) {  ?>
							<li><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $j-1;?>"><?php echo $j; ?></a></li><?php } else { ?><li class="active"><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $j-1;?>"><?php echo $j; ?></a></li><?php }?>
							<?php } ?>
							<?php if($curr_page!=$page_num-1) {?>
							<li><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $_GET['curr_page']+1;?>">&raquo;</a></li>
							<?php }?>
						</ul>
					</div>
					<?php } ?>
					
				
		</div>
		</div>

<!-- PAGINACIJA ZAVRSAVA OVDE -->

<!-- ARTIKLI POCINJU OVDE -->
<div class="row-fluid">
<hr style="margin-bottom:20px;">
</div>

<?php $count=0; for ($j=0; $j < $row_num ; $j++) { $count++; ?>
<div class="row-fluid dodaci-red">
<!-- ARTIKL #1 -->
<?php for ($rednibroj = 0; $rednibroj < 4; $rednibroj++) { ?>
<?php if(isset($myposts[$j*4+$rednibroj + $_GET['curr_page']*20])) { ?>
<a class="open" title="<?php echo $j, $rednibroj;?>"  data-id="<?=$myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID?>"  href="<?php echo get_permalink($myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID); ?>">
<div class="span3">
<div class="dodaci-box" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">
	<div class="dodaci-slika centertag"><?php echo get_the_post_thumbnail($myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID, array(175,175)); ?></div>
<h3 class="dodaci-naslov" style=""><?php echo $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->post_title; ?></h3>
<?php 
$broj_rata = get_field('broj_rata', $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID);
if($broj_rata=='') { $broj_rata = 12; } else {};
$rata = str_replace(",00", "", get_field('cena', $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID));
$rata = str_replace(".", "", $rata);
$rata = $rata / $broj_rata;
$rata = round($rata);
$rata = number_format($rata, 0, ',', '.');
 ?>
<div class="dodaci-cena smalltext"><strong><?php the_field('cena', $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID);?><?php if(isset($rata) && $rata !=0 && $broj_rata!=1) {?>  <span style="float:right; color:red;">(<?php echo $rata; ?> mesečno)</span><?php } ?></strong></div>
<div class="dodaci-podnaslov smalltext"><?php the_field('kratak_opis', $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID);?></div>
</div></div></a>

<!-- ARTIKLI LAJTBOX POCINJU OVDE -->
<div id="lightbox" class="lightbox" style="display: none;">
</div>
<!-- ARTIKLI LAJTBOX ZAVRSAVAJU OVDE -->

<?php } ?>
<?php } ?>
</div>
<?php } ?>
<!-- ARTIKLI ZAVRSAVAJU OVDE -->




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




//FUNKCIJE
$("a.open").click(function(e) {
    e.preventDefault();
    const $lightbox = $("#lightbox"),
        $clickedEl = $(e.currentTarget);
    $lightbox.after( theShadow );
    $lightbox.show();
    $("#lightbox-shadow").show();
    document.getElementById("header2").style.visibility= 'hidden';
    $('body').css('overflow', 'hidden');
    $('body').css('padding-right', '15px');
    $lightbox.empty();
    $lightbox.append('<p class="ajaxloading">Učitavanje...</p>');
    $.ajax({
        type: 'POST',
        url: 'http://www.macola.rs/ajax/',
        evalScripts: true,
        dataType: 'html',
        data: { post_id: $clickedEl.attr('data-id') },
        success:function(data){
            $lightbox.empty();
            $lightbox.append(data);
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
		<div class="span12 centertag"style=" margin-left: 0; margin-bottom: 20px;">
				<?php if($page_num!=0) { ?>
					<div class="pagination" style="margin:0;">
						<ul>
							<?php if($curr_page!=0) {?>
							<li><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $_GET['curr_page']-1;?>">&laquo;</a></li>
							<?php }?>
							<?php for($j=1; $j<=$page_num; $j++) { 
							$p=$_GET['curr_page']+1;
							if($p!=$j) {  ?>
							<li><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $j-1;?>"><?php echo $j; ?></a></li><?php } else { ?><li class="active"><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $j-1;?>"><?php echo $j; ?></a></li><?php }?>
							<?php } ?>
							<?php if($curr_page!=$page_num-1) {?>
							<li><a href="?articleCat=<?php echo $cat; ?>&articleDev=<?php echo $dev; ?>&articlePro=<?php echo $proo->name; ?>&curr_page=<?php echo $_GET['curr_page']+1;?>">&raquo;</a></li>
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