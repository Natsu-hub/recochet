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

    <?php get_template_part('template/common-download'); ?>

    <!-- p-top-blog -->
    <div class="p-top-blog l-section">
        <div class="p-top-blog__inner l-inner--small">
            <div class="p-top-blog__box">
                <div class="p-top-blog__left">
                    <h2 class="p-top-blog__head c-common-title c-common-title--black js-text-effect js-splitText">Blog
                    </h2>
                    <div class="p-top-blog__btn js-fade-in"><a class="c-btn-black" href="<?php echo BLOG_URL; ?>">
                            <p class="c-btn-black__text">記事一覧へ</p>
                            <picture class="c-btn-black__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow02.svg"
                                    alt="記事一覧へ" width="202" height="10" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="p-top-blog__right js-fadeInSlow">
                    <?php
          if (wp_is_mobile()) {
            $num = 6; // スマホの表示数(全件は-1)
          } else {
            $num = 6; // PCの表示数(全件は-1)
          }
          $args = [
            'post_type' => 'case-study',
            // 投稿タイプのスラッグ(通常投稿は'post')
            'posts_per_page' => $num, // 表示件数
          ];
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):
            while ($the_query->have_posts()):
              $the_query->the_post();
              ?>
                    <a class="p-top-blog__content" href="<?php the_permalink(); ?>">
                        <div class="p-top-blog__time">
                            <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.'); ?></time>
                            <time datetime="<?php the_time('c'); ?>"><?php the_time('n.j'); ?></time>
                        </div>
                        <p class="p-top-blog__content-title">
                            <?php the_title(); ?>
                        </p>
                    </a>
                    <?php endwhile; else: ?>
                    <p>まだ記事がありません</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- 記事のループ処理終了 -->
                </div>

            </div>
        </div>
    </div>



</main>
<?php get_footer(); ?>