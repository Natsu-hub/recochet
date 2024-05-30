<?php 
/**
* Template Name: zoom面談のお申し込み
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
            <h1 class="c-below-mv__title l-title10">
                60分無料<br class="u-mobile">zoom面談のお申し込み
            </h1>
            <div class="c-below-mv__message">無料zoom面談をご希望の方は、こちらから必要事項をご入力の上、お申し込みください。<br>
                後日弊社より日程調整のご連絡をいたします。
            </div>
        </div>
    </section>


    <!-- p-contact -->
    <section class="p-contact l-page--form">
        <div class="p-contact__inner l-inner">
            <div class="p-contact__box">
                <?php echo do_shortcode('[contact-form-7 id="734" title="zoom面談のお申し込み"]'); ?>
                <div class="p-form__grecaptcha">
                    このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy" target="_blank"
                        rel="noopener noreferrer">プライバシーポリシー</a>と<a href="https://policies.google.com/terms"
                        target="_blank" rel="noopener noreferrer">利用規約</a>が適用されます。
                </div>
            </div>
        </div>
    </section>

    <!-- 資料ダウンロード -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>