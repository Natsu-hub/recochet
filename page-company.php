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
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">採用情報</span>
          <span class="c-below-mv__main-title">Recruit</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below-old/recruit-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below-old/recruit-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below-old/recruit-mv.png" alt="採用情報" width="1440" height="400">
        </picture>
      </div>
    </section>

<!-- p-recruit -->
<section class="p-recruit">
  <div class="p-recruit__inner l-inner--small">
    <div class="p-recruit__box js-fade-in">
      <h2 class="p-recruit__head">サポルトでは一緒に働く仲間を<br class="u-mobile">募集しています</h2>
      <div class="p-recruit__text">現在当法人運営の事業所にて、一緒に働いていただける方を募集しています。<br>
ご興味のある方は一度下記連絡先までお問い合わせください。</div>
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

<!-- p-below-contact -->
<?php get_template_part('template/below-contact'); ?>

  </main>
<?php get_footer(); ?>

