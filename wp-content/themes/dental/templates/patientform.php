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
            <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Exam-Hallway-1.png');">
                <div class="overlay"></div>
                <div class="hero-content">
                    <div class="heading-strip-full">
                        <h1 class="elementor-heading-title">You Deserve a Beautiful Smile</h1>
                    </div>
                </div>
            </section>
            <section class="visit-section py-5 text-center">
                <div class="container">
                    <h2 class="section-title">Streamline Your Visit With Our Office</h2>
                    <p class="section-text">
                        We recognize that our patients are unique individuals with specific needs. With every patient that walks into our office, we look to build a trusting relationship that will last a lifetime. We look forward to welcoming you to our dental family. At our office, you will always be greeted with a smile and treated with utmost dignity and respect.
                    </p>
                    <p class="section-text">
                        Please complete the patient registration via the link below. For any questions or concerns, please call our office.
                    </p>
                    <a href="#" class="btn custom-btn mt-3">Patient Registration</a>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>