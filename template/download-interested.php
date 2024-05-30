<?php
$document_explain = get_field('document_explain');
$document_list = get_field('document_list');
$download_link = get_field('download_link');
$pickup = get_field('pickup');
?>

<div class="p-download__interested-lead">こちらの資料はご興味ありませんか？
</div>
<div class="p-download__interested-items">
    <?php
    // 全投稿数を取得
    $total_posts = wp_count_posts()->publish;
    
    // ランダムに3つの記事を選択
    $random_posts = get_posts([
      'post_type' => 'download',
      'posts_per_page' => 3,
      'orderby' => 'rand',
    ]);
    
    // 選択されたランダムな記事を表示
    foreach ($random_posts as $post) :
      setup_postdata($post);
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
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/common/no-img.png" alt="">
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
                    ?>
                <div class="c-card__text">
                    <?php echo esc_html($document_explain); // ACFフィールドを表示 ?>
                </div>
            </div>
        </a>
    </article>
    <?php endforeach;
    wp_reset_postdata();
    ?>
</div>

<div class="p-download__interested-btn">
    <a class="c-btn" href="<?php echo DOWNLOAD_URL; ?>">資料一覧はこちら</a>
</div>