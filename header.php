<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="site-header-container">
        <h1 class="site-header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__logo-link"><?php bloginfo('name'); ?></a>
        </h1>

        <button class="site-header__toggle" aria-controls="global-nav" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
            <span class="site-header__toggle-text">MENU</span>
        </button>

        <nav id="global-nav" class="global-nav">
            <?php
                wp_nav_menu([
                    'theme_location' => 'global-nav',
                    'container'     => false,
                    'menu_class'    => 'global-nav__list',
                    'items_wrap'    => '<ul class="%2$s">%3$s</ul>',
                    'fallback_cb'   => false,
                ]);
            ?>
        </nav>
    </div>
</header>
