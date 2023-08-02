<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ktelecomtest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flickity.css" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
	<title>k-telecom</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="page">
		<header class="header">
			<img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo" />
			<img class="menu" src="<?php echo get_template_directory_uri();?>/img/menu.svg" alt="menu hamburger" />
		</header>







		<!doctype html>
		<html <?php language_attributes(); ?>>

		<head>



		</head>