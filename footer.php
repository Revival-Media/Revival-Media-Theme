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
		<img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-2.svg'; ?>" style="height: 42rem; left: 14%; top: -42%; transform: rotate(13deg);">
		<div class="footer-wrap glass">
			<div class="colour-bar"></div>
			<div class="footer-container site-width" style="position: relative;">
				<a class="rm-logo-wrap" href="https://media.revival.solutions/"><img loading="lazy" class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/rm-logo.svg'; ?>" alt=Logo></a>
				<div class="footer-info">
					<div class="footer-1">
						<div class="footer-col-one">
							
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'footer-menu',
									)
								);
							?>
						</div>
						<div class="footer-col-two">
							<a href="tel:+44-(0)-116-270-2377" target="_blank">
								<div class="contact-detail">
									<img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/phone.svg'; ?>" alt="Facebook">
									<p>+44 (0) 116 270 2377</p>
								</div>
							</a>
							<a href="mailto:hello@media.revival.solutions" target="_blank">
								<div class="contact-detail">
									<img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/mail.svg'; ?>" alt="Facebook">
									<p>hello@media.revival.solutions</p>
								</div>
							</a>
								
							<div class="social-links">
								<!-- <a href=""><img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/facebook.svg'; ?>" alt="Facebook"></a> -->
								<a href="https://www.linkedin.com/company/revivalmedia/" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/linkedin.svg'; ?>" alt="LinkedIn"></a>
								<!-- <a href=""><img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/instagram.svg'; ?>" alt="Instagram"></a> -->
							</div>
						</div>
					</div>
					
					<div class="footer-2 small">
						<div class="footer-address">
							<p>Revival Media Ltd.</p>
							<p>Parkway House, Second Avenue,<br>Centrum One Hundred,<br>Burton-On-Trent,<br>England DE14 2WF</p>
						</div>
						<div class="footer-links">
							<a href="/privacy-policy">Privacy Policy</a>
						</div>
						<p>© <?php $year = date("Y"); echo $year;?>  Revival Solutions Group</p>
					</div>
				</div>
				
			</div>
		</div>
		<div class="bottom-bar-wrap">
			<div class="bottom-bar site-width">
				<a href="https://revivalsolutions.co.uk" target="_blank">
					<div class="rsg-btm-bar">
					<img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/rsg-icon.svg'; ?>" alt="Revival Solutions Group"><p>Part of the <span>Revival Solutions Group</span></p>
					</div>
				</a>
				<div class="btm-bar-menu">
					<a href="https://revivalresourcing.co.uk" target="_blank"><p>Resourcing</p></a>
					<a href="https://revivalconnect.co.uk" target="_blank"><p>Connect</p></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer() ?>
			
<script>
	
	const options = {
		licenseKey: '5A1A9AC9-1C294E26-91F21DAA-85539B33',
		focusableElements: '[data-blobity], a:not([data-no-blobity]), [data-blobity-tooltip], a, .rev-button, input, textarea, .drop-workaround, .blobity',
		color: '#ED1F78',
		opacity: 0.4,
		zIndex: 0,
		size: 50,
		dotColor: '#ED1F78',
		focusableElementsOffsetX: 10,
		focusableElementsOffsetY: 9,
		radius: 21
	};
	new Blobity(options);

</script>

</body>
</html>
