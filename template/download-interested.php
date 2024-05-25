<div class="p-top-blog__right js-fadeInSlow">
    <?php
    // 全投稿数を取得
    $total_posts = wp_count_posts()->publish;
    
    // ランダムに3つの記事を選択
    $random_posts = get_posts([
      'post_type' => 'download',
      'posts_per_page' => 2,
      'orderby' => 'rand',
    ]);
    
    // 選択されたランダムな記事を表示
    foreach ($random_posts as $post) :
      setup_postdata($post);
  ?>
    <a class="p-top-blog__content" href="<?php the_permalink(); ?>">
        <div class="p-top-blog__time">
            <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.'); ?></time>
            <time datetime="<?php the_time('c'); ?>"><?php the_time('n.j'); ?></time>
        </div>
        <p class="p-top-blog__content-title">
            <?php the_title(); ?>
        </p>
    </a>
    <?php endforeach;
    wp_reset_postdata();
  ?>
</div>