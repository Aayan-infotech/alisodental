<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <title>Best Dentist | Aliso Dental Care</title>
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        .elementor-inner-section {
            position: sticky;
            top: 10px;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 260px;
            background-color: #fff;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-right: 1px solid #eee;
        }

        .sidebar img {
            max-width: 140px;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #333;
            font-size: 16px;
            padding: 8px 0;
            text-decoration: none;
            display: block;
            text-align: center;
            width: 100%;
        }

        .sidebar a:hover {
            color: #c39a3a;
        }

        .sidebar .social-icons {
            display: flex;
            margin-top: auto;
            margin-bottom: 15px;
        }

        .sidebar .social-icons a {
            margin: 0 10px;
            font-size: 20px;
            color: #9ba4a8;
        }

        .sidebar .reserve-btn {
            background-color: #b2d0da;
            color: #fff;
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 14px;
            padding: 12px;
            text-align: center;
            border-radius: 6px;
            width: 100%;
            text-decoration: none;
            text-transform: uppercase;
        }

        .sidebar .reserve-btn:hover {
            background-color: #D7AC47;
            ;
            color: #fff;
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 14px;
            padding: 12px;
            text-align: center;
            border-radius: 6px;
            width: 100%;
            text-decoration: none;
            text-transform: uppercase;
        }

        /* Content */
        .content {
            margin-left: 260px;
            padding: 0px;
        }

        /* Mobile */
        @media (max-width: 991px) {
            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
            }
        }

        .offcanvas {
            background-color: #fff;
            color: #000;
        }

        .offcanvas a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 8px 0;
            font-size: 16px;
        }

        .offcanvas a:hover {
            color: #c39a3a;
        }

        .offcanvas .social-icons {
            display: flex;
            margin-top: 20px;
            text-align: center;
        }

        .offcanvas .social-icons a {
            margin: 0 8px;
            font-size: 20px;
            color: #9ba4a8;
        }

        .offcanvas .reserve-btn {
            background-color: #b2d0da;
            color: #fff;
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 14px;
            padding: 12px;
            text-align: center;
            border-radius: 6px;
            display: block;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .offcanvas-header .btn-close {
            padding: 20px;
        }
    </style>
    <?php
    if (function_exists('has_site_icon') && has_site_icon()) {
        wp_site_icon();
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>

<body>
    <div class="sidebar d-none d-lg-flex">
        <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
        }
        ?>
        <a href="<?php echo site_url(); ?>">Home</a>
        <a href="<?php echo site_url(); ?>/about-us">About Us</a>
        <a href="<?php echo site_url(); ?>/patient-forms">Patient Forms</a>
        <a href="<?php echo site_url(); ?>/cosmetic-dentistry">Cosmetic Dentistry</a>
        <a href="<?php echo site_url(); ?>/restorative-dentistry">Restorative Dentistry</a>
        <a href="<?php echo site_url(); ?>/full-service-dentistry">Full Service Dentistry</a>
        <a href="<?php echo site_url(); ?>/membership">Membership</a>
        <a href="<?php echo site_url(); ?>/contact-us">Contact Us</a>
        <div class="social-icons">
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <a href="<?php echo site_url(); ?>/contact-us" class="reserve-btn">Reserve Now</a>
    </div>
    <nav class="navbar bg-white shadow-sm d-lg-none">
        <div class="container-fluid">
            <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            }
            ?>
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileSidebar">
                ☰
            </button>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
        <div class="offcanvas-header">
            <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            }
            ?> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <a href="<?php echo site_url(); ?>">Home</a>
            <a href="<?php echo site_url(); ?>/about-us">About Us</a>
            <a href="<?php echo site_url(); ?>/patient-forms">Patient Forms</a>
            <a href="<?php echo site_url(); ?>/cosmetic-dentistry">Cosmetic Dentistry</a>
            <a href="<?php echo site_url(); ?>/restorative-dentistry">Restorative Dentistry</a>
            <a href="<?php echo site_url(); ?>/full-service-dentistry">Full Service Dentistry</a>
            <a href="<?php echo site_url(); ?>/membership">Membership</a>
            <a href="<?php echo site_url(); ?>/contact-us">Contact Us</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <a href="<?php echo site_url(); ?>/contact-us" class="reserve-btn">Reserve Now</a>
        </div>
    </div>
    <div class="content">