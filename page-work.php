<?php get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<section class="site-width work-hero-section" style="padding-bottom: 3rem;">
        <h1 class="work-category-h1" style="padding-bottom: 0;">
            <span class="grad-text">Our work</span> does<br>
            all the talking 💪
        </h1>
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
            <div class="drop-workaround">
                <?php 
                if( $terms = get_terms( array(
                    'taxonomy'  => 'category',
                    'post_type' => 'projects',
                    'orderby'   => 'rand',
                    'exclude' => 1
                ) ) ) : 
                    // if categories exist, display the dropdown
                    echo '<select name="categoryfilter" class="work-category-dropdown"><option value="">All projects</option>';
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
            jQuery('.work-category-dropdown').on('change', function() {
                $(this).closest('form').submit();
            });
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
</section>
<section id="response" class="work-grid-section site-width">
    <?php 
        // Define Query Parameters
        $workArgs = array (
            'post_type' => 'projects',
            'orderby'   => 'rand'
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