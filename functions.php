<?php

function my_setup()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support('title-tag'); // タイトルタグ自動生成
	add_theme_support(
		'html5',
		array( // HTML5でマークアップ
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

// const.php ファイルを読み込む
require_once(get_template_directory() . '/inc/const.php');
// contact-form.php ファイルを読み込む
require_once(get_template_directory() . '/inc/contact-form.php');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
	// GSAPの本体
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);

	// ScrollTriggerプラグイン
	wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);

	// ScrollToPluginプラグイン
	wp_enqueue_script('gsap-scrollto', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js', array('gsap'), null, true);

	// Google Fonts(2つ以上ある場合は1つずつ書く)
	// wp_enqueue_style('NotoSerifJp', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap');
	wp_enqueue_style('NotoSansJp', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
	wp_enqueue_style('Prata', '//fonts.googleapis.com/css2?family=Prata&display=swap');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null);

    // テーマのJavaScript
    wp_enqueue_script('theme-js', get_theme_file_uri('/assets/js/script.js'), array(), filemtime(get_theme_file_path('/assets/js/script.js')), true);

    // テーマのCSS
    wp_enqueue_style('theme-css', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));
}
add_action('wp_enqueue_scripts', 'my_script_init');


// カスタム投稿タイプのパーマリンクを変更
// register_taxonomy(
// 	'download_type',
// 	'download',
// 	array(
// 		'hierarchical' => true,
// 		'label' => 'カテゴリー',
// 		'show_ui' => true,
// 		'query_var' => true,
// 		'public' => true,
// 		'rewrite' => array('slug'=>'download'),//download_typeを変更
// 	)
// );

// カスタム投稿のパーマリンク
add_filter('post_type_link', 'custom_post_link', 1, 2);
function custom_post_link($link, $post) {
    $post_types = array('download', 'case-study', 'news');
    if (in_array($post->post_type, $post_types)) {
        // カスタム投稿名が "download"、"case-study"、"news" の投稿のパーマリンクを "/{post_type}/{投稿ID}/" の形に書き換え
        return home_url('/' . $post->post_type . '/' . $post->ID);
    } else {
        return $link;
    }
}

// 書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'custom_post_link_rewrite');
function custom_post_link_rewrite($rules) {
    $rewrite_rules = array();
    $post_types = array('download', 'case-study', 'news');
    foreach ($post_types as $post_type) {
        $rewrite_rules[$post_type . '/([0-9]+)/?$'] = 'index.php?post_type=' . $post_type . '&p=$matches[1]';
    }
    return $rewrite_rules + $rules;
}



//管理画面の投稿を非表示
function Hide_Post_Type() {
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'Hide_Post_Type');


  //1ページに表示する最大投稿数
  function my_pre_get_posts( $query ) {
	if ( is_admin() || !$query->is_main_query() ) {
	  return;
	}
	if ( $query->is_search() ) {
	  $query->set( 'posts_per_page', 9 );
	}
  }
  add_action('pre_get_posts','my_pre_get_posts');


	// マイグレーションでnode_modulesなどを除外
$my_theme = wp_get_theme();
$_theme_name = $my_theme->stylesheet;

add_filter(
	'ai1wm_exclude_themes_from_export',
	function ($exclude_filters) {
		global $_theme_name;
		$exclude_filters = array(
			"{$_theme_name}/src/node_modules",
		);
		return $exclude_filters;
	}
);