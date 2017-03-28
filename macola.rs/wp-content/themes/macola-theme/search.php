 <?php 
/*
Template Name: Search Template
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
					<h1> <?php printf( __( 'Pretraga za termin: %s'), '<span>' . get_search_query() . '</span>' ); ?> </h1>
				</div>
			</div>
			<div class="post-content-text" style="margin-bottom:20px;">
			
			<?php $s = get_search_query(); ?>

	<div class="search">
		<div class="categoryThumbs">

		
<?php query_posts("s='$s'&category_name=apple_dev"); ?>
				<?php if (have_posts()) { ?>
					<?php $blogResults=0; ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php
						$blogResults++;
					?>
				<?php endwhile; ?>				
<div class="row-fluid"><div class="span12"><h2> Apple Uređaji:</h2></div></div>
<div class="row-fluid" style=" padding-left: 0px; ">
		<?php $i = 0;?>
		<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>">
<div class="span3 centertag" style="width: 222px;">
<div class="vesti-box" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">
	<div class="box-slika" style="width: 190px; background-image: url('<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 186, 171, true )); echo $src[0]; ?>');"></div>
	<h3 class="vesti-naslov" style=""><?php the_title(); ?></h3>
	<div class="vesti-podnaslov smalltext"><?php echo substr(get_the_excerpt(), 0,130); ?> [...]</div>

</div>
</div>
</a>
		<?php $i++;?>
		<?php if($i>3){break;}?>
		<?php endwhile; ?>

</div>
<hr style="margin-top:20px; margin-bottom:20px;">
<?php } else { $prvi='nema'; }?>

		

				
<?php query_posts("s='$s'&category_name=artikli"); ?>
				<?php if (have_posts()) { ?>
					<?php $blogResults=0; ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php
						$blogResults++;
					?>
				<?php endwhile; ?>				
<div class="row-fluid"><div class="span12"><h2>Ostali artikli:</h2></div></div>
<div class="row-fluid">
		<?php $i = 0;?>
		<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>">
<div class="span2 centertag" style="overflow: hidden; width:148px;">
<div class="vesti-box" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">
	<div class="box-slika" style="width: 110px; height: 100px; background-image: url('');"><?php the_post_thumbnail(array( 100, 100, true )); ?></div>
	<h3 class="vesti-naslov" style=""><?php the_title(); ?></h3>
	<div class="vesti-podnaslov smalltext"><?php echo substr(get_the_excerpt(), 0,130); ?> [...]</div>

</div>
</div>
</a>
		<?php $i++;?>
		<?php if($i>5){break;}?>
		<?php endwhile; ?>

</div><?php } else { $drugi='nema'; }?>		

<?php query_posts("s='$s'&category_name=pro_oprema"); ?>
				<?php if (have_posts()) { ?>
					<?php $blogResults=0; ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php
						$blogResults++;
					?>
				<?php endwhile; ?>				
<div class="row-fluid"><div class="span12"><h2>Profesionalna Oprema:</h2></div></div>
<div class="row-fluid" style="display:table;">
		<?php $i = 0;?>
		<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>">
<div class="span2 centertag" style="overflow: hidden; width:148px;">
<div class="vesti-box" style="height:240px; overflow:hidden;" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">
	<div class="box-slika" style="width: 110px; height: 100px; background-image: url('');"><?php the_post_thumbnail(array( 100, 100, true )); ?></div>
	<h3 class="vesti-naslov" style=""><?php the_title(); ?></h3>
	<div class="vesti-podnaslov smalltext"><?php echo substr(get_the_excerpt(), 0,130); ?> [...]</div>

</div>
</div>
</a>

		<?php $i++;?>
		<?php if($i>5){break;}?>
		<?php endwhile; ?>

</div>		<hr style="margin-top:20px; margin-bottom:20px;">

<?php } else { $treci='nema'; }?>	
		
		<?php query_posts("s='$s'&category_name=posts"); ?>
				<?php if (have_posts()) { ?>
					<?php $blogResults=0; ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php
						$blogResults++;
					?>
				<?php endwhile; ?>				
<div class="row-fluid"><div class="span12"><h2>Vesti i članci:</h2></div></div>
<div class="row-fluid" style=" padding-left: 0px; margin-bottom:0px; ">
		<?php $i = 0;?>
		<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>">
<div class="span3 centertag" style="width: 222px;">
<div class="vesti-box" style="height:310px; overflow:hidden;" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">
	<div class="box-slika" style="width:190px; background-image: url('<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 260, 260, true )); echo $src[0]; ?>');"></div>
	<h3 class="vesti-naslov" style=""><?php the_title(); ?></h3>
	<div class="vesti-podnaslov smalltext"><?php echo substr(get_the_excerpt(), 0,130); ?> [...]</div>

</div>
</div>
</a>
		<?php $i++;?>
		<?php if($i>3){break;}?>
		<?php endwhile; ?>

</div>
<?php } else { $cetvrti='nema'; }?>

<?php if($prvi==$drugi && $prvi==$treci && $prvi==$cetvrti && $prvi=='nema') { echo '<div class="row-fluid category-address breadcrumbartikl alert alert-warning" style="margin-bottom:30px; margin-top: 14px; color:black;"><h2 class="centertag" style="margin-top: 50px;">Na žalost, vaša pretraga nije izdvojila ni jedan artikl.<br>Pokušajte sa drugim terminom.</h2><div class="centertag" style="margin-top: 50px; margin-bottom:50px;"><a href="javascript: window.history.go(-1)"><button class="btn btn-info" type="button">< Prethodna strana</button></a>
		<a href="http://www.macola.rs/dodaci/?articleCat=specijalna-ponuda&articleDev=&articlePro="><button class="btn btn-success" type="button">Specijalna Ponuda ></button></a></div></div>' ;} ?>









			</div>
		</div>
			</div>

 <?php get_footer(); ?>