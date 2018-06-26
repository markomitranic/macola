 <?php 
/*
Template Name: Wysija TEMPLATE PAGE
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
			
			
<hr>
<div class="post-head">
				<div class="post-heading">
					<h1> <?php the_title(); ?> </h1>
				</div>
				<div class="post-date">
					<h4><?php echo the_field('podnaslov'); ?> </h4>
				</div>
			</div>
			<div class="row-fluid hero">
				<div class="span12 image centertag">
					<img src="<?php the_field('big_post_image'); ?>">
				</div>								
			</div>
			<div class="post-content">


				<div class="post-content-text">
					<h4>

<style>
.single-wysijap h1, .single-wysijap h2 {
color: aqua !important;
}
 
.single-wysijap p, .single-wysijap .entry, .single-wysijap .content-entry {
color: aqua !important;
}
</style>

<div class="row-fluid category-address breadcrumbartikl btn-warning" style="padding:20px; margin-top: 14px; ">
<div class="span12 centertag">
<?php
if($_REQUEST['action'] == 'subscribe'){ ?>
<h1>Uspešno ste se prijavili na našu mailing listu.</h1>
	Mi iz Macole volimo da ostanemo u kontaktu sa svojim prijateljima, kako bismo vam uvek ponudili najbolje. Kada imamo da ponudimo nešto novo, mi volimo i da se pohvalimo. Ovaj mail ste primili zato što se nalazite na našoj mailing listi. Ne želimo da vas zatrpavamo nepotrebnim, naša politika je da vam ovakve poruke šaljemo samo u slučajevima akcija ili velikih novosti koje vas mogu interesovati, i ne češće od jednom mesečno.
<?php
} elseif($_REQUEST['action'] == 'unsubscribe'){ ?>
<h1>Uspešno ste se odjavilisa naše mailing liste.</h1>
	Mi iz Macole volimo da ostanemo u kontaktu sa svojim prijateljima, kako bismo vam uvek ponudili najbolje. Kada imamo da ponudimo nešto novo, mi volimo i da se pohvalimo. Ovaj mail ste primili zato što se nalazite na našoj mailing listi. Ne želimo da vas zatrpavamo nepotrebnim, naša politika je da vam ovakve poruke šaljemo samo u slučajevima akcija ili velikih novosti koje vas mogu interesovati, i ne češće od jednom mesečno.
<?php
}
?>
</div></div>



					</h4>
				</div>
			</div>
		</div>
		

 <?php get_footer(); ?>