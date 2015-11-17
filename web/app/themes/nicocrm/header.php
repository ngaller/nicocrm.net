<!doctype html>

<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
          type='text/css'>

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>


    <?php // drop Google Analytics Here ?>
    <?php // end analytics ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div id="container">

    <header class="page-head" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <div class="inner-header grid">

            <div class="row header-top">
                <div class="col m-all t-2of3">
                    <!-- Title and Tagline -->
                    <h1 itemscope itemtype="http://schema.org/Organization">
                        <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
                    </h1>
                    <h5>
                        <?php bloginfo('description'); ?>
                    </h5>

                    <!-- Social Links -->
                    <nav role="navigation">
                        <?php wp_nav_menu(array(
                            'container' => false,                           // remove nav container
                            'menu_class' => 'menu menu--social',               // adding custom nav class
                            'theme_location' => 'social-links',                 // where it's located in the theme
                            'before' => '',                                 // before the menu
                            'after' => '',                                  // after the menu
                            'link_before' => '<span>',                            // before each link
                            'link_after' => '</span>',                             // after each link
                            'depth' => 0,                                   // limit the depth of the nav
                            'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                    </nav>
                </div>
                <div class="col m-all t-1of3">
                    <!-- Search Form -->
                    <div class="header-meta">
                        <?php get_search_form(true); ?>
                        <a href="<?php bloginfo('rss2_url') ?>" class="rss-feed" title="RSS Feed">RSS</a>
                    </div>
                </div>
            </div>
            <div class="row header-bottom">
                <!-- Main nav -->
                <div class="col m-all t-o-1of3 t-2of3">
                    <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu(array(
                            'container' => false,                           // remove nav container
                            'menu' => __('The Main Menu', 'bonestheme'),  // nav name
                            'menu_class' => 'menu menu--main cf',               // adding custom nav class
                            'theme_location' => 'main-nav',                 // where it's located in the theme
                            'before' => '',                                 // before the menu
                            'after' => '',                                  // after the menu
                            'link_before' => '',                            // before each link
                            'link_after' => '',                             // after each link
                            'depth' => 0,                                   // limit the depth of the nav
                            'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
