<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Four Loaves</title>

    <?php
    wp_head();
    ?>
</head>

<body>
    <!-- Non Mobile Navigation Start -->
    <nav class="navigation-container" id="navigation-bar">
        <!-- Logo Section -->
        <div class="navigation-logo-section"></div>

        <!-- Menu Section -->
        <ul class="navigation-menu-section">
            <li class="navigation-links-containers">
                <a href="#landing-page" class="navigation-links">Home</a>
            </li>
            <li class="navigation-links-containers">
                <a href="#about-page" class="navigation-links">About</a>
            </li>
            <li class="navigation-links-containers">
                <a href="#menu-page" class="navigation-links">Menu</a>
            </li>
            <li class="navigation-links-containers">
                <a href="#" class="navigation-links">Specials</a>
            </li>
            <li class="navigation-links-containers">
                <a href="#contact-page" class="navigation-links">Contact Us</a>
            </li>
        </ul>
    </nav>

    <!-- Non Mobile Navigation End -->

    <!-- Mobile Navigation Start -->
    <nav class="mobile-navigation-container" id="mobile-navigation-bar">
        <div class="mobile-nav-logo-section"></div>
        <div class="mobile-navigation-button">
            <svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 17.5H0.25V14.6667H13V17.5ZM25.75 10.4167H0.25V7.58333H25.75V10.4167ZM25.75 3.33333H13V0.5H25.75V3.33333Z"
                    fill="black" />
            </svg>
        </div>
    </nav>
    <!-- Mobile Navigation End -->

    <!-- Mobile Menu Overlay Start -->
    <div class="mobile-menu-container" id="mobile-menu-overlay">
        <div class="mobile-menu-top-container">
            <div class="mobile-menu-icon"></div>
            <div class="mobile-menu-exit-container">
                <svg class="mobile-menu-exit-button" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                    <path
                        d="M24 9.4L22.6 8L16 14.6L9.4 8L8 9.4l6.6 6.6L8 22.6L9.4 24l6.6-6.6l6.6 6.6l1.4-1.4l-6.6-6.6L24 9.4z"
                        fill="white"></path>
                </svg>
            </div>
        </div>

        <!-- Navigation Link -->
        <ul class="mobile-menu-navigation-container">
            <li class="mobile-menu-navigation-links-container">
                <a href="#landing-page" class="mobile-menu-navigation-link">Home</a>
            </li>

            <li class="mobile-menu-navigation-links-container">
                <a href="#about-page" class="mobile-menu-navigation-link">About</a>
            </li>

            <li class="mobile-menu-navigation-links-container">
                <a href="#menu-page" class="mobile-menu-navigation-link">Menu</a>
            </li>

            <li class="mobile-menu-navigation-links-container">
                <a href="#" class="mobile-menu-navigation-link">Specials</a>
            </li>

            <li class="mobile-menu-navigation-links-container">
                <a href="#contact-page" class="mobile-menu-navigation-link">Contact</a>
            </li>
        </ul>
    </div>
    <!-- Mobile Menu Overlay End -->