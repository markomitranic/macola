 <?php 
/*
Template Name: Single_Post with Redirection Template
*/

$url = get_field('redirect_to');

Redirect($url, 302);

?>