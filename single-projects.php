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
        <iframe style="width: 100%; height: 600px; overflow: hidden;" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Faod1qFZ5p5Ul87qMgd06RB%2FPrecision-Prep-Prototype-Master%3Fpage-id%3D117%253A1063%26node-id%3D963%253A9490%26viewport%3D241%252C48%252C0.09%26scaling%3Dscale-down%26starting-point-node-id%3D963%253A9490" width="100%" height="100%" scrolling="yes" frameBorder="0"></iframe>
    </div>
    <div class="screen-wrap">
        <div class="screen-ui">
        </div>
        <iframe style="width: 100%; height: 600px; overflow: hidden;" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Faod1qFZ5p5Ul87qMgd06RB%2FPrecision-Prep-Prototype-Master%3Fpage-id%3D117%253A1063%26node-id%3D963%253A9490%26viewport%3D241%252C48%252C0.09%26scaling%3Dscale-down%26starting-point-node-id%3D963%253A9490" width="100%" height="100%" scrolling="yes" frameBorder="0"></iframe>
    </div>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>