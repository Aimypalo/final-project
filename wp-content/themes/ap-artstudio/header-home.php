<!-- 
This is the header for the homepage only (index.php)

=============================================================  -->

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="description" content="site description goes here">
    	<meta name="keywords" content="site, keywords, go, here">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Raleway+Dots|Raleway:300,400,700" rel="stylesheet">
		<title><?php wp_title(); ?>AP Art Studio</title>
		<link rel="stylesheet" href="wp-content/themes/ap-artstudio/jquery-plugin-ui/jquery-ui.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="site-container">
			<header class="site-header">
				<div class="video-container">	
					<video id="vid" preload="true" autoplay="autoplay" loop="true" muted="true" frameborder="0" playsinline allowfullscreen>
						<source src="/wp-content/themes/ap-artstudio/images/seascape_you.mp4" type="video/mp4">
					</video>
					<script language="javascript" type="text/javascript">
						window.onload = function(){
							document.getElementById("vid").play();
						}
					</script>
					<div class="brand-title">
						<!-- <img src="images/logo-white.png" alt="logo" class="logo"> -->
						<h1><?php bloginfo('title'); ?></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</div>
					<a class="nav-icon" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-icon-6.png" width="50"></a>
					<a class="scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scroll-down-4.png" width="40"></a>
					<?php
					$options=array(
						'menu' => 'Main Menu',
						'container' => 'nav'
					);
					wp_nav_menu($options); ?>
				</div>
			</header>