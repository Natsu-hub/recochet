<?php 
get_header(); ?>

<main class="l-main">
    <!-- p-top-mv -->
    <section class="p-top-mv">
        <div class="p-top-mv__inner">
            <div class="p-top-mv__box">
                <h2 class="p-top-mv__lead"><span>次世代につながる</span><span>“持続的な経営”で未来を創り</span><span>共に飲食業界を盛り上げる</span>
                </h2>
                <div class="p-top-mv__btn">
                    <a href="<?php echo DOWNLOAD_URL; ?>">資料ダウンロードはこちら</a>
                </div>
                <div class="p-top-mv__link">
                    <a href="<?php echo MEETING_URL; ?>">60分の無料Zoom面談に申し込む</a>
                </div>
            </div>
        </div>
    </section>

    <!-- p-splide-img -->
    <div class="p-splide-img splide js-slide-img" aria-label="流れる写真のSplide">
        <div class="splide__track">
            <ul class="splide__list p-splide-img__list">
                <li class="splide__slide p-splide-img__slide">
                    <picture>
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img01.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img01.jpg"
                            alt="飲食店で働く人のイメージ写真" width="519" height="127">
                    </picture>
                </li>
                <li class="splide__slide p-splide-img__slide">
                    <picture>
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img02.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img02.jpg"
                            alt="飲食店で働く人のイメージ写真" width="225" height="127">
                    </picture>
                </li>
                <li class="splide__slide p-splide-img__slide">
                    <picture>
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img03.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img03.jpg"
                            alt="飲食店で働く人のイメージ写真" width="519" height="127">
                    </picture>
                </li>
                <li class="splide__slide p-splide-img__slide">
                    <picture>
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img04.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-slide/mv-slide_img04.jpg"
                            alt="飲食店で働く人のイメージ写真" width="519" height="127">
                    </picture>
                </li>
            </ul>
        </div>
    </div>

    <!-- p-top-message -->
    <section class="p-top-message">
        <div class="p-top-message__inner l-inner">
            <h2 class="p-top-message__title c-title">
                <picture class="p-top-message__title-en c-title__en">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/message-sp.svg"
                        type="image/webp" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/message.svg"
                        alt="message" width="160" height="98" loading="lazy">
                </picture>
                <span class="c-title__ja">『日本の飲食店を元気にする!』</span>
            </h2>
            <div class="p-top-message__box">
                <span>日本が世界に誇る食文化をより豊かにするために、</span>
                <span>飲食店ならではの問題点や課題を、オーナーさんと一緒に解決していきます。</span><br class="u-mobile">
                <span>日本の飲食店が元気になって欲しい、</span>
                <span>日本の飲食店で働く人が豊かであって欲しい、</span>
                <span>お客様も心から喜ぶ商品やサービスを提供したい。</span>
                <span>飲食業界に携わる全ての人が幸せであれるよう、</span>
                <span>株式会社リコシェは皆様を応援しています。</span>
            </div>
        </div>
    </section>

    <!-- p-top-service -->
    <section class="p-top-service">
        <div class="p-top-service__inner l-inner">
            <h2 class="p-top-service__title c-title">
                <picture class="p-top-service__title-en c-title__en">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/service-sp.svg"
                        type="image/webp" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/service.svg"
                        alt="service" width="160" height="98" loading="lazy">
                </picture>
                <span class="c-title__ja">事業内容</span>
            </h2>
            <div class="p-top-service__box">
                <picture class="p-top-service__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img04.webp"
                        type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img04.png"
                        alt="事業内容のイメージイラスト" width="496" height="279" loading="lazy">
                </picture>
                <div class="p-top-service__content">
                    <span>かつて子供達が憧れた飲食店。しかし現実的に飲食店を開業しても、売り上げが悪ければすぐに廃業せざるをえなくなってしまいます。ブラック企業の代名詞である飲食業界を打開するため活動しており、支援することで業界全体を変革していきます。
                    </span>
                    <span>また、これまで経験した成功例から得たノウハウを、新規顧客開拓、通販事業立ち上げ、コピーライティング、マーケティング、売上アップ、事業改善、労働改善、経営戦略など様々な場面でご提供いたします。
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- p-common-service -->
    <div class="p-common-service p-common-service--top">
        <div class="p-common-service__inner l-inner">
            <ul class="p-common-service__lists">
                <li class="p-common-service__list">
                    <picture class="p-common-service__list-img">
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img01.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img01.jpg"
                            alt="事業コンサルティングのイメージ画像" width="310" height="174" loading="lazy">
                    </picture>
                    <div class="p-common-service__list-title">事業コンサルティング</div>
                    <div class="p-common-service__list-text">通販のみで最高月商700万を達成し、累計約3000人以上の方に行なってきたノウハウを惜しみなく提供します。</div>
                    <div class="p-common-service__list-btn">
                        <a class="c-btn" href="<?php echo CONSULTING_URL; ?>">詳しく見る</a>
                    </div>
                </li>
                <li class="p-common-service__list">
                    <picture class="p-common-service__list-img">
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img02.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img02.jpg"
                            alt="飲食店ネット通販アカデミーのイメージ画像" width="310" height="174" loading="lazy">
                    </picture>
                    <div class="p-common-service__list-title">飲食店ネット通販アカデミー</div>
                    <div class="p-common-service__list-text">通販関係の有益情報や、マインドセットを発信しているオンラインサロンです。<br>
                        サロン生に向けて、毎月の実践報告に対するフィードバックも行っています。</div>
                    <div class="p-common-service__list-btn">
                        <a class="c-btn" href="<?php echo ACADEMY_URL; ?>">詳しく見る</a>
                    </div>
                </li>
                <li class="p-common-service__list">
                    <picture class="p-common-service__list-img">
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img03.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img03.jpg"
                            alt="発展途上国の教育支援のイメージ画像" width="310" height="174" loading="lazy">
                    </picture>
                    <div class="p-common-service__list-title">発展途上国の教育支援</div>
                    <div class="p-common-service__list-text">リコシェが行っている社会貢献事業とSDGsの取り組みをご紹介いたします。</div>
                    <div class="p-common-service__list-btn">
                        <a class="c-btn" href="<?php echo WELL_URL; ?>">詳しく見る</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- 資料ダウンロード -->
    <?php get_template_part('template/common-download'); ?>

    <!-- p-top-case-study -->
    <section class="p-top-case-study">
        <div class="p-top-case-study__inner">
            <h2 class="p-top-case-study__title c-title">
                <picture class="p-top-case-study__title-en c-title__en">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/case-study-sp.svg"
                        type="image/webp" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/case-study.svg"
                        alt="case-study" width="160" height="98" loading="lazy">
                </picture>
                <span class="c-title__ja">リコシェのコンサル効果</span>
            </h2>
            <div class="p-top-case-study__wrapper">
                <!-- js-slide-case-study -->
                <div class="splide js-slide" aria-label="コンサル効果のSplide">
                    <div class="splide__track">
                        <ul class="splide__list p-top-case-study__items">
                            <?php
                        $args = [
                            'post_type' => 'case-study',
                            'posts_per_page' => 5,
                        ];
                        $the_query01 = new WP_Query($args);
                        if ($the_query01->have_posts()) :
                            while ($the_query01->have_posts()) : $the_query01->the_post();
                                $case_client = get_field('case_client');
                                $case_title = get_field('case_title');
                        ?>
                            <li class="splide__slide p-top-case-study__item">
                                <a href="<?php the_permalink(); ?>">
                                    <figure class="p-top-case-study__img">
                                        <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {
                                    ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/common/no-img.png"
                                            alt="">
                                        <?php
                                    } ?>
                                    </figure>
                                    <div class="p-top-case-study__body">
                                        <div class="p-top-case-study__client">
                                            <?php echo $case_client; ?>
                                        </div>
                                        <h3 class="p-top-case-study__card-title">
                                            <?php echo $case_title; ?>
                                        </h3>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <p>記事がありません</p>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                        <!-- ページネーション -->
                        <ul class="splide__pagination p-top-case-study__pagination"></ul>
                    </div>
                </div>
            </div>
            <div class="p-top-case-study__list-btn">
                <a class="c-btn" href="<?php echo CASE_URL; ?>">コンサル事例一覧を見る</a>
            </div>
        </div>
    </section>

    <!-- p-top-well -->
    <section class="p-top-well">
        <div class="p-top-well__inner l-inner">
            <h2 class="p-top-well__title c-title">
                <picture class="p-top-well__title-en c-title__en">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/well-being-sp.svg"
                        type="image/webp" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/well-being.svg"
                        alt="well" width="160" height="98" loading="lazy">
                </picture>
                <span class="c-title__ja">SDGsの取り組み</span>
            </h2>
            <div class="p-top-well__box">
                <picture class="p-top-well__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/well_img01.webp"
                        type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/well_img01.jpg"
                        alt="SDGsの取り組みのイメージ画像" width="701" height="497" loading="lazy">
                </picture>
                <div class="p-top-well__content">
                    <div class="p-top-well__lead">例えば、発展途上国の教育支援。
                    </div>
                    <div class="p-top-well__text">リコシェでは貧困層の子供たちへの学校支援を行っています。ブータンのような発展途上国では、幸福度が高い一方で教育環境は不十分です。<br>
                        リコシェは学校への寄付を通じて、校舎や設備の整備、安全な環境の提供を行い、子供たちの教育を支援しています。<br>
                        その結果、学校へのアクセスが改善し子供たちの笑顔が増えています。<br>
                        リコシェはこれからも教育支援をはじめ、well-beingなSDGsの取り組みに貢献してまいります。<br>
                    </div>
                    <div class="p-top-well__btn"><a class="c-btn" href="<?php echo WELL_URL; ?>">リコシェの取り組みはこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- p-top-company -->
    <section class="p-top-company">
        <div class="p-top-company__inner l-inner">
            <h2 class="p-top-company__title c-title">
                <picture class="p-top-company__title-en c-title__en">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/company-sp.svg"
                        type="image/webp" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/company.svg"
                        alt="company" width="160" height="98" loading="lazy">
                </picture>
                <span class="c-title__ja">会社概要</span>
            </h2>
            <div class="p-top-company__text">株式会社ricochetの会社概要をご紹介いたします。
            </div>
            <div class="p-top-company__btn"><a class="c-btn" href="<?php echo COMPANY_URL; ?>">会社概要はこちら</a>
            </div>
        </div>
    </section>

    <!-- 資料ダウンロード -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>