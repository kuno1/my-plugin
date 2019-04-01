<?php
/**
 * Hook functions.
 *
 * @package my-plugin
 */

// Add title filter.
add_filter( 'the_title', 'my_plugin_capital_P_dangit' );
// Add content filter.
add_filter( 'the_content', 'my_plugin_capital_P_dangit' );
// Add comment text
add_filter( 'comment_text', 'my_plugin_capital_P_dangit' );
