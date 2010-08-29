<?php 

    // adding custom taxonomies
    add_action( 'init', 'sfn_portfolio_custom_taxonomy');

    function sfn_portfolio_custom_taxonomy(){
        register_taxonomy('sfn_media_type', array('sfn_portfolio'), array(
            'labels'             => array(
                'name'                  => __('Media Type'),

                'singular_name'         => __('Media Types'),
                'search_items'          => __('Search Media Types'),
                'popular_items'         => __('Popular Media Types'),
                'all_items'             => __('All Media Types'),
                'edit_item'             => __('Edit Media Types'),
                'update_item'           => __('Update Media Types'),
                'add_new_item'          => __('Add New Media Types'),
                'new_item_name'         => __('New Media Type'),
                ), // end labels array
            'public'            => true,
            'hierarchical'      => true, //acts like categories
            'rewrite'           => true,
            ), // end options array 
        ); // end register_taxonomy

         register_taxonomy('sfn_technologies_used', array('sfn_portfolio'), array(
            'labels'             => array(
                'name'                  => __('Technologies Used'),
                'singular_name'         => __('Technologies Used'),
                'search_items'          => __('Search Technologies Used'),
                'popular_items'         => __('Popular Technologies Used'),
                'all_items'             => __('All Technologies Used'),
                'edit_item'             => __('Edit Technologies Used'),
                'update_item'           => __('Update Technologies Used'),
                'add_new_item'          => __('Add New Technologies Used'),
                'new_item_name'         => __('New Technologies Used'),
                ), // end labels array
            'public'            => true,
            'hierarchical'      => true, //acts like categories
            'rewrite'           => true,
            ), // end options array 
        ); // end register_taxonomy
 
    } // end sfn_events_custom_taxonomy

?>
