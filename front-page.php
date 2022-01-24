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
        <div class="rev-card hero-card" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: end; margin-right: 10px;">
            <div class="hero-card-title">
                <h4>Precision Prep</h4><br>
                <h2>Shopify Website</h2>
            </div>
            <a class="rev-button">Discover More</a>
        </div>
        <div class="rev-card hero-card" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: end; margin-right: 10px;">
            <div class="hero-card-title">
                <h4>Precision Prep</h4><br>
                <h2>Shopify Website</h2>
            </div>
            <a class="rev-button">Discover More</a>
        </div>
    </div>
</section>
<section class="site-width">
    <div class="rev-card">
        <div class="flex-wrap" style="margin-bottom: 1.5rem;">
            <h3 class="grad-text">Our services</h3>
            <a class="rev-button">Learn More</a>
        </div>
        <h2 style="margin-bottom: 3rem; max-width: 44ch;">
            Our integrated <span class="grad-text">web, social, print and digital</span> services make brands work for business. 
        </h2>
        <div class="services-wrap" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr;">
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
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/brand-icon.svg'; ?>" alt="Strategy">
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
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/digital-icon.svg'; ?>" alt="Strategy">
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
                    <img class="rm-logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/brand-icon.svg'; ?>" alt="Strategy">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Brand</h3>
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
<section class="site-width" style="display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr 1fr; align-items: center; gap: 7.5rem 5rem;">
    <div class="rev-card" style="min-height: 40rem;"></div>
    <div class="card-image-wrap">
        <h3>Bespoke customer journeys with expert <span class="grad-text">Shopify design and development.</span></h3>
        <a class="rev-button">View Projects</a>
    </div>
    <div style="text-align: right;">
        <h3><span class="grad-text">Wordpress sites</span> to showcase your business and boost online enagement.</h3>
        <a class="rev-button">View Projects</a>
    </div>
    <div class="rev-card" style="min-height: 40rem;"></div>
    <div class="rev-card" style="min-height: 40rem;"></div>
    <div>
        <h3>Straight-talking social media marketing <span class="grad-text">for ambitious brands.</span></h3>
        <a class="rev-button">View Projects</a>
    </div>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>