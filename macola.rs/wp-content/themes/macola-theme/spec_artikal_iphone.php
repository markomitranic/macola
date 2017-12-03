 <?php 
/*
Template Name: Specijanli artikl iPhone 
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

			<div class="row-fluid hero">
				<div class="span6 image">
					<img src="<?php the_field('big_post_image'); ?>">
				</div>								
			</div>

			<div class="beige grid4">
				<div class="row-fluid">
					<div class="span3">
						<div class="grid4-image-container">
							<img src="<?php the_field('img1'); ?>" > 
						</div>
					</div>
					<div class="span3">
						<div class="grid4-image-container">
							<img src="<?php the_field('img2'); ?>" > 
						</div>
					</div>
					<div class="span3">
						<div class="grid4-image-container">
							<img src="<?php the_field('img3'); ?>" > 
						</div>
					</div>
					<div class="span3">
						<div class="grid4-image-container">
							<img src="<?php the_field('img4'); ?>" > 
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3 grid4-heading">
						<h2><?php the_field('title1'); ?></h2>
					</div>
					<div class="span3 grid4-heading">
						<h2><?php the_field('title2'); ?></h2>
					</div>
					<div class="span3 grid4-heading">
						<h2><?php the_field('title3'); ?></h2>
					</div>
					<div class="span3 grid4-heading">
						<h2><?php the_field('title4'); ?></h2>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3 grid4-description">
						<div class="grid4-description">
							<?php the_field('content1'); ?>
						</div>
					</div>
					<div class="span3">
						<div class="grid4-description">
							<?php the_field('content2'); ?>
						</div>
					</div>
					<div class="span3">
						<div class="grid4-description">
							<?php the_field('content3'); ?>
						</div>
					</div>
					<div class="span3">
						<div class="grid4-description">
							<?php the_field('content4'); ?>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="beige prices" id="cenaPicker">
				<?php get_cenovnik(); ?>
			</div>

			<div class="grid2">
				<div class="row-fluid">
					<div class="span6 grid2-text">
						<div class="row-fluid grid2-textrow">
							<div class="grid2-heading">
								<h1><?php the_field('title5'); ?></h1>
							</div>
							<div class="grid2-description">
								<h3><?php the_field('content5'); ?></h3>
							</div>							
						</div>
						<div class="row-fluid">
							<div class="grid2-heading">
								<h1><?php the_field('title52'); ?></h1>
							</div>
							<div class="grid2-description">
								<h3><?php the_field('content52'); ?></h3>
							</div>
						</div>
					</div>
					<div class="span6 grid2-image-container">
						<img class="grid2-image" src="<?php the_field('img5'); ?>">
					</div>
				</div>
			</div>
			<hr>
			<div class="grid2">
				<div class="row-fluid">
					<div class="span6 grid2-image-container">
						<img class="grid2-image" src="<?php the_field('img6'); ?>">
					</div>
					<div class="span6 grid2-text-right">
						<div class="row-fluid grid2-textrow ">
							<div class="grid2-heading">
								<h1><?php the_field('title6'); ?></h1>
							</div>
							<div class="grid2-description">
								<h3><?php the_field('content6'); ?></h3>
							</div>							
						</div>
						<div class="row-fluid">
							<div class="grid2-heading">
								<h1><?php the_field('title62'); ?></h1>
							</div>
							<div class="grid2-description">
								<h3><?php the_field('content62'); ?></h3>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<hr>
			<div class="grid2">
				<div class="row-fluid">
					<div class="span6 grid2-text">
						<div class="row-fluid grid2-textrow">
							<div class="grid2-heading">
								<h1><?php the_field('title7'); ?></h1>
							</div>
							<div class="grid2-description">
								<h3><?php the_field('content7'); ?></h3>
							</div>							
						</div>
						<div class="row-fluid">
							<div class="grid2-heading">
								<h1><?php the_field('title72'); ?></h1>
							</div>
							<div class="grid2-description">
								<h3><?php the_field('content72'); ?></h3>
							</div>
						</div>
					</div>
					<div class="span6 grid2-image-container">
						<img class="grid2-image" src="<?php the_field('img7'); ?>">
					</div>
				</div>
			</div>
<hr>
			
			
			
			<div class="row-fluid iphonemenu hero">
				<div class="span12">
					<a href="<?php echo site_url(); ?>/iphone-x/">
						<img src="http://www.macola.rs/wp-content/uploads/2017/11/iphone-x-banner-1.jpg" alt="iPhone SE Prodaja Srbija">
					</a>
				</div>
				<div class="span12">
					<a href="<?php echo site_url(); ?>/iphone-8-iphone-8-plus/">
						<img src="http://www.macola.rs/wp-content/uploads/2017/10/iphone8-banner.jpg" alt="iPhone SE Prodaja Srbija">
					</a>
				</div>
				<div class="span6">
					<a href="<?php echo site_url(); ?>/iphone-7/">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2016/10/iphone7_menu.png" alt="">
					</a>
				</div>
				<div class="span6">
					<a href="<?php echo site_url(); ?>/iphone-7-plus/">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2016/10/iphone7plus_menu.png" alt="">
					</a>
				</div>
				<div class="span12">
					<a href="<?php echo site_url(); ?>/iphone-se/">
						<img src="http://www.macola.rs/wp-content/uploads/2016/04/iphoneSE_banner.png" alt="iPhone SE Prodaja Srbija">
					</a>
				</div>
				<div class="span6 iphonedodaci">
					<img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/iphone/iphoneaccs_menu.png" alt="">
				</div>
	 			<div class="span6 iphonedodaci">
	 				<div class="iphonedodaci2">
			 			<h1>Specijalizovani Dodaci</h1>
			 			<p>Ukoliko Vas zanimaju specijalizovani dodaci za iOS uređaje, posetite jednu od sledećih kategorija:</p>
						<ul>
							<li><a href="http://www.macola.rs/dodaci/?articleCat=zastite&articleDev=iphone-6&articlePro=">Futrole i zaštitne folije ></a></li>
							<li><a href="http://www.macola.rs/dodaci/?articleCat=slusalice&articleDev=&articlePro=">Slušalice i Beats by Dr. Dre ></a></li>
							<li><a href="http://www.macola.rs/dodaci/?articleCat=adapteri-i-kablovi&articleDev=iphone-6&articlePro=">Kablovi, adapteri, punjači ></a></li>
							<li><a href="http://www.macola.rs/dodaci/?articleCat=zvucnici&articleDev=&articlePro=">Zvučnici i audio oprema ></a></li>
							<li><a href="http://www.macola.rs/dodaci/?articleCat=ostalo&articleDev=iphone5&articlePro=">Ostalo, postolja, nosači ></a></li>
						</ul>
					</div>
	 			</div>
				<div class="span6">
					<a href="<?php echo site_url(); ?>/iphone-6s/">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/10/iphone6s_menu.png" alt="">
					</a>
				</div>
				<div class="span6">
					<a href="<?php echo site_url(); ?>/iphone-6s-plus/">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/10/iphone6splus_menu.png" alt="">
					</a>
				</div>
 			</div>



<?php get_footer(); ?>