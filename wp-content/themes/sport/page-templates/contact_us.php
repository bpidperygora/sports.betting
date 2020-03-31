<?php
/*
Template Name: Contact Us
*/
get_header();
main_before();

wp_enqueue_style( 'contact.min.css' );

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

    <div class="container contact_us_block">
        <div class="three_blocks_content">
			<?php if ( have_rows( 'three_block' ) ) :
				$i = 1;
				while ( have_rows( 'three_block' ) ) : the_row(); ?>
                    <div class="col-12 col-md-4 three_blocks_content_block">
                        <div class="three_blocks_content_block_ico<?php if ( get_sub_field( 'img' ) ): ?> three_blocks_content_block_ico_img<?php endif; ?>">
                           <?php if (!get_sub_field('img')): ?>
	                        <?php echo get_sub_field( 'block_ico' ); ?>
                            <?php else:?>
                               <img src="<?php echo get_sub_field( 'block_ico_copy' ); ?>" alt="">
                            <?php endif;?>
                        </div>
                        <div class="three_blocks_content_block_title">
                            <h4>
								<?php echo get_sub_field( 'block_name' ); ?>
                            </h4>
                        </div>
                        <div class="three_blocks_content_block_description">
                            <p>
								<?php echo get_sub_field( 'block_description' ); ?>
                            </p>
                        </div>
                        <div class="three_blocks_content_block_item">
                            <a href="<?php echo get_sub_field( 'block_link' ); ?>"><?php echo get_sub_field( 'block_link_name' ); ?></a>
                        </div>
                    </div>
					<?php $i ++; endwhile; ?>
			<?php endif; ?>
        </div>

        <div class="two_blocks_content">
            <div class="col-12 col-xl-6 two_blocks_content_block">
				<?php
				wp_enqueue_script( 'map_api.js' );
                wp_enqueue_script( 'map.js' );
				?>
                <div class="map">
					<?php
					$location = get_field( 'map' );
					if ( ! empty( $location ) ):
						?>
                    <?php
						$address = '';
						foreach( array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k ) {
							if( isset( $location[ $k ] ) ) {
								$address .= sprintf( '<span class="segment-%s">%s</span>, ', $k, $location[ $k ] );
							}
						}
						$address = trim( $address, ', ' );
                        ?>
                        <div class="map_block">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                                 data-lng="<?php echo $location['lng']; ?>">
                                <div class="address"><?php echo $address; ?>
                                </div>
                            </div>
                        </div>
					<?php endif; ?>
                </div>

            </div>
			<?php wp_enqueue_style( 'form.min.css' ); ?>
			<?php wp_enqueue_script( 'form.js' ); ?>
            <div class="col-12 col-xl-6 two_blocks_content_block">
                <div class="form">
                    <div class="form_title">
                        <h5>
                            Got a question for our expert team?
                        </h5>
                    </div>
					<?php echo get_field('select_form_to_display')?>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
main_after();
get_footer();
?>
