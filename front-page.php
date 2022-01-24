<?php get_header(); ?>

<section class="site-width" style="">
        <h1 style="padding-bottom: 2rem;">
            We are <span class="grad-text">Revival Media</span> 👋<br>
        </h1>
        <h2 style="max-width: 31ch; padding-bottom: 0rem; margin-bottom: -1.5rem;">
            Believers in brand, masters of design and connoisseurs of all things digital.   
        </h2>
        <a class="rev-button" style="margin-top: 4rem;">Learn About Us</a>
</section>
<section>

    <div id="hero-card-wrap" class="rev-card-wrap" style="display: flex; position: relative; margin: 0 auto; padding: 0 0 0 5rem; max-width: 1400px; overflow-y: auto;">
        <?php 
            // Define Query Parameters
            $home_posts = new WP_Query( 'tag=homepage' );
        ?>
            
        <?php 
            // Start WP Query
            while ($home_posts -> have_posts()) : $home_posts -> the_post(); 
            // Get Project Name
            $projectName = get_post_meta(get_the_ID(), 'Project', true);
            //Get Client Name
            $clientName = get_post_meta(get_the_ID(), 'Client', true);
            // Display the Project Title and Client with Hyperlink
        ?>

        <div class="rev-card hero-card" id="card-<?php echo $post->ID; ?>">
            <a href="<?php the_permalink() ?>">
                <h4><?php echo $projectName; ?></h4>
                <h2><?php echo $clientName; ?></h2>
                <a href="#" class="rev-button">Discover More</a>
            </a>
        </div>
        
        <?php 
            // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
</section>
<section class="site-width">
    <div class="rev-card services-card">
        <div class="flex-wrap">
            <h3 class="grad-text">Our services</h3>
            <a class="rev-button">Learn More</a>
        </div>
        <h2 style="max-width: 44ch;">
            Our integrated <span class="grad-text">web, social, print and digital</span> services make brands work for business. 
        </h2>
        <div class="services-wrap">
            <div class="services-block">
                <div class="flex-wrap">
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/magnify-icon.svg'; ?>" alt="Strategy">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Strategy</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Innovative creative concepts</span></li>
                    <li class="rev-bullet"><span>Commercial goal-setting</span></li>
                    <li class="rev-bullet"><span>Social and web strategy</span></li>
                    <li class="rev-bullet"><span>Brand driven proposals</span></li>
                </ul>
            </div>
            <div class="services-block">
                <div class="flex-wrap">
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/brand-icon.svg'; ?>" alt="Brand">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Brand</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Powerful brand systems</span></li>
                    <li class="rev-bullet"><span>Graphic design</span></li>
                    <li class="rev-bullet"><span>Brand voice and copywriting</span></li>
                    <li class="rev-bullet"><span>Pixel perfect logos</span></li>
                </ul>
            </div>
            <div class="services-block">
                <div class="flex-wrap">
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/digital-icon.svg'; ?>" alt="Digital">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Digital</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Web development</span></li>
                    <li class="rev-bullet"><span>Social media content</span></li>
                    <li class="rev-bullet"><span>Hosting and domains</span></li>
                    <li class="rev-bullet"><span>Security and maintenance</span></li>
                </ul>
            </div>
            <div class="services-block">
                <div class="flex-wrap">
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/print-icon.svg'; ?>" alt="Strategy">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Print</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Innovative creative concepts</span></li>
                    <li class="rev-bullet"><span>Commercial goal-setting</span></li>
                    <li class="rev-bullet"><span>Social and web strategy</span></li>
                    <li class="rev-bullet"><span>Brand driven proposals</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="site-width card-text-section">
    <div class="image-text-wrap">
        <div class="rev-card"></div>
        <div class="card-image-wrap">
            <h3>Bespoke customer journeys with expert <span class="grad-text">Shopify design and development.</span></h3>
            <a class="rev-button">View Projects</a>
        </div>
    </div>
    <div class="image-text-wrap card-switch">
        <div style="text-align: right;" class="card-image-wrap">
            <h3><span class="grad-text">Wordpress sites</span> to showcase your business and boost online enagement.</h3>
            <a class="rev-button">View Projects</a>
        </div>
        <div class="rev-card"></div>
    </div>
    <div class="image-text-wrap">
        <div class="rev-card"></div>
        <div class="card-image-wrap">
            <h3>Straight-talking social media marketing <span class="grad-text">for ambitious brands.</span></h3>
            <a class="rev-button">View Projects</a>
        </div>
    </div>
</section>
<section class="site-width">
    <h2>
        <span class="grad-text">Our clients</span> speak for themselves.
    </h2>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>