 <?php 
/*
Template Name: Pro Artikl Template
*/

?> 

<?php get_header(); the_post(); ?>
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


<hr>
<div class="post-head">
				<div class="post-heading">
					<h1> <?php the_title(); ?> </h1>
				</div>
				<div class="post-date">
					<h4><?php the_field('kratak_opis', $myposts[$j*3 + $_GET['curr_page']*15]->ID);?> </h4>
				</div>
			</div>
			<div class="row-fluid hero">
				<div class="span6 image">
				</div>								
			</div>
			<div class="post-content">
				<div class="post-content-text">
				<div class="row-fluid">
				<div class="span6">
				<img src="<?php the_field('fancy_img1', $myposts[$j*3 + $_GET['curr_page']*15]->ID);?>">
				<img src="<?php the_field('fancy_img2', $myposts[$j*3 + $_GET['curr_page']*15]->ID);?>">
				<img src="<?php the_field('fancy_img3', $myposts[$j*3 + $_GET['curr_page']*15]->ID);?>">
				</div>
				<div class="span6">
						<div class="centertag" style="margin-top: 20px; margin-bottom:20px;"><a href="javascript: window.history.go(-1)"><button class="btn btn-info" type="button" style="width:200px;">< Prethodna strana</button></a></div>
					<h4>
					<?php echo get_the_terms( $id, $taxonomy ); ?> 
						<?php the_content() ?>
						
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





if(isset($rata) && $rata !=0 && $broj_rata!=1) { echo'<a href="http://www.macola.rs/nacini-placanja/" target="_blank"><p class="smalltext" style="color:red;"><strong>Već od '. $rata .' mesečno!</strong></p></a>';	}		
					echo '<button type="button" class="btn btn-success">Cena: ';
						  echo the_field('cena', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);										  echo '</button><br><div style="color:red; font-size:11px;">';

						  echo the_field('usteda', $myposts[$j*4+$rednibroj + $_POST['curr_page']*20]->ID);
						
						?></div></h4>
						
						
</p>
					
					
				</div>
				</div>
			</div>
		</div>
		

 <?php get_footer(); ?>