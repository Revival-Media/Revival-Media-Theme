<?php get_header(); ?>

<section class="site-width" style="display: grid; grid-template-columns: 1fr 1fr; align-items: start;">
        <h1 style="padding-bottom: 2rem;">
            <span class="grad-text">Our work</span> does<br>
            all the talking 💪
        </h1>
        <select name="">
            <option value="">Select Service</option>
            <option value="">Test Category 1</option>
            <option value="">Test Category 1</option>
        </select>
</section>
<section class="work-grid-section site-width">
    <?php 
        // Define Query Parameters
        $home_posts = new WP_Query( 'post_type=projects' );
    ?>
    <?php 
        // Start WP Query
        while ($home_posts -> have_posts()) : $home_posts -> the_post(); 
        // Get Project Name
        $projectName = get_post_meta(get_the_ID(), 'Project', true);
        //Get Client Name
        $clientName = get_post_meta(get_the_ID(), 'Client', true);
        //Get Background Colour
        $background = get_post_meta(get_the_ID(), 'Background', true);
        //Get Text Colour
        $textcolor = get_post_meta(get_the_ID(), 'Text Colour', true);
        //Get Desktop Screenshot Colour
        $desktop = get_post_meta(get_the_ID(), 'Desktop', true);
            
        // Display the Project Title and Client with Hyperlink
    ?>
        <div class="work-card-link-wrap">
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
    <?php 
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
    ?>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>