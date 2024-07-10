<?php
/**
 * ikkosha_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ikkosha_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ikkosha_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ikkosha_theme, use a find and replace
		* to change 'ikkosha_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ikkosha_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ikkosha_theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ikkosha_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ikkosha_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ikkosha_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ikkosha_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ikkosha_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ikkosha_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ikkosha_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ikkosha_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ikkosha_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ikkosha_theme_scripts() {
	wp_enqueue_style( 'ikkosha_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ikkosha_theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ikkosha_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ikkosha_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//--------------------------------------------------------------
//	wp-head 削除項目
//--------------------------------------------------------------
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rel_canonical');
// 絵文字関係削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
// Embed関係削除
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
// headへの//s.w.orgのDNDプリフェッチ挿入停止
add_filter( 'emoji_svg_url', '__return_false' );


//--------------------------------------------------------------
//	標準のアドミンバーを非表示
//--------------------------------------------------------------
function remove_admin_bar_menus( $wp_admin_bar ) {
  $wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressロゴ.
  $wp_admin_bar->remove_menu( 'about' ); // WordPressロゴ / WordPressについて.
  $wp_admin_bar->remove_menu( 'wporg' ); // WordPressロゴ / WordPress.org.
  $wp_admin_bar->remove_menu( 'documentation' ); // WordPressロゴ / ドキュメンテーション.
  $wp_admin_bar->remove_menu( 'support-forums' ); // WordPressロゴ / サポート.
  $wp_admin_bar->remove_menu( 'feedback' ); // WordPressロゴ / フィードバック.

  $wp_admin_bar->remove_menu( 'comments' ); // コメント.

  $wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿.
  $wp_admin_bar->remove_menu( 'new-post' ); // 新規投稿 / 投稿.
  $wp_admin_bar->remove_menu( 'new-media' ); // 新規投稿 / メディア.
  $wp_admin_bar->remove_menu( 'new-page' ); // 新規投稿 / 固定.
  $wp_admin_bar->remove_menu( 'new-user' ); // 新規投稿 / ユーザー.
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );


//--------------------------------------------------------------
//	JSファイルを読み込む
//--------------------------------------------------------------
function add_script() {
	// WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	
	// jQuery
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', false );

	// Slick
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', false );
	
	// 高さを合わせる
	wp_enqueue_script( 'matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array('jquery'), '0.7.2', true );
	
	// 共通JS
	wp_enqueue_script( 'site-main', get_theme_file_uri( '/assets/js/main.js' ), array('jquery'), filemtime( get_theme_file_path( '/assets/js/main.js' ) ), true );
	
	if( is_page('contact') || is_singular('download') ) {
		wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), false, true );
	}
	// object-fit IE対策 CDN
	// wp_enqueue_script( 'ofi', 'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js', array(), '3.2.3', false );
	// picture要素 IE対応
	// wp_enqueue_script( 'picturefill', 'https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.min.js', array(), '3.0.3', false );

	// IEのみ適応
	// wp_script_add_data( 'ofi', 'conditional', 'IE' );
	// wp_script_add_data( 'picturefill', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts', 'add_script');


//--------------------------------------------------------------
//	CSSファイルを読み込む
//--------------------------------------------------------------
function add_style() {
	// 共通CSS
	wp_enqueue_style( 'ress', get_theme_file_uri( '/assets/css/ress.min.css' ), array(), NULL );
	
	// スタイルCSS
	wp_enqueue_style( 'styles', get_theme_file_uri( '/assets/css/style.css' ), array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );

	// 調整用CSS
	wp_enqueue_style( 'adjust', get_theme_file_uri( '/assets/css/adjust.css' ), array(), filemtime( get_template_directory() . '/assets/css/adjust.css' ) );
	
	// swiper
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0' );
}
add_action('wp_enqueue_scripts', 'add_style');


// エディタ用CSS
// add_editor_style('editor-style.css'); //エディタ専用

// ブロックエディタ用CSS
// add_action( 'after_setup_theme', function(){
// 	// ブロックエディタ用スタイル機能をテーマに追加
// 	add_theme_support( 'editor-styles' );
// 	// ブロックエディタ用CSSの読み込み
// 	add_editor_style( '/assets/css/editor-style.css' );
// } );

// add_action('admin_enqueue_scripts', function ($hook_suffix) {
// 	// 新規・編集投稿ページのみ読み込み
// 	if ('post.php' === $hook_suffix || 'post-new.php' === $hook_suffix) {
// 		$editor_style_url = get_theme_file_uri( '/assets/css/editor-style.css' );
// 		wp_enqueue_style( 'block-editor-style', $editor_style_url );
// 	}
// });


//ショートコード（テーマURL）
function shortcode_theme_url() {
	return get_template_directory_uri();
}
add_shortcode('theme_url', 'shortcode_theme_url');


//ショートコード（サイトURL）
function shortcode_site_url() {
	return get_bloginfo('url');
}
add_shortcode('site_url', 'shortcode_site_url');


//ショートコード（LINE友達追加）
// function shortcode_line_url() {
// 	return 'https://liff.line.me/1645278921-kWRPP32q/?accountId=462bjsde';
// }
// add_shortcode('line_url', 'shortcode_line_url');


//--------------------------------------------------------------
//	ショートコード SRCSET対応
//--------------------------------------------------------------
function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['img']['srcset'] = true;
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );


//　ショートコード テンプレートパーツ 
//　[add_part temp='template-parts/[呼び出したいファイル名]' key='']
function shortcode_add_part($attr) {
	ob_start();
	get_template_part($attr['temp'], null, $attr['key']);
	return ob_get_clean();
}
add_shortcode('add_part', 'shortcode_add_part');


//--------------------------------------------------------------
//	リダイレクト
//--------------------------------------------------------------
add_action( 'template_redirect', 'wp_redirect_page' );
function wp_redirect_page() {
  // if( is_404() ){
  //   wp_safe_redirect( home_url( '/' ), 301 );
  //   exit();
  // }
  // if( is_page('services') ){
  //   wp_safe_redirect( home_url( '/services/members' ), 301 );
  //   exit();
  // }
  // if( is_page('reason') ){
  //   wp_safe_redirect( home_url( '/reason/slide-cutting-percentage' ), 301 );
  //   exit();
  // }
}


//--------------------------------------------------------------
//	画像サイズ追加
//--------------------------------------------------------------
// add_image_size('productsImage', 900, 400, true);
// add_image_size('productsImage_x2', 1800, 800, true);
// add_image_size('voiceImage', 400, 442, true);
// add_image_size('memberThumb', 476, 476, false);


//	アイキャッチ画像に自動付与されるsrcset属性を削除
add_filter('wp_calculate_image_srcset_meta', '__return_null');

// 2560pxを超える画像でも縮小しない
add_filter( 'big_image_size_threshold', '__return_false' );


//--------------------------------------------------------------
//	数字ページャー
//--------------------------------------------------------------
function the_paginate(){
	global $wp_query, $paged;

	$p_base = get_pagenum_link(1);
	$p_format = 'page/%#%';

	//?の有無確認、有る場合は場所を特定
	if($word = strpos($p_base, '?')){
	//?がある場合（検索結果）
		$p_base = get_option('home').(substr(get_option('home'), -1 ,1) === '/' ? '' : '/')
			.'%_%'.substr($p_base, $word);
	} else{
	//?が無い場合（カテゴリ、タグ等）
		$p_base .= (substr($p_base, -1 ,1) === '/' ? '' : '/') .'%_%';
	}

 	echo paginate_links(array(
		'base' => $p_base,
		'format' => $p_format,
		'total' => $wp_query->max_num_pages,
		'mid_size' => 1,
		'current' => ($paged ? $paged : 1),
		'prev_text' => 'Prev',
		'next_text' => 'Next',
	)); 
}


//--------------------------------------------------------------
//	固定ページにビジュアルエディタを表示しない
//--------------------------------------------------------------
function disable_visual_editor_in_page(){
  global $typenow;
	$post_id = !empty($_GET['post']);
  if( $typenow == 'page' ){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
		//特定の固定ページのエディタを非表示
		if ( in_array( $post_id, array('6','85'), true )  ){
			$hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
      echo $hide_postdiv_css;
		}
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );


//--------------------------------------------------------------
//	ログイン画面 カスタマイズ
//--------------------------------------------------------------
function my_login_style() { ?>
 <style type="text/css">
	body.login {
		background: #f9f9f9;
	}
	body.login h1 {
		margin-bottom: 30px;
	}
	body.login h1 a {
		width: 216px;
    height: 46px;
		margin: 0 auto;
		background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/logo.svg);
		background-size: contain;
	}
	body.login form {
		background-color: #FFF;
		/* border: 2px solid #65AADD; */
		border-radius: 0;
	}
	body.login label {
		margin-bottom: 6px;
		font-size: 12px;
		color: #292828;
	}
	body.login form .input,
	body.login form input[type=checkbox],
	body.login form input[type=checkbox]:focus,
	body.login input[type=text],
	body.login input[type=text]:focus {
		background: #f1f1f1;
		border-color: #EEE
	}
	body.login .button.wp-hide-pw {
		color: #111;
	}
	body.login .button-primary {
		background: #f0353c;
		border: none;
		box-shadow: none;
		text-shadow: none;
		color: #FFF;
		-webkit-transition: opacity 0.3s ease-out;
    -o-transition: opacity 0.3s ease-out;
    transition: opacity 0.3s ease-out;
	}
	body.login .button-primary:hover,
	body.login .button-primary:active,
	body.login .button-primary:focus {
		background: #f0353c;
		opacity: .6;
		box-shadow: none;
		color: #FFF;
	}
	body.login #backtoblog a,
	body.login #nav a {
		font-size: 12px;
		color: #999;
		-webkit-transition: color 0.5s ease-out;
    -o-transition: color 0.5s ease-out;
    transition: color 0.5s ease-out;
	}
	body.login #backtoblog a:hover,
	body.login #nav a:hover {
		color: #999;
	}
	body.login #login_error,
	body.login .message,
	body.login .success {
		border-left-color: rgba(255, 255, 255, 0.45);
	}
	body.login form .forgetmenot {
		margin-top: 8px;
	}
 </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_style' );
