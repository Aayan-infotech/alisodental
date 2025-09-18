<?php
//Template Name: Blog-Details
?>
<?php get_header(); ?>
<style>
    .hero-section {
        position: relative;
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        /* keeps image fixed while scrolling */
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
        /* optional dark overlay */
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
        /* your given background with transparency */
        padding: 10px;
        text-align: center;
        width: 100%;
    }

    .heading-strip-full .elementor-heading-title {
        color: #fff;
        margin: 0;
        font-size: 65px;
    }


    /* Doctor Image Styling */
    .doctor-image img {
        border: 5px solid #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        border-radius: 4px;
    }

    /* Name Heading */
    .name-heading {
        font-size: 32px;
        font-weight: 400;
        color: #88c4e6;
        /* light blue shade */
        margin: 0 0 5px;
    }

    /* Title Heading */
    .title-heading {
        font-size: 22px;
        font-weight: 400;
        color: #f4b321;
        /* orange shade */
        margin: 0 0 20px;
    }

    /* Bio Text */
    .bio-text {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    .bio-text strong {
        color: #000;
    }

    /* Section layout */
    .doctor-section {
        padding: 10px 20px;
        background: #F9F9F9;
    }

    .doctor-container {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        max-width: 1200px;
        margin: 0 auto;
        gap: 40px;
    }

    /* Left Image */
    .doctor-image img {
        border: 5px solid #fff;
        border-radius: 6px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        max-width: 100%;
        height: auto;
    }

    /* Right Content */
    .doctor-content {
        flex: 1;
    }

    /* Name */
    .doctor-name {
        font-size: 32px;
        font-weight: 400;
        color: #88c4e6;
        /* light blue */
        margin: 0 0 10px;
    }

    /* Title */
    .doctor-title {
        font-size: 22px;
        font-weight: 400;
        margin: 0 0 20px;
    }

    /* Bio text */
    .doctor-bio {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    .doctor-bio strong {
        color: #000;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .doctor-container {
            flex-direction: column;
            text-align: center;
        }

        .doctor-content {
            margin-top: 20px;
        }
    }

    .practice-section {
        padding: 60px 20px;
        background: #fff;
    }

    .practice-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        gap: 40px;
    }

    .practice-text {
        flex: 1 1 55%;
    }

    .practice-text .subtitle {
        font-size: 32px;
        color: #9BC2D1;
        /* light blue like image */
        margin-bottom: 10px;
    }

    .practice-text .title {
        font-size: 28px;
        color: #E6A93C;
        /* golden color like image */
        margin-bottom: 20px;
    }

    .practice-text p {
        font-size: 16px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 15px;
    }

    .practice-text .quote {
        font-style: italic;
        color: #666;
        margin-top: 20px;
    }

    .practice-text .quote span {
        display: block;
        margin-top: 5px;
        font-weight: bold;
        color: #333;
    }

    .practice-image {
        flex: 1 1 40%;
        text-align: center;
    }

    .practice-image img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .tds-practice-section {
        background: #f9f9f9;
        padding: 60px 20px;
    }

    .tds-practice-img {
        width: 100%;
        /* fill column width */
        height: 100%;
        /* fill column height */
        object-fit: cover;
        /* maintain aspect ratio while filling height */
        border-radius: 8px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .tds-practice-text .tds-practice-title {
        font-size: 36px;
        color: #6a94ac;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .tds-practice-text .tds-practice-subtitle {
        font-size: 22px;
        color: #e6a93c;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .tds-practice-text p {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 15px;
    }

    .tds-practice-btn {
        display: inline-block;
        background: #94b8c6;
        color: #fff !important;
        font-size: 14px;
        font-weight: 600;
        padding: 12px 24px;
        border-radius: 4px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .tds-practice-btn:hover {
        background: #e4b73bff;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .tds-practice-img {
            width: 100%;
            height: auto;
            /* allow natural height on mobile */
            margin-top: 20px;
        }

        .tds-practice-text .tds-practice-title {
            font-size: 28px;
        }

        .tds-practice-text .tds-practice-subtitle {
            font-size: 18px;
        }
    }

    .mission-section {
        background: #ffffff;
        padding: 60px 20px;
    }

    .mission-title {
        font-size: 36px;
        font-weight: 700;
        color: #6a94ac;
        margin-bottom: 20px;
    }

    .mission-intro {
        font-size: 18px;
        color: #555;
        line-height: 1.8;
    }

    .info-box {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding-bottom: 10px;
    }

    .info-header {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-icon {
        font-size: 20px;
        color: #e6a93c;
    }

    .info-title {
        font-size: 20px;
        font-weight: 600;
        color: #e6a93c !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0;
    }

    .info-text {
        font-size: 18px;
        color: #555;
    }

    .info-text a {
        color: #555;
        text-decoration: none;
    }

    hr {
        border: 0;
        border-top: 2px solid #e6e6e6;
        margin: 15px 0;
    }


    .mission-images img {
        width: 100%;
        height: auto;
    }

    .mission-images img+img {
        margin-top: 20px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .mission-title {
            font-size: 28px;
        }

        .info-title {
            font-size: 16px;
        }
    }

    .tech-card {
        border: none;
        box-shadow: none;
        transition: all 0.3s ease;
    }

    .tech-card img {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    .tech-card h5 {
        font-size: 1.1rem;
        color: #007bff;
        /* Customize as needed */
    }

    .tech-card p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.5;
    }

    .tech-card a {
        font-size: 0.85rem;
        color: #e59f10;
        /* Match orange from image */
        text-decoration: none;
    }

    .tech-card a:hover {
        text-decoration: underline;
    }

    .section-title {
        color: #96b4c7;
        font-size: 2.5rem;
        font-weight: 400;
        margin-bottom: 0.5rem;
    }

    .section-subtitle {
        color: #f3b95f;
        font-size: 1.4rem;
        font-weight: 400;
        margin-bottom: 2.5rem;
    }

    .testimonial {
        border: 2px solid #96b4c7;
        padding: 30px;
        border-radius: 6px;
        background-color: #fff;
        height: 100%;
    }

    .testimonial .stars {
        color: #f3b95f;
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .testimonial h5 {
        font-size: 1.25rem;
        color: #96b4c7;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .testimonial p {
        font-size: 1rem;
        color: #444;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .testimonial em {
        font-weight: 600;
        font-style: italic;
    }

    .share-story-section {
        color: #a3bccf;
        /* Light blue text color */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-title {
        font-weight: 300;
        font-size: 2.5rem;
        margin-bottom: 2rem;
    }

    .icon-box a {
        text-decoration: none;
    }

    .icon-box i {
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 0.5rem;
        display: inline-block;
    }

    .icon-google {
        color: #d1aa49;
        /* Gold */
    }

    .icon-facebook {
        color: #d1aa49;
        /* Gold */
    }

    .icon-instagram {
        color: #d1aa49;
        /* Gold */
    }

    .icon-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #a3bccf;
    }

    .icon-title a:hover {
        text-decoration: underline;
    }

    .icon-desc {
        font-size: 1rem;
        font-weight: 400;
        color: #444444;
        margin-top: 0.25rem;
    }

    .article-title {
        font-size: 26px;
        font-weight: 600;
        color: #a3bccf;
        line-height: 1.4;
        margin-bottom: 20px;
        text-align: center;
    }

    .article-img {
        border-radius: 8px;
        margin-bottom: 20px;
        width: 100%;
        height: auto;
    }

    .article-text {
        font-size: 15px;
        line-height: 1.8;
        color: #555;
        text-align: justify;
        margin-bottom: 25px;
    }

    .article-subtitle {
        font-size: 20px;
        font-weight: 600;
        color: #a3bccf;
        margin: 25px 0 10px;
    }
</style>
<div class="elementor-element elementor-element-a2d7d7c elementor-widget elementor-widget-theme-post-content"
    data-id="a2d7d7c" data-element_type="widget" data-widget_type="theme-post-content.default">
    <div class="elementor-widget-container">
        <div data-elementor-type="wp-page" data-elementor-id="31" class="elementor elementor-31"
            data-elementor-post-type="page">
            <section class="hero-section"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-bg.webp');">
                <div class="overlay"></div>
                <div class="hero-content">
                    <div class="heading-strip-full">
                        <h1 class="elementor-heading-title">Blog Details</h1>
                    </div>
                </div>
            </section>

            <section class="doctor-section">
                <div class="container my-5">
                    <h2 class="article-title">
                        Comprehensive Guide to Temporomandibular Joint (TMJ) Treatment: <br>
                        Symptoms, Prevention, and Effective Relief Strategies
                    </h2>

                    <div class="text-center">
                        <img src="https://s33929.pcdn.co/wp-content/uploads/sites/360/2024/05/Comprehensive-Guide-to-Temporomandibular-Joint-TMJ-Treatment-Symptoms-Prevention-and-Effective-Relief-Strategies.jpg" alt="TMJ Treatment"
                            class="article-img img-fluid shadow-sm">
                    </div>

                    <p class="article-text">
                        Experiencing jaw pain, challenges in chewing, or hearing popping sounds upon opening your mouth
                        could indicate you are dealing with a temporomandibular joint (TMJ) disorder. This condition
                        affects many, significantly influencing their daily activities and overall quality of life. This
                        article aims to explore the intricacies of TMJ disorders, including symptoms, causes, effective
                        prevention strategies, and potential treatment options. By the end of this discussion, you'll be
                        adequately equipped with the knowledge to manage or even prevent TMJ disorders effectively.
                    </p>

                    <h3 class="article-subtitle">What is Temporomandibular Joint Disorder?</h3>
                    <p class="article-text">
                        TMJ disorder is a medical condition affecting the jaw joint's functionality, leading to pain,
                        stiffness, and movement difficulties. Individuals with TMJ disorder might notice discomfort and
                        a clicking sound during jaw movements, challenges in opening the mouth for basic actions like
                        eating or speaking, and associated facial pain. The condition primarily stems from physical
                        trauma, dental misalignments, or stress. Early detection and treatment are crucial to avoid
                        escalating the issue.
                    </p>
                </div>
            </section>



            <section class="container py-5 text-center bg-white">
                <h2 class="section-title">Patient Testimonials</h2>
                <p class="section-subtitle">Patients Love Our Approach To Dental Care</p>

                <div class="row g-4 justify-content-center">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial', // Custom Post Type name
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $testimonial_query = new WP_Query($args);

                    if ($testimonial_query->have_posts()):
                        while ($testimonial_query->have_posts()):
                            $testimonial_query->the_post();
                            $client_name = get_field('client_name');
                            ?>
                            <div class="col-md-6">
                                <div class="testimonial mx-auto">
                                    <h5 style="letter-spacing: 0; word-spacing: 0;">“<?php the_title(); ?>”</h5>
                                    <p><?php the_content(); ?></p>
                                    <?php if ($client_name): ?>
                                        <p><em><?php echo esc_html($client_name); ?></em></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>No testimonials found.</p>';
                    endif;
                    ?>
                </div>


            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>