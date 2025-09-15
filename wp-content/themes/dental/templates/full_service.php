<?php
//Template Name: full service denstry
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

    .custom-treatment-section {
        background-color: #fff;
    }

    .subheading {
        color: #d8a32a;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 18px;
        letter-spacing: 2px;
        margin-bottom: 0.5rem;
    }

    .main-heading {
        color: #93b7c1;
        font-size: 2.8rem;
        font-weight: 300;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .description {
        color: #444;
        font-size: 18px;
        line-height: 1.7;
        margin-bottom: 1rem;
    }

    .description a {
        color: #88b2c7;
        text-decoration: none;
    }

    .appointment-btn {
        background-color: #88b2c7;
        color: #fff !important;
        padding: 12px 24px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: none;
        border-radius: 4px;
        transition: 0.3s ease;
    }

    .appointment-btn:hover {
        background-color: #d3a935ff;
        text-decoration: none;
        color: #fff !important;
    }

    .cosmetic-care-section {
        background-image: url('https://troydentalstudio.com/wp-content/uploads/sites/360/2021/03/Waiting-Room-C.png');
        background-size: cover;
        background-position: center;
        position: relative;
        color: #fff;
        overflow: hidden;
    }

    .cosmetic-care-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(49, 92, 118, 0.5);
        z-index: 1;
    }

    .cosmetic-care-section .container {
        position: relative;
        z-index: 2;
    }

    .cosmetic-care-section .card {
        overflow: hidden;
        border: none;
        border-radius: 8px;
        transition: transform 0.5s ease;
    }

    .cosmetic-care-section .card-img-top {
        transition: transform 0.5s ease;
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .cosmetic-care-section .card:hover .card-img-top {
        transform: scale(1.1);
    }
</style>
<div class="elementor-element elementor-element-a2d7d7c elementor-widget elementor-widget-theme-post-content"
    data-id="a2d7d7c" data-element_type="widget" data-widget_type="theme-post-content.default">
    <div class="elementor-widget-container">
        <div data-elementor-type="wp-page" data-elementor-id="31" class="elementor elementor-31"
            data-elementor-post-type="page">
            <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_1199457382.jpg');">
                <div class="overlay"></div>
                <div class="hero-content">
                    <div class="heading-strip-full">
                        <h1 class="elementor-heading-title">Beautiful Healthy Smiles
                        </h1>
                    </div>
                </div>
            </section>
            <section class="custom-treatment-section py-5">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 pe-5">
                            <p class="subheading">THE STRONGEST FOUNDATION FOR A SMILE</p>
                            <h2 class="main-heading">True Dedicated Care</h2>
                            <p class="description">
                                Your periodontal care is our utmost priority. We understand that you cannot have a beautiful smile without having a healthy smile. That is why we provide a full range of dental services to ensure that your smile stays healthy for years to come.
                            </p>
                            <a href="#" class="btn appointment-btn mt-3">Book an Appointment</a>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_658592416-800x533.jpg" alt="Smiling couple by the water" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </section>
            <section class="cosmetic-care-section py-5 text-center text-white">
                <div class="overlay"></div>
                <div class="container position-relative">
                    <!-- Section Title -->
                    <h2 class="display-5 fw-light mb-3">Full Service Dentistry</h2>
                    <p class="lead mb-5">
                        Through intensive training, we are always able to offer you a wide range of modern dentistry to the highest standards. Below are just some of the many procedures and services we regularly provide to our patients – with a gentle touch, and stunning results.
                    </p>

                    <?php
                    $args = array(
                        'post_type'      => 'services',
                        'posts_per_page' => -1,
                        'tax_query'      => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'services_categories',
                                'field'    => 'slug',
                                'terms'    => 'full-service-dentistry',
                            ),
                            array(
                                'taxonomy' => 'post_tag',
                                'field'    => 'slug',
                                'terms'    => 'all-services',
                            ),
                        ),
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : ?>
                        <div class="row g-4">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-md-6">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <div class="card h-100 border-0 shadow-sm">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('large', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                                            <?php endif; ?>
                                            <div class="card-body p-5">
                                                <h5 class="card-title text-warning fw-semibold text-capitalize mb-3" style="letter-spacing: 0; font-size: 22px;">
                                                    <?php the_title(); ?>
                                                </h5>
                                                <p class="card-text text-dark mb-0">
                                                    <?php echo wp_trim_words(get_the_content(), 25, '...'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </section>
            <section class="py-5 bg-light" id="advanced-technology">
                <div class="container">
                    <h2 class="text-center mb-5">Our Full Service Options</h2>
                    <?php
                    $args = array(
                        'post_type'      => 'services',
                        'posts_per_page' => -1,
                        'tax_query'      => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'services_categories',
                                'field'    => 'slug',
                                'terms'    => 'full-service-dentistry',
                            ),
                            array(
                                'taxonomy' => 'post_tag',
                                'field'    => 'slug',
                                'terms'    => 'cosmetic-treatment-option',
                            ),
                        ),
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : ?>
                        <div class="row g-4">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-md-6">
                                    <div class="tech-card bg-white rounded overflow-hidden h-100 border-0">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large', ['class' => 'w-100 rounded-top', 'alt' => get_the_title()]); ?>
                                        <?php endif; ?>
                                        <div class="p-3">
                                            <h5 class="text-capitalize text-primary fw-semibold mb-2" style="letter-spacing: 0; word-spacing: 0;">
                                                <?php the_title(); ?>
                                            </h5>
                                            <p class="card-text fw-normal text-muted mb-2">
                                                <?php echo wp_trim_words(get_the_content(), 25, '...'); ?>
                                            </p>
                                            <a href="<?php the_permalink(); ?>" class="text-warning text-decoration-none small fw-bold">
                                                Read More »
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>