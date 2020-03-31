<?php
/*
 * The Single Post
 */

?>

<?php /* Single post loop */
if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <article role="article" id="post_<?php the_ID() ?>" <?php post_class( 'current_post' ) ?>>

        <div class="current_post_header">
            <div class="current_post_img">
				<?php the_post_thumbnail(); ?>
            </div>
            <div class="current_post_title">
                <h1><?php the_title() ?></h1>
            </div>
            <div class="current_post_date">
				<?php echo get_the_date(); ?>
            </div>
        </div>
        <div class="current_post_content">
			<?php the_content(); ?>
        </div>


		<?php if (get_field( 'author_img' ) && get_field( 'author_name' )): ?>
        <div class="current_post_author">
            <div class="current_post_author_img">
                <img src="<?php echo get_field( 'author_img' ); ?>" alt="">
            </div>
            <div class="current_post_author_info">
                <div class="current_post_author_info_title">
                    <h6>
                        Writen by
                    </h6>
                </div>
                <div class="current_post_author_info_name">
                    <h5>
						<?php echo get_field( 'author_name' ); ?>
                    </h5>
                </div>
				<?php if ( get_field( 'author_info' )): ?>
                    <div class="current_post_author_info_position">
                        <h6>
							<?php echo get_field( 'author_info' ); ?>
                        </h6>
                    </div>
				<?php endif; ?>
            </div>
        </div>
        <?php endif;?>


    </article>
<?php endwhile; else : get_template_part( 'loops/404' ); endif; ?>