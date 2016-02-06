<?php
/*
 Template Name: Portfolio Page
 */

get_header();


?>
<div class="page-content">
    <main class="inner-content u-clearfix" role="main" itemscope itemprop="mainContentOfPage"
          itemtype="http://schema.org/Blog">
        <h1 class="page-title" itemprop="headline"><?php single_cat_title(); ?></h1>


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
