 <?php 
/*
Template Name: AJAX Template
*/

?> 
<?php 
/*session_start();*/

/* DA LI POSTOJI POST? */

if (!($_POST['tip'])) {
    echo("Access Forbidden. Return to <a href=\"http://www.macola.rs\" target=\"_self\">Macola Homepage</a>");
    exit;
}


/* QUERY ZA ARTIKLE POCINJE OVDE */

if($_POST['tip']=='dodaci') {

$cat = $_POST['articleCat'];
$dev = $_POST['articleDev'];
$pro = $_POST['articlePro'];

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

/* QUERY ZA ARTIKLE ZAVRSAVA OVDE */
/* QUERY ZA PRO OPREMU POCINJE OVDE */
} elseif ($_POST['tip']=='pro') { 

$cat = $_POST['cat'];
$tag = $_POST['tag'];

$pro = $_POST['pro'];
if($pro != ""){
	$args = array('post_type'=> array('pro_artikl'), 
	'tax_query'=>array(
		array(
	     'taxonomy' => $cat, 	
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

}
/* QUERY ZA PRO OPREMU ZAVRSAVA OVDE */
 else { echo 'Došlo je do greške, molimo vas obavestite nas o ovome, hvala. marko.mitranic@macola.rs';};

/* UZMI ID POSTA OD POSTA */
$title=$_POST['id'];
$j = substr($title, 0, 1);
$rednibroj = substr($title, 1);

/* PAGINACIJA */
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


$curr_page = $_POST['curr_page'];
$z =0 + $_POST['curr_page']*20;
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

<div class="row-fluid">
		<div class="product-images">
			<img src="<?php the_field('fancy_img1', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);?>">
			<img src="<?php the_field('fancy_img2', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);?>">
			<img src="<?php the_field('fancy_img3', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);?>">
		</div>
		<div class="product-text">
			<a title="Otvorite punu verziju stranice ovog artikla. Direktan link." class="fancybox-full centertag" href="<?php echo get_permalink($myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID); ?>" target="_blank">OTVORITE OVAJ ARTIKL U NOVOM PROZORU</a>
			<a href="javascript:void(0)" onclick="closeLightbox()" id="fensiboxclose">&nbsp</a>
		<div class="product-name">
			<h2><?php echo $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->post_title; ?></h2>
		</div>
		<div class="product-description">
			<?php echo apply_filters('the_content', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->post_content); ?>
		</div>
		<div class="product-price">
			<h4 class="centertag">
<?php 
$broj_rata = get_field('broj_rata', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);
if($broj_rata=='') { $broj_rata = 12; }
else {};
$rata = str_replace(",00", "", get_field('cena', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID));
$rata = str_replace(".", "", $rata);
$rata = $rata / $broj_rata;
$rata = round($rata);
$rata = number_format($rata, 0, ',', '.');



if(isset($rata) && $rata !=0 && $broj_rata!=1 && $_POST['tip']=='pro') { echo'<a href="http://www.macola.rs/nacini-placanja/" target="_blank"><p class="smalltext" style="color:red;"><strong>Već od '. $rata .' mesečno!</strong></p></a>';	}	
if(isset($rata) && $rata !=0 && $broj_rata!=1 && $_POST['tip']=='dodaci') { echo'<a href="http://www.macola.rs/nacini-placanja/" target="_blank"><p class="smalltext" style="color:red;"><strong>Već od '. $rata .' dinara mesečno!</strong></p></a>';	}		
					echo '<button type="button" class="btn btn-success">Cena: ';
						  echo the_field('cena', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);										  echo '</button><br><div style="color:red; font-size:11px;">';

						  echo the_field('usteda', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);
						
						?></div></h4></div>
<?php 
$posta = get_field('vezani', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);
if($posta) { ?>
<div class="centertag"><h3>Uz ovaj artikl preporučujemo vam i neke od sledećih proizvoda:</h3></div>
<div class="row-fluid" style="margin-top: 5px; margin-bottom:20px;">
    <?php foreach( $posta as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <div class="span4">
      	  <a href="<?php the_permalink(); ?>">
     	 	  <div style="border: solid 1px #5c5c5c; height: 85px; width:85px;">
	     	 	  <?php echo get_the_post_thumbnail( get_the_ID(), array(85,85)); ?>
	     	  </div>
	     	  <div class="centertag"><?php the_title(); ?></div>
	       </a>
        </div>
    <?php endforeach; ?>
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    </div>	
<?php } else {  

$args = array( 'post_type' => 'artikli','posts_per_page' => 3,'orderby' => 'rand' );
$rand_posta = get_posts( $args );
if( $rand_posta ): ?>
<div class="centertag"><h3>Ostali popularni artikli:</h3></div>
<div class="row-fluid" style="margin-top: 5px; margin-bottom:20px;">
    <?php foreach($rand_posta as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <div class="span4">
      	  <a href="<?php the_permalink(); ?>">
     	 	  <div style="border: solid 1px #5c5c5c; height: 85px; width:85px;">
	     	 	  <?php echo get_the_post_thumbnail( get_the_ID(), array(85,85)); ?>
	     	  </div>
	     	  <div class="centertag"><?php the_title(); ?></div>
	       </a>
        </div>
    <?php endforeach; ?>
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    </div>	
<?php endif; } ?>

												
<div class="row-fluid"><div class="span12">
<?php if(get_field('kompatibilno', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID)) { ?>
<h3>Kompatibilno sa:</h3></div></div>
<div class="row-fluid" style="margin-bottom:20px;">
<div class="span12">
													<?php
														$label = get_field('kompatibilno', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);?> 
														<div class="product-tags">
														<?php	foreach ($label as $labels) { ?>

														<span><?php echo $labels?></span>

														
														<?php } ?>
													</div>
														<?php } ?>

</div></div></div></div>