<?php

    // Contact Form7の送信ボタンをクリックした後の遷移先設定
	add_action( 'wp_footer', 'add_origin_thanks_page' );
	function add_origin_thanks_page() {
	$thanks = home_url('/contact-thanks/');
	$downloadThanks = home_url('/download-thanks/');
	$meetingThanks = home_url('/meeting-thanks/');
	echo <<<EOC
    <script>
    var thanksPage = {
        765: '{$thanks}',
        281: '{$downloadThanks}',
        734: '{$meetingThanks}',
    };
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = thanksPage[event.detail.contactFormId];
    }, false );
    </script>
EOC;
	}

/**
 * Contact Form 7 でカスタム属性を追加
 * @param array $out
 * @param array $pairs
 * @param array $atts
 * @return array
 */
add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);
function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
	$my_attr = 'download_link';
	if (isset($atts[$my_attr])) {
		$out[$my_attr] = $atts[$my_attr];
	}
	return $out;
}

// サンクスページから資料をダウンロード
add_action('init', 'start_session', 1);
function start_session() {
    if (!session_id()) {
        session_start();
    }
}

add_action('wpcf7_before_send_mail', 'save_download_info_to_session');
function save_download_info_to_session($contact_form) {
    $submission = WPCF7_Submission::get_instance();
    if ($submission) {
        $posted_data = $submission->get_posted_data();
        $download_link = esc_url($posted_data['download_link']);
        $file_path = parse_url($download_link, PHP_URL_PATH); // URLからパスを抽出
        $file_name = basename($file_path); // パスからファイル名を抽出

        $_SESSION['download_link'] = $download_link;
        $_SESSION['download_name'] = $file_name; // ファイル名をセッションに保存
    }
}

