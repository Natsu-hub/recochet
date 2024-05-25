<?php 
get_header(); 
?>

<main class="l-main">

    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--download">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/download-white.svg"
                    alt="case study" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title">
                <?php
        // 現在の投稿IDを取得
        $post_id = get_the_ID();
        
        // 投稿に関連する 'download_type' タクソノミーの情報を取得
        $terms = get_the_terms($post_id, 'download_type');
        
        // タクソノミーのタームに基づいてタイトルを表示
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                if ($term->slug == 'useful') {
                    echo 'お役立ち資料';
                } elseif ($term->slug == 'service') {
                    echo 'サービス資料';
                }
            }
        } else {
            echo 'カテゴリーがありません';
        }
    ?>
            </h1>
            <div class="c-below-mv__message">リコシェのコンサルティングを受けた店舗、<br>
                企業さまの成果をご紹介いたします。
            </div>
        </div>
    </section>


    <!-- p-single-blog -->
    <section class="p-single-blog l-section--below">
        <div class="p-single-blog__inner l-inner--small">
            <article class="p-single-blog__box">
                <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <div class="p-single-blog__card">
                    <div class="p-single-blog__item">
                        <time class="p-single-blog__time"
                            datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d.'); ?></time>
                        <p class="p-single-blog__text">
                            <?php the_title(); ?>
                        </p>
                    </div>
                    <figure class="p-single-blog__img-wrapper">
                        <?php if (has_post_thumbnail()) {
						the_post_thumbnail();
						} else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/no-img.webp"
                            alt="blog1">
                        <?php } ?>
                    </figure>
                </div>
                <div class="p-single-blog__body-wrapper">
                    <div class="p-single-blog__body">
                        <div class="p-single-blog__content c-entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </article>
            <div class="contact-form">

                <!-- カテゴリーで分ける必要がない場合 -->
                <?php
$download_link = get_post_meta($post->ID, 'download_link', true); // カスタムフィールドからダウンロードリンクを取得
// ここに var_dump を記述して値を確認
var_dump($download_link);
echo do_shortcode('[contact-form-7 id="281" title="資料ダウンロード_useful" download_link="' . esc_url($download_link) . '"]');
?>

                <!-- 直接開く -->
                <a href="<?php echo esc_url(get_field('download_link')); ?>" download>
                    直接開くダウンロード
                </a>
                <!-- 別タブで開いてから自分でダウンロード zipファイルはそのままダウンロードになる -->
                <a href="<?php echo esc_url(get_field('download_link')); ?>" target="_blank" rel="noopener noreferrer">
                    別タブでファイルを開く
                </a>

            </div>
            <div class="p-single-blog__btns l-btn-below">
                <div class="p-contact__btn c-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
                        <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
                        <picture class="c-btn-black__img c-btn-black__img--prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow.svg"
                                alt="TOPへ戻る" width="202" height="10" loading="lazy">
                        </picture>
                    </a>
                </div>
                <div class="p-contact__btn"><a class="c-btn-black"
                        href="<?php echo $_SERVER['HTTP_REFERER'] ?? $works; ?>">
                        <p class="c-btn-black__text">ブログ一覧へ</p>
                        <picture class="c-btn-black__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow.svg"
                                alt="ブログ一覧へ" width="202" height="10" loading="lazy">
                        </picture>
                    </a>
                </div>
            </div>


            <div class="p-top-blog__right js-fadeInSlow">
                <?php
          if (wp_is_mobile()) {
            $num = 2; // スマホの表示数(全件は-1)
          } else {
            $num = 2; // PCの表示数(全件は-1)
          }
          $args = [
            'post_type' => 'download',
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
    </section>
</main>
<?php get_footer(); ?>