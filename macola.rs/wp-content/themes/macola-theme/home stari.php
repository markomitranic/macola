<?php 
/*
Template Name: Home stari Template
*/

?> 


<?php get_header(); ?>


			<div id="slider" class="carousel slide">
				<div class="carousel-inner centertag">
				
<iframe class="centertag" style="margin: 0 auto;" width="853" height="480" src="//www.youtube.com/embed/WZjI83TwEic?autoplay=1&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
<div class="span12 centertag" style="margin-top:20px; margin-bottom:30px;">U petak 24. januara Macintosh je napunio 30 godina.
Tim povodom vam pokazujemo video iz našeg muzeja koji je napravljen petog oktobra 2012. na godišnjicu smrti Stiva Džobsa. Kroz istoriju Apple-a vas vodi Pop vlasnik МАЦОЛЕ , a kompjuteri koje vam pokazuje su iz njegove privatne zbirke koju je skupljao kroz sve godine koje je proveo radeći za Apple. Većina od vas zna da je zgrada u kojoj je bio muzej izgorela 22. decembra 2012. godine posle našeg zajedničkog veselog dočeka smaka sveta uz Zemlju Gruva. Mi smo sada našli novo mesto za muzej u Domu Omladine Beograda i muzej će svima biti besplatno dostupan uskoro, tako da će oni mladji imati jedinstvenu priliku da vide vremešne stare Macintosh-e koji besprekorno rade (popravili smo sve one koji na snimku ne rade).</div>
				
							</div>
			<div class="news">

				<?php query_posts( array( 'cat' => 6, 'posts_per_page' => 3) ); $i=1; ?>
 							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 							<?php if(i!=3) { $i++; ?>

						<a href="<?php the_permalink();?>">
				<span class="item">
					<div class="postname">
						<h2 class="postheading"><?php the_title();?></h2>
						<div class="headingafter">
						<?php $content = get_the_content(); $content = strip_tags($content); ?>
							<p><?php echo substr($content, 0, 120); ?></p>
						</div>
					</div>
					<div class="postimage">
						<?php the_post_thumbnail(); ?>
					</div>
				</span></a>
							<?php } else { ?>

			
				<span class="item lastitem">
					<div class="postname">
						<h2 class="postheading"><?php the_title();?></h2>
						<div class="headingafter">
						<?php $content = get_the_content(); $content = strip_tags($content); ?>
							<p><?php echo substr($content, 0, 120); ?></p>
						</div>
					</div>
					<div class="postimage">
						<?php the_post_thumbnail(); ?>
					</div>
				</span>
							<?php } ?>
							   <?php endwhile;?>
        							<?php endif;?>


			</div>
			<div class="social">
				<ul>
					<li><a href=""><h1>Prijatelji Macole</h1></a></li>
					<li><a href=""><h1>Aktuelno u Macoli</h1></a></li>
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
						<img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/home/mac_shop.jpg">
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
						Pronađite nas na dve loakcije u Beogradu:
						<br><br>
						- U samom centru grada kod skupštine
						<br><br>
						- Kao i na Novom Beogradu u YU Biznis centru
					</div>
				</div>
			</div>
		</div>
  
  <?php get_footer(); ?>