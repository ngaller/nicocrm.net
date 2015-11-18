<?php get_header(); ?>

<div class="page-content">
	<main class="inner-content u-clearfix" role="main" itemscope itemprop="mainContentOfPage"
		  itemtype="http://schema.org/Blog">

		<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

		<?php
		if (have_posts()) {
			?>
			<div class="posts-list"><?php
			while (have_posts()) {
				the_post();
				get_template_part('post-formats/format-summary');
			}
			?></div><?php
			bones_page_navi();
		} else {
			get_template_part('notfound');
		}
		?>

	</main>

	<?php // get_sidebar(); ?>
</div>

<?php get_footer(); ?>
