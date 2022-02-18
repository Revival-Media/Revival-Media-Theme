<?php get_header(); ?>

<!-- Need JQuery on this page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
    //Get Desktop Screenshot
    $desktopscreenshot = get_post_meta(get_the_ID(), 'desktop-screenshot', true);
    //Get Mobile Screenshot
    $mobilescreenshot = get_post_meta(get_the_ID(), 'mobile-screenshot', true);
    //Get Website Link
    $weblink = get_post_meta(get_the_ID(), 'web-link', true);

    $feature1 = get_post_meta(get_the_ID(), 'feature1', true);
    $feature2 = get_post_meta(get_the_ID(), 'feature2', true);
    $feature3 = get_post_meta(get_the_ID(), 'feature3', true);
    $featureimg1 = get_post_meta(get_the_ID(), 'feature-img1', true);
    $featureimg2 = get_post_meta(get_the_ID(), 'feature-img2', true);
    $featureimg3 = get_post_meta(get_the_ID(), 'feature-img3', true);
?>

<section class="proj-hero-wrap">
    <div class="proj-hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url(<?php echo get_the_post_thumbnail_url(); ?>);" id="card-<?php echo $post->ID; ?>">
        <div class="site-width proj-hero-text" style="position: relative;">
            <h4 style="z-index: 1;"><?php echo $clientName; ?></h4>
            <div style="z-index: 1;" class="proj-hero-button-wrap">
                <h1><?php echo $projectName; ?></h1>
                <a target="_blank" rel="external" style="display: <?php if (empty($weblink)) { echo none; } else { echo block; } ?>;" class="rev-button" href="<?php echo $weblink ?>">View Website</a>
            </div>
        </div>
    </div>
</section>
<section class="site-width top-text-section" style="z-index: 1; position: relative;">
    <div class="top-text-wrap">
        <h3><span class="grad-text">The Brief:</span><br><?php echo $topText; ?></h3>
    </div>
</section>
<!-- This section is only displayed if the project's mobile-screenshot metafield is blank -->
<section class="web-screenshot-section site-width" style="display: <?php if (empty($mobilescreenshot)) { echo none; } else { echo grid; } ?>;">
    <div class="close-scroll rev-button">Close scrolling</div>
    <h2 style="margin-top: 1.5rem;">Interactive preview</h2>
    <p style="margin-bottom: 2rem;">Click the screenshots below to scroll through an interactive preview of the final site. <a href="<?php echo $weblink ?>" target="_blank">Click here to see it in action.</a></p>
    <div class="web-screenshot-section-inner">
        <div class="screen-wrap scrollable" style="height: 600px; overflow: hidden;">
            <div class="screen-ui">
                <div class="red screen-ui-btn"></div>
                <div class="yellow screen-ui-btn"></div>
                <div class="green screen-ui-btn"></div>
            </div>
            <div style="overflow-y: scroll; height: 97.3%;">
                <img style="width: 100%; overflow: hidden; object-fit: cover; object-position: top;" src="../<?php echo $desktopscreenshot; ?>">
            </div>
        </div>
        <div class="mob-screen-wrap screen-wrap scrollable" style="height: 600px; overflow: hidden; border-radius: 1.5rem;">
            <div class="mob-screen-ui screen-ui">
            </div>
            <div style="overflow-y: scroll; height: 581px;">
                <img style="width: 100%; overflow: hidden; object-fit: cover; object-position: top;" src="../<?php echo $mobilescreenshot; ?>">
            </div>
        </div>
    </div>
    <!-- On-click scrolling script -->
    <script>
        $(function() {                                  //run when the DOM is ready
            $(".scrollable").click(function() {         //target class
                $(".scrollable").addClass("active");    //add the class to the selected element
                $(".close-scroll").addClass("visible"); 
            });
        });
        $(function() {                                  //run when the DOM is ready
            $(".close-scroll").click(function() {         //target class
                $(".scrollable").removeClass("active");    //remove the class to the clicked element
                $(".close-scroll").removeClass("visible");    //remove the class to the clicked element
            });
        });
    </script>
</section>
<section class="feature-section site-width">
    <div class="image-text-wrap" style="display: <?php if (empty($feature1)) { echo none; } else { echo flex; } ?>;">
        <div class="rev-card" style="background-image: url(../<?php echo $featureimg1; ?>); background-size: cover; background-position: center;"></div>
        <div class="card-image-wrap">
            <h4><?php echo $feature1; ?></h4>
        </div>
    </div>
    <div class="image-text-wrap card-switch" style="display: <?php if (empty($feature2)) { echo none; } else { echo flex; } ?>;">
        <div style="text-align: right;" class="card-image-wrap">
            <h4><?php echo $feature2; ?></h4>
        </div>
        <div class="rev-card" style="background-image: url(../<?php echo $featureimg2; ?>); background-size: cover; background-position: center;"></div>
    </div>
    <div class="image-text-wrap" style="display: <?php if (empty($feature3)) { echo none; } else { echo flex; } ?>;">
        <div class="rev-card" style="background-image: url(../<?php echo $featureimg3; ?>); background-size: cover; background-position: center;"></div>
        <div class="card-image-wrap">
            <h4><?php echo $feature3; ?></h4>
        </div>
    </div>
</section>

<section class="site-width" style="padding-bottom: 3rem;">
    <h2>Some of our <span class="grad-text">other projects</span>.</h2>
</section>
<section class="related-projects-section site-width" style="z-index: 1; position: relative;">
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