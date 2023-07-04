<?php

/**
 * Blockskit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blockskit
 */

if ( ! function_exists( 'blockskit_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function blockskit_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'blockskit', get_template_directory() . '/languages' );

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}
add_action( 'after_setup_theme', 'blockskit_setup' );

/**
 * Enqueue scripts and styles
 */
function blockskit_scripts() {

	// Stylesheet
	wp_enqueue_style( 'blockskit-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'blockskit' )->get( 'Version' ) );
	wp_enqueue_style( 'blockskit-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), filemtime( get_theme_file_path( '/assets/css/animate.css' ) ), 'all' );

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'blockskit-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	}

	$deps = array( 'blockskit-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	// Scripts
	$deps = array( 'jquery' );
	wp_enqueue_script( 'blockskit-animate', get_template_directory_uri() . '/assets/js/animate.min.js', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

}
add_action( 'wp_enqueue_scripts', 'blockskit_scripts' );

/**
 * Add editor styles
 */
function blockskit_editor_style() {
    wp_enqueue_style( 'blockskit-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), '1.0' );
}
add_action( 'enqueue_block_editor_assets', 'blockskit_editor_style' );

/**
 * Register block patterns
 */
function blockskit_block_patterns() {
	register_block_pattern_category(
    	'blockskit-patterns',
	    array( 
	    	'label' => __( 'BLOCKSKIT', 'blockskit' )
	    )
	);
}
add_action( 'init', 'blockskit_block_patterns' );

/**
 * Register block styles
 */
function blockskit_register_block_styles() {
	wp_register_style( 'blockskit-block-styles', get_theme_file_uri( '/style.css' ), false );

	register_block_style(
		
		'core/group', array(
			'name' => 'dark',
			'label' => __( 'Dark', 'blockskit' )
		),
	);


}
add_action( 'init', 'blockskit_register_block_styles' );


