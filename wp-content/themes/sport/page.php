<?php
get_header();
main_before();
wp_enqueue_style( 'page.min.css' );

?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <main id="main">

		<?php wp_enqueue_style( 'page_title.min.css' ); ?>
        <div class="container page_title">
            <div class="page_title_content">
                <h1>
					<?php echo get_the_title(); ?>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 content">
		            <?php the_content(); ?>
                </div>
            </div>
        </div>
    </main>
<?php
endwhile;
else :
	get_template_part( 'loops/404' );
endif;
?>


<?php
main_after();
get_footer();
?>
