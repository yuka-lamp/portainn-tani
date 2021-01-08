<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$locale = get_locale();
if ($locale === 'en_US') {
  $guidance = 'FACILITIES';
  $access = 'ACCESS';
} elseif ($locale === 'ko_KR') {
  $guidance = '관내 안내';
  $access = '오시는 길';
} elseif ($locale === 'zh_CN') {
  $guidance = '酒店内介绍';
  $access = '交通方式';
} elseif ($locale === 'zh_TW') {
  $guidance = '館內介紹';
  $access = '交通路線';
} else {
  $guidance = '館内のご案内';
  $access = '交通アクセス';
}
?>

<div class="foot-link">
<div class="wrap">
<a href="<?php echo $home; ?>/facilities/">
<img src="<?php echo $wp_url; ?>/img/icon01.svg" alt="facilities">
<span><?php echo $guidance; ?></span>
</a>
<a href="<?php echo $home; ?>/access/">
<img src="<?php echo $wp_url; ?>/img/icon02.svg" alt="access">
<span><?php echo $access; ?></span>
</a>
</div>
</div>
