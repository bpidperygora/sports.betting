<?php
/*
Template Name: How It Works
*/
get_header();
main_before();
wp_enqueue_style( 'how_it_works.min.css' );

?>

<main id="main">

    <div class="how_it_works_hero">
        <div class="container">
            <h1>
	            <?php echo get_field( 'video_block_title' ) ?>
            </h1>

            <div class="video_block">
				<?php wp_enqueue_style( 'video_block.min.css' ); ?>
				<?php wp_enqueue_script( 'video_block.js' ); ?>

                <div class="video_block_overflow">
                    <div class="video_block_overflow_play"></div>
                    <div class="video_block_overflow_text">
                        <p>
                            It’s so simple
                        </p>
                    </div>
                </div>
                <video class="video_block_content" id="video"
                       poster="/wp-content/uploads/2020/02/video_img_hover.png">
                    <source src="<?php echo get_field( 'video_webm' ) ?>" type="video/webm">
                    <source src="<?php echo get_field( 'video_ogv' ) ?>" type="video/ogv">
                    <source src="<?php echo get_field( 'video_mp4' ) ?>" type="video/mp4">
                    <p> Your browser doesn't support HTML5 video.
                        <a href="<?php echo get_field( 'video_mp4' ) ?>">Download</a> the video instead.
                    </p>
                </video>
                <div class="pause">
                    <div class="pause_ico"></div>
                </div>
            </div>

        </div>

    </div>

	<?php wp_enqueue_style( 'l_r_content.min.css' ); ?>
    <div class="container left_right_content">
        <div class="left_right_content_items">
	        <?php if ( have_rows( 'left_right_items' ) ) :
		        $i = 1;
		        while ( have_rows( 'left_right_items' ) ) : the_row();
			        $lrci_position = $i % 2 == 0 ? 'left' : 'right'
			        ?>

                    <div class="left_right_content_items_item left_right_content_items_item_<?php echo $lrci_position ?> row<?php if (get_sub_field('disable_background_on_img')): ?> simple<?php endif;?>">
                        <div class="col-12 col-sm-6 left_right_content_items_item_content">
                            <div class="left_right_content_items_item_content_title">
                                <h3>
                                    <?php echo get_sub_field( 'item_title' ); ?>
                                </h3>
                            </div>
                            <div class="left_right_content_items_item_content_description">
                                <p>
	                                <?php echo get_sub_field( 'item_description' ); ?>
                                </p>
                            </div>
                            <div class="left_right_content_items_item_content_button">
                                <button>
                                    <a href="<?php echo get_sub_field( 'item_button_link' ); ?>"><?php echo get_sub_field( 'item_button_name' ); ?></a>
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 left_right_content_items_item_img">
                            <img src="<?php echo get_sub_field( 'item_img' ); ?>" alt="">
                        </div>
                    </div>

			        <?php $i ++; endwhile; ?>
	        <?php endif; ?>

        </div>
    </div>

	<?php wp_enqueue_style( 'three_steps.min.css' ); ?>
	<?php wp_enqueue_script( 'three_steps.js' ); ?>
    <div class="three_steps" data-speed="<?php echo get_field( 'slider_speed_in_sec' ); ?>">
        <div class="container">
            <div class="three_steps_title">
                <h2>
					<?php echo get_field( 'three_steps_block_title' ) ?>
                </h2>
            </div>
            <div class="row three_steps_content">
				<?php if ( have_rows( 'three_step_items' ) ) : ?>
                    <div class="col-12 col-md-6 three_steps_content_list">
						<?php $i = 1;
						while ( have_rows( 'three_step_items' ) ) : the_row(); ?>

                            <div class="three_steps_content_list_item">
                                <span class="three_steps_content_list_item_number"><?php echo $i ?></span>
                                <div class="three_steps_content_list_item_title">
                                    <h3>
										<?php echo get_sub_field( 'item_tile' ) ?>
                                    </h3>
                                </div>
                                <div class="three_steps_content_list_item_description">
                                    <p>
										<?php echo get_sub_field( 'item_description' ) ?>
                                    </p>
                                </div>
                            </div>

							<?php $i ++; endwhile; ?>

                        <div class="three_steps_content_list_button">
                            <button>
                                <a href="<?php echo get_field( 'three_steps_button_link' ); ?>"><?php echo get_field( 'three_steps_button_name' ); ?></a>
                            </button>
                        </div>
                    </div>

                    <div class="col-12col-md-6 three_steps_imgs">
						<?php $i = 1;
						while ( have_rows( 'three_step_items' ) ) : the_row(); ?>

                            <div class="three_steps_img">
                                <img src="<?php echo get_sub_field( 'item_img' ) ?>" alt="">
                            </div>

							<?php $i ++; endwhile; ?>
                    </div>
				<?php endif; ?>

            </div>
        </div>
    </div>
	<?php wp_enqueue_style( 'call_to_action.min.css' ); ?>
    <div class="container">
        <div class="row call_to_action_block">
            <div class="col-12 col-md-7 call_to_action_block_text">
                <h2>
					<?php echo get_field( 'call_to_action_main_text' ); ?>
                </h2>
            </div>
            <div class="col-12 col-md-5 call_to_action_block_button">
                <button>
                    <a href="<?php echo get_field( 'call_to_action_button_link' ); ?>"><?php echo get_field( 'call_to_action_button_name' ); ?></a>
                </button>
            </div>
            <div class="col-12 col-md-9 call_to_action_block_bg">

            </div>
        </div>
    </div>

</main>

<?php
main_after();
get_footer();
?>
