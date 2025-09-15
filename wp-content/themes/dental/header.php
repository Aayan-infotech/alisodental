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
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        .sidebar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Content Area */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Hide sidebar on small screens */
        @media (max-width: 991px) {
            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-android-chrome-512x512-5-32x32.png" sizes="32x32">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-android-chrome-512x512-5-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-android-chrome-512x512-5-180x180.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>

<body>
    <div class="sidebar d-none d-lg-flex">
        <h4 class="text-center">My Header</h4>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <!-- Mobile Navbar with Toggle -->
    <nav class="navbar navbar-dark bg-dark d-lg-none">
        <div class="container-fluid">
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                ☰ Menu
            </button>
            <span class="navbar-brand mb-0 h1">My Header</span>
        </div>
    </nav>

    <!-- Offcanvas for Mobile -->
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <a href="#" class="d-block mb-2">Dashboard</a>
            <a href="#" class="d-block mb-2">Profile</a>
            <a href="#" class="d-block mb-2">Settings</a>
            <a href="#" class="d-block">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">