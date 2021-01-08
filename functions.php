<?php
/**
 */
//		フィードの削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//		絵文字の削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//		ブログ投稿ツール関連の削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

//		ワードプレスバージョンの表示の削除
remove_action('wp_head', 'wp_generator');

//		rel=”canonical”タグの表示
remove_action('wp_head', 'rel_canonical');

//		wp_head()でjQueryを読み込まないようにする方法
function delete_jquery()
{
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'delete_jquery');


register_nav_menus(array(
 'primary' => 'メニュー',
 ));

//		bogoの表示カスタマイズ
add_filter('bogo_use_flags', 'bogo_use_flags_false');
function bogo_use_flags_false()
{
    return false;
}
add_filter('bogo_language_switcher', 'replace_bogo_text');
function replace_bogo_text($output)
{
    return str_replace(' (United States)', '', $output);
}

//		【管理画面】メディアを追加で挿入されるimgタグから不要な属性を削除
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);		  // width と height を削除
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);	  // class を削除
  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);		// title を削除
  $html = preg_replace('/<a href=".+">/', '', $html);	  // a タグを削除
  $html = preg_replace('/<\/a>/', '', $html);					// a の閉じタグのを削除
  return $html;
}

//		アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// // カスタム投稿タイプの追加
// add_action('init', 'create_post_type');
// function create_post_type()
// {
//     register_post_type(
//         'room',			// 投稿タイプ名の定義
//         array(
//             'labels' => array(
//                 'name' => __('客室のご案内'),		// 表示する投稿タイプ名
//                 'singular_name' => __('客室のご案内')
//             ),
//             'public' => true,
//             'menu_position' =>5,
//             'supports' => array('title','editor','custom-fields','thumbnail','revisions'),
//             'has_archive' => true
//         )
//     );
// }

//		bogoをカスタム投稿でも使用可能に
add_filter('bogo_localizable_post_types', 'my_localizable_post_types', 10, 1);
function my_localizable_post_types($localizable)
{
    $localizable[] = 'room';
    return $localizable;
}


function pagination($pages = '', $range = 1)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." of ".$pages."</span>";
        if ($paged > 2 && $paged > $range+1 && $showitems < $pages) {
            echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
        }
        if ($paged > 1 && $showitems < $pages) {
            echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
        }

        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) {
            echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
        }
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) {
            echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
        }
        echo "</div>\n";
    }
}
