<?php get_header(); ?>


<div class="page-content single">
    <main class="inner-content u-clearfix" role="main" itemscope itemprop="mainContentOfPage"
          itemtype="http://schema.org/Blog">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope
                     itemtype="http://schema.org/BlogPosting">

                <header class="article-header">

                    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                </header> <?php // end article header ?>

                <section class="entry-content" itemprop="articleBody">
                    <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">

                </footer>

            </article>

        <?php endwhile; endif; ?>

    </main>

    <?php //get_sidebar(); ?>

</div>

<?php get_footer(); ?>
