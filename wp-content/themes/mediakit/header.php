<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">


		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

		<?php // drop Google Analytics Here ?>
			
			<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		    <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-45276685-2', 'mediatrends.cl');
			  ga('send', 'pageview');

			</script>

		<?php // end analytics ?>
	</head>

	<body <?php body_class(); ?>>
		
		<div class="spinner">
		  <div class="dot1"></div>
		  <div class="dot2"></div>
		</div>

		<!--depd-->
		<?php include (TEMPLATEPATH . '/svgs.php'); ?>

		<div id="container" class="hide">

			<header class="header" role="banner">
				<a href="<?php echo home_url(); ?>" rel="nofollow">
					<div class="logo">

						<svg viewBox="0 0 286.083 220.875">
							<use xlink:href="#svg_logo">
						</svg>

						<div class="text_tit">
							
							<h1>
								MediaKit<br><span>Review</span>
							</h1>
							
						</div>

					</div>
				</a>
				<div class="nav">
					<nav role="navigation">
						<?php wp_nav_menu(array(
						'container' => false,                           // remove nav container
						'container_class' => 'menu cf',                 // class of container (should you choose to use it)
						'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
						'menu_class' => 'nav top-nav cf',               // adding custom nav class
						'theme_location' => 'main-nav',                 // where it's located in the theme
						'before' => '',                                 // before the menu
	    			'after' => '',                                  // after the menu
	    			'link_before' => '',                            // before each link
	    			'link_after' => '',                             // after each link
	    			'depth' => 0,                                   // limit the depth of the nav
						'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
				</div>

				<!--div id="inner-header" class="wrap cf">
		
					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

				</div-->

			</header>
