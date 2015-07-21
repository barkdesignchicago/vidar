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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/vidar.css">

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script>
	  $(function () {
	    $("#menu-main-menu").tinyNav({
		     active: 'current_page_item',
			 header: 'Main Menu',
		    
	    });
	  });
	</script>
</head>
<body <?php body_class(); ?>>

	<!-- Header / Nav / Global Etc
	================================================== -->
	<div class="big-container full-width utility-container">
		<div class="container">
			<div class="twelve columns">
				<section>
					<nav>
						<div id="utility-nav" class="nav clearfix">
							<ul class="social-media-links">
								<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_facebook_grey.png" alt="icon_facebook_grey" width="10" height="18"></a></li>
								<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_twitter_grey.png" alt="icon_twitter_grey" width="21" height="17"></a></li>
								<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_linkedin_grey.png" alt="icon_linkedin_grey" width="18" height="18"></a></li>
							</ul>
							<?php wp_nav_menu( array( 'theme_location' => 'utility-menu', 'menu_class' => 'utility-menu' ) ); ?>
						</div>
					</nav>
				</section>
			</div>
		</div>
	</div>
	<div class="big-container full-width main-nav-container">
		<div class="container">
			<div class="twelve columns">
				<section>
					<nav>
						<div id="main-nav" class="nav">
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
						</div>
					</nav>
				</section>
			</div>
		</div>
	</div>
	<!-- End Header -->
