<?php get_header(); ?>
<main class="front-page">
    <section class="hero">
        <div class="container">
            <h2 class="hero__title">合同会社グランクルール</h2>
            <h3 class="hero__catch">一歩ずつ、夢を形に</h3>
            <h4 class="hero__lead">あなたの夢を一緒に育てる</h4>
            <p class="hero__text">就労継続支援A型事業所グランクルールは地下鉄東豊線東区役所前4番出口から徒歩一分</p>
            <p class="hero__text">『<strong>IT</strong>』と『<strong>飲食業務</strong>』<br>を中心に行っている事業所です。</p>
            <a href="/inquiry" class="hero__link">お問い合わせ</a>
        </div>
    </section>
    <section class="worries">
        <div class="container">
            <p class="eyeblow">WORREIS</p>
            <h2 class="worries__title">こんなお悩みありませんか？</h2>
            <ul class="worries__list">
                <li class="worries__item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/worries_01.png'); ?>" alt="お悩み1">働きたいけれど自信がない</li>
                <li class="worries__item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/worries_02.png'); ?>" alt="お悩み2">自分に合う仕事を見つけたい</li>
                <li class="worries__item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/worries_03.png'); ?>" alt="お悩み3">就職を目指したい</li>
                <li class="worries__item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/worries_04.png'); ?>" alt="お悩み4">IT・デザインを学びたい</li>
                <li class="worries__item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/worries_05.png'); ?>" alt="お悩み5">人間関係に不安がある</li>
                <li class="worries__item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/worries_06.png'); ?>" alt="お悩み6">自分のペースで少しずつ始めたい</li>
            </ul>
            <p class="worries__text"><strong class="worries__emphasis">一人で抱え込まないでも大丈夫</strong><br>そんな思いに<strong class="worries__emphasis">寄り添いながら</strong><br>一人ひとりのペースを大切に<br><strong class="worries__emphasis">サポートします</strong></p>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about__image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about_img_pc.webp'); ?>" class="about__image-pc" alt="事務所風景">
            </div>
            <div class="about__content">
                <p class="eyeblow">ABOUT</p>
                <h2 class="about__title">事務所について</h2>
                <h3 class="about__subtitle">あなたらしく働きながら<br>夢を形にできる場所です。</h3>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about_img_sp.webp'); ?>" class="about__image-sp" alt="事務所風景">
                <p class="about__text">就労継続支援A型事業所「グランクルール」では利用者一人ひとりのスキルアップと一般就労を目指した支援を行っています。<br>未経験の方も丁寧にサポートし、安心して取り組める環境を整えています。</p>
                <p class="about__text">事業所には<strong class="about__emphasis">元医療従事者の支援員</strong>が在籍しており日常の小さな悩みや健康相談にも対応しています。</p>
                <p class="about__text">「<strong class="about__emphasis">一歩ずつ、夢を形に ～あなたの夢を一緒に育てる</strong>」をモットーに、皆さんの目標を支援していきます。</p>
            </div>
        </div>
    </section>
    <section class="job-description">
        <div class="container">
            <p class="eyeblow">Job description</p>
            <h2 class="job-description__title">業務内容</h2>
            <h3 class="job-description__subtitle">あなたに合った働き方を選べます</h3>
            <ul class="job-description__list">
                <li class="job-description__item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/job01.webp'); ?>" class="job-description__item-image" alt="Webページ制作">
                    <div class="job-description__content">
                        <h4 class="job-description__item-title">Webページ制作</h4>
                        <p class="job-description__item-text">ホームページ制作を中心に、HTML・CSS・PHPなどを使用した開発に携わります。<br>CMSやフレームワークを活用し幅広い制作に取り組むことができます。</p>
                    </div>
                </li>
                <li class="job-description__item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/job02.webp'); ?>" class="job-description__item-image" alt="動画編集">
                    <div class="job-description__content">
                        <h4 class="job-description__item-title">動画編集</h4>
                        <p class="job-description__item-text">当事業所では動画制作にも積極的に取り組んでいます。さまざまなジャンルの制作を通して得意なことを活かせる機会があります。</p>
                    </div>
                </li>
                <li class="job-description__item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/job03.webp'); ?>" class="job-description__item-image" alt="PC作業">
                    <div class="job-description__content">
                        <h4 class="job-description__item-title">PC作業</h4>
                        <p class="job-description__item-text">専用システムを使用した各種データ入力を行っていただきます。データ入力のほか、パソコンを使ったさまざまな作業があります。</p>
                    </div>
                </li>
                <li class="job-description__item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/job04.webp'); ?>" class="job-description__item-image" alt="各デザイン業務">
                    <div class="job-description__content">
                        <h4 class="job-description__item-title">各デザイン業務</h4>
                        <p class="job-description__item-text">社内案件や外部からの受注案件がありCanvaやPhotoshopやIllustratorを使用して制作を行います。チラシ・パンフレット・名刺・店舗POP・SNS画像など幅広い媒体に携わることができます。</p>
                    </div>
                </li>
                <li class="job-description__item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/job05.webp'); ?>" class="job-description__item-image" alt="飲食業務">
                    <div class="job-description__content">
                        <h4 class="job-description__item-title">飲食業務</h4>
                        <p class="job-description__item-text">当事業所内には「ゔぇーるくれーる東区役所駅前店」と「どさんこシェフ」の2店舗があります。パン屋での開店準備・陳列・レジ打ち・袋詰めや、お弁当のお惣菜の調理補助・ラベル貼りなどを行います。</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="users-voice">
        <div class="flow-container">
            <p class="eyeblow">VOICE</p>
            <h2 class="users-voice__title">利用者の声</h2>
            <ul class="users-voice__list">
                <li class="users-voice__item">
                    <article class="users-voice-card">
                        <h3 class="users-voice-card__title">利用者Tさんの声1</h3>
                        <p class="users-voice-card__position">担当業務：事務</p>
                        <section class="users-voice-card__section">
                            <h4 class="users-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="users-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="users-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="users-voice-card__label">魅力・今後の目標</p>
                            <p class="users-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="users-voice__item">
                    <article class="users-voice-card">
                        <h3 class="users-voice-card__title">利用者Tさんの声2</h3>
                        <p class="users-voice-card__position">担当業務：事務</p>
                        <section class="users-voice-card__section">
                            <h4 class="users-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="users-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="users-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="users-voice-card__label">魅力・今後の目標</p>
                            <p class="users-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="users-voice__item">
                    <article class="users-voice-card">
                        <h3 class="users-voice-card__title">利用者Tさんの声3</h3>
                        <p class="users-voice-card__position">担当業務：事務</p>
                        <section class="users-voice-card__section">
                            <h4 class="users-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="users-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="users-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="users-voice-card__label">魅力・今後の目標</p>
                            <p class="users-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="users-voice__item">
                    <article class="users-voice-card">
                        <h3 class="users-voice-card__title">利用者Tさんの声4</h3>
                        <p class="users-voice-card__position">担当業務：事務</p>
                        <section class="users-voice-card__section">
                            <h4 class="users-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="users-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="users-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="users-voice-card__label">魅力・今後の目標</p>
                            <p class="users-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="users-voice__item">
                    <article class="users-voice-card">
                        <h3 class="users-voice-card__title">利用者Tさんの声5</h3>
                        <p class="users-voice-card__position">担当業務：事務</p>
                        <section class="users-voice-card__section">
                            <h4 class="users-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="users-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="users-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="users-voice-card__label">魅力・今後の目標</p>
                            <p class="users-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
            </ul>
        </div>
        <div class="users-voice__controls">
            <button type="button" class="users-voice__button users-voice__button--prev" aria-label="前の声へ"></button>
            <div class="users-voice__pagination"></div>
            <button type="button" class="users-voice__button users-voice__button--next" aria-label="次の声へ"></button>
        </div>
    </section>
    <section class="staffs-voice">
        <div class="flow-container">
            <p class="eyeblow">VOICE</p>
            <h2 class="staffs-voice__title">職員の声</h2>
            <ul class="staffs-voice__list">
                <li class="staffs-voice__item">
                    <article class="staffs-voice-card">
                        <figure class="staffs-voice-card__figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/staffs-voice_01.webp'); ?>" class="staffs-voice-card__image" alt="職員Tさん">
                        </figure>
                        <h3 class="staffs-voice-card__title">職員Tさんの声</h3>
                        <p class="staffs-voice-card__position">担当業務：事務</p>
                        <section class="staffs-voice-card__section">
                            <h4 class="staffs-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="staffs-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="staffs-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="staffs-voice-card__label">魅力・今後の目標</p>
                            <p class="staffs-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="staffs-voice__item">
                    <article class="staffs-voice-card">
                        <figure class="staffs-voice-card__figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/staffs-voice_01.webp'); ?>" class="staffs-voice-card__image" alt="職員Tさん">
                        </figure>
                        <h3 class="staffs-voice-card__title">職員Tさんの声</h3>
                        <p class="staffs-voice-card__position">担当業務：事務</p>
                        <section class="staffs-voice-card__section">
                            <h4 class="staffs-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="staffs-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="staffs-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="staffs-voice-card__label">魅力・今後の目標</p>
                            <p class="staffs-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="staffs-voice__item">
                    <article class="staffs-voice-card">
                        <figure class="staffs-voice-card__figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/staffs-voice_01.webp'); ?>" class="staffs-voice-card__image" alt="職員Tさん">
                        </figure>
                        <h3 class="staffs-voice-card__title">職員Tさんの声</h3>
                        <p class="staffs-voice-card__position">担当業務：事務</p>
                        <section class="staffs-voice-card__section">
                            <h4 class="staffs-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="staffs-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="staffs-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="staffs-voice-card__label">魅力・今後の目標</p>
                            <p class="staffs-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="staffs-voice__item">
                    <article class="staffs-voice-card">
                        <figure class="staffs-voice-card__figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/staffs-voice_01.webp'); ?>" class="staffs-voice-card__image" alt="職員Tさん">
                        </figure>
                        <h3 class="staffs-voice-card__title">職員Tさんの声</h3>
                        <p class="staffs-voice-card__position">担当業務：事務</p>
                        <section class="staffs-voice-card__section">
                            <h4 class="staffs-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="staffs-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="staffs-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="staffs-voice-card__label">魅力・今後の目標</p>
                            <p class="staffs-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="staffs-voice__item">
                    <article class="staffs-voice-card">
                        <figure class="staffs-voice-card__figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/staffs-voice_01.webp'); ?>" class="staffs-voice-card__image" alt="職員Tさん">
                        </figure>
                        <h3 class="staffs-voice-card__title">職員Tさんの声</h3>
                        <p class="staffs-voice-card__position">担当業務：事務</p>
                        <section class="staffs-voice-card__section">
                            <h4 class="staffs-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="staffs-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="staffs-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="staffs-voice-card__label">魅力・今後の目標</p>
                            <p class="staffs-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
                <li class="staffs-voice__item">
                    <article class="staffs-voice-card">
                        <figure class="staffs-voice-card__figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/staffs-voice_01.webp'); ?>" class="staffs-voice-card__image" alt="職員Tさん">
                        </figure>
                        <h3 class="staffs-voice-card__title">職員Tさんの声</h3>
                        <p class="staffs-voice-card__position">担当業務：事務</p>
                        <section class="staffs-voice-card__section">
                            <h4 class="staffs-voice-card__heading">簡単な言葉で相手へ伝えるよう考え、工夫しております。</h4>
                            <p class="staffs-voice-card__label">印象に残っているエピソードや工夫</p>
                            <p class="staffs-voice-card__text">業務内容を伝える際には自分なりにわかりやすい、簡単な言葉で相手へ伝えるよう考え、工夫しております。</p>
                            <p class="staffs-voice-card__label">魅力・今後の目標</p>
                            <p class="staffs-voice-card__text">利用者さんから「明日からも頑張ります」などポジティブな反応が返ってきたときがとても嬉しい瞬間です。事務作業を覚え自発的に動けるよう頑張りたいです！</p>
                        </section>
                    </article>
                </li>
            </ul>
        </div>
        <div class="staffs-voice__controls">
            <button type="button" class="staffs-voice__button staffs-voice__button--prev" aria-label="前の声へ"></button>
            <div class="staffs-voice__pagination"></div>
            <button type="button" class="staffs-voice__button staffs-voice__button--next" aria-label="次の声へ"></button>
        </div>
    </section>
    <section class="flow">
        <div class="container">
            <p class="eyeblow">FLOW</p>
            <h2 class="flow__title">ご利用の流れ</h2>
            <h3 class="flow__subtitle">サービスご利用の流れを紹介いたします。</h3>
            <ol class="flow__list">
                <li class="flow__item">
                    <div class="flow__aside">
                        <p class="flow__step-number"><small class="flow__step-number-small">STEP</small>01</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/flow01.webp'); ?>" alt="STEP 01"  class="flow__step-image">
                    </div>
                    <div class="flow__content">
                        <h4 class="flow__item-title">お問い合わせ・見学</h4>
                        <p class="flow__item-text">ホームページやパンフレット、元気さーちなどをご覧いただきお電話、またはメールにてお問い合わせください。お電話でのやり取りですとスムーズに日程を決定することができます。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__aside">
                        <p class="flow__step-number"><small class="flow__step-number-small">STEP</small>02</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/flow02.webp'); ?>" alt="STEP 02"  class="flow__step-image">
                    </div>
                    <div class="flow__content">
                        <h4 class="flow__item-title">ハローワークにて紹介状の発行</h4>
                        <p class="flow__item-text">お住まいの近くにあるハローワークにて当事業所の求人に応募し紹介状を発行していただきますようお願いします。ハローワークからのお電話上にて面接日時を決定いたします。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__aside">
                        <p class="flow__step-number"><small class="flow__step-number-small">STEP</small>03</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/flow03.webp'); ?>" alt="STEP 03"  class="flow__step-image">
                    </div>
                    <div class="flow__content">
                        <h4 class="flow__item-title">面接</h4>
                        <p class="flow__item-text">ハローワークからの紹介状を必ずお持ちください。面接では見学時の感想をお聞きしながら仕事内容や勤務に関するご本人の希望をお伺いします。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__aside">
                        <p class="flow__step-number"><small class="flow__step-number-small">STEP</small>04</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/flow04.webp'); ?>" alt="STEP 04"  class="flow__step-image">
                    </div>
                    <div class="flow__content">
                        <h4 class="flow__item-title">雇用確定・受給者証交付申請</h4>
                        <p class="flow__item-text">面接後、採用／不採用に関わらず、1週間以内にお電話にて結果をご連絡いたします。採用となった場合はお住まいの区役所の福祉窓口にて福祉サービス受給者証の交付申請をお願いします。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__aside">
                        <p class="flow__step-number"><small class="flow__step-number-small">STEP</small>05</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/flow05.webp'); ?>" alt="STEP 05"  class="flow__step-image">
                    </div>
                    <div class="flow__content">
                        <h4 class="flow__item-title">利用開始・雇用契約締結</h4>
                        <p class="flow__item-text">雇用契約を結び、業務開始となります。勤務にあたりご不明点等があれば、いつでもスタッフへお尋ねください。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    <section class="inquiry">
        <h2>まずはお気軽にご相談ください</h2>
        <a href="#" class="inquiry__button">お問い合わせはこちら</a>
    </section>
    <section class="faq">
        <div class="container">
            <p class="eyeblow">FAQ</p>
            <h2 class="about__title">よくある質問</h2>
            <h3 class="about__subtitle">ダミー</h3>
            <div class="faq__list">
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q1.</span>
                        <span class="faq__question-text">A型事業所ってどんなところですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">働きたい気持ちを大切にしながら、就労に不安がある方がサポートを受けながら『働く習慣』や『自分に合った働き方』を身につけていく場所です。不器用な一面や苦手なことがあっても自分の強みを活かしながら環境や周囲のサポートを上手に活用する方法を身につけ自分らしく働き続ける力を育んでいきます。仕事だけでなく体調や生活面も含めて一緒に整えていきます。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q2.</span>
                        <span class="faq__question-text">就労継続支援B型や就労移行支援との違いは何ですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">A型事業所は、雇用契約を結び、働いた分の賃金を受け取りながら実際の仕事を経験できることが特徴です。グランクルールでは、一人ひとりの個性や得意なことを大切にしながら、実務を通して自信とスキルを育てていきます。また、希望される方には一般就労へのステップアップも支援しています。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q3.</span>
                        <span class="faq__question-text">利用するために必要なものはありますか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">障害福祉サービス受給者証が必要になりますが、見学や体験の段階ではお持ちでなくても大丈夫です。『何から始めたらいいかわからない』『手続きが不安』という方も一つひとつ確認して進めていきますので安心してご相談ください。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q4.</span>
                        <span class="faq__question-text">どんな仕事がありますか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">IT・クリエイティブ・事務・マーケティング・飲食など、幅広い仕事があります。ホームページ制作やデザイン、動画編集、SNS運用、AI活用、一般事務補助、調理補助など、一人ひとりの目標や目指す姿に合わせて、得意なことや強みを活かせる作業を提供しています。未経験からスタートされる方も多く実務を通して少しずつ自信とスキルを身につけていける環境です。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q5.</span>
                        <span class="faq__question-text">週に何日、1日何時間から働けますか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">基本の勤務時間は9:30～15:00（実働4.5時間）です。雇用保険への加入を確保しており、体調や通院状況に合わせて勤務時間や日数についてもご相談いただけます。一人ひとりの状態や目標に合わせて無理のないペースで働けるようサポートしています。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q6.</span>
                        <span class="faq__question-text">未経験ですが大丈夫でしょうか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">もちろん大丈夫です。利用されている方の多くが未経験からスタートされています。業務のやり方や仕事の意味をお伝えしながら、一人ひとりのペースに合わせてサポートしています。また、グランクルールは「働く場」です。スタッフが一方的に教えるだけではなく、ご自身でも学ぶ姿勢や挑戦する気持ちを大切にしながら、実務を通して少しずつ『できること』を増やし自信とスキルを育てていける環境です。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q7.</span>
                        <span class="faq__question-text">A型事業所ってどんなところですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">はい、通院や体調、生活状況に合わせて業務内容や負荷の調整を行っています。一人ひとりの状態や目標に合わせて無理なく継続できる働き方を一緒に考えていきます。安心して働ける環境づくりを大切にしながら少しずつ『できること』を増やしていけるようサポートしています。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q8.</span>
                        <span class="faq__question-text">お給料はいくらですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">雇用契約を結んだうえで最低賃金以上となる時給1,075円から勤務していただけます。勤務日数や時間によって月々の賃金は変わりますが実績や取り組みに応じて昇給もあります。詳細については見学や面談の際にご説明いたします。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q9.</span>
                        <span class="faq__question-text">社会保険には入れますか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">雇用保険には加入していただける勤務条件を確保しています。健康保険や厚生年金などの社会保険は、勤務時間などの条件を満たした場合に加入できます。基本の勤務時間では対象外となりますが作業面や体調面の安定に合わせて勤務時間を延長することもあり、その際には社会保険加入の対象となる場合があります。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q10.</span>
                        <span class="faq__question-text">スタッフの方はどんな人たちですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">福祉や医療の現場、フリーランス、IT関連、一般企業などさまざまな経験を持つスタッフが在籍しています。仕事のやり方だけでなく仕事への向き合い方や考え方、体調や生活面についても相談しながら一緒に成長していくことを大切にしています。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q11.</span>
                        <span class="faq__question-text">いきなり通い始めるのが不安です。</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">ご安心ください。『まずは話だけ聞いてみたい』『雰囲気を知りたい』という方も多くいらっしゃいます。見学や体験利用を通して実際の仕事内容や事業所の雰囲気を確認していただき、ご自身に合うかどうかをじっくり考えていただけます。また、不安や心配ごとについても一緒に整理しながら無理のないペースで利用開始に向けた準備を進めていきます。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q12.</span>
                        <span class="faq__question-text">見学には予約が必要ですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">はい。見学者の方一人ひとりのお話をしっかり伺い、事業所の雰囲気や仕事内容について丁寧にご案内するため事前予約をお願いしています。お電話やメールSNSからお気軽にお問い合わせください。『まずは話だけ聞いてみたい』『見学だけしてみたい』という方も歓迎しています。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q13.</span>
                        <span class="faq__question-text">通所するのに必要な手続きは誰に相談すればいいですか？</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">お住まいの市町村窓口や現在利用されている相談支援事業所、通院先の病院などにご相談ください。すでに担当の相談支援専門員がいる場合は、その方を通して手続きを進めることもできます。『何から始めればいいかわからない』『相談先がわからない』という方も、見学時に現在の状況を確認しながら一緒に必要な手続きや流れを整理していきますのでお気軽にご相談ください。</p>
                    </div>
                </article>
                <article class="faq__item">
                    <div class="faq__question">
                        <span class="faq__number">Q14.</span>
                        <span class="faq__question-text"> 昼食について</span>
                    </div>
                    <div class="faq__answer">
                        <p class="faq__answer-text">昼食は『どさんこシェフ』のお弁当を日替わりで提供しております。 利用者の皆様からもおいしいと大好評です。一食200円で提供しております（※食事提供加算の非対象者は300円）</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="access">
        <div class="container">
            <p class="eyeblow">ACCESS</p>
            <h2 class="flow__title">アクセス</h2>
            <h3 class="flow__subtitle">グランクルールへのご案内</h3>
            <div class="location">
                <h4 class="location__heading">位置情報</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.2719526830892!2d141.363957!3d43.07777759999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29144a38b6cb%3A0x21b389a93dcc4621!2z44K744Os44K544K_5pyt5bmM!5e0!3m2!1sja!2sjp!4v1782868014563!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                <h4 class="location__heading">最寄り駅</h4>
                <p class="location__text">札幌市営地下鉄東豊線 東区役所前駅4番出口から徒歩1分</p>
                <h4 class="location__heading">対応可能時間</h4>
                <p class="location__text">月〜金 10:00～17:00</p>
            </div>
            <div class="company">
                <h4 class="company__heading">会社概要</h4>
                <dl>
                    <dt>事業所名</dt>
                    <dd>グランクルール</dd>
                    <dt>事業所番号</dt>
                    <dd>0110302684</dd>
                    <dt>所在地</dt>
                    <dd>〒065-0012 札幌市東区北12条東7丁目1-15 セレスタ札幌1F</dd>
                    <dt>代表者</dt>
                    <dd>酒井麻衣</dd>
                </dl>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
