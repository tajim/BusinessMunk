<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package corporate-munk
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function corporatemunk_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'wrapper' 		 => false,
		'footer_widgets' => array( 'sidebar-1', 'sidebar-2', 'sidebar-3' ),
		'container' 	 => 'main',
		'footer'    	 => 'page',
	) );

	add_theme_support( 'jetpack-responsive-videos' );

	add_theme_support( 'jetpack-portcorporate' );
}
add_action( 'after_setup_theme', 'corporatemunk_jetpack_setup' );

/**
 * Change Jetpack's Infinite Scroll text.
 */
function corporatemunk_infinite_scroll_js_settings( $settings ) {

	/**
	 * For the portcorporate, change the wrapper id
	 */
	if ( is_post_type_archive( 'jetpack-portcorporate' ) || is_tax( 'jetpack-portcorporate-type' ) || is_tax( 'jetpack-portcorporate-tag' ) ) {
		$settings['id'] = 'portcorporate-wrapper';
	}

	return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'corporatemunk_infinite_scroll_js_settings' );

/**
 * Change the render if we are on the portcorporate
 * archive or page template.
 */
function corporatemunk_infinite_scroll_render() {
	if ( is_post_type_archive( 'jetpack-portcorporate' ) || is_tax( 'jetpack-portcorporate-type' ) || is_tax( 'jetpack-portcorporate-tag' ) ) {
		while ( have_posts() ) {
			the_post();

			get_template_part( 'content', 'portcorporate' );
		}
	}
}
add_action( 'infinite_scroll_render', 'corporatemunk_infinite_scroll_render' );
