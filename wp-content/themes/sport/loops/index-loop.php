<?php
/*
 * The Default Loop (used by index.php, category.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages, 
 * use the [---more---] block within blog posts.
 */
?>


<?php if ( have_posts() ) :
	$i = 1;
	while ( have_posts() ) :
		the_post(); ?>
		<?php if ( get_post_type() == 'post' ): ?>
		<?php if ( $i == 1 ): ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class( 'blog_item full_width' ); ?> >
                <div class="blog_item_post_content row">
                    <div class="col-12 col-md-6 blog_item_img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="col-12 col-md-6 blog_item_content">
                        <div class="blog_item_post_content_block">
                            <div class="blog_item_content_info">
								<?php echo get_the_date(); ?>&nbsp;| <?php the_author(); ?>

                            </div>
                            <h2 class="blog_item_content_title">
                                <a href="<?php the_permalink(); ?>">
	                                <?php echo get_the_title(); ?>
                                </a>
                            </h2>
                            <div class="blog_item_content_button">
                                <button>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
		<?php endif; ?>
		<?php if ( $i === 2 || $i === 3 ): ?>
            <article role="article"
                     id="post_<?php the_ID() ?>" <?php post_class( 'blog_item part_width part_width_two col-12 col-sm-6' ); ?> >
                <div class="blog_item_post_content">
                    <div class="blog_item_img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="blog_item_post_content_block">
                        <div class="blog_item_content_info">
							<?php echo get_the_date(); ?>&nbsp;| <?php the_author(); ?>
                        </div>
                        <h2 class="blog_item_content_title">
                            <a href="<?php the_permalink(); ?>">
	                            <?php echo short_title( '...', 67 ) ?>
                            </a>
                        </h2>
                        <div class="blog_item_content_button">
                            <button>
                                <a href="<?php the_permalink(); ?>">Read more</a>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
		<?php endif; ?>
		<?php if ( $i > 3 ): ?>
            <article role="article"
                     id="post_<?php the_ID() ?>" <?php post_class( 'blog_item part_width part_width_three col-12 col-sm-6 col-md-4' ); ?> >
                <div class="blog_item_post_content">
                    <div class="blog_item_img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="blog_item_post_content_block">
                        <div class="blog_item_content_info">
							<?php echo get_the_date(); ?>&nbsp;| <?php the_author(); ?>
                        </div>
                        <h2 class="blog_item_content_title">
                            <a href="<?php the_permalink(); ?>">

								<?php echo short_title( '...', 50 ) ?>
                            </a>
                        </h2>
                        <div class="blog_item_content_button">
                            <button>
                                <a href="<?php the_permalink(); ?>">Read more</a>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
		<?php endif; ?>
	<?php else: ?>
		<?php get_template_part( 'loops/index-post', get_post_format() ); ?>
	<?php endif; ?>
		<?php $i ++;
	endwhile; ?>
    <div class="post_items_pagination">
			<?php if ( function_exists( 'pagination' ) ) {
				pagination();
			} else if ( is_paged() ) { ?>
                <ul class="pagination">
                    <li class="page-item older">
						<?php next_posts_link( '<i class="fas fa-arrow-left"></i> ' . __( 'Previous', 'theme' ) ) ?></li>
                    <li class="page-item newer">
						<?php previous_posts_link( __( 'Next', 'theme' ) . ' <i class="fas fa-arrow-right"></i>' ) ?></li>
                </ul>
			<?php } ?>
    </div>
<?php
else :
	get_template_part( 'loops/404' );
endif;
?>
