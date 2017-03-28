<?php 
/*
Template Name: Pro Oprema Kategorija Template
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
					<a href="http://www.macola.rs/mac/">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/imacmenuicon.png">
					<div class="menutext">Mac</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/ipad/">
					<img src="http://www.macola.rs/wp-content/uploads/2014/12/ipadmenuicon.png">
					<div class="menutext">iPad</div>
					</a>
				</div>
				<div class="span2">
					<a href="http://www.macola.rs/iphone/">
					<img src="http://www.macola.rs/wp-content/uploads/2015/03/iphonemenuicon.png">
					<div class="menutext">iPhone</div>
					</a>
				</div>
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

	
if(!isset($_SESSION['tag'])){
	$_SESSION['tag'] = "macola_raid";
}





if(isset($_GET['cat'])){
		 $_SESSION['cat'] = $_GET['cat']; 
}
else{

}

$cat = $_SESSION['cat'];



$categoriesdropdown = get_categories(array('taxonomy'=> $cat,'hide_empty'=>1));
$tag = $_GET['tag'];
$pro = $_GET['pro'];





if(isset($pro)){
	$args = array('post_type'=> array('pro_artikl'), 
	'tax_query'=>array(
		array(
	     'taxonomy' => $_SESSION['cat'], 	
	     'field' => 'slug',
	     'terms' => $pro
	    )),
	    'posts_per_page'   => -1
	 );

}else{
	$args = array('post_type'=> array('pro_artikl'), 
	'tax_query'=>array(
		array(
	     'taxonomy' => 'pro_proizvodjac', 	
	     'field' => 'slug',
	     'terms' => $tag
	    )),
	    'posts_per_page'   => -1
	 );
}


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
$_SESSION['page'] = $curr_page;
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
	<div class="row-fluid pro_header catrow" style="background-image: url(http://www.macola.rs/wp-content/themes/macola-theme/img/pro_headers/<?php echo $tag; ?>.png);">
			<div class="post-head" style="margin-top:35px; margin-bottom:30px;">
				<div class="post-heading">
					<h1 style="background-color:white; display:inline;"><?php $obj = get_term_by( 'slug', $tag , 'pro_proizvodjac' );
												echo $obj->name;  ?>
					</h1>
				</div>
			</div>
	</div>			
			
			<div class="row-fluid centertag"style=" margin-top: 20px; ">
<div class="span9">
					<div class="category-nav">
						<ul>
							<li <?php if( $_GET["tag"] == "macola_raid") {?> class ="active" <?php } ?>><a href="?tag=macola_raid&cat=macola_cat">Macola RAID</a></li>
							<li <?php if( $_GET["tag"] == "blackmagic") {?> class ="active" <?php } ?>><a href="?tag=blackmagic&cat=blackmagic_cat">Blackmagic</a></li>
							<li <?php if( $_GET["tag"] == "atto") {?> class ="active" <?php } ?> ><a href="?tag=atto&cat=atto_cat">ATTO</a></li>
							<li <?php if( $_GET["tag"] == "aja") {?> class ="active" <?php } ?>><a href="?tag=aja&cat=aja_cat">AJA</a></li>
							<li <?php if( $_GET["tag"] == "jvc") {?> class ="active" <?php } ?>><a href="?tag=jvc&cat=jvc_cat">JVC</a></li>
							<li <?php if( $_GET["tag"] == "tools_on_air") {?> class ="active" <?php } ?>><a href="?tag=tools_on_air&cat=tools_on_air_cat">Tools on air</a></li>
							<li <?php if( $_GET["tag"] == "tangent_devices") {?> class ="active" <?php } ?>><a href="?tag=tangentdevices&cat=tangent_cat">TangentDevices</a></li>
							<li <?php if( $_GET["tag"] == "jlcooper") {?> class ="active" <?php } ?>><a href="?tag=jlcooper&cat=jlcooper_cat">JLCooper Electronics</a></li>
						</ul>
					</div></div>	
<div class="span3">
					<div class="category-nav drop-nav" style="width: 173px; margin-left:0;">
						<ul>
							<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
											
											<?php
											if(isset($pro)){
											
											$obj = get_term_by( 'slug', $pro , $_SESSION['cat'] );
											echo $obj->name;  }
											else { echo 'Odaberite kategoriju'; }
											?>
									<div class="caret-border">
										<b class="caret"></b>
									</div>
									</a>
									<ul class="dropdown-menu">

										<?php
											echo '<li><a href ="?tag='.$tag.'&cat='.$cat.'">Odaberite kategoriju</a></li>';

											foreach($categoriesdropdown as $catt){	
													echo '<li><a href="?tag='.$tag.'&cat='.$cat.'">'.$catt->name.'</a></li>';		} ?>
										
										
									</ul>
							</li>
						</ul>
					</div>
</div>	
			</div>
<!-- PAGINACIJA POCINJE OVDE -->
<div class="category-navigation">



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
<a class="open" title="<?php echo $j, $rednibroj;?>" href="<?php echo get_permalink($myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID); ?>" onclick="document.getElementById('lajtbox').style.display='block';">
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
<div class="dodaci-cena smalltext"><strong><?php the_field('cena', $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID);?><?php if(isset($rata) && $rata !=0) {?>  <span style="float:right; color:red;">(<?php echo $rata; ?> mesečno)</span><?php } ?></strong></div>
<div class="dodaci-podnaslov smalltext"><?php the_field('kratak_opis', $myposts[$j*4+$rednibroj + $_GET['curr_page']*20]->ID);?></div>
</div></div></a>

<div id="lightbox" class="lightbox" style="display: none;">
</div>

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
			evalScripts:true,
			dataType: 'html',
			data: { id: this.title,
					cat: '<?php echo $_GET['cat']; ?>',
					tag: '<?php echo $_GET['tag']; ?>',
					pro: '<?php echo $_GET['pro']; ?>',
					curr_page: '<?php echo $_GET['curr_page']; ?>',
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