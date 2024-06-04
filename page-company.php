<?php 
/**
* Template Name: 会社概要
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--company">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/company-white.svg"
                    alt="company" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title10">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">株式会社ricochetの会社情報を<br class="u-mobile">ご紹介いたします。
            </div>
        </div>
    </section>

    <!-- p-company -->
    <section class="p-company">
        <div class="p-company__inner l-inner">
            <h2 class="p-company__title">会社概要</h2>
            <div class="p-company__box">
                <picture class="p-company__img">
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/company_img01.webp"
                        type="image/webp">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/company_img01.jpg"
                        alt="亀井 良真氏" width="310" height="310" loading="lazy">
                </picture>
                <div class="p-company__message">僕は飲食店を経営する両親の元で育てられ、小さい規模ながらも飲食店経営をしてきました。<br>
                    日本の人口減少に伴い、飲食店経営はますます厳しい状況になってきています。<br>
                    経営者にとって新しい飲食店の形が世の中に求められています。世界的に見ても日本の食は評価が高いにも関わらず、良いものを全国に認知できていません。それは店舗経営による弊害でもある商圏です。<br>
                    通販でしたら全国区で勝負ができます。<br>
                    僕は小さく飲食店を経営をしながらも、通販に出会い実績を出すことができました。<br>
                    その経験を活かしてこれまで全国1000の店舗以上の飲食店に指導をしてきています。<br>
                    良いものを世界に広めるという理念を元に応援活動をしています。<br>
                    新しい飲食店の世の中に広めるためご協力よろしくお願いします。</div>
            </div>
            <div class="p-company__name">株式会社リコシェ　代表取締役　亀井 良真</div>
            <div class="p-company__info">
                <dl class="p-company__list">
                    <dt class="p-company__list-title">商号</dt>
                    <dd class="p-company__list-description">株式会社リコシェ</dd>
                </dl>
                <dl class="p-company__list">
                    <dt class="p-company__list-title">代表取締役</dt>
                    <dd class="p-company__list-description">亀井 良真</dd>
                </dl>
                <dl class="p-company__list">
                    <dt class="p-company__list-title">事業内容</dt>
                    <dd class="p-company__list-description">飲食店経営／通信販売事業／コンサルティングサービス</dd>
                </dl>
                <dl class="p-company__list">
                    <dt class="p-company__list-title">設立</dt>
                    <dd class="p-company__list-description">2017年7月 21日</dd>
                </dl>
                <dl class="p-company__list">
                    <dt class="p-company__list-title">所在地</dt>
                    <dd class="p-company__list-description">〒320-0838　栃木県宇都宮市吉野2-5-8</dd>
                </dl>
            </div>
        </div>
    </section>

    <!-- p-company-news -->
    <section class="p-company-news">
        <div class="p-company-news__inner l-inner">
            <h2 class="p-company-news__title">お知らせ</h2>
            <div class="p-company-news__box">
                <?php
            $args = [
                'post_type' => 'news', // カスタム投稿タイプ 'news'
                'posts_per_page' => -1,    // 全ての投稿を表示
                'orderby' => 'date',      // 日付で並び替え
                'order' => 'DESC'         // 降順
            ];
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()):
                $counter = 0; // カウンター変数を初期化
                while ($news_query->have_posts()):
                    $news_query->the_post();
                    $counter++;
                    ?>
                <div class="p-company-news__content">
                    <div class="p-company-news__label">
                        <time datetime="<?php echo get_the_date('c'); ?>">
                            <?php 
                                echo get_the_date('Y.m.d'); 
                                $days = array('日' => '日', '月' => '月', '火' => '火', '水' => '水', '木' => '木', '金' => '金', '土' => '土');
                                $day = get_the_date('D');
                                echo ' (' . $days[$day] . ')';
                                ?>
                        </time>
                    </div>
                    <div class="p-company-news__content-wrapper">
                        <?php if ($counter <= 3): ?>
                        <span>NEW</span>
                        <?php endif; ?>
                        <div class="p-company-news__content-title">
                            <?php the_title(); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: ?>
                <p>まだ記事がありません</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <!-- 記事のループ処理終了 -->
            </div>
        </div>
    </section>
    <!-- p-common-service -->
    <?php get_template_part('template/common-service'); ?>



</main>
<?php get_footer(); ?>