<?php
/**!
 * Enqueues
 */

if ( ! function_exists( 'style_and_script' ) ) {
	function style_and_script() {

		///
		///  Styles
		///
		wp_register_style( 'main.min.css', get_template_directory_uri() . '/public/css/main.min.css', false, null );
		wp_enqueue_style( 'main.min.css' );

		//components

		wp_register_style( '404.min.css', get_template_directory_uri() . '/public/css/components/404/404.min.css', false, null );
		wp_register_style( 'header.min.css', get_template_directory_uri() . '/public/css/components/header/header.min.css', false, null );

		wp_register_style( 'page_title.min.css', get_template_directory_uri() . '/public/css/components/page_title/page_title.min.css', false, null );
		wp_register_style( 'faq.min.css', get_template_directory_uri() . '/public/css/components/faq/faq.min.css', false, null );
		wp_register_style( 'accordion.min.css', get_template_directory_uri() . '/public/css/components/faq/accordion.min.css', false, null );
		wp_register_style( 'call_to_action.min.css', get_template_directory_uri() . '/public/css/components/call_to_action/call_to_action.min.css', false, null );
		wp_register_style( 'contact.min.css', get_template_directory_uri() . '/public/css/components/contact/contact.min.css', false, null );
		wp_register_style( 'how_it_works.min.css', get_template_directory_uri() . '/public/css/components/how_it_works/how_it_works.min.css', false, null );
		wp_register_style( 'form.min.css', get_template_directory_uri() . '/public/css/components/forms/form.min.css', false, null );
		wp_register_style( 'video_block.min.css', get_template_directory_uri() . '/public/css/components/video_block/video_block.min.css', false, null );
		wp_register_style( 'l_r_content.min.css', get_template_directory_uri() . '/public/css/components/l_r_content/l_r_content.min.css', false, null );
		wp_register_style( 'three_steps.min.css', get_template_directory_uri() . '/public/css/components/three_steps/three_steps.min.css', false, null );
		wp_register_style( 'blog.min.css', get_template_directory_uri() . '/public/css/components/blog/blog.min.css', false, null );
		wp_register_style( 'blog_post.min.css', get_template_directory_uri() . '/public/css/components/blog_post/blog_post.min.css', false, null );
		wp_register_style( 'home_page.min.css', get_template_directory_uri() . '/public/css/components/home_page/home_page.min.css', false, null );
		wp_register_style( 'testimonial.min.css', get_template_directory_uri() . '/public/css/components/testimonial/testimonial.min.css', false, null );
		wp_register_style( 'page.min.css', get_template_directory_uri() . '/public/css/components/page/page.min.css', false, null );



		wp_register_style( 'footer.min.css', get_template_directory_uri() . '/public/css/components/footer/footer.min.css', false, null );


		///
		///  Scripts
		///

		wp_deregister_script( 'jquery' );

		// components

		wp_register_script( 'home_page.js', get_template_directory_uri() . '/public/js/components/home_page/home_page.js', false, null, true );

		// main script

		wp_register_script( 'main.js', get_template_directory_uri() . '/public/js/main.js', false, null, true );
		wp_enqueue_script( 'main.js' );


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'style_and_script', 100 );