//ロゴのリンク先を指定
function my_login_logo_url() {
 return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
// ロゴのtitleテキストを指定
function my_login_logo_tit() {
 return get_option( 'blogname' );
}
add_filter( 'login_headertext', 'my_login_logo_tit' );


//--------------------------------------------------------------
//	自動整形を無効にするカスタムフィールドを作成
//--------------------------------------------------------------

//	アクションフックに登録：管理画面にカスタムボックスをエントリー
add_action(
	'add_meta_boxes', 
	function(){
		$screens = array('page');
		foreach($screens as $scrn){
			add_meta_box(
				'peralab-custombox-dont-autoformatting', 	//編集画面セクションのHTML ID
				'自動整形を無効化', 	//メタボックスのタイトル
				'PeralabDontAutoFormatting_CustomBoxCreate', 	//入力フォーム作成で呼び出されるコールバック
				$scrn, 								//表示するページ
				'side', 							//メタボックス表示箇所(advanced, normal, side)
				'default', 							//表示優先度(high, core, default, low)
				null);								//コールバック時に渡す引数があれば指定
		}
	}
);

//	メタボックスを作成
function PeralabDontAutoFormatting_CustomBoxCreate($post){	//$postには現在の投稿記事データが入っています
	//入力済みのデータを取得
	$data_str = get_post_meta($post->ID, "dont_autoformat_radio", true);
	if($data_str != 'dont'){
		$data_str = 'format';
	}
	//nonce作成
	wp_nonce_field('action-noncekey-dontautoformat', 'noncename-dontautoformat');
	?>
	<div>
	<!-- 出力する文字列 -->
	<p><label><input name="name-metabox_autoformat_radio" type="radio" value="format" <?php echo (($data_str == 'format') ? 'checked' : '') ?>>整形する（初期値）</label></p>
	<p><label><input name="name-metabox_autoformat_radio" type="radio" value="dont" <?php echo (($data_str == 'dont') ? 'checked' : '') ?>>整形しない</label></p>
	<p><label>ビジュアルエディタの整形無効の切り替えは[下書き保存] [更新]などで記事の保存後から反映されます。</label></p>
	</div>
	<?php
}

//--------------------------------------------------------------
//	カスタムボックス内のフィールド値更新処理
//--------------------------------------------------------------
add_action(
	'save_post', 
	function($post_id){
		//nonceを確認
		if(isset($_POST['noncename-dontautoformat']) == false 
				|| wp_verify_nonce($_POST['noncename-dontautoformat'], 'action-noncekey-dontautoformat') == false) {
			return;	//nonceを認証できなかった
		}
		
		//自動保存ルーチンかどうかチェック。そうだった場合はフォームを送信しない(何もしない)
		if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
			return;
		}
		
		//パーミッション確認
		if(isset($_POST['post_type'])){
			if($_POST['post_type'] == 'page'){
				if(!current_user_can('edit_page', $post_id)){
					return;	//固定ページを編集する権限がない
				}
			}
			else{
				if(!current_user_can('edit_post', $post_id)){
					return;	//記事を編集する権限がない
				}
			}
		}
		
		//== 確認ここまで ==
		//予約投稿時は、データが有るにも関わらず$_POSTからデータ取得ができないので、
		//issetでデータ確認が出来るときのみ値の更新処理を行います。
		if(isset($_POST['name-metabox_autoformat_radio'])){
			update_post_meta($post_id, "dont_autoformat_radio", $_POST['name-metabox_autoformat_radio']);
		}
	}
);


