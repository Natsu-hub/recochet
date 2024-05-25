<?php 
get_header(); 
?>

<main class="l-main">

    <?php
$document_explain = get_field('document_explain');
$document_list = get_field('document_list');
$download_link = get_field('download_link');
$pickup = get_field('pickup');
?>

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


    <!-- p-single-download -->
    <section class="p-single-download l-page110">
        <div class="p-single-download__inner l-inner">
            <div class="p-single-download__body">
                <article class="p-single-download__box">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="p-single-download__card">
                        <figure class="p-single-download__img-wrapper">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/common/no-img.png"
                                alt="">
                            <?php } ?>
                        </figure>
                        <div class="p-single-download__item">
                            <h2 class="p-single-download__lead">
                                <?php the_title(); ?>
                            </h2>
                            <p class="p-single-download__text">
                                <?php echo $document_explain; ?>
                            </p>
                            <p class="p-single-download__content">
                                <?php echo $document_list; ?>
                            </p>
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
// var_dump($download_link);
echo do_shortcode('[contact-form-7 id="281" title="資料ダウンロード_useful" download_link="' . esc_url($download_link) . '"]');
?>

                    <!-- 直接開く -->
                    <a href="<?php echo esc_url(get_field('download_link')); ?>" download>
                        直接開くダウンロード
                    </a>
                    <!-- 別タブで開いてから自分でダウンロード zipファイルはそのままダウンロードになる -->
                    <a href="<?php echo esc_url(get_field('download_link')); ?>" target="_blank"
                        rel="noopener noreferrer">
                        別タブでファイルを開く
                    </a>

                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>