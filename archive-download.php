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
            <h1 class="c-below-mv__title l-title30">
                <?php
                // カスタム投稿タイプ名を取得して表示
                $post_type = get_post_type_object(get_post_type());
                echo esc_html($post_type->label); 
                ?>
            </h1>
            <div class="c-below-mv__message">弊社のサービス資料や経営に役立つTips資料<br class="u-mobile">を<br
                    class="u-desktop">無料でダウンロードいただけます
            </div>
        </div>
    </section>

    <!-- p-download -->
    <section class="p-download">
        <div class="p-download__inner l-inner">
            <div class="p-download__tabs">
                <span class="p-download__tab-title">種類</span>
                <span class="p-download__tab-list">
                    <?php 
                    $terms = get_terms(array(
                        'taxonomy' => 'download_type',
                        'hide_empty' => false,
                    ));

                    // お役立ち資料を先頭にするための処理
                    $priority_term_name = 'お役立ち資料';
                    usort($terms, function ($a, $b) use ($priority_term_name) {
                        if ($a->name == $priority_term_name) return -1;
                        if ($b->name == $priority_term_name) return 1;
                        return 0;
                    });

                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            echo '<label class="custom-checkbox">';
                            echo '<input type="checkbox" id="category' . $term->slug . '" name="category" value="' . $term->slug . '">';
                            echo '<span class="checkbox-label">' . $term->name . '</span>';
                            echo '</label><br>';
                        }
                    }
                    ?>
                </span>
            </div>
            <div class="p-download__items">
                <!-- 記事のループ処理開始 -->
                <?php
                if( wp_is_mobile() ){
                    $num = 9; // スマホの表示数(全件は-1)
                } else {
                    $num = 9; // PCの表示数(全件は-1)
                }
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'download', // カスタム投稿の投稿タイプスラッグ
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => $num, // 表示件数
                    'orderby' => 'date', // 日付順に並べ替え
                    'order' => 'DESC', // 降順
                ];
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
                $post_id = get_the_ID(); // 投稿IDを取得
                $document_explain = get_field('document_explain', $post_id); // ACFフィールドを取得
                ?>
                <article class="p-download__item c-card">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="c-card__img">
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
                        <h2 class="c-card__card-title">
                            <?php the_title(); ?>
                        </h2>
                        <div class="c-card__content">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'download_type');
                            if ($terms && !is_wp_error($terms)) {
                                // ジャンルが存在し、エラーがない場合のみ、<span> タグを表示
                                echo '<span class="c-card__category">' . esc_html($terms[0]->name) . '</span>';
                            }
                            // ジャンルがない場合は、何も表示しない
                            ?>
                            <div class="c-card__text">
                                <?php echo esc_html($document_explain); // ACFフィールドを表示 ?>
                            </div>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
                <?php else: ?>
                <p>まだ記事がありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <!-- 記事のループ処理終了 -->
            </div>
            <div class="p-download__pages">
                <?php get_template_part('template/pagination'); ?>
            </div>
        </div>
    </section>
    <div class="c-common-download__bg02">
        <div class="l-inner">
            <div class="c-common-download__box">
                <p class="c-common-download__text">ご相談や各種お問い合わせはこちら</p>
                <ul class="c-common-download__items">
                    <li class="c-common-download__item">
                        <a href="<?php echo CONTACT_URL; ?>"
                            class="c-common-download__contact c-common-download__contact--mail">メールでお問い合わせ</a>
                    </li>
                    <li class="c-common-download__item">
                        <a href="<?php echo DOWNLOAD_URL; ?>"
                            class="c-common-download__contact c-common-download__contact--line">LINEでお問い合わせ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>