//--------------------------------------------------------------
//	自動整形無効の実処理
//--------------------------------------------------------------
//記事表示時の整形無効
add_action(
	'wp_head',
	function(){
		if(get_post_meta(get_the_ID(), 'dont_autoformat_radio', true) == 'dont'){
			remove_filter('the_content', 'wpautop');
			remove_filter('the_excerpt', 'wpautop');
		}
	}
);

//ビジュアルエディタ(TinyMCE)の整形無効
add_filter(
	'tiny_mce_before_init',
	function($init_array){
		if(get_post_meta(get_the_ID(), 'dont_autoformat_radio', true) == 'dont'){
			global $allowedposttags;
			$init_array['valid_elements']          = '*[*]';
			$init_array['extended_valid_elements'] = '*[*]';
			$init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
			$init_array['indent']                  = true;
			$init_array['wpautop']                 = false;
			$init_array['force_p_newlines']        = false;
		}
		return $init_array;
	}
);

function custom_editor_settings( $initArray ){
	$initArray['body_id'] = 'primary';
	$initArray['body_class'] = 'post';
	// styleや、divの中のdiv,span、spanの中のspanを消させない
	$initArray['valid_children'] = '+body[style],+div[div|span|figcaption],+span[span]';
	// 空タグや、属性なしのタグとか消そうとしたりするのを停止。余計なことすんな！
	$initArray['verify_html'] = false;
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );


