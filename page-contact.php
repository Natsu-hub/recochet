<?php 
/**
* Template Name: お問い合わせ
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--contact">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-white.svg"
                    alt="contact" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">以下のフォームに必要事項をご入力の上、ご登録ください。<br>
                LINEからのご相談も承っておりますのでお気軽にご連絡ください。
            </div>
        </div>
    </section>


    <!-- p-contact -->
    <section class="p-contact l-page--form">
        <div class="p-contact__inner l-inner">
            <div class="p-contact__box">
                <?php echo do_shortcode('[contact-form-7 id="765" title="お問い合わせ"]'); ?>
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