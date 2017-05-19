 <?php 
/*
Template Name: Single_Post (vest) Template
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
			<div class="row-fluid hero">
				<div class="span12 image">
					<img src="<?php the_field('big_post_image'); ?>">
				</div>								
			</div>
			<div class="post-content" style="padding-top: 10px;">


				<div class="post-content-text">
					<h4>
					<div class="row-fluid">
						<div class="span12 centertag" style="margin-top: 20px; margin-bottom:20px;"><a href="http://www.macola.rs/vesti/"><button class="btn btn-info" type="button" style="width:200px;">< Arhiva ostalih vesti</button></a>
						<a href="http://www.macola.rs/dodaci/?articleCat=novo&articleDev=&articlePro="><button class="btn btn-success" type="button" style="width:200px;">Novo u ponudi ></button></a></div></div>
						<?php the_content() ?>
					</h4>
					
				</div>
				<div class="post-tags">

					<?php
							$posttags = get_the_tags();
								if ($posttags) { ?> 
									<h3 class="post-tags-thead">Tagovi:</h3>
  									<?php	foreach($posttags as $tag) { ?>
							    	 <span class="post-tag"><h5><?php echo $tag->name;?></h5></span>
							  		<?php } } ?>
							
				

				</div>
									<div class="row-fluid">
						<div class="span12 centertag" style="margin-top: 20px; margin-bottom:30px;"><a href="http://www.macola.rs/vesti/"><button class="btn btn-info" type="button" style="width:200px;">< Arhiva ostalih vesti</button></a>
						<a href="http://www.macola.rs/dodaci/?articleCat=novo&articleDev=&articlePro="><button class="btn btn-success" type="button" style="width:200px;">Novo u ponudi ></button></a></div></div>
			</div>
		</div>
		
		
		
		

		
		
		
<?php $args = array( "category_name=najnovije-vesti,",'posts_per_page' => 6,'orderby' => 'desc' );
$rand_posta = get_posts( $args );
if( $rand_posta ): ?>
<div class="row-fluid centertag">
<h3>Najnovije vesti i članci:</h3></div>
<div class="row-fluid centertag" style="margin-top: 5px; margin-bottom:20px; margin-left:46px;">
    <?php foreach($rand_posta as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <a href="<?php the_permalink() ?>">
        <div class="span2 centertag" style="overflow: hidden; width:148px;">
<div class="vesti-box" style="height:260px; overflow:hidden;" onmouseover="this.style.border = '1px solid #dcdcda'; this.style.margin = '0px';" onmouseout="this.style.border = '0'; this.style.margin = '1px';">     	 	  <div class="box-slika" style="width: 110px; height: 100px; background-image: url('');"><?php the_post_thumbnail(array(100, 100, true )); ?></div>
	<h3 class="vesti-naslov" style=""><?php the_title(); ?></h3>
	<div class="vesti-podnaslov smalltext"><?php echo substr(get_the_excerpt(), 0,130); ?> [...]</div>
</div>
          </div>
          </a>
    <?php endforeach; ?>
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
   	</div>
<?php endif; ?>
		
		
		
		
		

 <?php get_footer(); ?>