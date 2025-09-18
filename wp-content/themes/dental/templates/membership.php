<?php
//Template Name: Membership
?>
<?php get_header(); ?>
<style>
    .hero-section {
        position: relative;
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        width: 100%;
        text-align: center;
    }

    .heading-strip-full {
        background: #94B8C6BF;
        padding: 10px;
        text-align: center;
        width: 100%;
    }

    .heading-strip-full .elementor-heading-title {
        color: #fff;
        margin: 0;
        font-size: 65px;
    }

    .membership-section {
        background-color: #91b3c2;
        color: #fff;
    }

    .pricing-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-5px);
    }

    .pricing-header {
        padding: 1.5rem 1rem;
        background: #d7ac47;
        color: #ffffff !important;
    }

    .pricing-header h4 {
        color: #ffffff !important;
        font-size: 40px;
    }

    .pricing-header small {
        color: #ffffff !important;
        font-size: 24px;
        font-weight: 500;
        margin-top: 10px;
    }

    .pricing-body {
        padding: 1.5rem 1rem;
    }

    .pricing-body h2 {
        color: #555 !important;
        font-size: 65px;
        font-weight: 800;
    }

    .pricing-body h2 {
        color: #555 !important;
        font-size: 65px;
        font-weight: 800;
    }

    .pricing-body small {
        color: #555 !important;
        font-size: 24px;
        font-weight: 700;
    }

    .pricing-body small {
        color: #555 !important;
        font-size: 24px;
        font-weight: 700;
    }


    .price sup {
        font-size: .3em;
        font-weight: 800;
    }

    .membership-section h5 {
        font-size: 28px;
        font-weight: 700;
        color: #fff !important;
        text-transform: capitalize;
        letter-spacing: 1px;
    }
</style>
<div class="elementor-element elementor-element-a2d7d7c elementor-widget elementor-widget-theme-post-content"
    data-id="a2d7d7c" data-element_type="widget" data-widget_type="theme-post-content.default">
    <div class="elementor-widget-container">
        <div data-elementor-type="wp-page" data-elementor-id="31" class="elementor elementor-31"
            data-elementor-post-type="page">
            <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Membership.jpg');">
                <div class="overlay"></div>
                <div class="hero-content">
                    <div class="heading-strip-full">
                        <h1 class="elementor-heading-title">Memberships</h1>
                    </div>
                </div>
            </section>
            <section class="membership-section py-5">
                <div class="container text-center text-white py-5">
                    <div class="row g-4 justify-content-center">
                        <!-- Youth -->
                        <div class="col-md-4">
                            <div class="pricing-card h-100">
                                <div class="pricing-header rounded-top">
                                    <h4 class="mb-0 fw-bold">Youth</h4>
                                    <small class="text-uppercase">Membership</small>
                                </div>
                                <div class="pricing-body bg-white text-dark rounded-bottom">
                                    <h2 class="price">
                                        <sup>$</sup>299<small>/Year</small>
                                    </h2>
                                    <p class="mb-0 text-muted">or $27/month</p>
                                </div>
                            </div>
                        </div>

                        <!-- Adult -->
                        <div class="col-md-4">
                            <div class="pricing-card h-100">
                                <div class="pricing-header rounded-top">
                                    <h4 class="mb-0 fw-bold">Youth</h4>
                                    <small class="text-uppercase">Membership</small>
                                </div>
                                <div class="pricing-body bg-white text-dark rounded-bottom">
                                    <h2 class="price">
                                        <sup>$</sup>299<small>/Year</small>
                                    </h2>
                                    <p class="mb-0 text-muted">or $27/month</p>
                                </div>
                            </div>
                        </div>

                        <!-- Perio -->
                        <div class="col-md-4">
                            <div class="pricing-card h-100">
                                <div class="pricing-header rounded-top">
                                    <h4 class="mb-0 fw-bold">Youth</h4>
                                    <small class="text-uppercase">Membership</small>
                                </div>
                                <div class="pricing-body bg-white text-dark rounded-bottom">
                                    <h2 class="price">
                                        <sup>$</sup>299<small>/Year</small>
                                    </h2>
                                    <p class="mb-0 text-muted">or $27/month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Info -->
                    <div class="container mt-5">
                        <div class="row justify-content-center align-items-center text-center">
                            <!-- Text Content: Takes 9 columns on large screens, stacks on small -->
                            <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                                <h5>Why Pay for Your Baby?  <br class="d-md-none">Membership is Free for Under 3</h5>
                                <p class="mb-1">
                                    When you sign up for any Adult Membership, you can enroll your child (under 3 years old) in our Youth program at no additional cost. It's our way of making it easier for the whole family to get involved from the very start.
                                </p>
                                <h6 class="fw-bold mt-3">Aliso dental</h6>
                                <p class="mb-0">
                                    92656 - 3960 |
                                    <a href="https://alisodental.com/" class="text-white text-decoration-underline">
                                        www.alisodental.com
                                    </a>
                                </p>15 Mareblu #380, Aliso Viejo, CA 92656,3960 Crooks Rd., Ste 100, Troy, Michigan, 48084</p>
                            </div>

                            <!-- QR Code: Takes 3 columns on large screens -->
                            <!-- <div class="col-lg-3 col-md-6 offset-md-3 offset-lg-0">
                                <img
                                    src="https://s33929.pcdn.co/wp-content/uploads/sites/360/2025/06/QR.jpg"
                                    alt="Scan QR"
                                    class="img-fluid rounded mx-auto d-block"
                                    style="max-width: 140px;" />
                                <p class="text-warning mt-2 fw-bold">SCAN ME</p>
                            </div> -->
                        </div>
                    </div>

                </div>
            </section>

            <section class="text-center py-5 bg-white">
                <div class="container">
                    <!-- Main Heading -->
                    <h2 class="display-5 fw-light text-secondary mb-3" style="color: #a0c0cd;">
                        No Dental Insurance?<br>
                        No Problem!
                    </h2>

                    <!-- Subtext -->
                    <p class="lead text-dark mb-4">
                        We Now Offer Dental Membership Plans In Our Office!
                    </p>

                    <!-- CTA Button -->
                    <a href="contact" class="btn btn-success text-white px-4 py-2 text-uppercase fw-bold" style="letter-spacing: 2px;">
                        Click Here For More Details
                    </a>

                    <!-- Footer Text -->
                    <p class="mt-4 fw-semibold" style="color: #a0c0cd; font-size: 1.25rem;">
                        Ask About Our Dental Memberships!
                    </p>
                </div>
            </section>

        </div>
    </div>
</div>
<?php get_footer(); ?>