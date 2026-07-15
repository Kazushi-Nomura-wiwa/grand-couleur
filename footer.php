    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__main">
                <div class="site-footer__info">
                    <p class="site-footer__subtitle site-footer__subtitle--pc">安心して一歩踏み出せる場へ。</p>
                    <h2 class="site-footer__title">合同会社グランクルール</h2>
                    <address class="site-footer__address">
                        〒065-0012<br>
                        札幌市東区北12条東7丁目1-15 セレスタ札幌1F
                    </address>
                    <div class="site-footer__contact">
                        <p class="site-footer__phone">TEL: <a href="tel:0116000998">011-600-0998</a></p>
                        <p class="site-footer__email">Mail: <a href="mailto:grancouleur@gmail.com">grancouleur@gmail.com</a></p>
                    </div>
                </div>
                <div class="site-footer__inquiry">
                    <a href="https://www.instagram.com/gran.couleur/" class="site-footer__social-link-instagram" target="_blank">インスタグラム</a>
                    <p class="site-footer__subtitle site-footer__subtitle--sp">安心して一歩踏み出せる場へ。</p>
                    <a href="#" class="site-footer__inquiry-link">お問い合わせはこちら</a>
                </div>
            </div>
            <hr class="site-footer__divider">
            <nav id="site-footer-nav" class="site-footer-nav">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'global-nav',
                        'container'     => false,
                        'menu_class'    => 'site-footer-nav__list',
                        'items_wrap'    => '<ul class="%2$s">%3$s</ul>',
                        'fallback_cb'   => false,
                    ]);
                ?>
            </nav>
            <p class="site-footer__copyright">&copy; <?php echo date('Y'); ?> Grand Couleur inc.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
