<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything through the intro.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Phuk Ya - Vegetarian Thai Food mock up site">
<meta name="author" content="Tyler Savin">
<link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/themes/phukya/assets/ico/favicon.png">
<title>Phuk Ya - Vegetarian Thai Food</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo site_url(); ?>/wp-content/themes/phukya/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/phukya/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/phukya/css/reset.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/phukya/style.css" rel="stylesheet">
<script src="https://use.typekit.net/dyd0jmb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
</head>
<body>

<header>
<nav class="navbar"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
</header>

<main>