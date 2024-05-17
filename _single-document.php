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
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below-old/blog-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below-old/blog-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below-old/blog-mv.png" alt="ブログ" width="1440" height="400">
        </picture>
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
					<time class="p-single-blog__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d.'); ?></time>
					<p class="p-single-blog__text">
						<?php the_title(); ?>
					</p>
					</div>
					<figure class="p-single-blog__img-wrapper">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
						} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/no-img.webp" alt="blog1">
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
	<!-- カテゴリー別にフォームを出し分ける場合 -->
    <?php
    $terms = get_the_terms($post->ID, 'download_type');
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            if ($term->slug == 'useful') {
                echo do_shortcode('[contact-form-7 id="281" title="お問い合わせ_useful"]');
                break;
            } elseif ($term->slug == 'service') {
                echo do_shortcode('[contact-form-7 id="734" title="お問い合わせ_service"]');
                break;
            }
        }
    }
    ?>
	<!-- ACFにフォームダウンロードのURLを入れる場合 -->
	<?php
$terms = get_the_terms($post->ID, 'download_type');
$download_link = get_post_meta($post->ID, 'download_link', true); // カスタムフィールドの値を取得
if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo do_shortcode('[contact-form-7 id="281" title="お問い合わせ" download_link="' . esc_url($download_link) . '"]');
        break;
    }
}
?>
<!-- カテゴリーで分ける必要がない場合 -->
<?php
$download_link = get_post_meta($post->ID, 'download_link', true); // カスタムフィールドからダウンロードリンクを取得
// ここに var_dump を記述して値を確認
var_dump($download_link);
echo do_shortcode('[contact-form-7 id="281" title="お問い合わせ_useful" download_link="' . esc_url($download_link) . '"]');
?>

<!-- 直接開く -->
<a href="<?php echo esc_url(get_field('download_link')); ?>" download>
	ダウンロード
</a>
<!-- 別タブで開いてから自分でダウンロード zipファイルはそのままダウンロードになる -->
<a href="<?php echo esc_url(get_field('download_link')); ?>" target="_blank" rel="noopener noreferrer">
	ファイルを開く
</a>

</div>
  <div class="p-single-blog__btns l-btn-below">
  		<div class="p-contact__btn c-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
            <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
            <picture class="c-btn-black__img c-btn-black__img--prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow.svg" alt="TOPへ戻る" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
  		<div class="p-contact__btn"><a class="c-btn-black" href="<?php echo $_SERVER['HTTP_REFERER'] ?? $works; ?>">
            <p class="c-btn-black__text">ブログ一覧へ</p>
            <picture class="c-btn-black__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow.svg" alt="ブログ一覧へ" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
  </div>
</div>
</section>

  </main>
<?php get_footer(); ?>