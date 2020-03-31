<?php
/*
Template Name: FAQ
*/
get_header();
main_before();
wp_enqueue_style( 'faq.min.css' );

?>

<main id="main">

	<?php wp_enqueue_style( 'page_title.min.css' ); ?>
    <div class="container page_title">
        <div class="page_title_content">
            <h1>
				<?php echo get_the_title(); ?>
            </h1>
        </div>
    </div>

	<?php wp_enqueue_style( 'accordion.min.css' ); ?>

    <div class="faq_block">
        <div class="container accordion_container accordion_block">
            <ul class="accordion">
	            <?php if ( have_rows( 'faq_content' ) ) :
		            $i = 1;
		            while ( have_rows( 'faq_content' ) ) : the_row(); ?>
                        <li class="accordion_item"><a class="accordion_trigger"><?php echo get_sub_field('faq_item_title'); ?></a>
                            <p class="accordion_content">
	                            <?php echo get_sub_field('faq_item_content'); ?>
                            </p>
                        </li>

			            <?php $i ++; endwhile; ?>
	            <?php endif; ?>
            </ul>
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
