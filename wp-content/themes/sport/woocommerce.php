<?php
get_header();
main_before();
?>

<main id="main" class="container mt-5">
    <div class="row">

        <div class="col-sm">
            <div id="content" role="main">
	            <?php woocommerce_content(); ?>
            </div><!-- /#content -->
        </div>
    </div><!-- /.row -->
</main><!-- /.container -->

<?php
main_after();
get_footer();
?>
