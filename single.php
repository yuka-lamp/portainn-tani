<?php
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>

<div class="kv" id="kv-news">
<div class="inner-kv">
</div>
</div>
<div class="wrap">
<div class="news-ctn">
<div class="inner">
<?php
// Start the loop.
while (have_posts()) : the_post();
?>
<div class="article-ttl">
<p>
<span class="date"><?php the_date('Y.m.j'); ?></span>
<span class="tag"><?php $get_tags = get_the_tags();
if ($get_tags) {
    foreach ($get_tags as $tag) {
        echo $tag->name;
    }
}
?></span>
</p>
<h2><?php the_title(); ?></h2>
</div>
<div class="article-ctn">
<?php the_content(); ?>
</div>
<?php
// End of the loop.
endwhile;
?>

<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>news/">一覧に戻る</a></div>
</div>
</div>
</div><!-- /.wrap -->
<?php get_footer();
