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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/revival-scripts.js'; ?>"</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'esqueleto' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="header-wrap">
			<div class="site-width header-container">
				<a class="rm-logo-wrap" href="https://media.revival.solutions/"><img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/rm-logo.svg'; ?>" alt=Logo></a>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'esqueleto' ); ?></button>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="colour-bar"></div>
		</div>
		
	</header><!-- #masthead -->
