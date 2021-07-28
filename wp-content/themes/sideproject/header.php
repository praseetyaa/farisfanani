<!DOCTYPE html>
 <html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" type="image/x-icon" href="https://kompetensiku.id/assets/images/logo/1603348880-icon.png">
	<title><?php echo get_bloginfo( 'name' ) . ' | '. get_bloginfo( 'description' ); ?></title>
	<!-- font awesome -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/all.css" type="text/css" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css" type="text/css" />
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<!-- aos -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	  <?php wp_head(); ?>
	  <style type="text/css"></style>
	</head>

	<body <?php body_class(); ?>>

	<?php include "partials/navbar.php" ?>
