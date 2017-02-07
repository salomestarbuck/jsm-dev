<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<!--<meta name="apple-mobile-web-app-status-bar-style" content="black" />-->
</head>



<body <?php body_class(); ?>>
<!--<div class="background">--><!-- Allows for the positioning of the background image for CSS Paralllax effect. -->
<div id="outerWrapper">
<!--<div class="wrapper">--><!-- This wrapper is for the sticky footer - Negative Top Margins on Footer -->
    <header>
        <div id="header-box"><!-- need this for the max width and min width on the content, separate from the background images on the whole width of the page. -->
        	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
        </div><!-- END-header-box -->
    </header>
    
	<!--<div id="mobile-icon">
 		<a id="nav-toggle" href="#sidr"><img src="<?php /*?><?php bloginfo('stylesheet_directory'); ?><?php */?>/images/menu.png" alt="link icon"></a>	
  	</div>-->
    <!--<nav id="mainMenu">
        <?php /*?><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?><?php */?>
    </nav> -->  
  	
<!--    <div id="sidr">
    <nav id="mainMenu">
        <?php /*?><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?><?php */?>
    </nav>
    </div>-->
    <!--<main>--><!-- Begin Section for the Primary content of the page. -->