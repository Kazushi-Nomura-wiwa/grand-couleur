<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
    <h1 class="site-header__logo">
        <a href="/" class="site-header__logo-link">厚生労働大臣指定 保育士養成施設 こども學舎</a>
    </h1>

    <button class="site-header__toggle" aria-controls="global-nav" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
        <span class="site-header__toggle-text">MENU</span>
    </button>

    <nav id="global-nav" class="global-nav">
        <ul class="global-nav__list">
            <li class="global-nav__item">
                <a href="/" class="global-nav__link">ホーム</a>
            </li>
        </ul>
    </nav>
</header>
