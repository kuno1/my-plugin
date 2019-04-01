<?php
/**
 * Hook test.
 *
 * @package my-plugin
 */

/**
 * Conversion test
 */
class HookTest extends WP_UnitTestCase {

	/**
	 * @var WP_Post $post
	 */
	public $post = null;

	/**
	 * @var WP_Comment
	 */
	public $comment = null;

	/**
	 * Setup function.
	 */
	public function setUp() {
		// 投稿を作成
		$post_id = wp_insert_post( [
			'post_title'   => 'ワードプレスの使い方',
			'post_content' => 'この記事ではWordpressの使い方を説明します。',
			'post_status'  => 'publish',
			'post_type'    => 'post',
		],true );
		// 投稿が作成できなかったら例外を投げてテスト中止。
		if ( is_wp_error( $post_id ) ) {
			throw new \Exception( $post_id->get_error_message(), 500 );
		}
		$this->post = get_post( $post_id );
		// コメントを作成
		$comment = wp_insert_comment( [
			'comment_post_ID' => $this->post->ID,
			'comment_content'    => 'このＷｏｒｄＰｒｅｓｓの使い方は役に立ちます。',
			'comment_author' => 'コメント太郎',
			'comment_author_email' => 'someone@example.com',
		] );
		// コメントが取得できなかったら例外を投げてテスト中止。
		if ( ! $comment ) {
			throw new \Exception( 'Failed to create a comment.', 500 );
		}
		$this->comment = get_comment( $comment );
	}

	/**
	 * A single example test.
	 */
	public function test_hooks() {
		$this->assertEquals( 'WordPressの使い方', get_the_title( $this->post ) );
		$this->assertContains( 'この記事ではWordPressの使い方を説明します。', apply_filters( 'the_content', $this->post->post_content ) );
		$this->assertContains( 'このWordPressの使い方は役に立ちます。', apply_filters( 'comment_text', $this->comment->comment_content ) );
	}
}
