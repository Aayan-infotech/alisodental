<?php
//Template Name: Patient Form
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

    .visit-section {
        background-color: #fff;
        color: #5e7e88;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 300;
        color: #93b7c1;
        margin-bottom: 1.5rem;
    }

    .section-text {
        font-size: 18px;
        line-height: 1.7;
        max-width: 800px;
        margin: 0 auto 1rem auto;
    }

    .custom-btn {
        background-color: #728967;
        color: #fff !important;
        padding: 12px 25px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-weight: 600;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #c9bf34ff;
        color: #fff !important;
        text-decoration: none;
    }
</style>
<div class="elementor-element elementor-element-a2d7d7c elementor-widget elementor-widget-theme-post-content"
    data-id="a2d7d7c" data-element_type="widget" data-widget_type="theme-post-content.default">
    <div class="elementor-widget-container">
        <div data-elementor-type="wp-page" data-elementor-id="31" class="elementor elementor-31"
            data-elementor-post-type="page">
            <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-bg.webp');">
                <div class="overlay"></div>
                <div class="hero-content">
                    <div class="heading-strip-full">
                        <h1 class="elementor-heading-title">You Deserve a Beautiful Smile</h1>
                    </div>
                </div>
            </section>
            <section class="visit-section py-5 text-center">
                <div class="container">
                    <h2 class="section-title">Smooth, Stress-Free Appointments</h2>
                    <p class="section-text">
                       We understand that every patient is unique, with individual needs and concerns. Our goal is to build lasting relationships based on trust, care, and respect. From the moment you walk through our doors, you’ll be welcomed with a smile and treated with the dignity and compassion you deserve. We look forward to making you a part of our dental family.
                    </p>
                    <p class="section-text">
                        Please complete your patient registration using the link below. If you have any questions or need assistance, our team will be happy to help—just give us a call.
                    </p>
                    <a href="contact-us" class="btn custom-btn mt-3">Patient Registration</a>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>