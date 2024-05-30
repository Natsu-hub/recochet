<?php 
/**
* Template Name: 飲食店ネット通販アカデミー
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--service">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service-mv-white.svg"
                    alt="service" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">リコシェのコンサルティングを受けた店舗、<br>
                企業さまの成果をご紹介いたします。
            </div>
        </div>
    </section>


    <!-- p-below-download -->
    <?php get_template_part('template/below-download'); ?>

</main>
<?php get_footer(); ?>