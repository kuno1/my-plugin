<?php
/**
 * Conversion test.
 *
 * @package my-plugin
 */

/**
 * Conversion test
 */
class ConversionTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_conversion() {
		$this->assertEquals( 'WordPressやWordPressは間違いです。', my_plugin_capital_P_dangit( 'Wordpressやワールドプレスは間違いです。' ) );
		$this->assertEquals( 'もちろんWordPressも間違いです。', my_plugin_capital_P_dangit( 'もちろんＷｏｒｄＰｒｅｓｓも間違いです。' ) );
		$this->assertEquals( '関係のないDrupalは無事です。', my_plugin_capital_P_dangit( '関係のないDrupalは無事です。' ) );
	}
}
