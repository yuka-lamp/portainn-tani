<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage
 */

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$locale = get_locale();
if ($locale === 'en_US') {
    $check = 'Check Porta inn availability';
    $button = 'Search';
    $menu = ['Hotel Tour','Access','News','Contact Us'];
} elseif ($locale === 'ko_KR') {
    $check = '토르타인호텔의 객실 확인';
    $button = '객실 검색';
    $menu = ['Hotel Tour','Access','News','Contact Us'];
} elseif ($locale === 'zh_CN') {
    $check = '确认Porta inn酒店的空房';
    $button = '搜索空房';
    $menu = ['Hotel Tour','Access','News','Contact Us'];
} elseif ($locale === 'zh_TW') {
    $check = 'PORTA HOTEL 確認空房';
    $button = '查詢空房';
    $menu = ['Hotel Tour','Access','News','Contact Us'];
} else {
    $check = 'ポルタインホテルの空室を確認する';
    $button = '空室検索';
    $menu = ['館内のご案内','交通アクセス','お知らせ','お問い合わせ'];
}

?>

<footer id="ft">
<div class="inner-ft">
<h2>
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/img/logo_white.png" alt=""></a>
</h2>
<p><?php echo $check; ?></p>
<div class="btn btn-white">
<a href="<?php echo $home; ?>/search/"><i class="fas fa-chevron-circle-right"></i><?php echo $button; ?></a>
</div>
</div>
<div class="links">
<div class="pages">
<a href="<?php echo $home; ?>/facilities/"><i class="fas fa-chevron-circle-right"></i><?php echo $menu[0]; ?></a>
<a href="<?php echo $home; ?>/access/"><i class="fas fa-chevron-circle-right"></i><?php echo $menu[1]; ?></a>
<a href="<?php echo $home; ?>/news/"><i class="fas fa-chevron-circle-right"></i><?php echo $menu[2]; ?></a>
<a href="<?php echo $home; ?>/contact/"><i class="fas fa-chevron-circle-right"></i><?php echo $menu[3]; ?></a>
</div>
<!-- <div class="language">
<a href="<?php echo $home; ?>/en/">English</a>
<a href="<?php echo $home; ?>/">日本語</a>
<a href="<?php echo $home; ?>/ko/">한국어</a>
<a href="<?php echo $home; ?>/zh-CN/">简体中文</a>
<a href="<?php echo $home; ?>/zh-TW/">繁體中文</a>
</div> -->
</div>
</footer><!-- /#ft -->

<address class="cr">&copy; 2020 PORTA INN tanimachi 9-chome</address>
</div><!-- /#wrapper -->
</div><!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
