<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>

		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" type="text/javascript"></script>

		<script src="http://modeconkey.com/minecraft/ext/js/jquery.foundation.navigation.js"></script>
		<script src="http://modeconkey.com/minecraft/ext/js/jquery.foundation.orbit.js"></script>

		<script type="text/javascript">
		$(window).load(function() {
	       $(".slider").orbit({
		       	animation: 'fade',
		       	animationSpeed: 1000,
		       	timer: true,
		       	directionalNav: false,
		       	advanceSpeed: 5000
	       });
	   	});
	</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
