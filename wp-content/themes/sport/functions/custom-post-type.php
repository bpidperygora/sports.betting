<?php
/*
 * Add custom post type
 */

function wpdocs_create_post_type() {
	register_post_type( 'bookmakers',
		array(
			'labels'       => array(
				'name'          => __( 'Bookmakers', 'textdomain' ),
				'singular_name' => __( 'Bookmaker', 'textdomain' )
			),
			'public'       => true,
			'hierarchical' => true,
			'menu_icon'    => 'dashicons-welcome-learn-more',
			'supports'     => array( 'title', 'thumbnail', 'editor' ),
			'taxonomies'   => array( 'category', 'post_tag', '', '' ),

		)
	);
}

add_action( 'init', 'wpdocs_create_post_type', 0 );