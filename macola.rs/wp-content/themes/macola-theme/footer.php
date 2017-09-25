<footer>		<div class="footer">
			<div class="widgets">
				<span class="widget-item">

					<div class="widget-content">
					<h1 class="widget-name" style="font-size: 18px;">Maloprodaja i Servis:</h1>
						<a href="https://www.google.com/maps/place/Macola+Apple+Solution+Expert/@44.8168117,20.4516575,15z/data=!4m5!1m2!2m1!1sapple+servis!3m1!1s0x475a7aaf57cab421:0x57ef2650f5a7333b?hl=en-US" target="_blank">
						Kneza Miloša 2<br>
						11000 Beograd, Srbija<br>
						011/33-49-298<br></a>
					<h1 class="widget-name" style="font-size: 18px;">Obuka:</h1>
						<br><a href="https://www.google.com/maps/place/Macola+Apple+Solution+Expert/@44.8168117,20.4516575,15z/data=!4m5!1m2!2m1!1sapple+servis!3m1!1s0x475a7aaf56415227:0xe4a538f9895b390?hl=en-US" target="_blank">
						Andrićev Venac 12<br>
						zgrada Zadužbine Univerziteta u Beogradu<br>
						11000 Beograd, Srbija<br>
						011/30-38-710</a>
					</div>
					

					<div class="widget-content centertag">
										<div class="smalltext" style=" margin-top: 20px; ">Ukucajte adresu i pritisnite enter</div>

						<h2></h2>

					</div>
				</span>
				<span class="widget-item">
					<h1 class="widget-name" style="font-size: 18px;">Aktuelno u Macoli:</h1>
					<div class="widget-content">
						<?php query_posts( array( 'cat' => 6, 'posts_per_page' => 3) ); ?>
 							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<a href="<?php the_permalink();?>">
							<div class="post">
							<div class="post-image"><?php the_post_thumbnail( 'footer' );?></div>
				
								<div class="post-description">
									<div class="post-name"><h2 class="footerheader"><?php the_title(); ?></h2></div>
									<?php $content = get_the_content(); $content = strip_tags($content); ?>

									<div class="post-text" style="font-size: 10px; padding-top:5px; line-height: 10px;"><?php echo substr(get_the_excerpt(), 0,90); ?></div>
								</div>
							
							</div> 
						</a>

						<?php endwhile;?>
        						<?php endif;?>		
					</div>
				</span>
				<span class="widget-item">
					<h1 class="widget-name" style="font-size: 18px;">Najnovije vesti:</h1>
					<div class="widget-content">
						<?php query_posts( array( 'cat' => 9, 'posts_per_page' => 3) ); ?>
 							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 						<a href="<?php the_permalink();?>">		
							<div class="post">

								<div class="post-image"><?php the_post_thumbnail( 'footer' );?></div>
								<div class="post-description">
									<div class="post-name"><h2 class="footerheader"><?php the_title(); ?></h2></div>
									<?php $content = get_the_content(); $content = strip_tags($content); ?>
									<div class="post-text" style="font-size: 10px; padding-top:5px; line-height: 10px;"><?php echo substr(get_the_excerpt(), 0,90); ?></div>
								</div>
							</div>
						</a>
						<?php endwhile;?>
        						<?php endif;?>		
					</div>
				</span>
			</div>
			<nav><div class="row-fluid"><div class="span12">
			<?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?></div></div></nav>

			<div class="row-fluid" style="margin-bottom:15px;"><div class="span12 centertag">
			<div id="menu-item-266" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-266"><a title="Visit us on Facebook" href="https://www.facebook.com/MacolaAppleSrbija">facebook</a></div>
			<div id="menu-item-267" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-267"><a title="Follow us on Instagram" href="http://instagram.com/macolastore">Instagram</a></div>
			<!-- <div id="menu-item-268" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-268"><a title="Follow us on Twitter" href="https://twitter.com/Macola_Store">Twitter</a></div>  -->

			</div></div>
			
			<div class="made-on-mac">
				<img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/made_on_mac.png" alt="Logo">
			</div>
		</div>
	</div>
	


</footer>
</script>  
<?php wp_footer(); ?>
	<!-- Start of StatCounter Code for Default Guide -->
	<script type="text/javascript">
	var sc_project=196692; 
	var sc_invisible=1; 
	var sc_security="fe309534"; 
	var sc_https=1; 
	var scJsHost = (("https:" == document.location.protocol) ?
	"https://secure." : "http://www.");
	document.write("<sc"+"ript type='text/javascript' src='" +
	scJsHost+
	"statcounter.com/counter/counter.js'></"+"script>");
	</script>
	<noscript><div class="statcounter"><a title="shopify
	analytics tool" href="http://statcounter.com/shopify/"
	target="_blank"><img class="statcounter"
	src="//c.statcounter.com/196692/0/fe309534/1/" alt="shopify
	analytics tool"></a></div></noscript>
	<!-- End of StatCounter Code for Default Guide -->	
</body>
</html>