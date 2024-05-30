<?php 
/**
* Template Name: zoom面談のお申し込み（完了）
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--meeting">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/meeting-white.svg"
                    alt="meeting" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title10">お申し込み<br class="u-mobile">ありがとうございました
            </h1>
            <div class="c-below-mv__message">通常5営業日以内にこちらからご連絡差し上げます。<br>
                メールが届かない場合は、迷惑メールフォルダをご確認ください。
            </div>
        </div>
    </section>
    <div class="p-thanks-contact l-download-interested--contact">
        <div class="l-inner">
            <!-- download-interested.php -->
            <?php get_template_part('template/download-interested'); ?>
        </div>
    </div>

    <!-- common-download.php -->
    <?php get_template_part('template/common-download'); ?>
</main>
<?php get_footer(); ?>