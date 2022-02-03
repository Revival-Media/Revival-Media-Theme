<?php get_header(); ?>

<!-- Get post meta fields -->
<?php 
    // Get Project Name
    $projectName = get_post_meta(get_the_ID(), 'Project', true);
    //Get Client Name
    $clientName = get_post_meta(get_the_ID(), 'Client', true);
    //Get Top Text
    $topText = get_post_meta(get_the_ID(), 'top-text', true);
    //Get Top Paragraph Text
    $topTextP = get_post_meta(get_the_ID(), 'top-text-p', true);
?>

<section class="proj-hero-wrap">
    <div class="proj-hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.3) 100%), url(<?php echo get_the_post_thumbnail_url(); ?>);" id="card-<?php echo $post->ID; ?>">
        <div class="site-width proj-hero-text">
            <h4><?php echo $clientName; ?></h4>
            <div class="proj-hero-button-wrap">
                <h1><?php echo $projectName; ?></h1>
                <a class="rev-button" href="#">View Website</a>
            </div>
        </div>
    </div>
</section>
<section class="site-width top-text-section">
    <div class="top-text-wrap">
        <h3><?php echo $topText; ?></h3>
        <p><?php echo $topTextP; ?></p>
    </div>
</section>
<section class="web-iframes-section site-width">
    <div class="screen-wrap">
        <div class="screen-ui">
            <div class="red screen-ui-btn"></div>
            <div class="yellow screen-ui-btn"></div>
            <div class="green screen-ui-btn"></div>
        </div>
        <iframe style="width: 100%; height: 600px; overflow: hidden;" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Faod1qFZ5p5Ul87qMgd06RB%2FPrecision-Prep-Prototype-Master%3Fpage-id%3D1534%253A9717%26node-id%3D1534%253A10214%26viewport%3D241%252C48%252C0.16%26scaling%3Dscale-down-width" width="100%" height="100%" scrolling="yes" frameBorder="0"></iframe>
    </div>
    <div class="screen-wrap">
        <div class="screen-ui">
        </div>
        <iframe style="width: 100%; height: 600px; overflow: hidden;" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Faod1qFZ5p5Ul87qMgd06RB%2FPrecision-Prep-Prototype-Master%3Fpage-id%3D1534%253A9717%26node-id%3D1534%253A9718%26viewport%3D241%252C48%252C0.63%26scaling%3Dscale-down-width" width="100%" height="100%" scrolling="yes" frameBorder="0"></iframe>
    </div>
</section>
<section class="feature-section site-width">
    <div class="image-text-wrap">
        <div class="rev-card hp-img-1"></div>
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
        <div class="rev-card hp-img-2"></div>
    </div>
    <div class="image-text-wrap">
        <div class="rev-card hp-img-3"></div>
        <div class="card-image-wrap">
            <h3>Straight-talking social media marketing <span class="grad-text">for ambitious brands.</span></h3>
            <a class="rev-button">View Projects</a>
        </div>
    </div>
</section>
<section class="site-width" style="padding-bottom: 3rem;">
    <h2>Some of our <span class="grad-text">other projects.</span></h2>
</section>
<section class="related-projects-section site-width">
    <div class="project-page-glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php
                    // Define Query Parameters
                    $project_posts = new WP_Query( 'post_type=projects' );

                    // Start WP Query
                    while ($project_posts -> have_posts()) : $project_posts -> the_post(); 
                ?>
                <li class="glide__slide">
                    <div class="hero-card-link-wrap">
                        <a href="<?php the_permalink() ?>">
                            <div style="background-color: <?php echo $background; ?>;" class="rev-card hero-card" id="card-<?php echo $post->ID; ?>">
                                <div>
                                    <h4 style="color: <?php echo $textcolor; ?>;"><?php echo $clientName; ?></h4>
                                    <h2 style="color: <?php echo $textcolor; ?>;"><?php echo $projectName; ?></h2>
                                    <div style="margin-top: 1.5rem;" class="rev-button">Discover More</div>
                                </div>
                                <div class="screen-wrap">
                                    <div class="screen-ui">
                                        <div class="red screen-ui-btn"></div>
                                        <div class="yellow screen-ui-btn"></div>
                                        <div class="green screen-ui-btn"></div>
                                    </div>
                                    <div style="background-image: url(<?php echo $desktop; ?>);" class="screenshot"></div>
                                </div>
                            </div>
                        </a>
                    </div>
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
        var glide = new Glide('.project-page-glide', {
            type: 'carousel',
            perView: 3,
            perTouch: 3,
            focusAt: 0,
            gap: 20,
            autoplay: 8000,
            animationDuration: 150,
            peek: 150,
            breakpoints: {
                1600: { // Breakpoint at <1600px
                    perView: 2,
                    peek: 100
                },
                1309: {
                    perView: 2,
                    peek: 50
                },
                767: {
                    perView: 1,
                    peek: 100
                },
                575: {
                    perView: 1,
                    peek: 25
                }
            }
        }).mount()
    </script>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>