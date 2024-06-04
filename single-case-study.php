<?php 
get_header(); 
?>

<main class="l-main">

    <?php
$case_company = get_field('case_company');
$case_industry = get_field('case_industry');
$case_number = get_field('case_number');
$case_task = get_field('case_task');
$case_client = get_field('case_client');
?>

    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--case">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/case-study-white.svg"
                    alt="case study" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title10">
                <?php
                        // カスタム投稿タイプ名を取得して表示
                        $post_type = get_post_type_object(get_post_type());
                        echo esc_html($post_type->label); 
                        ?>
            </h1>
            <div class="c-below-mv__message">リコシェのコンサルティングを受けた店舗、<br>
                企業さまの成果をご紹介いたします。
            </div>
        </div>
    </section>

    <div class="p-single-case">
        <div class="p-single-case__inner l-inner">
            <div class="p-single-case__title-box">
                <span class="p-single-case__company"><?php echo $case_company; ?></span>
                <h2 class="p-single-case__title"><?php the_title(); ?></h2>
                <time class="p-single-case__time" datetime="<?php echo get_the_date('c'); ?>">
                    <?php 
                                echo get_the_date('Y年m月d日'); 
                                $days = array('日' => '日', '月' => '月', '火' => '火', '水' => '水', '木' => '木', '金' => '金', '土' => '土');
                                $day = get_the_date('D');
                                echo ' (' . $days[$day] . ')';
                                ?>
                </time>
            </div>
            <div class="p-single-case__body">
                <div class="p-single-case__main-content">
                    <figure class="p-single-case__main-img">
                        <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else { ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/no-img.png"
                            alt="">
                        <?php } ?>
                    </figure>
                    <div class="p-single-case__link-box">
                        <span class="p-single-case__link-label">無料</span>
                        <div class="p-single-case__link-text">関連資料を無料で<br>
                            ご利用いただけます</div>
                        <div class="p-single-case__link-btn">
                            <a href="<?php echo DOWNLOAD_URL; ?>">お役立ち資料をダウンロード</a>
                        </div>
                    </div>
                    <div class="p-single-case__content c-entry-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="p-single-case__btn">
                        <a class="c-btn" href="<?php echo $_SERVER['HTTP_REFERER'] ?? $works; ?>">コンサル事例一覧に戻る
                        </a>
                    </div>
                </div>
                <aside class="p-single-case__sidebar">
                    <div class="p-single-case__author-box">
                        <div class="p-single-case__author-title">著者情報
                        </div>
                        <div class="p-single-case__author-info">
                            <picture class="p-single-case__author-img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/case_img01.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/case_img01.jpg"
                                    alt="亀井 良真氏の写真" width="117" height="117" loading="lazy">
                            </picture>
                            <div class="p-single-case__author-item">
                                <div class="p-single-case__author-name">亀井 良真</div>
                                <ul class="p-single-case__author-sns">
                                    <li class="p-single-case__author-list">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/x-blue.svg"
                                            alt="X" width="20" height="20" loading="lazy">
                                        <a href="https://x.com/kameimind " class="p-single-case__author-link"
                                            target="_blank" rel="noopener noreferrer">X</a>
                                    </li>
                                    <li class="p-single-case__author-list">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/facebook-blue.svg"
                                            alt="Facebook" width="20" height="20" loading="lazy">
                                        <a href="https://www.facebook.com/kameituhan/ "
                                            class="p-single-case__author-link" target="_blank"
                                            rel="noopener noreferrer">Facebook</a>
                                    </li>
                                    <li class="p-single-case__author-list">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/insta-blue.svg"
                                            alt="Instagram" width="20" height="20" loading="lazy">
                                        <a href="https://www.instagram.com/kamechan_d/"
                                            class="p-single-case__author-link" target="_blank"
                                            rel="noopener noreferrer">Instagram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- p-case-related -->
                    <div class="p-case-related">
                        <div class="p-case-related__head">関連記事</div>
                        <?php
        $case_study_posts = get_posts(array(
            'post_type' => 'case-study',  // カスタム投稿タイプ 'case-study'
            'posts_per_page' => 4,        // 最新3件を取得
            'post__not_in' => array(get_the_ID()), // 現在の投稿を除外
            'orderby' => 'date',          // 日付で並び替え
            'order' => 'DESC'             // 降順
        ));
        
        if ($case_study_posts) : ?>
                        <ul class="p-case-related__lists">
                            <?php foreach ($case_study_posts as $post) : setup_postdata($post); ?>
                            <li class="p-case-related__list">
                                <a href="<?= esc_url(get_permalink()); ?>">
                                    <time class="p-case-related__time"
                                        datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d.'); ?></time>
                                    <div class="p-case-related__box">
                                        <div class="p-case-related__title"><?= esc_html(get_the_title()); ?>
                                        </div>
                                        <figure class="p-case-related__img">
                                            <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else { ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/no-img.png"
                                                alt="">
                                            <?php } ?>
                                        </figure>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <!-- 事業内容 -->
    <?php get_template_part('template/common-service'); ?>

</main>
<?php get_footer(); ?>