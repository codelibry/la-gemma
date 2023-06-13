<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
	<meta name="google-site-verification" content="C52pH6EMLF5FjnGqlOst8sAvUjN3MHyMYjmB4K-oZFs" />
</head>

<?php 
/**
 * Additional body classes
 */
$body_classes = 'not-loaded ';
?>
<body <?php body_class($body_classes); ?>>

	<div class="loader">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo-yellow.svg" alt="Preloader logo" class="loader__logo">
	</div>

	<?php get_template_part('template-parts/header/header'); ?>

	
	<main id="main">