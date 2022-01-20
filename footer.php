<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esqueleto
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'revival-media' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'revival-media' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf(
					/* translators: 1: Theme name, 2: Theme author, 3: Original theme, 4: Original theme author. */
					esc_html__( 'Theme: %1$s by %2$s based on %3$s by %4$s.', 'revival-media' ),
					'revival-media',
					'<a href="https://media.revival.solutions">Revival Media</a>',
					'_s (Underscores)',
					'<a href="https://automattic.com/">Automattic</a>'
				);
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
