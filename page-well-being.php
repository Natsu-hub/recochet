<?php 
/**
* Template Name: SDGsの取り込み
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--well">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/well-being-white.svg"
                    alt="well being" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title">
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