<?php
    // Get post categories
    $cats = get_the_category($id);
    // Get Project Name
    $projectName = get_post_meta(get_the_ID(), 'Project', true);
    //Get Client Name
    $clientName = get_post_meta(get_the_ID(), 'Client', true);
    //Get Background Colour
    $background = get_post_meta(get_the_ID(), 'Background', true);
    //Get Text Colour
    $textcolor = get_post_meta(get_the_ID(), 'Text Colour', true);
    //Get Desktop Screenshot
    $desktop = get_post_meta(get_the_ID(), 'Desktop', true);
    //Get Mobile Screenshot
    $mobile = get_post_meta(get_the_ID(), 'mobile', true);
?>
<div class="hero-card-link-wrap">
    <a href="<?php the_permalink() ?>">
        <div style="background: <?php echo $background; ?>;" class="rev-card hero-card <?php echo $cats[0]->slug; ?>" id="card-<?php echo $post->ID; ?>">
            <div class="rev-padding">
                <h4 style="color: <?php echo $textcolor; ?>;"><?php echo $clientName; ?></h4>
                <h2 style="color: <?php echo $textcolor; ?>;"><?php echo $projectName; ?></h2>
                <div style="margin-top: .5rem; color: <?php echo $textcolor; ?>;">Discover More ></div>
            </div>
            <div class="screen-wrap">
                <div class="screen-ui">
                    <div class="red screen-ui-btn"></div>
                    <div class="yellow screen-ui-btn"></div>
                    <div class="green screen-ui-btn"></div>
                </div>
                <div style="background-image: url(../<?php echo $desktop; ?>);" class="screenshot screenshot-desktop"></div>
                <div style="background-image: url(../<?php echo $mobile; ?>);" class="screenshot screenshot-mobile"></div>
            </div>
        </div>
    </a>
</div>