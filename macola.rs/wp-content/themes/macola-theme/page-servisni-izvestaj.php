<?php 
/*
Template Name: Servisni Izveštaj Page Template
*/

// Template name must be unique and filled in. The template will automatically be shown as a Page Template.


get_header(); 

the_post(); 


if ($_POST['service-name']) {
	$name = $_POST['service-name'];
	$ref = $_POST['service-servisni_broj'];



	// Basic WP_QUERY
	$args = array(
		'posts_per_page'   => 1,
		'offset'           => 0,
		'name'       	 	=> $ref,
		'order'            => 'DESC',
		'post_type'        => 'servis_izvestaj',
		'post_status'      => 'publish'
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) :
		$the_query->the_post();

			$modified = get_the_modified_date();
			$customer_first_name = get_field('first_name');
			$customer_name = get_field('first_name').' '.get_field('last_name');
			$received_date = get_field('date_received');
			$repair_status = get_field('repair_status');
			$assigned_to = get_field('assigned_to');
			$apple_care_unit_name = get_field('apple_care_unit_name');
			$serial_number = get_field('serial_number');
			$reported_issue = get_field('customer_reported_issue');
			$diagnostic_information = get_field('diagnostic_information');

		endwhile;
	endif;
	wp_reset_postdata();

	if (strcasecmp($customer_first_name, $name) !== 0) :
		$output ='
			<div class="row-fluid">
				<div class="span12">
					<h1 style="text-align: center;">Na žalost nismo pronašli traženu karticu.</h2>
				</div>
			</div>
		';
	else :

	$output ='
			<div class="service-record">
				<div class="row-fluid">
					<div class="span12">
						<span>Last Modified: </span>
						<span class="output">'. $modified .'</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<span>Customer Name: </span>
						<span class="output">'. $customer_name .'</span>
					</div>
					<div class="span6">
						<span>Date Received: </span>
						<span class="output">'. $received_date .'</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<span>Repair Status: </span>
						<span class="output">'. $repair_status .'</span>
					</div>
					<div class="span6">
						<span>Assigned To: </span>
						<span class="output link"><a href="mailto://'. $assigned_to['user_email'] .'">
						<img src="'. get_template_directory_uri() .'/img/email-icon.png">
						'. $assigned_to['display_name'] .'</a></span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<span>AppleCare Unit Name: </span>
						<span class="output">'. $apple_care_unit_name .'</span>
					</div>
					<div class="span6">
						<span>Serial Number: </span>
						<span class="output">'. $serial_number .'</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<span>Customer Reported Symptom: </span>
						<span class="output">'. $reported_issue .'</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<span>Customer Reported Symptom: </span>
						<span class="output">'. $diagnostic_information .'</span>
					</div>
				</div>
			</div>
			';
	endif;


}


?>


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


<style>
	.image.image-overlay {
		background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo get_field('og_slika'); ?>);
	    width: 100%;
	}
	form.form-horizontal {
	    display: flex;
	    flex-wrap: wrap;
	    flex-direction: column;
	    align-items: center;
	    justify-content: center;
	    height: 480px;
	}
	form.form-horizontal h1 {
		color: white;
	}
	form.form-horizontal div {
		margin: 10px;
	}
	span.add-on {
	    width: 100px!important;
	}
	.service-record {
		font-style: normal!important;
		text-transform: none;
	    line-height: 1.5;
	    /*font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;*/
	}
	.service-record .row-fluid {
		padding: 15px 40px;
		box-sizing: border-box;
	}
	.service-record span {
		font-weight: 800;
	    text-transform: uppercase;
	    display: block;
        background-color: #e8e8e8;
    	color: #4a4a4a;
	    padding: 5px 0 5px 15px;
	    border-radius: 2px;
	}
	.service-record span.output {
		font-weight: 400;
	    text-transform: none;
	    display: block;
        background-color: transparent;
    	color: #4a4a4a;
	    padding: 5px 0 5px 15px;
	    border-radius: 2px;
	}
	.service-record span.output.link {
		color: #08c;
	}
	.service-record span.output.link img {
		display: inline;
		padding-right: 10px;
	}
</style>


<div class="content">
	<div class="container">
		<hr>
		<div class="row-fluid hero">
			<div class="span12 image image-overlay">
				<form class="form-horizontal" method="POST" action="">
					<div>
						<h1>Pronađi servisni izveštaj:</h1>
					</div>
					<div class="input-prepend">
					  <span class="add-on">Ime</span>
					  <input id="prependedInput" name="service-name" type="text" placeholder="Ime" required value="<?php echo $_POST['service-name']; ?>">
					</div>
					<div class="input-prepend">
					  <span class="add-on">SO</span>
					  <input id="prependedInput" name="service-servisni_broj" type="text" placeholder="Servisni Broj" required value="<?php echo $_POST['service-servisni_broj']; ?>">
					</div>
					<div>
						<button class="btn btn-large btn-success" type="submit">Pronađi</button>
  						<button class="btn btn-large btn-danger" type="reset">Resetuj formu</button>
					</div>
				</form>
			</div>								
		</div>
	</div>
<div class="post-content-text" id="dodatno" style="margin-bottom:40px;">

	<?php if (!$name || !$ref) : ?>
		<div class="row-fluid" style="margin-bottom: 30px;">
			<div class="span12 centertag">
				<div class="alert alert-warning" style="min-height: 50px; padding: 15px 25px 15px 25px;">
					<?php the_field('special_hilighted_information'); ?>
					<a href="<?php the_field('special_button_link'); ?>"><div class="btn btn-success"><?php the_field('special_button_text'); ?></div></a>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row-fluid">
		<div class="span12">
			<?php if ($name || $ref) {
					echo $output;
				} else {
					the_content();
				} ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>