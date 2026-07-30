<?php get_header(); ?>
<main class="page-contact">
    <div class="page-contact__inner container">
        <p class="page-contact__eyebrow eyeblow">CONTACT</p>
        <h2 class="page-contact__title">お問い合わせ</h2>
        <h3 class="page-contact__lead">見学・ご相談を受け付けています、まずはご気軽にご相談ください。<br>以下のフォームに必要事項をご記入の上、送信してください。</h3>
        <a class="page-contact__faq-link" href="/">よくある質問</a>
        <div class="page-contact__form">
            <?php echo do_shortcode('[contact-form-7 id="64e4be3" title="お問い合わせ"]'); ?>
        </div>
        <div class="page-contact__address">
            <h3 class="page-contact__address-title">ご連絡先</h3>
            <div class="page-contact-container page-contact-container--business-hours">
                <div class="page-contact__business-hours">
                    <h4 class="page-contact__business-hours-title">受付時間</h4>
                    <p class="page-contact__business-hours-text">平日 10:00～17:00</p>
                    <span class="page-contact__business-hours-note">※土日祝日を除く</span>
                </div>
            </div>
            <div class="page-contact-container page-contact-container--telephone">
                <div class="page-contact__telephone">
                    <h4 class="page-contact__telephone-title">お電話</h4>
                    <a class="page-contact__telephone-link" href="tel:0116000998">011-600-0998</a>
                </div>
            </div>
            <div class="page-contact-container page-contact-container--email">
                <div class="page-contact__email">
                    <h4 class="page-contact__email-title">メール</h4>
                    <a class="page-contact__email-link" href="mailto:grancouleur@gmail.com">grancouleur@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
