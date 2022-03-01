<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package esqueleto
 */

get_header();
?>

	<main id="primary" class="site-main site-width">

		<section class="error-404 not-found">

			<div class="mac-img"></div>		
			<div class="page-header">
				<h3 class="grad-text">Error 404</h3>
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'revival-media' ); ?></h1>
				<a class="rev-button" href="/work">View our work</a>
			</div><!-- .page-header -->

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
