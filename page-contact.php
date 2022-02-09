<?php get_header(); ?>

<section class="site-width contact-hero-wrap">
    <h1 style="padding-bottom: 2rem;">
        <span class="grad-text">Like what you see?</span><br>
        Let's meet 🤝🏾
    </h1>
    <p>Pop your details into the form and a member of our team will get back to you as soon as we can.</p>
</section>
<section class="site-width contact-wrap">
    <div class="rev-card rev-padding form-card">
        <h2>Book an <span class="grad-text">intro call</span> today.</h2>
        <?php echo do_shortcode('[hf_form slug="book-an-intro-call"]'); ?> <!-- form shortcode, configured with the HTML Forms plugin -->
    </div>
    <div class="rev-card rev-padding map-card">
        <iframe src="https://snazzymaps.com/embed/362847" width="100%" height="300px"></iframe>
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
</section>

<?php get_footer(); ?>