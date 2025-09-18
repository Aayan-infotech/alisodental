<?php
//Template Name: About
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
        padding: 60px 20px;
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
                        <h1 class="elementor-heading-title">Bringing Confidence to Every Smile</h1>
                    </div>
                </div>
            </section>

            <section class="doctor-section">
                <div class="doctor-container">

                    <!-- Left Column: Image -->
                    <div class="doctor-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Batra-Troy.jpg"
                            alt="Dr. Silvia Vallis" width="252" height="356">
                    </div>

                    <!-- Right Column: Content -->
                    <div class="doctor-content">
                        <h2 class="doctor-name">Dr. Silvia Vallis</h2>
                        <h3 class="doctor-title" style="color: #f4b321;">General &amp; Cosmetic Dentist</h3>
                        <div class="doctor-bio">
                            <p>Founded in 1999 by Dr. Silvia Vallis, Aliso Dental Care has been serving the Orange
                                County community with comprehensive dental solutions.

                                State-of-the-Art
                                We utilize the latest dental technology to ensure effective treatments and exceptional
                                results for our patients.

                                Patient Comfort
                                Our dedicated team prioritizes your comfort, making every visit a pleasant and tailored
                                experience.</p>

                            <p>She truly believes that teeth whitening, crowns, and
                                veneers are also a significant part of achieving “the
                                right look” which is highly encouraged by the
                                proliferation of social media these days.</p>

                            <p>To schedule an appointment, contact our
                                office&nbsp;<strong>(949) 448-0274</strong></p>
                        </div>
                    </div>

                </div>
            </section>


            <section class="practice-section">
                <div class="practice-container">
                    <!-- Left Column (Text) -->
                    <div class="practice-text">
                        <h2 class="subtitle">Experience Compassionate Dentistry</h2>
                        <h1 class="title">Where Relaxation Meets Dentistry</h1>
                        <p>
                            Aliso Dental features 11 modern treatment areas, thoughtfully designed to create a soothing
                            and relaxing environment – a refreshing experience compared to traditional dental offices.
                        </p>
                        <p>
                            Our goal is to help even the most nervous and anxious patients feel at ease and truly enjoy
                            their visit. To enhance your comfort, we offer built-in massage dental chairs, complimentary
                            paraffin wax hand treatments, and a high-end barista station serving cappuccinos, lattes,
                            and more. </p>
                        <p>
                            We are happily accepting new patients! While many of our patients come to us through
                            referrals from trusted dentists, we also warmly welcome direct referrals from our loyal
                            patients and those who’ve heard about us through word of mouth. Call today to schedule your
                            complimentary appointment. </p>
                        <p class="quote">
                            “We value building genuine, lasting relationships with every patient we care for. Unlike
                            large corporate practices, we never compromise on this personal connection—because to us,
                            it’s at the heart of exceptional dentistry.”
                            <span>– Dr. Silvia Vallis</span>
                        </p>
                    </div>

                    <!-- Right Column (Image) -->
                    <div class="practice-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Waiting-Room-and-Desk.jpg"
                            alt="Clinic Interior">
                    </div>
                </div>
            </section>

            <section class="tds-practice-section">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Text Column -->
                        <div class="col-lg-7 order-lg-2 mb-4 mb-lg-0 tds-practice-text">
                            <h2 class="tds-practice-title">Advanced Facial Rejuvenation</h2>
                            <h3 class="tds-practice-subtitle">Expertly Trained &amp; Professionals</h3>
                            <p>
                                Aliso Dental is committed to setting itself apart by thinking outside the box. Along
                                with providing comprehensive general dental services, Dr. Silvia Vallis—an expert in
                                cosmetic
                                dentistry—also offers unique ‘spa-like’ treatments, creating a truly elevated dental
                                experience.
                            </p>
                            <p>
                                Years ago, we noticed that many patients who invested in a beautiful new smile also
                                desired enhancements such as fuller lips or smoother lip lines to complement their
                                results. During my time as both a student and educator at the University of Pennsylvania
                                School of Dental Medicine, I learned the importance of truly listening to patients’
                                needs. With extensive knowledge of head and neck anatomy, my team and I pursued advanced
                                training through the American Academy of Facial Esthetics to address both cosmetic and
                                functional concerns—including Botox treatments for TMJ pain. We remain dedicated to
                                staying at the forefront of care by continually advancing our education in this
                                innovative field of facial aesthetics.
                            </p>
                            <a href="contact-us" class="tds-practice-btn">Contact Us</a>
                        </div>

                        <!-- Image Column -->
                        <div class="col-lg-5 order-lg-1 text-center">
                            <img src="https://s33929.pcdn.co/wp-content/uploads/sites/360/2021/03/shutterstock_1162475773-1.jpg"
                                alt="Facial Esthetics" class="tds-practice-img">
                        </div>
                    </div>
                </div>
            </section>


            <section class="mission-section py-5">
                <div class="container">
                    <!-- Title and intro -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h2 class="mission-title">Our Mission</h2>
                            <p class="mission-intro">
                                Aliso Dental takes an evidence-based approach to comprehensive care. By combining the
                                latest advancements in dental technology with the expertise of Dr. Silvia Vallis and our
                                highly
                                skilled team, we ensure every patient enjoys a professional, seamless, and rewarding
                                experience.
                            </p>
                        </div>
                    </div>

                    <!-- Info boxes with images -->
                    <div class="row align-items-start">
                        <!-- Left Column: Info -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="info-box mb-3">
                                <div class="info-header d-flex align-items-center gap-2">
                                    <div class="info-icon"><i class="fal fa-arrow-circle-right"></i></div>
                                    <h5 class="info-title">New Patient Forms</h5>
                                </div>
                                <p class="info-text">
                                    <a href="#" target="_blank" rel="noopener">
                                        Streamline your visit to Aliso dental by completing our online patient
                                        registration.
                                        For any questions or concerns, please call our office.
                                    </a>
                                </p>
                                <hr>
                            </div>

                            <div class="info-box mb-3">
                                <div class="info-header d-flex align-items-center gap-2">
                                    <div class="info-icon"><i class="fal fa-arrow-circle-right"></i></div>
                                    <h5 class="info-title">New Patient Forms</h5>
                                </div>
                                <p class="info-text">
                                    <a href="#" target="_blank" rel="noopener">
                                        Streamline your visit to Aliso dental by completing our online patient
                                        registration.
                                        For any questions or concerns, please call our office.
                                    </a>
                                </p>
                                <hr>
                            </div>

                            <div class="info-box mb-3">
                                <div class="info-header d-flex align-items-center gap-2">
                                    <div class="info-icon"><i class="fal fa-arrow-circle-right"></i></div>
                                    <h5 class="info-title">New Patient Forms</h5>
                                </div>
                                <p class="info-text">
                                    <a href="#" target="_blank" rel="noopener">
                                        Streamline your visit to Aliso dental by completing our online patient
                                        registration.
                                        For any questions or concerns, please call our office.
                                    </a>
                                </p>
                                <hr>
                            </div>

                            <div class="info-box mb-3">
                                <div class="info-header d-flex align-items-center gap-2">
                                    <div class="info-icon"><i class="fal fa-arrow-circle-right"></i></div>
                                    <h5 class="info-title">New Patient Forms</h5>
                                </div>
                                <p class="info-text">
                                    <a href="#" target="_blank" rel="noopener">
                                        Streamline your visit to Aliso dental by completing our online patient
                                        registration.
                                        For any questions or concerns, please call our office.
                                    </a>
                                </p>
                                <hr>
                            </div>

                        </div>

                        <!-- Right Column: Images -->
                        <div class="col-lg-6">
                            <div class="mission-images">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-bg.webp"
                                    alt="Exam Hallway" class="img-fluid rounded mb-3 shadow">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg"
                                    alt="Exam Room" class="img-fluid rounded shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5 bg-light" id="advanced-technology">
                <div class="container">
                    <h2 class="text-center mission-title">Advanced Technology</h2>
                    <div class="row g-4">
                        <?php
                        $args = array(
                            'post_type' => 'technology',
                            'posts_per_page' => -1, // all technologies
                        );

                        $tech_query = new WP_Query($args);

                        if ($tech_query->have_posts()):
                            while ($tech_query->have_posts()):
                                $tech_query->the_post(); ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tech-card bg-white rounded overflow-hidden h-100 border-0">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" class="w-100 rounded-top"
                                                alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="p-3">
                                            <h5 class="text-capitalize text-primary fw-semibold mb-2"
                                                style="letter-spacing: 0; word-spacing: 0;"><?php the_title(); ?></h5>
                                            <p class="card-text fw-normal text-muted mb-2">
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <a href="<?php the_permalink(); ?>"
                                                class="text-warning text-decoration-none small fw-bold">
                                                Read More »
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>

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