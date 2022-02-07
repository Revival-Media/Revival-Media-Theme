<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esqueleto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/revival-scripts.js'; ?>"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
	<link rel="stylesheet" href="/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/magic-mouse.css' ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'esqueleto' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="header-wrap glass">
			<div class="site-width header-container">
				<a class="rm-logo-wrap" href="https://media.revival.solutions/"><img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/rm-logo.svg'; ?>" alt="Logo"></a>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-label="Main Menu" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" class="burger-icon" viewBox="0 0 100 56" width="40" height="40">
						<rect width="100" height="8" rx="5" ry="5"></rect>
						<rect y="30" width="100" height="8" rx="5" ry="5"></rect>
						<rect y="60" width="100" height="8" rx="5" ry="5"></rect>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" class="burger-close-icon" viewBox="0 0 40 40" width="40" height="40" overflow="visible" stroke="black" stroke-linecap="round">
						<line x1="10" y1="10" x2="35" y2="35" stroke="#FFFFFF" stroke-width="3"/>
						<line x1="35" y1="10" x2="10" y2="35" stroke="#FFFFFF" stroke-width="3"/>
					</svg>
					</button>
					<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'menu-1',
								'menu_id'        	=> 'primary-menu',
								'menu_class'		=> 'glass',
							)
						);
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="colour-bar"></div>
		</div>
		
	</header><!-- #masthead -->

	<div id="page-content">