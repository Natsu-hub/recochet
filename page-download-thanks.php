<?php 
/**
* Template Name: 資料申し込み（完了）
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
                    alt="download" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">お申し込みありがとうございました
            </h1>
            <div class="c-below-mv__message">弊社の資料に興味を持って頂きありがとうございます。<br>
                資料は下記のボタン、またはメールよりダウンロードください。
            </div>
        </div>
    </section>


    <!-- thanks -->
    <div class="p-thanks">
        <div class="p-thanks__inner l-inner">
            <div class="p-thanks__btn">
                <!-- ダウンロードリンク -->
                <?php 
if (isset($_SESSION['download_link']) && isset($_SESSION['download_name'])) {
  echo '<a href="' . $_SESSION['download_link'] . '" download="' . $_SESSION['download_name'] . '" target="_blank" rel="noopener noreferrer">ダウンロード</a>';
  unset($_SESSION['download_link']); // リンクを使用した後はセッションをクリア
  unset($_SESSION['download_name']); // ファイル名もクリア
}

?>
            </div>
            <div class="l-download-interested">
                <!-- download-interested.php -->
                <?php get_template_part('template/download-interested'); ?>
            </div>
        </div>
    </div>

    <!-- common-download.php -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>