//--------------------------------------------------------------
//	the_archive_title 余計な文字を削除
//--------------------------------------------------------------
add_filter( 'get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('',false);
  } elseif (is_tag()) {
		$title = single_tag_title('',false);
	} elseif (is_tax()) {
	  $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	  $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	  $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	  $title = '「404」ページが見つかりません';
	} else {

	}
  return $title;
});


//--------------------------------------------------------------
//	検索対象を投稿のみに指定
//--------------------------------------------------------------
function my_pre_get_posts($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', array('products') );
  }
}
add_action( 'pre_get_posts','my_pre_get_posts' );


//--------------------------------------------------------------
//	検索対象にタグ・カテゴリーを含める
//--------------------------------------------------------------
// function custom_search($search, $wp_query) {
// 	global $wpdb;
	
// 	if (!$wp_query->is_search)
// 	return $search;

// 	if (!isset($wp_query->query_vars))
// 	return $search;

// 	$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
// 	if ( count($search_words) > 0 ) {
// 		$search = '';
// 		foreach ( $search_words as $word ) {
// 			if ( !empty($word) ) {
// 				$search_word = $wpdb->escape("%{$word}%");
// 				$search .= " AND (
// 					{$wpdb->posts}.post_title LIKE '{$search_word}'
// 					OR {$wpdb->posts}.post_content LIKE '{$search_word}'
// 					OR {$wpdb->posts}.ID IN (
// 						SELECT distinct r.object_id
// 						FROM {$wpdb->term_relationships} AS r
// 						INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
// 						INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
// 						WHERE t.name LIKE '{$search_word}'
// 					OR t.slug LIKE '{$search_word}'
// 					OR tt.description LIKE '{$search_word}'
// 					)
// 				) ";
// 			}
// 		}
// 	}
// 	return $search;
// }
// add_filter('posts_search','custom_search', 10, 2);


