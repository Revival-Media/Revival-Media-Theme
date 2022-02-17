<?php get_header(); ?>

<section class="site-width" style="position: relative;">
        <img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: 60%; top: -130px; transform: rotate(345deg);">
        <h1 style="padding-bottom: 1.5rem;">
            We’re <span class="grad-text">Revival Media</span> 👋<br>
        </h1>
        <h2 style="max-width: 31ch; padding-bottom: 0rem; margin-bottom: 0;">
            Brand builders, design experts and digital specialists.   
        </h2>
        <a class="rev-button" style="margin-top: 3rem;">Learn About Us</a>
        <img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 15rem; right: 3%; bottom: -20%;">
</section>
<?php 
    // Define Query Parameters
    $homeArgs = array(
        'tag'       => 'homepage',
        'post_type' => 'projects',
        'orderby'   => 'rand'
    );
    $home_posts = new WP_Query( $homeArgs );
?>
<section class="site-width home-hero-slider-section">
    <div class="home-glide hp-slider">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php 
                    // Start WP Query
                    while ($home_posts -> have_posts()) : $home_posts -> the_post(); 
                    // Display the Project Title and Client with Hyperlink
                ?>
                <li class="glide__slide">
                    <?php include('template-parts/project-card.php'); ?>
                </li>
                <?php 
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
    
    <!-- GlideJS script -->
    <script>
        var glide = new Glide('.home-glide', {
            type: 'carousel',
            perView: 3,
            perTouch: 3,
            focusAt: 0,
            gap: 20,
            autoplay: 8000,
            animationDuration: 150,
            peek: 150,
            slideWidth: 277,
            breakpoints: {
                1600: { // Breakpoint at <1600px
                    perView: 2,
                    peek: 100
                },
                1309: {
                    perView: 2,
                    peek: 75
                },
                1150: {
                    perView: 2,
                    peek: 25
                },
                991: {
                    perView: 2,
                    peek: 25
                },
                500: {
                    perView: 1,
                    peek: 15
                },
            }
        }).mount()
    </script>

</section>
<section class="site-width">
    <div class="rev-card services-card rev-padding" style="position: relative;">
        <img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 26rem; left: -5%; top: -22%; transform: rotate(245deg);">
        <h3 class="grad-text" class="our-services-title">Our services</h3>
        <h2 style="max-width: 44ch;">
            Our integrated <span class="grad-text">web, social, print and digital</span> services make brands work for business. 
        </h2>
        <a class="rev-button">Learn More</a>
        <img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/large-grid.svg'; ?>" style="height: 35rem; right: -8%; bottom: -71%;">
    </div>
    <div class="services-card">
        <div class="services-wrap">
            <div class="home-services-block rev-card">
                <div class="flex-wrap">
                    <img src="<?php echo get_template_directory_uri() . '/assets/imgs/magnify-icon.svg'; ?>" alt="Strategy">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Strategy</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Innovative creative concepts</span></li>
                    <li class="rev-bullet"><span>Commercial goal-setting</span></li>
                    <li class="rev-bullet"><span>Social and web strategy</span></li>
                    <li class="rev-bullet"><span>Brand driven proposals</span></li>
                </ul>
            </div>
            <div class="home-services-block rev-card">
                <div class="flex-wrap">
                    <img src="<?php echo get_template_directory_uri() . '/assets/imgs/brand-icon.svg'; ?>" alt="Brand" style="transform: scale(1.12);">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Brand</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Powerful brand systems</span></li>
                    <li class="rev-bullet"><span>Graphic design</span></li>
                    <li class="rev-bullet"><span>Brand voice and copywriting</span></li>
                    <li class="rev-bullet"><span>Pixel-perfect logos</span></li>
                </ul>
            </div>
            <div class="home-services-block rev-card">
                <div class="flex-wrap">
                    <img src="<?php echo get_template_directory_uri() . '/assets/imgs/digital-icon.svg'; ?>" alt="Digital">
                    <h3 style="margin-right: auto; margin-left: 2rem;">Digital</h3>
                </div>
                <ul style="margin-top: 2rem; line-height: 2.5rem">
                    <li class="rev-bullet"><span>Web development</span></li>
                    <li class="rev-bullet"><span>Social media content</span></li>
                    <li class="rev-bullet"><span>Hosting and domains</span></li>
                    <li class="rev-bullet"><span>Security and maintenance</span></li>
                </ul>
            </div>
            <div class="home-services-block rev-card">
                <div class="flex-wrap">
                    <img  src="<?php echo get_template_directory_uri() . '/assets/imgs/print-icon.svg'; ?>" alt="Print" style="transform: scale(0.95);">
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
        <div class="rev-card rev-padding hp-img-1" style="position: relative;">
            <img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; left: -10%; top: -14.5%;">
        </div>
        <div class="card-image-wrap">
            <h3>Bespoke customer journeys with expert <span class="grad-text">Shopify design and development</span>.</h3>
            <a href="/work" class="rev-button">View Projects</a>
        </div>
    </div>
    <div class="image-text-wrap card-switch">
        <div style="text-align: right;" class="card-image-wrap">
            <h3><span class="grad-text">Wordpress sites</span> to showcase your business and boost online enagement.</h3>
            <a href="/work" class="rev-button">View Projects</a>
        </div>
        <div class="rev-card rev-padding hp-img-2" style="position: relative;">
            <img class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-1.svg'; ?>" style="height: 60rem; right: -45%; top: -58.5%; transform: rotate(345deg);">
        </div>
    </div>
    <div class="image-text-wrap">
        <div class="rev-card rev-padding hp-img-3"></div>
        <div class="card-image-wrap">
            <h3>Straight-talking social media marketing <span class="grad-text">for ambitious brands</span>.</h3>
            <a href="/work" class="rev-button">View Projects</a>
        </div>
    </div>
