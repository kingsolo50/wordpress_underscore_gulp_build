<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmc_2020_v1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<!-- FONT AWSOME 4.7.0 -->
	<script src="https://use.fontawesome.com/c12290db91.js"></script>

	<!-- ANIMATE CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

	<?php wp_head(); ?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lte IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cmc_2020' ); ?></a> -->

	<div class="container-fluid bg-dark">

		<div class="container">
			<div class="row"> 
				<div class="col-12">
					<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
						
						<a class="navbar-brand animate__animated animate__pulse animate__delay-2s" href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cmcm+logo.png" alt="cmc logo" class="img-fluid">
						</a>
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="navbar-toggler-icon"></span>
						</button>

						<?php
							wp_nav_menu(array(
								'theme_location' 	=> 'primary',
								'menu'           	=> 'main-menu',
								'menu_id'        	=> 'collapsibleNavbar',
								'depth'          	=> 3,
								'container'      	=> 'nav',
								'container_class' 	=> 'collapse navbar-collapse',
								'container_id' 		=> 'collapsibleNavbar',
								'menu_class'     	=> 'navbar-nav ml-auto',
								'menu_id' 			=> 'collapsibleNavbar',
								'walker'         	=> new wp_bootstrap_navwalker()
							));		
						?>

					</nav>
				</div>
			</div>
		</div>

	</div>
