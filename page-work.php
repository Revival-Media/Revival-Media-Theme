<?php get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<section class="site-width work-hero-section" style="padding-bottom: 3rem; position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: 60%; top: -280px; transform: rotate(42deg);">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/large-grid.svg'; ?>" style="height: 35rem; right: -5%; top: 53%;">
    <h1 class="work-category-h1" style="padding-bottom: 0;">
        <span class="grad-text">Our work</span> does<br>
        all the talking 💪
    </h1>
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
        <div class="drop-workaround">
            <?php 
            if( $terms = get_terms( array(
                'taxonomy'          => 'category',
                'post_type'         => 'projects',
                'orderby'           => 'rand',
                'exclude'           => 1
            ) ) ) : 
                // if categories exist, display the dropdown
                echo '<select id="categoryFilter" name="categoryfilter" class="work-category-dropdown"><option value="">All Projects</option>';
                foreach ( $terms as $term ) :
                    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as an option value
                endforeach;
                echo '</select>';
            endif;
            ?>
        </div>
        <input type="hidden" name="action" value="myfilter">
    </form>
    <script> // Script that sends AJAX request and receives response
        $(function($){
            $('#filter').submit(function(){
                var filter = $('#filter');
                $.ajax({
                    url:filter.attr('action'),
                    data:filter.serialize(), // form data
                    type:filter.attr('method'), // POST
                    success:function(data){
                        $('#response').html(data); // insert data
                    }
                });
                return false;
            });
        });
    </script>
        <script> // Check vehicle type based on url
        $( document ).ready(function() {
            if (window.location.href.indexOf('?web-development') > 0) {
                $("#categoryFilter").val('8');
                $("#categoryFilter").closest('form').submit();
            };
            if (window.location.href.indexOf('?social-media') > 0) {
                $("#categoryFilter").val('9');
                $("#categoryFilter").closest('form').submit();
            };
            if (window.location.href.indexOf('?copywriting') > 0) {
                $("#categoryFilter").val('15');
            };
            if (window.location.href.indexOf('?brand-building') > 0) {
                $("#categoryFilter").val('12');
            };
            if (window.location.href.indexOf('?design') > 0) {
                $("#categoryFilter").val('10');
            };
            jQuery('.work-category-dropdown').on('change', function() {
            $(this).closest('form').submit();
        });
        });
    </script>
</section>
<section id="response" class="work-grid-section site-width" style="z-index: 1; position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: -7%; top: 3%; transform: rotate(345deg);">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; left: -4%; top: 35%;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-2.svg'; ?>" style="height: 38rem; right: -14%; top: 52%; transform: rotate(352deg);">

    <?php
        // Define Query Parameters
        $workArgs = array (
            'post_type' => 'projects',
            'orderby'   => 'rand',
            'posts_per_page'    => -1
        );
        $work_posts = new WP_Query( $workArgs );
    ?>
    <?php 
        // Start WP Query
        while ($work_posts -> have_posts()) : $work_posts -> the_post(); 
            
        // Display the Project Title and Client with Hyperlink
        include('template-parts/project-card.php');

        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
    ?>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>