<?php
/**
 * The template for displaying archive pages
 *
 * @package WordPress
 * @subpackage
 */

get_header(); ?>

<div class="kv" id="kv-news">
	<div class="inner-kv">
		<h2 class="eng">NEWS</h2>
    <?php if ('en_US' == $locale  ) { ?>
            <p>Latest Update</p>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
      	   <p>신착정보</p>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
      			<p>新消息</p>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
      		  <p>最新情報</p>
    <?php }else{ ?>
    		    <p>新着情報</p>
    <?php } ?>
	</div>
</div>
<div class="fixBtn">
	<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html">
    <?php if ('en_US' == $locale  ) { ?>
            <span>Search</span>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
      	   <span>객실 검색</span>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
      			<span>搜索空房</span>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
      		  <span>查詢空房</span>
    <?php }else{ ?>
    		    <span>空室検索</span>
    <?php } ?>
	</a>
</div>
<div class="wrap">

<div class="news-list">
	<div class="inner">
		<?php if ( have_posts() ) : ?>

<p class="tag-name">
<?php $tags = get_the_tags();
	if ($tags) {
		foreach($tags as $tag) {
			echo $tag->name;
		}
	}
?>
</p>
		<ul>
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
			<li><a href="<?php echo get_permalink(); ?>"><dl>
					<dt><?php if ( has_post_thumbnail() ): ?>
							<?php echo get_the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/news-th-s.jpg">
						<?php endif; ?></dt>
					<dd><span class="date"><?php the_date('Y.n.j'); ?></span>
					<?php the_title(); ?></dd>
			</dl></a></li>
			<?php
			// End the loop.
			endwhile;

		// If no content, include the "No posts found" template.
		else :
      if ('en_US' == $locale) {
        echo 'not found';
      } elseif ('ko_KR' == $locale){
        echo 'not found';
      } elseif ('zh_CN' == $locale){
        echo 'not found';
      } elseif ('zh_TW' == $locale){
        echo 'not found';
      } else {
        echo '記事はまだありません。';
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
	</div>
</div><!-- /.wrap -->

<?php /* get_sidebar(); */ ?>
<footer id="ft">
	<div class="inner-ft">
		<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="PORTA INN - bentencho"></a></h3>
    <?php if ('en_US' == $locale  ) { ?>
    		<p>Check Porta inn availability</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html"><span>Search</span></a>
    		</div>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
    		<p>토르타인호텔의 객실 확인</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html"><span>객실 검색</span></a>
    		</div>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
    		<p>确认Porta inn酒店的空房</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html"><span>搜索空房</span></a>
    		</div>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
    		<p>PORTA HOTEL 確認空房</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html"><span>查詢空房</span></a>
    		</div>
    <?php }else{ ?>
    		<p>ポルタインホテルの空室を確認する</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html"><span>空室検索</span></a>
    		</div>
    <?php } ?>
	</div>
	<div class="pagetop"><a class="scrl" href="#container">TOP</a></div>
</footer><!-- /#ft -->

<?php get_footer(); ?>
