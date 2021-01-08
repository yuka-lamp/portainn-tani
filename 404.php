<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php /* get_sidebar(); */ ?>
<footer id="ft">
	<div class="inner-ft">
		<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="PORTA INN - bentencho"></a></h3>
<?php if ('en_US' == $locale  ) { ?>
		<p>Check Porta inn availability</p>
		<div class="btn-search">
			<a target="_blank" href="https://travel.rakuten.co.jp/HOTEL/166516/166516.html"><span>Search</span></a>
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
