<?php 
get_header(); 
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Blog</span>
          <span class="c-below-mv__main-title">ブログ</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv.png" alt="ブログ" width="1440" height="400">
        </picture>
      </div>
    </section>

<!-- archive-info -->
<section class="p-archive-blog l-section--below">
<div class="p-archive-blog__inner l-inner--small">

<!-- <label class="custom-checkbox">
    <input type="checkbox" id="categoryA" name="category" value="A">
    <span class="checkbox-label">カテゴリーA</span>
</label>
<br>
<label class="custom-checkbox">
    <input type="checkbox" id="categoryB" name="category" value="B">
    <span class="checkbox-label">カテゴリーB</span>
</label> -->

<div class="works__tabs">
    <?php
    $terms = get_terms(array(
        'taxonomy' => 'document_type',
        'hide_empty' => false,
    ));

    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            echo '<label class="custom-checkbox">';
            echo '<input type="checkbox" id="category' . $term->slug . '" name="category" value="' . $term->slug . '">';
            echo '<span class="checkbox-label">' . $term->name . '</span>';
            echo '</label><br>';
        }
    }
    ?>
</div>


<div class="works__tabs">
		<?php
        $terms = get_terms( array(
            'taxonomy' => 'document_type',
            'hide_empty' => false,
        ));

        if ( !empty($terms) && !is_wp_error($terms) ){
            foreach ( $terms as $term ) {
                echo '<a class="works__tab" href="'. get_term_link($term) .'">'. $term->name .'</a>';
            }
        }
    ?>
	</div>
  <div class="p-archive-blog__body">
    <article class="p-archive-blog__primary">
      <div class="p-archive-blog__cards c-entry-content">
      	<!-- 記事のループ処理開始 -->
			<?php
			  if( wp_is_mobile() ){
			    $num = 4; // スマホの表示数(全件は-1)
			  } else {
			    $num = 6; // PCの表示数(全件は-1)
			  }
			  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
			  $args = [
			    'post_type' => 'document', // カスタム投稿の投稿タイプスラッグ
			    'paged' => $paged, // ページネーションがある場合に必要
			    'posts_per_page' => $num, // 表示件数
          'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // ページネーション用
			  ];
			  $wp_query = new WP_Query($args);
			  if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
			?>
           <a href="<?php the_permalink(); ?>" class="card">
              <figure class="card__img-wrapper">
              <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-img.webp" alt="blog1">
                <?php } ?>
              </figure>
              <div class="card__body">
              <p class="card__text">
                  <?php the_title(); ?>
                  </p>
              <?php
                  $terms = get_the_terms(get_the_ID(), 'document_type');
                  if ($terms && !is_wp_error($terms)) {
                      // ジャンルが存在し、エラーがない場合のみ、<span> タグを表示
                      echo '<span class="card__category">' . esc_html($terms[0]->name) . '</span>';
                  }
                  // ジャンルがない場合は、何も表示しない
                  ?>
                  <p class="card__text">
                    <?php echo nl2br(get_field('document_explain')); ?>
                  </p>
                    <p class="card__text">
                  <?php echo (get_field('document_list')); ?>
                  </p>
              </div>
          </a>
          <?php endwhile; ?>
<?php else: ?>
  <p>まだ記事がありません。</p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
          <!-- 記事のループ処理終了 -->
          </div>
        <div class="p-archive-blog__pages">
        <?php get_template_part('template/pagination'); ?>
        </div>
  </article>
  </div>
  <div class="p-privacy-policy__btn c-btn-below l-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
            <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
            <picture class="c-btn-black__img c-btn-black__img--prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow.svg" alt="TOPへ戻る" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
</div>
</section>

  </main>
<?php get_footer(); ?>