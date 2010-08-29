<?php
    
    /*
    * @package SFNportfolio
    */

    /*
        Plugin Name: SFNportfolio
        Plugin URI: 
        Description: Builds a custom post type named 'sfn_portfolio' and gives multiple view options that may be needed
        Version: 0.1
        Author: Curtis McHale
        Author URI: http://curtismchale.ca
        License: GPL2 

        Copyright 2010  PLUGIN_AUTHOR_NAME  (email : curtis@curtismchale.ca)

        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License, version 2, as 
        published by the Free Software Foundation.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software
        Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    */

?>
<?php
    
    // defining plugin version number
    define('SFNPORTFOLIO_VERSION', '0.1');

    // determining the plugin base path
    $plugin_base_path = ( dirname(__FILE__));
    
    // includes the custom post type
    require_once( $plugin_base_path .  '/assets/includes/sfn-portfolio-custom-post-types.php' );

    // includes the custom taxonomy
    require_once( $plugin_base_path . '/assets/includes/sfn-portfolio-custom-taxonomies.php' );

    // differing views with shortcodes come from here
    require_once( $plugin_base_path . '/assets/includes/sfn-portfolio-custom-views.php' );

?>
