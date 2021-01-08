<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php /* get_sidebar(); */ ?>
<footer id="ft">
	<div class="inner-ft">
		<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="PORTA INN - tanimachi 9-chome"></a></h3>
    <?php if ('en_US' == $locale  ) { ?>
    		<p>Check Porta inn availability</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>Search</span></a>
    		</div>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
    		<p>토르타인호텔의 객실 확인</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>객실 검색</span></a>
    		</div>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
    		<p>确认Porta inn酒店的空房</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>搜索空房</span></a>
    		</div>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
    		<p>PORTA HOTEL 確認空房</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>查詢空房</span></a>
    		</div>
    <?php }else{ ?>
    		<p>ポルタインホテルの空室を確認する</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>空室検索</span></a>
    		</div>
    <?php } ?>
	</div>
	<div class="pagetop"><a class="scrl" href="#container">TOP</a></div>
</footer><!-- /#ft -->

<?php get_footer(); ?>
