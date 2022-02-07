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
            
        // Display the Project Title and Client with Hyperlink
        include('template-parts/project-card.php');

        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
    ?>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>