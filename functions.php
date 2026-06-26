<?php

/**
 * テーマのセットアップ
 */
add_filter('show_admin_bar', '__return_false');
function grand_couleur_setup() {

    // titleタグをWordPressに任せる
    add_theme_support('title-tag');

    // アイキャッチ画像
    add_theme_support('post-thumbnails');

    // カスタムロゴ
    add_theme_support('custom-logo');

    // HTML5対応
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // メニュー
    register_nav_menus([
        'global-nav' => 'グローバルナビ',
        'footer-nav' => 'フッターナビ',
    ]);

}
add_action('after_setup_theme', 'grand_couleur_setup');


/**
 * CSS・JavaScriptの読み込み
 */
function grand_couleur_enqueue() {

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap',
        [],
        null
    );

    // Google Fonts
    wp_enqueue_style(
        'google-fonts-serif',
        '<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">',
        [],
        null
    );

    // Reset CSS
    wp_enqueue_style(
        'reset',
        get_template_directory_uri() . '/assets/css/reset.min.css',
        [],
        '1.0'
    );

    // メインCSS
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/assets/css/style.css',
        ['reset'],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    // JavaScript
    wp_enqueue_script(
        'menu',
        get_template_directory_uri() . '/assets/js/menu.js',
        [],
        filemtime(get_template_directory() . '/assets/js/menu.js'),
        true
    );

}
add_action('wp_enqueue_scripts', 'grand_couleur_enqueue');