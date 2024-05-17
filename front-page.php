<?php 
get_header(); ?>

<main class="l-main">
    <!-- p-top-mv -->
    <section class="p-top-mv js-mv">
        <div class="p-top-mv__img">
            <div class="p-top-mv__inner">

            </div>
        </div>
    </section>


    <!-- p-top-blog -->
    <div class="p-top-blog l-section">
        <div class="p-top-blog__inner l-inner--small">
            <div class="p-top-blog__box">
                <div class="p-top-blog__left">
                    <h2 class="p-top-blog__head c-common-title c-common-title--black js-text-effect js-splitText">Blog
                    </h2>
                    <div class="p-top-blog__btn js-fade-in"><a class="c-btn-black" href="<?php echo BLOG_URL; ?>">
                            <p class="c-btn-black__text">記事一覧へ</p>
                            <picture class="c-btn-black__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow02.svg"
                                    alt="記事一覧へ" width="202" height="10" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="p-top-blog__right js-fadeInSlow">
                    <?php
          if (wp_is_mobile()) {
            $num = 6; // スマホの表示数(全件は-1)
          } else {
            $num = 6; // PCの表示数(全件は-1)
          }
          $args = [
            'post_type' => 'case-study',
            // 投稿タイプのスラッグ(通常投稿は'post')
            'posts_per_page' => $num, // 表示件数
          ];
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):
            while ($the_query->have_posts()):
              $the_query->the_post();
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
                    <?php endwhile; else: ?>
                    <p>まだ記事がありません</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- 記事のループ処理終了 -->
                </div>

            </div>
        </div>
    </div>



</main>
<?php get_footer(); ?>