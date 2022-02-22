<?php get_header(); ?>

<section class="site-width contact-hero-wrap" style="position: relative;">
    <img loading="lazy" class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: 70%; top: -15rem; transform: rotate(29deg);">
    <h1 style="padding-bottom: 2rem;">
        <span class="grad-text">Like what you see?</span><br>
        Let's meet 🤝🏾
    </h1>
    <p>Pop your details into the form and a member of our team will get back to you as soon as we can.</p>
</section>
<section class="site-width contact-wrap">
    <div class="rev-card rev-padding form-card" style="position: relative;">
        <img loading="lazy" class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-2.svg'; ?>" style="height: 42rem; left: -22%; top: -11rem; transform: rotate(180deg);">
        <h2>Book an <span class="grad-text">intro call</span> today.</h2>
        <?php echo do_shortcode('[hf_form slug="book-an-intro-call"]'); ?> <!-- form shortcode, configured with the HTML Forms plugin -->
    </div>
    <div style="position: relative;">
        <img loading="lazy" class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/large-grid.svg'; ?>" style="height: 35rem; right: -35%; top: 5%;">
        <div class="rev-card rev-padding map-card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9650.14647296181!2d-1.6691633!3d52.7946634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb57268bd240e64cf!2sRevival%20Media!5e0!3m2!1sen!2suk!4v1645098016949!5m2!1sen!2suk" width="100%" height="450" style="border:0; border-radius: 15px 15px 0 0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="address-wrap">
                <h4><span class="grad-text">Our base camp</span></h4>
                <h3>Parkway House,<br>
                Second Avenue,<br>
                Centrum One Hundred,<br>
                Burton Upon Trent,<br>
                DE14 2WF</h3>
                <div class="contact-info-wrap">
                    <div>
                        <h4>Call us</h4>
                        <a href="tel:+44-(0)-1332-825-500">+44 (0) 1332 825 500</a>
                    </div>
                    <div>
                        <h4>Email us</h4>
                        <a href="mailto:hello@media.revival.solutions">hello@media.revival.solutions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>