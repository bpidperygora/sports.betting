<?php
    get_header();
    main_before();
?>

<main id="main">
	<?php if ( get_post_type() == 'post' ): wp_enqueue_style( 'blog.min.css' ); endif;?>
    <div class="container">
        <div class="row">
	        <?php get_template_part('loops/index-loop'); ?>
        </div>
    </div>

</main>
<?php
    main_after();
    get_footer();
?>
