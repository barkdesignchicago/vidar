<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<!-- Mobile
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/stylesheets/rush.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<!--
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	-->
	
	<!-- Core Header
	================================================== -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<!-- Header / Nav / Global Etc
	================================================== -->
	<div class="container">
		<div class="sixteen columns">
			<div id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
			</div>
		</div>
		<div class="sixteen columns">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</div>
	</div>
	<!-- End Header -->
