<?php
/**
* The template for displaying archive pages
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
$locale = get_locale();
if ($locale === 'en_US') {
    $bed_txt = 'Bed Size';
    $facility_txt = 'Facility';
} elseif ($locale === 'ko_KR') {
    $bed_txt = '베드사이즈';
    $facility_txt = '시설';
} elseif ($locale === 'zh_CN') {
    $bed_txt = '床铺大小';
    $facility_txt = '查詢空房';
} elseif ($locale === 'zh_TW') {
    $bed_txt = '床';
    $facility_txt = '設備';
} else {
    $bed_txt = 'ベッドサイズ';
    $facility_txt = '設備';
    $price_txt = '価格';
}
?>

<div class="kv" id="kv-room">
<div class="inner-kv">
</div>
</div>

<div class="wrap">
<div class="rooms-archives">
<?php
if (have_posts()): while (have_posts()):
the_post();
$id = get_the_ID();
$ttl = get_the_title();
$size = get_post_meta($id, 'size', true);
$price = get_post_meta($id, '価格', true);
$bed_size = get_post_meta($id, 'ベッドサイズ', true);
$facility = get_post_meta($id, '設備', true);
$content = mb_strimwidth(strip_tags(get_the_content()), 0, 200);
$pictures = [];
if (get_post_meta($id, '写真01', true)) {
    $pictures[] = get_post_meta($id, '写真01', true);
}
if (get_post_meta($id, '写真02', true)) {
    $pictures[] = get_post_meta($id, '写真02', true);
}
if (get_post_meta($id, '写真03', true)) {
    $pictures[] = get_post_meta($id, '写真03', true);
}
if (get_post_meta($id, '写真04', true)) {
    $pictures[] = get_post_meta($id, '写真04', true);
}
if (get_post_meta($id, '写真05', true)) {
    $pictures[] = get_post_meta($id, '写真05', true);
}
?>
<div class="rooms-archive">
<h3><?php echo $ttl; ?></h3>
<div class="rooms-picutuers">
<?php foreach ($pictures as $key => $pic): ?>
<img src="<?php echo $pic; ?>" alt="写真<?php echo $key; ?>">
<?php endforeach; ?>
</div>
<div class="info">
<p class="txt"><?php echo $content; ?></p>
<div class="facility">
<table>
<!-- <tr>
<th>部屋サイズ</th>
<td><?php echo $size; ?></td>
</tr> -->
<tr>
<th><?php echo $price_txt; ?></th>
<td><?php echo $price; ?></td>
</tr>
<tr>
<th><?php echo $bed_txt; ?></th>
<td><?php echo $bed_size; ?></td>
</tr>
<tr>
<th><?php echo $facility_txt; ?></th>
<td><?php echo $facility; ?></td>
</tr>
</table>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div><!-- /.wrap -->
<?php get_template_part('foot-link'); ?>
<?php get_footer();
