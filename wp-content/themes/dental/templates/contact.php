<?php
//Template Name: Contact
?>
<?php get_header(); ?>
<div class="elementor-element elementor-element-a2d7d7c elementor-widget elementor-widget-theme-post-content"
    data-id="a2d7d7c" data-element_type="widget" data-widget_type="theme-post-content.default">
    <div class="elementor-widget-container">
        <div data-elementor-type="wp-page" data-elementor-id="31" class="elementor elementor-31"
            data-elementor-post-type="page">
            <section style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-bg.webp'); background-size: cover; background-position: center; background-attachment: fixed; min-height: 100vh; padding: 60px 0;">
                <div class="container bg-white text-center py-5 px-4 rounded shadow" style="max-width: 900px;">

                    <h2 class="display-5 fw-light mb-3" style="color: #a0c0cd;">Contact Aliso Dental</h2>

                    <p class="fw-bold text-warning mb-1" style="letter-spacing: 1px;">CALL US: (949) 448-0274</p>
                    <!-- <p class="fw-bold text-dark mb-1">FAX: 248-362-2324</p> -->
                    <p class="text-uppercase fw-bold text-dark mb-4" style="letter-spacing: 2px;">
                        Location: 15 Mareblu #380, Aliso Viejo, CA 92656,
                    </p>

                    <a href="#patient-registration" class="btn btn-light text-uppercase px-4 py-2 fw-semibold mb-4" style="background-color: #a0c0cd; color: white; letter-spacing: 1px;">
                        Patient Registration
                    </a>

                    <div class="mt-3">
                        <h4 class="mb-4 text-warning fw-bold">Request an Appointment</h4>
                        <form action="#" method="POST" id="contact">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="5" placeholder="Comments/Questions" required></textarea>
                            </div>

                            <div class="mb-3 text-start">
                                <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                            </div>

                            <button type="submit" class="btn btn-block w-100 py-2 fw-bold text-uppercase" style="background-color: #a0c0cd; color: white; letter-spacing: 2px;">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <div class="mt-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.283038316691!2d-83.16147018454326!3d42.56639557917425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824b828df18112d%3A0xf5f4d3e61ab32c76!2sTroy%20Dental%20Studio!5e0!3m2!1sen!2sus!4v1694653612345"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>