//--------------------------------------------------------------
//	固定ページの子ページか判定
//--------------------------------------------------------------
function is_subpage() {
	global $post;

	if (is_page() && $post->post_parent) {
		return true;
	} else {
		return false;
	};
};


//--------------------------------------------------------------
// 投稿だけブロックエディタを使用
//--------------------------------------------------------------
add_filter( 'use_block_editor_for_post_type', 'enable_block_editor', 100, 10 );
function enable_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'post' ) return true;
  return $use_block_editor;
}


//--------------------------------------------------------------
// 固定ページテンプレートを階層構造と合わせる
//--------------------------------------------------------------
// add_filter('page_template_hierarchy', 'my_page_templates');
// function my_page_templates($templates) {
// 	global $wp_query;

// 	$template = get_page_template_slug();
// 	$pagename = $wp_query->query['pagename'];

// 	if ($pagename && ! $template) {
// 		$pagename = str_replace('/', '__', $pagename);
// 		$decoded = urldecode($pagename);
// 		if ($decoded == $pagename) {
// 			array_unshift($templates, "page-{$pagename}.php");
// 		}
// 	}
// 	return $templates;
// }


//--------------------------------------------------------------
// 子カテゴリーにチェックを入れたら自動で親カテゴリーにもチェックを入れる
//--------------------------------------------------------------
function category_parent_check_script() {
?>
<script>
jQuery(function($) {
  $('#taxonomy-work_type .children input').change(function() {
    function parentNodes(checked, nodes) {
      parents = nodes.parent().parent().parent().prev().children('input');
      if (parents.length != 0) {
        parents[0].checked = checked;
        parentNodes(checked, parents);
      }
    }
    var checked = $(this).is(':checked');
    $(this).parent().parent().siblings().children('label').children('input').each(function() {
      checked = checked || $(this).is(':checked');
    })
      parentNodes(checked, $(this));
  });
});
</script>
<?php
}
add_action('admin_head-post-new.php', 'category_parent_check_script');
add_action('admin_head-post.php', 'category_parent_check_script');


