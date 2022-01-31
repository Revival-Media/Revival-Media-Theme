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

	<footer id="colophon" class="site-footer">
		<div class="footer-wrap glass">
			<div class="colour-bar"></div>
			<div class="footer-container site-width">
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
							<a href="">
								<div class="contact-detail">
									<img src="<?php echo get_template_directory_uri() . '/assets/imgs/phone.svg'; ?>" alt="Facebook">
									<p>+44 (0) 116 270 2377</p>
								</div>
							</a>
							<a href="">
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
				<div class="rsg-btm-bar">
					<img src="<?php echo get_template_directory_uri() . '/assets/imgs/rsg-icon.svg'; ?>" alt="Facebook">
					<p>Part of the <span>Revival Solutions Group</span></p>
				</div>
				<div class="btm-bar-menu">
					<a href=""><p>Resourcing</p></a>
					<a href=""><p>Capital</p></a>
					<a href=""><p>Connect</p></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
