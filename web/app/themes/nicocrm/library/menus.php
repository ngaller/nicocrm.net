<?php
/**
 * menus.php
 * Created By: nico
 * Created On: 11/15/2015
 */

function bones_register_menus()
{
    add_theme_support('menus');

    // registering wp3+ menus
    register_nav_menus(
        array(
            'main-nav' => __('The Main Menu', 'bonestheme'),   // main nav in header
            'social-links' => __('Social Links', 'bonestheme'),
            'footer-links' => __('Footer Links', 'bonestheme') // secondary nav in footer
        )
    );

}