//--------------------------------------------------------------
// Ajax用スクリプトの読み込み
//--------------------------------------------------------------
// function ajax_load_scripts_by_add_inline_script(){
// 	$ajax_load_object = 'const ajax_load_object = ' . json_encode( array( 
// 		'ajax_url' => admin_url( 'admin-ajax.php' ),
// 		'ajax_nonce' => wp_create_nonce('wp_ajax_my_action'),
// 	));
// 	wp_enqueue_script( 'ajax_search_post', get_theme_file_uri( '/assets/js/search.js' ), array('jquery'), '1.0.0' );
// 	wp_add_inline_script( 'ajax_search_post', $ajax_load_object, 'before' );
// }
// add_action( 'wp_enqueue_scripts', 'ajax_load_scripts_by_add_inline_script' );


// function ajax_get_posts(){
// 	// jsから受け渡しするデータ
// 	$select_01 = $_POST['select_01'];

// 	$returnObj = array();

// 	// get_posts オプション
// 	$args = array(
// 		'post_type' => 'product',
// 		'numberposts' => -1,
// 		'tax_query' => array(
// 			'relation'  => 'OR',
// 			array(
// 				'taxonomy' => 'themes',
// 				'field' => 'slug',
// 				'terms' => $select_01,
// 				'operator' => 'IN',
// 			),
// 			array(
// 				'taxonomy' => 'location',
// 				'field' => 'slug',
// 				'terms' => $select_01,
// 				'operator' => 'IN',
// 			),
// 			array(
// 				'taxonomy' => 'condition',
// 				'field' => 'slug',
// 				'terms' => $select_01,
// 				'operator' => 'IN',
// 			),
// 		)
// 	);
// 	$posts = get_posts( $args );
// 	foreach( $posts as $key => $post ) {
// 		$returnObj[$key] = array(
// 			// 出力するデータを格納
// 			'post_title' => $post->post_title,
// 			'permalink' => get_permalink( $post->ID ),
// 		);
// 	}
// 	// json形式に出力
// 	echo json_encode( $returnObj );
// 	die();
// }
// add_action( 'wp_ajax_ajax_get_posts', 'ajax_get_posts' );
// add_action( 'wp_ajax_nopriv_ajax_get_posts', 'ajax_get_posts' );


// function get_nav_menu_items_by_location($location, $args = []){
//   // すべての場所のnavを取得
//   $locations = get_nav_menu_locations();
//   // NavのオブジェクトIDを取得
//   $object = wp_get_nav_menu_object($locations[$location]);
//   // メニュー名より、メニューのアイテムを取得
//   $menu_items = wp_get_nav_menu_items($object->name, $args);
	
//   return $menu_items;
// }


//---------------------------------------------
//	MW WP FORM 住所自動入力
//---------------------------------------------
function add_yubinbango_class(){
  echo <<<EOC
<script>
  jQuery('.mw_wp_form form').addClass('h-adr');
</script>
EOC;
}
add_action( 'wp_print_footer_scripts', 'add_yubinbango_class' );


//---------------------------------------------
//	authorページリダイレクト
//---------------------------------------------
function author_query_redirect() {
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']) || preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(home_url());
    exit;
  }
}
add_filter('init', 'author_query_redirect');


//---------------------------------------------
//	送信完了後にページ遷移の処理
//---------------------------------------------
function my_mwform_after_send($Data) {
	$form_key = $Data->get_form_key();
	if($form_key === 'mw-wp-form-65') {
		$postID = get_the_ID();
		$compleatURL = '/download-complete?pid='. $postID;
		wp_redirect($compleatURL);
		exit;
	}
}
add_action('mwform_after_send_mw-wp-form-65', 'my_mwform_after_send');

function en_my_mwform_after_send($Data) {
    $form_key = $Data->get_form_key();
    if($form_key === 'mw-wp-form-1311') {
        $postID = get_the_ID();
        $compleatURL = '/download-complete?pid='. $postID;
        wp_redirect($compleatURL);
        exit;
    }
}
add_action('mwform_after_send_mw-wp-form-1311', 'en_my_mwform_after_send');


