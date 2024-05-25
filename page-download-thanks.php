<?php 
/**
* Template Name: 資料ダウンロード（完了）
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


    <!-- thanks -->
    <div class="p-thanks l-section">
        <div class="p-thanks__inner l-inner--small">
            <div class="p-thanks__lead">
                <p>お問い合わせありがとうございました。<br>
                    お問い合わせいただいた内容につきましては、1週間以内に担当よりご連絡いたします。</p>
                <p>※お名前が実名でない場合（匿名や仮名など）は、ご返信致しかねます。あらかじめご了承ください。<br>
                    ※お問い合わせメールを送信後１週間経過しても返信がこない場合については、セキュリティの関係で迷惑メールとされてしまっている可能性や、お問い合わせメールのアドレス登録したアドレスに間違いがある可能性があるため、大変お手数ですが直接電話でご連絡いただきますようお願い申し上げます。
                </p>
            </div>
            <!-- ダウンロードリンク -->
            <?php 
if (isset($_SESSION['download_link']) && isset($_SESSION['download_name'])) {
  echo '<a href="' . $_SESSION['download_link'] . '" download="' . $_SESSION['download_name'] . '">ダウンロード</a>';
  unset($_SESSION['download_link']); // リンクを使用した後はセッションをクリア
  unset($_SESSION['download_name']); // ファイル名もクリア
}

?>
            <div class="p-thanks__btn c-btn-below l-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
                    <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
                    <picture class="c-btn-black__img c-btn-black__img--prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow.svg"
                            alt="TOPへ戻る" width="202" height="10" loading="lazy">
                    </picture>
                </a>
            </div>

            <!-- download-interested.php -->
            <?php get_template_part('template/download-interested'); ?>


        </div>
    </div>
    <!-- p-news-related -->
    <div class="p-news-related">
        <div class="p-news-related__inner l-inner">
            <div class="p-news-related__head js-fadeIn">他にこんな記事が読まれています</div>
            <?php
  $terms = get_the_terms($post->ID, 'download_type');
  foreach($terms as $term) {
    $term_slug = $term->slug;
  }
  $args = array(
    'post__not_in' => array($post->ID),
    'post_type' => 'download',
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'tax_query' => array(
      array(
        'taxonomy' => 'download_type',
        'field' => 'slug',
        'terms' => $term_slug
      )
    )
  );
  $the_query = new WP_Query($args);
?>
            <?php if($the_query->have_posts()): ?>
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>

            <!-- 繰り返し処理する内容 -->

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>