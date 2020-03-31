<?php
get_header();
main_before();
wp_enqueue_style( 'blog_post.min.css' );

?>

<main id="main">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9">
				<?php get_template_part( 'loops/single-post', get_post_format() ); ?>
            </div>
            <div class="col-12 col-md-4 col-lg-3 sidebar_posts">
                <div class="sidebar_posts_sidebar_title">
                    <h3>
                        Latest Articles
                    </h3>
                </div>
				<?php
				$args      = array(
					'post_type'      => array( 'post', 'landing' ),
					'post_status'    => 'publish',
					'posts_per_page' => '3',
					'orderby'        => 'date',
				);
				$post_loop = new WP_Query( $args );
				if ( $post_loop->have_posts() ) :
					while ( $post_loop->have_posts() ) : $post_loop->the_post();
						?>
                        <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>

                            <div class="sidebar_posts_img">
                                <a href="<?php echo the_permalink(); ?>">
                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0] ?>"
                                         alt="<?php echo short_title( '...', 50); ?>">
                                </a>
                            </div>
                            <div class="sidebar_posts_info">
								<?php echo get_the_date(); ?>&nbsp;| <?php the_author(); ?>
                            </div>
                            <div class="sidebar_posts_title">
                                <a href="<?php echo the_permalink(); ?>">
                                    <h3>
										<?php echo short_title( '...', 50 ); ?>
                                    </h3>
                                </a>
                            </div>

                        </article>

					<?php endwhile;
					wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>


</main>

<?php
main_after();
get_footer();
?>
