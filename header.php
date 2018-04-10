<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssfonts/cssfonts-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>

   <body>
	   <div id="header" class="container">
		   <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a></h1>
		   <p class="blog_title" style="font-size:1em; line-height:1.6; padding-top:0;"><?php bloginfo('description'); ?></p>
		   <?php wp_nav_menu(); ?>
	   </div><!-- /header-->
