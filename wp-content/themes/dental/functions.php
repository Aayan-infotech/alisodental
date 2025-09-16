<?php

function show_admin_bar_for_admins_only($show)
{
    if (current_user_can('administrator')) {
        return true;
    }
    return false;
}
add_filter('show_admin_bar', 'show_admin_bar_for_admins_only');

function mytheme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'alisodental' => __('Aliso Dental Menu', 'your-theme-text-domain'),
        'primary_menu' => __('Primary Menu', 'your-theme-text-domain'),
    ));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_assets()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_style('hello-elementor', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style('hello-elementor-theme', get_template_directory_uri() . '/assets/css/theme.min.css');
    wp_enqueue_style('hello-elementor-header-footer', get_template_directory_uri() . '/assets/css/header-footer.min.css');
    wp_enqueue_style('elementor-frontend', get_template_directory_uri() . '/assets/css/custom-frontend.min.css');
    wp_enqueue_style('widget-heading', get_template_directory_uri() . '/assets/css/widget-heading.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
    wp_enqueue_style('e-swiper', get_template_directory_uri() . '/assets/css/e-swiper.min.css');
    wp_enqueue_style('widget-testimonial-carousel', get_template_directory_uri() . '/assets/css/custom-pro-widget-testimonial-carousel.min.css');
    wp_enqueue_style('widget-carousel-module-base', get_template_directory_uri() . '/assets/css/widget-carousel-module-base.min.css');
    wp_enqueue_style('widget-image', get_template_directory_uri() . '/assets/css/widget-image.min.css');
    wp_enqueue_style('widget-social-icons', get_template_directory_uri() . '/assets/css/widget-social-icons.min.css');
    wp_enqueue_style('e-apple-webkit', get_template_directory_uri() . '/assets/css/custom-apple-webkit.min.css');
    wp_enqueue_style('widget-icon-list', get_template_directory_uri() . '/assets/css/custom-widget-icon-list.min.css');
    wp_enqueue_style('elementor-icons', get_template_directory_uri() . '/assets/css/elementor-icons.min.css');
    wp_enqueue_style('elementor-post-275', get_template_directory_uri() . '/assets/css/post-275.css');
    wp_enqueue_style('font-awesome-5-all', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('font-awesome-4-shim', get_template_directory_uri() . '/assets/css/v4-shims.min.css');
    wp_enqueue_style('elementor-post-647', get_template_directory_uri() . '/assets/css/post-647.css');
    wp_enqueue_style('elementor-post-81', get_template_directory_uri() . '/assets/css/post-81.css');
    wp_enqueue_style('elementor-post-629', get_template_directory_uri() . '/assets/css/post-629.css');
    wp_enqueue_style('elementor-gf-local-raleway', get_template_directory_uri() . '/assets/css/raleway.css');
    wp_enqueue_style('elementor-gf-local-montserrat', get_template_directory_uri() . '/assets/css/montserrat.css');
    wp_enqueue_style('elementor-gf-local-playball', get_template_directory_uri() . '/assets/css/playball.css');
    wp_enqueue_style('elementor-gf-local-opensans', get_template_directory_uri() . '/assets/css/opensans.css');
    wp_enqueue_style('elementor-gf-local-poppins', get_template_directory_uri() . '/assets/css/poppins.css');
    wp_enqueue_style('widget-nav-menu', get_template_directory_uri() . '/assets/css/custom-pro-widget-nav-menu.min.css');
    wp_enqueue_style('widget-divider', get_template_directory_uri() . '/assets/css/widget-divider.min.css');
    wp_enqueue_style('widget-star-rating', get_template_directory_uri() . '/assets/css/custom-widget-star-rating.min.css');
    wp_enqueue_style('widget-icon-box', get_template_directory_uri() . '/assets/css/custom-widget-icon-box.min.css');
    wp_enqueue_style('widget-gallery', get_template_directory_uri() . '/assets/css/widget-gallery.min.css');
    wp_enqueue_style('elementor-gallery', get_template_directory_uri() . '/assets/css/e-gallery.min.css');
    wp_enqueue_style('e-transitions', get_template_directory_uri() . '/assets/css/transitions.min.css');

    // 3️⃣ jQuery (already included)
    wp_enqueue_script('jquery-core', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate.min.js', array('jquery-core'), null, true);

    // 4️⃣ Bootstrap JS (depends on jQuery if needed, or standalone for Bootstrap 5)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);

    // 5️⃣ Your existing JS
    wp_enqueue_script('font-awesome-4-shim', get_template_directory_uri() . '/assets/js/v4-shims.min.js', array(), null, true);
    // wp_enqueue_script('accessibility', get_template_directory_uri() . '/assets/js/accessibility.js', array(), null, true);
    wp_enqueue_script('wp-emoji-release', get_template_directory_uri() . '/assets/js/wp-emoji-release.min.js', array(), null, true);
    wp_enqueue_script('elementor-webpack-runtime', get_template_directory_uri() . '/assets/js/webpack.runtime.min.js', array(), null, true);
    wp_enqueue_script('elementor-frontend-modules', get_template_directory_uri() . '/assets/js/frontend-modules.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('jquery-ui-core', get_template_directory_uri() . '/assets/js/core.min.js', array('jquery-core'), null, true);
    // wp_enqueue_script('elementor-frontend', get_template_directory_uri() . '/assets/js/frontend.min_1.js', array('jquery-core'), null, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('e-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('smartmenus', get_template_directory_uri() . '/assets/js/jquery.smartmenus.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('elementor-gallery', get_template_directory_uri() . '/assets/js/e-gallery.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('elementor-pro-webpack-runtime', get_template_directory_uri() . '/assets/js/webpack-pro.runtime.min.js', array(), null, true);
    wp_enqueue_script('wp-hooks', get_template_directory_uri() . '/assets/js/hooks.min.js', array(), null, true);
    wp_enqueue_script('wp-i18n', get_template_directory_uri() . '/assets/js/i18n.min.js', array(), null, true);
    //  wp_enqueue_script('elementor-pro-frontend', get_template_directory_uri() . '/assets/js/frontend.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('pro-elements-handlers', get_template_directory_uri() . '/assets/js/elements-handlers.min.js', array('jquery-core'), null, true);
    wp_enqueue_script('font-awesome-pro', get_template_directory_uri() . '/assets/js/afa87b2d0b.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
