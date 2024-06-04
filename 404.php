<?php get_header(); ?>
<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--404">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/404-white.svg" alt="404"
                    width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">
                お探しのページは<br class="u-mobile">見つかりませんでした
            </h1>
            <div class="c-below-mv__message">ページが削除されたか、移動された可能性があります。<br>
                URLをご確認いただくか、トップページから再度お試しください。
            </div>
        </div>
    </section>

    <div class="p-404">
        <div class="p-404__inner l-inner">
            <p class="p-404__btn">
                <a href="<?php echo HOME_URL; ?>" class="c-btn">トップページに戻る</a>
            </p>
        </div>
    </div>

    <!-- p-common-download -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>