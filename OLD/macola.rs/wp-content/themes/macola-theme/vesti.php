 <?php 
/*
Template Name: Arhiva Vesti Template
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
					<h4><?php echo the_date(); ?> </h4>
				</div>
			</div>
			<div class="post-content-text">
	<div class="search">
		<div class="categoryThumbs">

		
<?php query_posts("category_name=najnovije-vesti,"); ?>
				<?php if (have_posts()) { ?>
					<?php $blogResults=0; ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php
						$blogResults++;
					?>
				<?php endwhile; ?>	
		
<div class="row-fluid">
<div class="span12"><h2>Arhiva najnovijih članaka:</h2></div></div>
		<?php $i = 0;?>
		<div class="row-fluid">
		<?php while (have_posts()) : the_post(); ?>
						<?php if($i<15) : ?>	
<a href="<?php the_permalink() ?>">
<div class="span4 centertag"><div class="vesti-box" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">
	<div class="box-slika" style="background-image: url('<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 260, 260, true )); echo $src[0]; ?>');"></div>
	<h3 class="vesti-naslov" style=""><?php the_title(); ?></h3>
	<div class="vesti-podnaslov smalltext"><?php echo substr(get_the_excerpt(), 0,130); ?> [...]</div>

</div></div></a>
<?php $i++;?>		
<?php endif; ?>
<?php endwhile; ?>
</div>

<?php } ?>

<hr style="margin-top:20px; margin-bottom:20px;">

			</div>
		</div>
			</div>

 <?php get_footer(); ?>