<!-- Assigning background-image declarations here to use php generated links -->
<style>
    .about-pic-1 {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/imgs/about-pic-1.jpg'; ?>);
    }
    .about-pic-2 {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/imgs/about-pic-2.jpg'; ?>);
    }
    .about-pic-3 {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/imgs/about-pic-3.jpg'; ?>);
    }
    .about-pic-4 {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/imgs/about-pic-4.jpg'; ?>);
    }
</style>

<?php get_header(); ?>
<!-- About hero section -->
<section class="site-width" style="position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: 60%; top: -280px; transform: rotate(29deg);">
    <div class="about-hero-wrap">
        <h1 class="about-hero">
            We craft unforgettable user
            experiences built upon our <span class="grad-text">
            passion for marketing</span> ❤️
        </h1>
        <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; left: -5%; bottom: 2%;">
        <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/large-grid.svg'; ?>" style="height: 32rem; right: -17%; bottom: 45%;">
        <div class="about-pic-1 about-pic" alt="" style="position: relative;"></div>
        <div class="about-pic-2 about-pic" alt=""></div>
        <div class="about-pic-3 about-pic" alt=""></div>
        <div class="about-pic-4 about-pic" alt=""></div>
    </div>
</section>
<!-- Meet the team section -->
<section class="site-width" style="position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; right: -12%; top: -126px; transform: rotate(225deg);">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; left: -5%; top: 45%;">
    <h2 style="max-width: 100%;"><span class="grad-text">Meet the team</span> that makes it happen.</h2>
    <div class="rev-team-wrap">
        <div class="team-card team-card-nb">
            <h3>Niamh Beange</h3>
            <h4>Social Media &<br>Marketing Manager</h4>
        </div>
        <div class="team-card team-card-hf">
            <h3>Harry Foreman</h3>
            <h4>Web Developer &<br>Graphic Designer</h4>
        </div>
        <div class="team-card team-card-jg">
            <h3>James Goodman</h3>
            <h4>Web Developer &<br>Graphic Designer</h4>
        </div>
        <!--<div class="team-card team-card-an">
            <h3>Anna Nalborczyk</h3>
            <h4>Public Relations &<br>Media Manager</h4>
        </div>-->
        <div class="team-card team-card-ju">
            <h2>Join us</h2>
            <p style="max-width: 28ch;">We're always looking for curious and creative minds to help us deliver great work for our clients.</p>
            <a href="https://revivalresourcing.co.uk/contact/" class="rev-button" target="_blank">Send us your CV</a>
        </div>
    </div>
</section>

<section class="site-width our-tools-section">
    <div class="tools-container">
        <div class="tools-top">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-top-l-mob.png'; ?>" alt="">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-top-r-mob.png'; ?>" alt="">
        </div>
        <img loading="lazy" class="tools-left" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-left-dt.png'; ?>" alt="">
        <div class="rev-card rev-padding our-tools-card" style="position: relative;">
            <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-1.svg'; ?>" style="height: 38rem; left: -29%; top: -126px; transform: rotate(17deg);">
            <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 25rem; right: -14%; top: 63%; transform: rotate(215deg);">
            <h1>Our tools 🛠️</h1>
            <p>We use a suite of modern tools to help put our clients on the map and keep them there.</p>
            <a href="<?php echo get_template_directory_uri() . '/work'; ?>" style="z-index: 3;" class="rev-button">View them in action</a>
        </div>
        <div class="tools-bottom">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-btm-l-mob.png'; ?>" alt="">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-btm-r-mob.png'; ?>" alt="">
        </div>
        <img loading="lazy" class="tools-right" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-right-dt.png'; ?>" alt="">
    </div>
</section>
<!-- Revival Group promo section -->
<section class="site-width rev-group-wrap" style="position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/large-grid.svg'; ?>" style="height: 32rem; left: -8%; top: -21%;">
    <div class="rev-card rev-padding rev-group-card">
        <h2>
            Proud to be a part of the <span>Revival Solutions Group</span>
        </h2>
        <p>
            Revival Solutions specialise in helping small to medium-sized 
            companies with financial restructuring and support, and has 
            extensive experience across a diverse range of sectors.
        </p>
        <a href="https://revivalsolutions.co.uk" class="rev-button">Discover More</a>
    </div>
    <div class="rev-card rev-padding rev-connect-card">
        <h2>
            Boost your sales with <span>Revival Connect</span>
        </h2>
        <p>
            Does your business struggle with limited sales resources? Choose Revival Connect as an extension of your sales team to a build stable pipeline of quality leads and sales appointments.
        </p>
        <a href="https://revivalconnect.co.uk" class="rev-button">Discover More</a>
    </div>
</section>

<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>