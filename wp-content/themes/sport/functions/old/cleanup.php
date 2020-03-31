<?php
/*
 * Cleanup
 */

// Add custom css to admin panel

function custom_admin_css() {
	$url = get_template_directory_uri() . '/public/css/components/wpAdmin/stylesheet.min.css';
	echo '"<link rel="stylesheet" type="text/css" media="all" href="' . $url . '">"';
}

add_action( 'admin_head', 'custom_admin_css' );

// Add custom script to admin panel

function custom_admin_js() {
	$url = get_template_directory_uri() . '/public/js/components/wpAdmin/javascript.js';
	echo '"<script type="text/javascript" src="' . $url . '"></script>"';
	echo '<div id="back_to_top" onclick="scrollToTop();return false;">▲</div>';
}

add_action( 'admin_footer', 'custom_admin_js' );

// Set custom logo and link to home in login page

function custom_admin_logo() {
	?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(/wp-content/themes/sport/public/images/img/logo.png);
            width: 250px;
            height: 75px;
            background-size: contain;
        }
        body{
            background: #ffffff !important;
        }
    </style>
    <script>
        setTimeout(function () {
            let loginLink = document.querySelector('#login a');
            loginLink.setAttribute('href', document.location.origin);
        }, 1000);
         </script>
	<?php
}

add_action( 'login_enqueue_scripts', 'custom_admin_logo' );

// Less stuff in <head>

if ( ! function_exists( 'cleanup_head' ) ) {
	function cleanup_head() {
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'index_rel_link' );
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}
add_action( 'init', 'cleanup_head' );
//
// Show less info to users on failed login for security.
// (Will not let a valid username be known.)

if ( ! function_exists( 'show_less_login_info' ) ) {
	function show_less_login_info() {
		return "<strong>ERROR</strong>: Stop guessing!";
	}
}
add_filter( 'login_errors', 'show_less_login_info' );
//
//// Do not generate and display WordPress version
//
if ( ! function_exists( 'remove_generator' ) ) {
	function remove_generator() {
		return '';
	}
}
add_filter( 'the_generator', 'no_generator' );
//
//// Remove Query Strings From Static Resources
//
//if ( ! function_exists( 'remove_script_version' ) ) {
//	function remove_script_version( $src ) {
//		if ( current_user_can( 'manage_options' ) ) {
//			return $src;
//		}
//		if ( strpos( $src, '?ver=' ) ) {
//			$src = remove_query_arg( 'ver', $src );
//
//			return $src;
//		}
//	}
//}
//add_filter( 'script_loader_src', 'remove_script_version', 15, 1 );
//add_filter( 'style_loader_src', 'remove_script_version', 15, 1 );
