<?php
// summary for a single post (and/or page?)
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

    <header class="article-header">

        <h5 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"
                                   title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h5>

        <p class="byline entry-meta vcard">
            <?php printf('%1$s %2$s',
                /* the time the post was published */
                '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                /* the author of the post */
                '<span class="by">' . __('by', 'bonestheme') . '</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link(get_the_author_meta('ID')) . '</span>'
            ); ?>

            <?php the_terms(get_the_ID(), 'portfolio_category', '&nbsp;&nbsp;<span class="category">', ', ', '</span>'); ?>

        </p>
        <?php the_post_thumbnail('large'); ?>
    </header>

    <!--								<section class="entry-content cf">-->
    <!--									--><?php //the_content(); ?>
    <!--								</section>-->

    <footer class="article-footer cf">


        <?php the_terms(get_the_ID(), 'portfolio_technology',
            '<p class="footer-tags tags"><span class="tags-title">' . __('techs:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>


    </footer>

</article>