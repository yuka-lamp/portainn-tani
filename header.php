<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if (is_singular() && pings_open(get_queried_object())) : ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php endif; ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169195439-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169195439-1');
</script>
<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700&display=swap">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/58842f41b3.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="container">
<div id="wrapper">
<header id="hd">
<div class="inner-hd">
<h1><a href="<?php echo $home; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a></h1>
<ul>
<li class="lang"><span class="eng">LANGUAGE</span>
<?php echo do_shortcode('[bogo]'); ?>
</li>
<!-- <li><a class="color-white" target="_blank" href="https://www.facebook.com/portainnbentenchou"><i class="fab fa-facebook-square"></i></a></li> -->
<li><a class="color-white" target="_blank" href="https://www.instagram.com/portainn.kujyo.residence/"><i class="fab fa-instagram"></i></a></li>
<!-- <li><a class="color-white" target="_blank" href="https://twitter.com/Portainnbenten"><i class="fab fa-twitter"></i></a></li> -->
<li class="hum">
<div id="menuBtn">
<div>
<span></span>
<span></span>
<span></span>
</div>
</div>
</li>
</ul>
</div>
</header><!-- #hd -->

<div id="openMenu">
<ul class="sub-menu">
<li class="sp-lang"><span class="eng">LANGUAGE</span>
<?php echo do_shortcode('[bogo]'); ?>
</li>
<li><a target="_blank" href="https://www.facebook.com/portainnbentenchou"><img src="<?php echo get_template_directory_uri(); ?>/img/icn-fb.png" alt="facebook"></a></li>
<li><a target="_blank" href="https://www.instagram.com/hotelportainnbentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/icn-insta.png" alt="Instagram"></a></li>
<li><a target="_blank" href="https://twitter.com/Portainnbenten"><img src="<?php echo get_template_directory_uri(); ?>/img/icn-tw.png" alt="twitter"></a></li>
</ul>
<?php wp_nav_menu(['theme_location' => 'primary']); ?>
</div>

<div class="fixBtn btn btn-white">
<a target="_blank" href="https://tanimachi9-chome.portainn.jp/search/"><i class="fas fa-chevron-circle-right"></i>
<?php
$locale = get_locale();
 if ('en_US' == $locale) { ?>
<span>Search</span>
<?php } elseif ('ko_KR' == $locale) { ?>
<span>객실 검색</span>
<?php } elseif ('zh_CN' == $locale) { ?>
<span>搜索空房</span>
<?php } elseif ('zh_TW' == $locale) { ?>
<span>查詢空房</span>
<?php } else { ?>
<span>空室検索</span>
<?php } ?>
</a>
</div>
