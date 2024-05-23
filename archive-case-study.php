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
$case_title = get_field('case_title');
?>
    <?php echo $case_client; ?>
    <?php echo $case_title; ?>
    <!-- c-below-mv -->
    <section class="c-below-mv js-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/case-study-white.svg"
                    alt="case study" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title">
                <?php
                        // カスタム投稿タイプ名を取得して表示
                        $post_type = get_post_type_object(get_post_type());
                        echo esc_html($post_type->label); 
                        ?>
            </h1>
            <picture class="c-below-mv__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv_sp.webp"
                    type="image/webp" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv.webp"
                    type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv.png" alt="ブログ"
                    width="1440" height="400">
            </picture>
        </div>
    </section>

    <!-- archive-info -->
    <section class="p-case-study l-section--below">
        <div class="p-case-study__inner l-inner--small">
            <div class="p-case-study__body">
                <article class="p-case-study__primary">
                    <div class="p-case-study__cards p-top-case-study__items">
                        <!-- 記事のループ処理開始 -->
                        <?php
      if (wp_is_mobile()) {
        $num = 6; // スマホの表示数(全件は-1)
      } else {
        $num = 9; // PCの表示数(全件は-1)
      }
      $args = [
        'post_type' => 'case-study',
        // 投稿タイプのスラッグ(通常投稿は'post')
        'posts_per_page' => $num, // 表示件数
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // ページネーション用
      ];
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
        while ($the_query->have_posts()):
          $the_query->the_post();
          ?>
                        <li class="p-top-case-study__item">
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
                                    <h3 class="p-top-case-study__card-title">
                                        <?php echo $case_title; ?>
                                    </h3>
                                    <div class="p-top-case-study__client">
                                        <?php echo $case_client; ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <!-- 記事のループ処理終了 -->
                    </div>
                    <div class="p-case-study__pages">
                        <?php get_template_part('template/pagination'); ?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 資料ダウンロード -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>