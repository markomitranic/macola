<?php 
/*
Template Name: Home Template
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
					<a href="https://macola.rs/mac/">
					<img src="https://macola.rs/wp-content/uploads/2014/12/imacmenuicon.png">
					<div class="menutext">Mac</div>
					</a>
				</div>
				<div class="span2">
					<a href="https://macola.rs/ipad/">
					<img src="https://macola.rs/wp-content/uploads/2014/12/ipadmenuicon.png">
					<div class="menutext">iPad</div>
					</a>
				</div>
				<div class="span2">
					<a href="https://macola.rs/iphone/">
					<img src="https://macola.rs/wp-content/uploads/2015/03/iphonemenuicon.png">
					<div class="menutext">iPhone</div>
					</a>
				</div>
				<div class="span2">
					<a href="https://macola.rs/dodaci/?articleCat=novo&articleDev=&articlePro=">
					<img src="https://macola.rs/wp-content/uploads/2014/12/headphonemenuicon.png">
					<div class="menutext">Novo u Ponudi</div>
					</a>
				</div>
				<div class="span2">
					<a href="https://macola.rs/dodaci/?articleCat=specijalna-ponuda&articleDev=&articlePro=">
					<img src="https://macola.rs/wp-content/uploads/2014/12/percentmenuicon.png">
					<div class="menutext">Specijalna Ponuda</div>
					</a>
				</div>
				<div class="span2">
					<a href="https://macola.rs/profesionalna-oprema/">
					<img src="https://macola.rs/wp-content/uploads/2014/12/reelmenuicon.png">
					<div class="menutext">Prof. Oprema</div>
					</a>
				</div>

			</div>

		</div>	
		
		</div>	
	</div>
	<div class="content">
		<div class="container">
<header><hgroup>
			<div id="slider" class="carousel slide">
			<?php query_posts( array( 'post_type' => 'slider') ); $i=1; ?>
<?php if ( have_posts() ) : ?>
				<div class="carousel-inner">
<?php while ( have_posts() ) : the_post(); ?>

					<div class="item <?php					
					 if($i==1) echo 'active'; ?> slider-glavni-img <?php echo the_field('ravnanje_teksta'); ?>" style="background-image: url('<?php echo the_field('slika'); ?>');">
					<div class="slider-box" style="left: <?php echo the_field('pozicija_x'); ?>%; top: <?php echo the_field('pozicija_y'); ?>%; <?php if(get_field('pozadina')) { ?>background-image: url('<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/navigation_background.png'); padding: 20px;<?php } ?>">
						<h1 style="color:<?php echo the_field('boja_naslova'); ?>;"><?php echo the_field('naslov'); ?></h1>
						<h2 class="slider-podnaslov" style="color:<?php echo the_field('boja_podnaslova'); ?>;"><?php echo the_field('podnaslov'); ?></h2>
						<?php  if(get_field('tekst_dugmeta')) { ?>
						<a href="<?php echo the_field('adresa_linka') ?>" target="_blank" class="slider-dugme"><?php echo the_field('tekst_dugmeta') ?></a><?php } ?>
					</div>
					</div>
					<?php $i++;?>
		<?php 
			
 endwhile;  $i=1;?>




				</div>
				<ol class="carousel-indicators">
				<?php while ( have_posts() ) : the_post();?>
					<li id="<?php echo $i;?>" data-target="#slider" data-slide-to="<?php echo $i-1;?>" <?php if($i==1) {echo 'class="active"';}?>></li>
				<?php $i++; if($i>$wp_query->post_count){break;}
		endwhile;?>
				</ol>
				<?php endif; ?>
			</div>
</hgroup></header>
			<div class="news">
			<?php query_posts( array( 'post_type' => 'naslovna', 'posts_per_page' => 2) ); $i=1; ?>
<?php if ( have_posts() ) : ?>
				<div class="row-fluid">
<?php while ( have_posts() ) : the_post(); ?>

					<div class="span6 slider-img <?php echo the_field('ravnanje_teksta'); ?>" style="background-image: url('<?php echo the_field('slika'); ?>');">
					<div class="slider-box" style="left: <?php echo the_field('pozicija_x'); ?>%; top: <?php echo the_field('pozicija_y'); ?>%; <?php if(get_field('pozadina')) { ?>background-image: url('<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/navigation_background.png'); padding: 20px;<?php } ?>">
						<h1 style="font-size:36px; color:<?php echo the_field('boja_naslova'); ?>;"><?php echo the_field('naslov'); ?></h1>
						<p class="slider-podnaslov" style="color:<?php echo the_field('boja_podnaslova'); ?>;"><?php echo the_field('podnaslov'); ?></p>
						<?php  if(get_field('tekst_dugmeta')) { ?>
						<a href="<?php echo the_field('adresa_linka') ?>" target="_blank" class="slider-dugme"><?php echo the_field('tekst_dugmeta') ?></a><?php } ?>
					</div>
					</div>
				

					<?php $i++;?>
		<?php  endwhile; ?>
						</div>
				<?php endif; ?>
			<?php query_posts( array( 'post_type' => 'naslovna', 'posts_per_page' => 2, 'offset' => 2) ); $i=1; ?>
<?php if ( have_posts() ) : ?>
				<div class="row-fluid">
<?php while ( have_posts() ) : the_post(); ?>

					<div class="span6 slider-img <?php echo the_field('ravnanje_teksta'); ?>" style="background-image: url('<?php echo the_field('slika'); ?>');">
					<div class="slider-box" style="left: <?php echo the_field('pozicija_x'); ?>%; top: <?php echo the_field('pozicija_y'); ?>%; <?php if(get_field('pozadina')) { ?>background-image: url('<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/navigation_background.png'); padding: 20px;<?php } ?>">
						<h1 style="font-size:36px; color:<?php echo the_field('boja_naslova'); ?>;"><?php echo the_field('naslov'); ?></h1>
						<p class="slider-podnaslov" style="color:<?php echo the_field('boja_podnaslova'); ?>;"><?php echo the_field('podnaslov'); ?></p>
						<?php  if(get_field('tekst_dugmeta')) { ?>
						<a href="<?php echo the_field('adresa_linka') ?>" target="_blank" class="slider-dugme"><?php echo the_field('tekst_dugmeta') ?></a><?php } ?>
					</div>
					</div>

					<?php $i++;?>
		<?php  endwhile; ?>
						</div>
				<?php endif; ?>



			</div>
			<div class="social">
				<ul>
					<li><a href="#"><h1>Prijatelji Macole</h1></a></li>
					<li><a href="https://macola.rs/vesti/"><h1>Apple Vesti</h1></a></li>
					<li><a href="https://macola.rs/macola-na-socijalnim-mrezama/"><h1>Socijalne mreže</h1></a></li>
				</ul>
			</div>
			<div class="padding-content">
				<div class="row-fluid singleline-text">
					Naš cilj je da postanemo pravo mesto da naučite, da potražite pomoć i kupite Apple računar ili ceo profesionalni sistem.<br>
Za Apple radimo od 1988. uz prekid od 10 godina od 1991. do 2001. pa se nadamo da smo dovoljno kvalifikovani da taj cilj i ostvarimo.
				</div>
				<div class="row-fluid split2">
					<div class="span6 half half-left">
						Informisani smo o najnovijim Apple tehnologijama, a Vama su na usluzi
						naši Apple sertifikovani stručnjaci za servis i podršku.
						<br><br>
						Naš servis je savremen, dobro organizovan
						i kompletno opremljen po Apple standardima.
						<br><br>
						U našem Crossover ovlašćenom Apple trening centru možete pronaći
						kurseve u kojima će vas naši iskusni treneri ispratiti od osnova korišćenja
						do naprednog rada u profesionalnim programima.
						<br><br>
						Nakon ovoga, možete dokazati svoje znanje, položiti testove i dobiti
						internacionalno priznanje preko Apple sertifikata.
					</div>
					<div class="span6 half no-margins">
						<img src="https://macola.rs/wp-content/uploads/2017/02/mac_shop.jpg">
					</div>
				</div>
				<div class="row-fluid split2">
					<div class="span6 half">
						<a href="https://macola.rs/kontakt/"><img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/home/map.jpg"></a>
					</div>
					<div class="span6 half no-margins half-right">
						U našim izložbenim prostorima će vas sačekati kompletan asortiman
						Apple opreme, svi modeli Macintosh računara: iMac, Mac Pro, MacBook Pro
						i MacBook Air. Najbolji tablet računari na svetu Apple iPad Air i iPad mini sa Retina ekranom
						i najpoznatiji muzički plejer na svetu, iPod.
						Kod nas možete poručiti i posebno sastavljane BTO konfiguracije.
						<br><br>
						Mi stremimo da budemo drugačiji i da vam uvek ponudimo najzanimljiviju
						i najneobičniju dodatnu opremu, futrole torbe i gedžete, 
						po najboljim cenama.
						<br><br><br>
						Pronađite nas u samom Centru Beograda, kod Narodne Skupštine Srbije.
					</div>
				</div>
			</div>
		</div>
  
  <?php get_footer(); ?>