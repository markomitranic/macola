 <?php 
/*
Template Name: Single_Post with Redirection Template
*/

$url = get_field('redirect_to');
$code = get_field('redirect_code');

Redirect($url, $code);

?>