</section>

<div class="site-width" style="padding-bottom: 5rem;">
    <h2>
        <span class="grad-text">Our clients</span> speak for themselves.
    </h2>
</div>

<section class="site-width client-slider-section">

    <div class="client-glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php 
                    // Define Query Parameters
                    $client_posts = new WP_Query( 'tag=client' );
                ?>
                    
                <?php 
                    // Start WP Query
                    while ($client_posts -> have_posts()) : $client_posts -> the_post(); 
                    //Get Client Name
                    $clientName = get_post_meta(get_the_ID(), 'Client', true);
                    //Get Headline
                    $headline = get_post_meta(get_the_ID(), 'Headline', true);
                    //Get Testimonial Paragraph
                    $testimonial = get_post_meta(get_the_ID(), 'Testimonial', true);
                    //Get Client Name and Job Title
                    $namePosition = get_post_meta(get_the_ID(), 'Name and Position', true);
                        
                    // Display the Project Title and Client with Hyperlink
                ?>
                <li class="glide__slide client-card">
                        <div class="clients-text rev-card rev-padding">
                            <h4><?php echo $clientName; ?></h4>
                            <h2><?php echo $headline; ?></h2>
                            <p><?php echo $testimonial; ?></p>
                            <p style="font-weight: bold;"><?php echo $namePosition; ?></p>
                            <div class="">
                                <a href="">View Project</a>
                                <a href="">Company Website</a>
                            </div>
                        </div>
                        <div class="client-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </li>
                <?php 
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
    
    <!-- GlideJS script -->
    <script>
        var glide = new Glide('.client-glide', {
            type: 'carousel',
            perView: 2,
            perTouch: 2,
            focusAt: 0,
            gap: 20,
            autoplay: 8000,
            animationDuration: 150,
            peek: 200,
            breakpoints: {
                2080: {
                    peek: 150,
                    perView: 1,
                    perTouch: 1
                },
                1309: {
                    perView: 1,
                    peek: 50
                },
                767: {
                    perView: 1,
                    peek: 30
                },
                575: {
                    perView: 1,
                    peek: 15
                }
            }
        }).mount()
    </script>

</section>

<?php get_template_part( 'template-parts/contact-form' ); ?>

<?php get_footer(); ?>