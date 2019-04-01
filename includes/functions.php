<?php
/**
 * Plugin functions
 *
 * @package my-plugin
 */

/**
 * Fix all wrong WordPress.
 *
 * @param string $string
 * @return string
 */
function my_plugin_capital_P_dangit( $string ) {
	// Replace wrong words.
	$string = str_replace( 'ＷｏｒｄＰｒｅｓｓ', 'WordPress', $string );
	$string = str_replace( 'Ｗｏｒｄｐｒｅｓｓ', 'WordPress', $string );
	$string = str_replace( 'ワードプレス', 'WordPress', $string );
	$string = str_replace( 'ワールドプレス', 'WordPress', $string );
	$string = str_replace( 'Wordpress', 'WordPress', $string );
	return $string;
}
