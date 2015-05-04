<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Palanquin:400,500,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body>
<div id="header-container">
	<div id="header">
		<div class="header-content">
			<div class="header-text">
				<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/texte-celestine.png"></img>
				</a>
			</div>
			<div  class="header-logo">
				<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/logo.png"></img>
				</a>
			</div>
		</div>
	</div>

</div>

<div id="menu-container">
	<div id="menutop"><!--Affichage du menu dynamique de WP-->
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</div>
</div>

<div id="main">