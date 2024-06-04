<?php 
get_header(); 
?>

<main class="l-main">

    <?php
    $document_explain = get_field('document_explain');
    $document_list = get_field('document_list');
    $download_link = get_field('download_link');
    ?>


    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--download">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/download-white.svg"
                    alt="download" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">
                <?php
                // 現在のタクソノミータームを取得
                $current_term = get_queried_object();
                if ($current_term && !is_wp_error($current_term)) {
                    if ($current_term->slug == 'useful') {
                        echo 'お役立ち資料';
                    } elseif ($current_term->slug == 'service') {
                        echo 'サービス資料';
                    } else {
                        echo esc_html($current_term->name);
                    }
                } else {
                    echo 'お役立ち資料';
                }
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
                            $checked = ($term->slug === $current_term->slug) ? 'checked' : '';
                            echo '<label class="custom-checkbox">';
                            echo '<input type="checkbox" id="category' . $term->slug . '" name="category" value="' . $term->slug . '" ' . $checked . '>';
                            echo '<span class="checkbox-label">' . $term->name . '</span>';
                            echo '</label><br>';
                        }
                    }
                    ?>
                </span>
            </div>

            <div class="p-download__items">
                <!-- 記事のループ処理開始 -->
                <?php if (have_posts()): while (have_posts()): the_post(); 
                $post_id = get_the_ID(); // 投稿IDを取得
                $document_explain = get_field('document_explain', $post_id); // ACFフィールドを取得
                ?>
                <article class="p-download__item c-card">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="c-card__img">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/common/no-img.png"
                                alt="">
                            <?php } ?>
                        </figure>
                        <h2 class="c-card__card-title"><?php the_title(); ?></h2>
                        <div class="c-card__content">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'download_type');
                            if ($terms && !is_wp_error($terms)) {
                                echo '<span class="c-card__category">' . esc_html($terms[0]->name) . '</span>';
                            }
                            ?>
                            <div class="c-card__text">
                                <?php echo esc_html($document_explain); // ACFフィールドを表示 ?>
                            </div>
                        </div>
                    </a>
                </article>
                <?php endwhile; else: ?>
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
    <!-- c-common-download-bg02 -->
    <?php get_template_part('template/common-download-bg02'); ?>
</main>
<?php get_footer(); ?>