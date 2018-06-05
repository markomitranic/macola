<?php 
/*
Template Name: Izbornik Mac Template
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
			
			
<hr>

			<div class="row-fluid hero">
				<div class="span6 image">
					<img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/izbornik/hero_mac.png">
				</div>								
			</div>


			
<section class="padding-content izbornikGrid">
<?php 
$args = array( 'posts_per_page' => 9, 'orderby' => 'date', 'order' => 'DESC', 'category__in' => array(8));
$myposts = get_posts( $args );

$i = 0;
while($i < count($myposts)) {
    echo '
		<article class="izbornikItem">
			<a href="'.get_permalink( $myposts[$i]->ID).'">
				<div class="imgWrap">'.get_the_post_thumbnail($myposts[$i]->ID).'</div>
				<h2>'.$myposts[$i]->post_title.'</h2>
				<p>'.$myposts[$i]->post_content.'</p>
				<button>Saznaj Više ></button>
			</a>
		</article>';
    $i++;
} ?>
</section>

</div>


 <?php get_footer(); ?>

