<?php

    // defines custom post types for the plugin

    add_action( 'init', 'sfn_portfolio_custom_post_type');

    function sfn_portfolio_custom_post_type() {
        
        register_post_type('sfn_portfolio', 
            
            array(

                'labels'                => array(
                    'name'                  => __('Portfolio'),
                    'singular_name'         => __('Portfolio'),
                    'add_new'               => __('Add New'),
                    'add_new_item'          => __('Add New Portfolio Entry'),
                    'edit'                  => __('Edit'),
                    'edit_item'             => __('Edit Portfolio'),
                    'new_item'              => __('New Portfolio'),
                    'view'                  => __('View Portfolio Entries'),
                    'view_item'             => __('View Portfolio'),
                    'search_items'          => __('Search Portfolio Entries'),
                    'not_found'             => __('No Portfolio Entries Found'),
                    'not_found_in_trash'    => __('No Portfolio Entries found in Trash'),
                     ), // end labels array
               'description'            => __('Your Portfolio'),
               'public'                 => true,
               'menu_position'          => 5,
               //menu_icon              => need to add this later,
               'hierarchical'           => false, // functions like posts
               'supports'               => array('title', 'editor', 'revisions', 'excerpt', 'thumbnail'),
               'can_export'             => true, 
            ), // end register post type array

        ); // end register_post_type

    } // end sfn_portfolio_custom_post_type

?>
