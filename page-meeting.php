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

    <!-- p-contact -->
    <section class="p-contact l-section--below" id="contact">
        <div class="p-contact__inner l-inner--small">
            <div class="p-contact__form">
                <?php echo do_shortcode('[contact-form-7 id="734" title="zoom面談のお申し込み"]'); ?>
                <div class="p-contact__grecaptcha">
                    このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy" target="_blank"
                        rel="noopener noreferrer">プライバシーポリシー</a>と<a href="https://policies.google.com/terms"
                        target="_blank" rel="noopener noreferrer">利用規約</a>が適用されます。
                </div>
            </div>
            <div class="p-contact__btn c-btn-below l-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
                    <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
                    <picture class="c-btn-black__img c-btn-black__img--prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common-old/black_arrow.svg"
                            alt="TOPへ戻る" width="202" height="10" loading="lazy">
                    </picture>
                </a>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>