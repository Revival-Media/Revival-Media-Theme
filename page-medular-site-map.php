<?php get_header(); ?>

<section class="site-width">
    <?php the_title( '<h1  class="entry-title"><span class="grad-text">', '</span> 🗺️</h1>' ); ?>
    <p style="max-width: 50ch; padding-bottom: 2.5rem;">A site map is a hierarchical model of a website’s pages. It is basically the skeleton of the site. It is crucial this is carefully considered before the design phase is started, as the rest of the site will be built upon this site map.<br><br><strong>For best results view on desktop.</strong></p>
    <?php
		the_content();
	?>
</section>

<?php get_footer(); ?>