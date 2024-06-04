<?php 
/**
* Template Name: お問い合わせ（完了）
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--contact">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/contact-white.svg"
                    alt="contact" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">お問い合わせ<br class="u-mobile">ありがとうございました
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