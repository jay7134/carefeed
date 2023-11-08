<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'onqhealth' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="header-sticky" class="navbar">
	  		<div class="container">
				<a class="navbar-brand" href="<?php echo site_url();?>">
	    				<img src="<?php echo get_template_directory_uri().'/assets/img/logo_header.svg'; ?>" class="site-logo" alt="Carefeed Logo" width="156" height="63" />
				</a>
				
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'	=>	'collapse navbar-collapse',
							'menu_class'	=>	'navbar-nav',
							'menu_id'        => 'primary-menu',
							'depth' => 2
						)
					);
				?>

			</div>
		</nav>

	</header><!-- #masthead -->