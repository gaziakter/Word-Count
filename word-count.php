<?php
/**
 * Plugin Name:       Word Count
 * Plugin URI:        https://criqal.com/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://criqal.com/
 * Text Domain:       word-count
 * Domain Path:       /languages
 */
/*
 //Plugin Activation
function wordcount_activation_hook(){

}
register_activation_hook( __FILE__, 'wordcount_activation_hook' );

//Plugin Deactivation
function wordcount_deactivation_hook(){

}
register_deactivation_hook(__FILE__, 'wordcount_deactivation_hook' )

//Loading textdomain
function wordcount_load_texdomain(){
    load_plugin_textdomain( 'word-count', false, dirname(__FILE__)."/languages" );
}
add_action( "plugins_loaded", "wordcount_load_texdomain" )
*/

//Word count function
function wordcount_count_words($content){
    $stripped_content = strip_tags($content);
    $wordn = str_word_count( $stripped_content);
    $label = __('Total Number of Words', 'word-count');
    $content .= sprintf('<h2>%s: %s</h2>', $label, $wordn);
    return $content;
}
add_filter( 'the_content', 'wordcount_count_words' );