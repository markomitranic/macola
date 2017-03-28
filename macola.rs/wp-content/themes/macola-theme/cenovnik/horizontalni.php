

	<?php if (have_rows('blok')) : ?>

			<?php while (have_rows('blok')) : 
				the_row();
				$image = get_sub_field('slika')['url'];
				$color = get_sub_field('boja_segmenta');
				$headline = get_sub_field('naslov');
				$description = get_sub_field('opis');
				$products = get_sub_field('ponuda');
				$sectionHeading = get_sub_field('section_heading'); ?>

				
				<?php if ($sectionHeading) : ?>
					<div class="row-fluid">
						<div class="span12 section-heading">
							<h3><?php echo $sectionHeading; ?></h3>
						</div>
					</div>
				<?php endif; ?>


				<div class="row-fluid">
					<div class="span5 produktbox">
						<div class="produktimage">
							<img src="<?php echo $image; ?>">
						</div>
						<div class="produkttekst" style="height: 227px; background-color: <?php echo $color; ?>;">
							<div class="cene-ipad-nove-tekst naslov-kategorije">
								<?php echo $headline; ?>
							</div>
							<div class="cene-produkt-nove-tekst tekst-kategorije">
								<?php echo $description; ?>
							</div>
						</div>
					</div>
					<div class="span7 produktbox">

						<?php if ($products) : ?>
							<?php foreach($products as $row) : 
								$data = $row['opis'];
								$price = $row['cena'];
								$partNo = $row['part_number'];
								$rate = $row['broj_rata'];

								$span = 'span' . floor(12 / count($products));?>

								<div class="<?php echo $span; ?> produkt-model produkttekst">
									<div class="cene-ipad-nove-tekst grupni-naslov">
										<?php echo $partNo; ?>
									</div>
									<div class="cene-produkt-nove-tekst grupni-tekst">
										<?php echo $data; ?>
									</div>
									<div class="cena-apple-artikla-grupni stara-cena"></div>
									<div class="cena-apple-artikla-grupni"><?php echo $price; ?></div>
									<div class="rate-apple-artikla-grupni RATA" data-punacena="<?php echo $price; ?>" data-brojrata="<?php echo $rate; ?>"></div>
								</div>

							<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
			<?php endwhile; ?>
	<?php endif; ?>

	<?php the_field('custom_code_horiz'); ?>

	<style>
		.section-heading {
		    margin: 40px auto 30px auto;
    		text-align: center;
		}
		.section-heading h3 {
			font-size: 30px;
		    line-height: 30px;
		    font-weight: 800;
		    font-style: normal;
		}
		.prices {
			padding-left:40px;
			padding-right:40px;
		}
		.produktbox {
			height:228px;
			margin-top: 20px;
			border-bottom: solid 1px #d3d3d3;
			background-color:white;
			overflow: hidden;
			position: relative;
			-webkit-box-shadow: 0px 0px 3px 0px rgba(148,148,148,1);
			-moz-box-shadow: 0px 0px 3px 0px rgba(148,148,148,1);
			box-shadow: 0px 0px 3px 0px rgba(148,148,148,1);
			border-radius: 2px;
			-webkit-border-radius: 2px;
			-o-border-radius: 2px;
			-moz-border-radius: 2px;
		}
		.produktimage {
			width: 161px;
			height: 100%;
			border-right: solid 1px #ebebeb;
			display: inline-block;
			position: absolute;
			top:0;
			left:0;
		}
		.produkttekst {
			display: inline-block;
			width: 202px;
			position: relative;
			top:0;
			left:162px;
			height: 227px; 
		}
		.naslov-kategorije {
			position: absolute;
			top: 70px;
			left: 0px;
			width: 202px;
			text-align: center;
		}
		.tekst-kategorije {
			position: absolute;
			top: 100px;
			left: 0px;
			font-size: 10px;
			width: 162px;
			text-align: center;
			padding: 0 20px 0 20px;
		}
		.cena-apple-artikla {
			position: absolute;
			top: 170px;
			right: 10px;
		}
		.rate-apple-artikla {
			position: absolute;
			top: 195px;
			right: 10px;
		}
		.produkt-model {
			position: initial;
			padding: 10px 5px 10px 5px;
		}
		.rate-apple-artikla-grupni {
			display: block;
			font-size: 12px;
			line-height: 1.2;
			font-weight: 400;
			color: red;
			margin-top: 10px;
			text-align: left;
		}
		.cena-apple-artikla-grupni {
			font-size: 13px;
			line-height: 1.4444;
			font-weight: 600;
			color: rgb(66, 66, 66);
			padding-left: 0px;	
			text-align: left;
		}
		.grupni-naslov {
			font-size: 22px;
			line-height: 30px;
		}
		.grupni-tekst {
			font-size: 10px;
			padding-bottom: 20px;
		}
	</style>