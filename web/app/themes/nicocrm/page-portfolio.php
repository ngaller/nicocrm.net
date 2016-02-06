<?php
/*
 Template Name: Portfolio Page
 */

get_header();

query_posts('post_type=page&post_parent='. get_the_ID());

?>
<div class="page-content">
    <main class="inner-content u-clearfix" role="main" itemscope itemprop="mainContentOfPage"
          itemtype="http://schema.org/Blog">
        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>


<?php
if (have_posts()) {
    ?>
    <div class="posts-list"><?php
    while (have_posts()) {
        the_post();
        get_template_part('post-formats/format-portfolio-summary');
    }
    ?></div><?php
//    bones_page_navi();
} else {
    get_template_part('notfound');
}
?>

</main>

<?php // get_sidebar(); ?>
</div>

<?php get_footer(); ?>
