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
            <div class="c-below-mv__sub-title c-below-mv__sub-title--download">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/download-white.svg"
                    alt="case study" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">リコシェのコンサルティングを受けた店舗、<br>
                企業さまの成果をご紹介いたします。
            </div>
        </div>
    </section>



    <div class="p-company-news js-fadeInSlow">
        <?php
      $args = [
        'post_type' => 'news', // カスタム投稿タイプ 'news'
        'posts_per_page' => 8,    // 表示件数
        'orderby' => 'date',      // 日付で並び替え
        'order' => 'DESC'         // 降順
      ];
      $news_query = new WP_Query($args);
      if ($news_query->have_posts()):
        while ($news_query->have_posts()):
          $news_query->the_post();
          ?>
        <a class="p-company-news__content" href="<?php the_permalink(); ?>">
            <div class="p-company-news__time">
                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <p class="p-company-news__content-title">
                <?php the_title(); ?>
            </p>
        </a>
        <?php endwhile; else: ?>
        <p>まだ記事がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <!-- 記事のループ処理終了 -->
    </div>


</main>
<?php get_footer(); ?>