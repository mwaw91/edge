<?php

/**
 * Displays the header content
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php //wp_head(); 
    ?>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/child-theme.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/child-theme-4.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/child-theme.css"> -->


</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } ?>
    <div id="page" class="hfeed site">


        <header id="masthead" class="site-header" role="banner">
            <!-- STICKY NAV -->
            <!-- <div class='main-tool-bar'></div> -->


            <div id="">
                <div class="header-content container clearfix">
                    <!-- LOGO  -->
                    <a href="/" class="custom-logo-link">
                        <?php echo '<img src="' . get_field('edge_logo')['url'] . '" class="custom-logo">'; ?>
                    </a>
                    <nav id="site-navigation" class="nav-menu main-navigation clearfix" role="navigation" aria-label="">
                        <ul id="primary-menu">
                            <li><a href="#features">Features</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="btn btn--solid btn--solid-grey">login</a>
                </div> <!-- end .container -->
            </div> <!-- end #sticky_header -->

        </header> <!-- end #masthead -->
        <!-- Main Page Start ============================================= -->
        <div id="content">
            <div class="container clearfix">
                <!-- HEADER ABOVE -->