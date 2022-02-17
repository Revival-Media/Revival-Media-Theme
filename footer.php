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
	</div> <!-- End of .page-content opened at the bottom of header.php -->

	<footer id="colophon" class="site-footer" style="position: relative;">
		<img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-2.svg'; ?>" style="height: 42rem; left: 14%; top: -42%; transform: rotate(13deg);">
		<div class="footer-wrap glass">
			<div class="colour-bar"></div>
			<div class="footer-container site-width" style="position: relative;">
				<a class="rm-logo-wrap" href="https://media.revival.solutions/"><img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/rm-logo.svg'; ?>" alt=Logo></a>
				<div class="footer-info">
					<div class="footer-1">
						<div class="footer-col-one">
							
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
							?>
						</div>
						<div class="footer-col-two">
							<a href="tel:+44-(0)-116-270-2377">
								<div class="contact-detail">
									<img src="<?php echo get_template_directory_uri() . '/assets/imgs/phone.svg'; ?>" alt="Facebook">
									<p>+44 (0) 116 270 2377</p>
								</div>
							</a>
							<a href="mailto:hello@media.revival.solutions" target="_blank">
								<div class="contact-detail">
									<img src="<?php echo get_template_directory_uri() . '/assets/imgs/mail.svg'; ?>" alt="Facebook">
									<p>hello@media.revival.solutions</p>
								</div>
							</a>
								
							<div class="social-links">
								<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/imgs/facebook.svg'; ?>" alt="Facebook"></a>
								<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/imgs/linkedin.svg'; ?>" alt="LinkedIn"></a>
								<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/imgs/instagram.svg'; ?>" alt="Instagram"></a>
							</div>
						</div>
					</div>
					
					<div class="footer-2 small">
						<div class="footer-address">
							<p>Revival Media Ltd.</p>
							<p>Parkway House Second Avenue,<br>Centrum One Hundred,<br>Burton-On-Trent,<br>England DE14 2WF</p>
						</div>
						<div class="footer-links">
							<a href="">Privacy Policy</a>
							<a href="">Terms & Conditions</a>
						</div>
						<p>© 2022 Revival Solutions Group</p>
					</div>
				</div>
				
			</div>
		</div>
		<div class="bottom-bar-wrap">
			<div class="bottom-bar site-width">
				<a href="https://revivalsolutions.co.uk" target="_blank">
					<div class="rsg-btm-bar">
						<p><img src="<?php echo get_template_directory_uri() . '/assets/imgs/rsg-icon.svg'; ?>" alt="Facebook">Part of the <span>Revival Solutions Group</span></p>
					</div>
				</a>
				<div class="btm-bar-menu">
					<a href="https://revivalresourcing.co.uk" target="_blank"><p>Resourcing</p></a>
					<a href="" target="_blank"><p>Capital</p></a>
					<a href="" target="_blank"><p>Connect</p></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- magicmouse.js import and script. -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/magic_mouse.js'; ?>"></script>
<script type="text/javascript">
	options = {
	"cursorOuter": "circle-basic",
	"hoverEffect": "pointer-blur",
	"hoverItemMove": false,
	"defaultCursor": false,
	"outerWidth": 40,
	"outerHeight": 40
	};
	magicMouse(options);
</script>
</body>
</html>
