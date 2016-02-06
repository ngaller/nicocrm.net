<?php

add_action('init', function () {

    register_taxonomy('portfolio_technology',
        array('page'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
        array('hierarchical' => false,     /* if this is true, it acts like categories */
            'labels' => array(
                'name' => __('Portfolio Technologies', 'bonestheme'), /* name of the custom taxonomy */
                'singular_name' => __('Portfolio Technology', 'bonestheme'), /* single taxonomy name */
//                    'search_items' =>  __( 'Search Custom Categories', 'bonestheme' ), /* search title for taxomony */
//                    'all_items' => __( 'All Custom Categories', 'bonestheme' ), /* all title for taxonomies */
//                    'parent_item' => __( 'Parent Custom Category', 'bonestheme' ), /* parent title for taxonomy */
//                    'parent_item_colon' => __( 'Parent Custom Category:', 'bonestheme' ), /* parent taxonomy title */
//                    'edit_item' => __( 'Edit Custom Category', 'bonestheme' ), /* edit custom taxonomy title */
//                    'update_item' => __( 'Update Custom Category', 'bonestheme' ), /* update title for taxonomy */
//                    'add_new_item' => __( 'Add New Custom Category', 'bonestheme' ), /* add new title for taxonomy */
//                    'new_item_name' => __( 'New Custom Category Name', 'bonestheme' ) /* name title for taxonomy */
            ),
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
//                'rewrite' => array( 'slug' => 'custom-slug' ),
        )
    );


    register_taxonomy('portfolio_category',
        array('page'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
        array('hierarchical' => true,     /* if this is true, it acts like categories */
            'labels' => array(
                'name' => __('Portfolio Categories', 'bonestheme'), /* name of the custom taxonomy */
                'singular_name' => __('Portfolio Category', 'bonestheme'), /* single taxonomy name */
//                    'search_items' =>  __( 'Search Custom Categories', 'bonestheme' ), /* search title for taxomony */
//                    'all_items' => __( 'All Custom Categories', 'bonestheme' ), /* all title for taxonomies */
//                    'parent_item' => __( 'Parent Custom Category', 'bonestheme' ), /* parent title for taxonomy */
//                    'parent_item_colon' => __( 'Parent Custom Category:', 'bonestheme' ), /* parent taxonomy title */
//                    'edit_item' => __( 'Edit Custom Category', 'bonestheme' ), /* edit custom taxonomy title */
//                    'update_item' => __( 'Update Custom Category', 'bonestheme' ), /* update title for taxonomy */
//                    'add_new_item' => __( 'Add New Custom Category', 'bonestheme' ), /* add new title for taxonomy */
//                    'new_item_name' => __( 'New Custom Category Name', 'bonestheme' ) /* name title for taxonomy */
            ),
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
            'public' => true,
//                'rewrite' => array( 'hierarchical' => true ),
        )
    );

//    add_filter('taxonomy_template', function ($template) {
//        $term = get_queried_object();
//        if (!empty($term->slug)) {
//            if ($term->taxonomy == 'portfolio_category' || $term->taxonomy == 'portfolio_technology') {
//                return __DIR__ . '../page-portfolio.php';
//            }
//        }
//    });

});