//---------------------------------------------
//	送信完了後にパラメーター付与
//---------------------------------------------
function service_mwform_after_send( $Data ) {
	if ( $Data->get_form_key() === 'mw-wp-form-252' ) {
	  $id = $Data->get( 'id' ); $url = get_permalink($id);
		wp_redirect($url.'?contact=thanks');
	  exit;
  } else if ( $Data->get_form_key() === 'mw-wp-form-254' ) {
	  $id = $Data->get( 'id' ); $url = get_permalink($id);
		wp_redirect($url.'?contact=thanks');
	  exit;
  } else if ( $Data->get_form_key() === 'mw-wp-form-889' ) {
      $id = $Data->get( 'id' ); $url = get_permalink($id);
      wp_redirect($url.'?contact=thanks');
      exit;
  } else if ( $Data->get_form_key() === 'mw-wp-form-1280' ) {
      $id = $Data->get( 'id' ); $url = get_permalink($id);
      wp_redirect($url.'?contact=thanks');
      exit;
  }
}
add_action( 'mwform_after_send_mw-wp-form-252', 'service_mwform_after_send' );
add_action( 'mwform_after_send_mw-wp-form-254', 'service_mwform_after_send' );
add_action( 'mwform_after_send_mw-wp-form-889', 'service_mwform_after_send' );
add_action( 'mwform_after_send_mw-wp-form-1280', 'service_mwform_after_send' );

/**
 * my_error_message
 * @param string $error
 * @param string $key
 * @param string $rule（半角小文字）
 */
function ikk_my_error_message( $error, $key, $rule ) {
    // check empty
    if ( ($key === 'company' || $key === 'onamae' || $key === 'email' || $key === 'tel' || $key === 'naiyou' )  && ($rule === 'noempty') ) {
        $error = 'Please enter.';
    }
    // check email format
    if ( ($key === 'email' )  && ($rule === 'mail') ) {
        $error = 'This is not the format of a mail address.';
    }
    // check phone format
    if ( ($key === 'phone' )  && ($rule === 'tel') ) {
        $error = 'This is not the format of a phone address.';
    }
    // check agree check
    if ( ($key === 'doui' )  && ($rule === 'required') ) {
        $error = 'This is required.';
    }
    
    return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-1280', 'ikk_my_error_message', 10, 3 );
add_filter( 'mwform_error_message_mw-wp-form-1311', 'ikk_my_error_message', 10, 3 );

//---------------------------------------------
//	投稿ページのパーマリンクをカスタマイズ
//---------------------------------------------
function add_article_post_permalink( $permalink ) {
	$permalink = '/blog' . $permalink;
	return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
 
function add_article_post_rewrite_rules( $post_rewrite ) {
	$return_rule = array();
	foreach ( $post_rewrite as $regex => $rewrite ) {
		$return_rule['blog/' . $regex] = $rewrite;
	}
	return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );

// ======================================
// Custom Field Suiteのループタイトルを変更
// ======================================
function ikk_custom_admin_script() { ?>
<script>
    window.addEventListener("DOMContentLoaded", function(){
            
        jQuery(".field-visual_set .loop_wrapper").each(function(index) {
            let label = jQuery(this).find(".field-name_item input").val();
            jQuery(this).find("span.label").first().text(label);
        });
      
    });
</script>
<?php } 
add_action('admin_print_footer_scripts', 'ikk_custom_admin_script');

add_action('admin_head', 'ikk_custom_admin_css');
function ikk_custom_admin_css() { ?>
	<style>
        .cfs_loop .loop_wrapper {
        	width: 30%;
        	margin: 0.5rem 1.2% 1.3rem 1.2% !important;
        	display: inline-block;
        }
        .cfs_loop .loop_wrapper .cfs_loop_body {
            display: block;
        }
    </style>'
<?php } ?>
