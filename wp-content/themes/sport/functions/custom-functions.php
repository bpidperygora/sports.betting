<?php
/*
 * Custom Functions
 */

// Get Short Title in Loop

function short_title($after, $maxChar) {
	if (!$after){
		$after = '';
	}
	$title = mb_strimwidth(get_the_title(), 0, $maxChar, $after);
	return $title;
}
function ea_disable_editor( $id = false ) {

	$excluded_templates = array(
		'page-templates/contact_us.php',
		'page-templates/faq.php',
		'page-templates/home.php',
		'page-templates/how_it_works.php',
	);


	if( empty( $id ) )
		return false;

	$template = get_page_template_slug( $id );

	return in_array( $template, $excluded_templates );
}
function ea_disable_gutenberg( $can_edit, $post_type ) {

	if( ! ( is_admin() && !empty( $_GET['post'] ) ) )
		return $can_edit;

	if( ea_disable_editor( $_GET['post'] ) )
		$can_edit = false;

	return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2 );