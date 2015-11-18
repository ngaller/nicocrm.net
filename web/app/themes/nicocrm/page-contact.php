<?php
/*
 Template Name: Contact Page
 * Used to include social menu.
 */
?>

<?php get_header(); ?>

<div class="page-content">
    <main class="inner-content u-clearfix" role="main" itemscope itemprop="mainContentOfPage"
          itemtype="http://schema.org/Blog">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope
             itemtype="http://schema.org/BlogPosting">

        <header class="article-header">

        </header> <?php // end article header ?>

        <section class="entry-content" itemprop="articleBody">
            <?php
            // the content (pretty self explanatory huh)
            the_content();

            ?>

            <?php wp_nav_menu(array(
                'container' => 'nav',                           // remove nav container
                'menu_class' => 'menu menu--contactme social-links',               // adding custom nav class
                'theme_location' => 'social-links',                 // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '<span>',                            // before each link
                'link_after' => '</span>',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => ''                             // fallback function (if there is one)
            )); ?>
        </section> <?php // end article section ?>

        <footer class="article-footer">

        </footer>

    </article>

<?php endwhile; endif; ?>

</main>

<?php //get_sidebar(); ?>

</div>

<?php get_footer(); ?>
