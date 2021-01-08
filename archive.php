<?php
/**
* The template for displaying archive pages
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage
*/

get_header(); ?>

<div class="kv" id="kv-news">
<div class="inner-kv">
</div>
</div>

<div class="wrap">

<div class="news-list">
<div class="choice-cate">
<ul>
<li class="choice"><a href="<?php echo esc_url(home_url('/')); ?>news/">全て</a>
<?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
</li>
</ul>
</div>

<?php if (have_posts()) : ?>
<ul>
<?php
// Start the Loop.
while (have_posts()) : the_post();
?>
<li><a href="<?php echo get_permalink(); ?>"><dl>
<dd><span class="date"><?php the_date('Y.n.j'); ?></span>
<span class="cate-tag"><?php $get_tags = get_the_tags();
if ($get_tags) {
    foreach ($get_tags as $tag) {
        echo $tag->name;
    }
}
?></span>
<?php the_title(); ?></dd>
</dl></a></li>
<?php
// End the loop.
endwhile;

// If no content, include the "No posts found" template.
else :
if ('en_US' == $locale) {
    echo 'not found';
} elseif ('ko_KR' == $locale) {
    echo 'not found';
} elseif ('zh_CN' == $locale) {
    echo 'not found';
} elseif ('zh_TW' == $locale) {
    echo 'not found';
} else {
    echo '';
}
endif;
?>

</ul>
<div class="pager">
<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
</div>

</div>
</div><!-- /.wrap -->
<?php get_footer();
