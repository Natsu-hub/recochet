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
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well-being-white.svg"
                    alt="well being" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title10">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">リコシェが行っている社会貢献事業と<br>
                SDGsの取り組みをご紹介いたします。
            </div>
        </div>
    </section>

    <!-- p-well-being -->
    <div class="p-well-being">
        <div class="p-well-being__inner l-inner">
            <div class="p-well-being__lists-box">
                <ul class="p-well-being__lists">
                    <li class="p-well-being__list">
                        <a href="#well-being01">発展途上国の教育支援</a>
                    </li>
                    <li class="p-well-being__list">
                        <a href="#well-being02">食糧廃棄率の削減</a>
                    </li>
                    <li class="p-well-being__list">
                        <a href="#well-being03">アフリカのコーヒー農業の支援</a>
                    </li>
                </ul>
                <ul class="p-well-being__lists">
                    <li class="p-well-being__list">
                        <a href="#well-being04">被災地への支援</a>
                    </li>
                    <li class="p-well-being__list">
                        <a href="#well-being05">フードリボンに参加しています</a>
                    </li>
                    <li class="p-well-being__list">
                        <a href="#well-being06">SPA</a>
                    </li>
                </ul>
            </div>
            <div class="p-well-being__body">
                <ul class="p-well-being__items">
                    <li class="p-well-being__item" id="well-being01">
                        <picture class="p-well-being__item-img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.jpg"
                                alt="発展途上国の教育支援のイメージ画像" width="700" height="395" loading="lazy">
                        </picture>
                        <div class="p-well-being__item-content">
                            <h2 class="p-well-being__item-title">発展途上国の教育支援
                            </h2>
                            <p class="p-well-being__item-text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="p-well-being__item" id="well-being02">
                        <picture class="p-well-being__item-img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.jpg"
                                alt="食糧廃棄率の削減のイメージ画像" width="700" height="395" loading="lazy">
                        </picture>
                        <div class="p-well-being__item-content">
                            <h2 class="p-well-being__item-title">食糧廃棄率の削減
                            </h2>
                            <p class="p-well-being__item-text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="p-well-being__item" id="well-being03">
                        <picture class="p-well-being__item-img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.jpg"
                                alt="アフリカのコーヒー農業の支援のイメージ画像" width="700" height="395" loading="lazy">
                        </picture>
                        <div class="p-well-being__item-content">
                            <h2 class="p-well-being__item-title">アフリカのコーヒー農業の支援
                            </h2>
                            <p class="p-well-being__item-text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="p-well-being__item" id="well-being04">
                        <picture class="p-well-being__item-img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.jpg"
                                alt="被災地への支援のイメージ画像" width="700" height="395" loading="lazy">
                        </picture>
                        <div class="p-well-being__item-content">
                            <h2 class="p-well-being__item-title">被災地への支援
                            </h2>
                            <p class="p-well-being__item-text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="p-well-being__item" id="well-being05">
                        <picture class="p-well-being__item-img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.jpg"
                                alt="フードリボンのイメージ画像" width="700" height="395" loading="lazy">
                        </picture>
                        <div class="p-well-being__item-content">
                            <h2 class="p-well-being__item-title">フードリボンに参加しています
                            </h2>
                            <p class="p-well-being__item-text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="p-well-being__item" id="well-being06">
                        <picture class="p-well-being__item-img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/well_img01.jpg"
                                alt="SPAのイメージ画像" width="700" height="395" loading="lazy">
                        </picture>
                        <div class="p-well-being__item-content">
                            <h2 class="p-well-being__item-title">SPA
                            </h2>
                            <p class="p-well-being__item-text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- p-common-service -->
    <?php get_template_part('template/common-service'); ?>
    <!-- c-common-download -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>