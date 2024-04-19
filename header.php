<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.png" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <nav id="site-navigation" class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'walker' => new Custom_Walker_Nav_Menu(),
                'menu_class' => 'primary-menu row',
            ));

            ?>
        </nav>
        <nav id="comprehensive-nav" class="comprehensive-nav">
            <a class="site-branding" id="site-branding" href="<?php echo esc_url(home_url('/')); ?>">
                <span>R</span>
                <span>O</span>
                <span>C</span>
                <span>H</span>
                <span>E</span>
                <span>S</span>
                <span>T</span>
                <span>E</span>
                <span>R</span>
                <span>.</span>
                <span>D</span>
                <span>E</span>
                <span>V</span>
            </a>

            <div class="hamburger">
                <div class="menu-text-wrapper">
                    <div class="menu-text">menu</div>
                </div>
                <div class="bars-wrapper">
                    <div class="bars-contain">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="full-page-menu">
                <?php
                wp_nav_menu(array(
                    'menu_class' => 'secondary-nav',
                    'container' => false,
                ));

                ?>

                <div class="hr"></div>

                <div class="container row footer-meta">
                    <div class="align-left">
                        <div>ROCHESTER.DEV</div>
                        <div>ROCHESTER, NY</div>
                        <div>JEFF FABINY</div>
                        <br />
                        <a href="mailto:jefffabiny@gmail.com">hello@rochester.dev</a>
                        <a href="mailto:jefffabiny@gmail.com">jeff@rochester.dev</a>
                    </div>
                    <div class="align-right">
                        <div><a hre="#">LINKEDIN</a></div>
                        <div><a hre="#">GITHUB</a></div>
                        <div><a hre="#">LINKEDIN</a></div>
                        <br />
                        <div><a href="tel:5555555555">555 555 5555</a>
                        </div>
                    </div>
                </div>
        </nav>
    </header>
    <div class="content">