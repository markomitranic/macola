<!DOCTYPE html>
<html lang="sr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2000260960215920'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=2000260960215920&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	
<?php
//<!-- VESTACKI PHP LOOP -->
if(get_field('theexcerpt')) {
$theexcerpt = get_field('theexcerpt'); 
}

if(get_field('og_slika')) {
$slika = get_field('og_slika'); 
} elseif(get_field('big_post_image')) {
$slika = get_field('big_post_image'); 
} elseif ( is_page_template('dodaci.php') ) {
$slika = 'https://macola.rs/wp-content/uploads/2014/04/dodaci-e1398844639728.png';
} elseif ( is_page_template('pro_oprema.php') ) {
$slika = 'https://macola.rs/wp-content/uploads/2014/04/prooprema.png';
} else {
$slika = 'https://macola.rs/wp-content/uploads/2013/10/Screen-Shot-2013-10-16-at-23.44.51.png';
}

$title = get_the_title();

//<!-- DESCRIPTION STRANICE -->
if (is_home()) {
echo '<meta name="description" content="Macola je zvanični Apple Servis, Prodavac, Trening Centar i Solution Expert u Srbiji. Mac, iPhone, iPad, Blackmagic, AVID, AJA Profesionalna Oprema. Za Apple radimo još od 1984. godine u Beogradu.">
<meta name="keywords" content="home, macola, apple, srbija, macbook, iphone, servis, blackmagic">';
} else {		   
echo '<meta name="description" content="'.$title.'';
if (isset($_GET['articlePro']) && $_GET['articlePro'] != "") { echo' > '; echo $_GET['articlePro']; }
if (isset($_GET['articleDev']) && $_GET['articleDev'] != "") { echo' > '; echo $_GET['articleDev']; }
if (isset($_GET['articleCat']) && $_GET['articleCat'] != "") { echo' > '; echo $_GET['articleCat']; }
if (isset($_GET['tag'])) { echo' / '; echo $_GET['tag']; }
if (isset($_GET['pro']) && $_GET['pro'] != "") { echo' / '; echo $_GET['pro']; }
echo ' | '.$theexcerpt.' | Macola Prodaja Servis Obuka Srbija">
<meta name="keywords" content="'.$title.', macola, prodaja, servis, obuka, apple, srbija, macbook, iphone, servis, blackmagic, dodaci, futrole, zastita, punjac, ipod, ipad, zastita, dizajn ">';
}
//<!-- OPENGRAPH TWITTER CARDS -->
echo'
<meta property="og:title" content="'.$title.'" />
<meta property="og:type" content="website" />
<meta property="og:description" content="'.$title.'';
if (isset($_GET['articlePro']) && $_GET['articlePro'] != "") { echo' > '; echo $_GET['articlePro']; }
if (isset($_GET['articleDev']) && $_GET['articleDev'] != "") { echo' > '; echo $_GET['articleDev']; }
if (isset($_GET['articleCat']) && $_GET['articleCat'] != "") { echo' > '; echo $_GET['articleCat']; }
if (isset($_GET['tag'])) { echo' / '; echo $_GET['tag']; }
if (isset($_GET['pro']) && $_GET['pro'] != "") { echo' / '; echo $_GET['pro']; }
echo ' | '.$theexcerpt.' | Macola Prodaja Servis Obuka Srbija" />
<meta property="og:image" content="'.$slika.'" />
<meta property="og:image" content="https://macola.rs/wp-content/uploads/2013/10/Screen-Shot-2013-10-16-at-23.44.51.png" />
<meta property="og:image" content="https://macola.rs/wp-content/uploads/2014/04/prooprema.png" />
<meta property="og:image" content="https://macola.rs/wp-content/uploads/2014/04/dodaci-e1398844639728.png" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Macola_Store">
<meta name="twitter:creator" content="@Macola_Store">
<meta name="twitter:title" content="'.$title.'" />
<meta name="twitter:description" content="'.$title.'';
if (isset($_GET['articlePro']) && $_GET['articlePro'] != "") { echo' > '; echo $_GET['articlePro']; }
if (isset($_GET['articleDev']) && $_GET['articleDev'] != "") { echo' > '; echo $_GET['articleDev']; }
if (isset($_GET['articleCat']) && $_GET['articleCat'] != "") { echo' > '; echo $_GET['articleCat']; }
if (isset($_GET['tag'])) { echo' / '; echo $_GET['tag']; }
if (isset($_GET['pro']) && $_GET['pro'] != "") { echo' / '; echo $_GET['pro']; }
echo ' | '.$theexcerpt.' | Macola Prodaja Servis Obuka Srbija" />
<meta name="twitter:image:src" content="'.$slika.'">
';

?>





<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic&subset=latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
	<?php if (is_search()) { ?>
	   <meta name="robots"/> 
	<?php } ?>
	
	<title>
		   <?php
		   
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Arhiva"); }
		      elseif (is_archive()) { }
		         
		      elseif (is_search()) {
		         echo 'Pretraga za termin: &quot;'.wp_specialchars($s).'&quot;'; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); }
		      elseif (is_404()) {
		         echo 'Stranica nije pronađena'; }
		      if (is_home()) {
		         wp_title(''); echo 'Servis - Trening Centar - Prodavnica | '; }

		      else { 		      
		         if (isset($_GET['articlePro']) && $_GET['articlePro'] != "") { echo' / '; echo $_GET['articlePro']; }
		         if (isset($_GET['articleDev']) && $_GET['articleDev'] != "") { echo' / '; echo $_GET['articleDev']; }
		         if (isset($_GET['articleCat']) && $_GET['articleCat'] != "") { echo' / '; echo $_GET['articleCat']; }
		         if (isset($_GET['tag'])) { echo' / '; echo $_GET['tag']; }
		         if (isset($_GET['pro']) && $_GET['pro'] != "") { echo' / '; echo $_GET['pro']; } echo ' | ';  bloginfo('name');echo ' | Prodaja Servis Obuka | Apple Macintosh Srbija'; }
		      if ($_GET['curr_page'] !="") {
		         echo ' - stranica '. $_GET['curr_page'] .' | '; }
		   ?>
	</title>	
	<!-- IE -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header" id="header">
		<div class="container">
			<div class="row">
			<div class="span3">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/macola-theme/img/macolalogobelimali.png" alt="Logo"></a>
				</div>
			</div>
			<div class="span9">
				<div class="headermeni" id="desktopheadermeni"><nav><?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?></nav></div>
				<div class="headermeni" id="mobileheadermeni"><nav><?php wp_nav_menu( array( 'theme_location' => 'main_nav_mobile' ) ); ?></nav></div>
			</div>
		</div>	
		
		</div>	
	</div>





  