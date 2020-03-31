<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="version" content="1.0.0"/>
    <meta name="language" content="<?php language_attributes(); ?>"/>
	<?php if ( have_rows( 'head_scripts', 'options' ) ) :
		$i = 1;
		while ( have_rows( 'head_scripts', 'options' ) ) : the_row(); ?>
			<?php if ( get_sub_field( 'enable_disable' ) ): ?>
				<?php echo get_sub_field( 'head_script' ) ?>
			<?php endif; ?>
			<?php $i ++; endwhile; ?>
	<?php endif; ?>
	<?php wp_head(); ?>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, user-scalable=0, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible"/>
    <meta name="theme-color" content="#243E95"/>
    <meta name="msapplication-navbutton-color" content="#243E95"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#243E95"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
</head>

<body <?php body_class(); ?>>
<div class="navigation">
	<?php navbar_before(); ?>
    <nav id="navbar" class="navbar navbar-expand-md">
		<?php wp_enqueue_style( 'header.min.css' ); ?>
		<?php navbar_brand(); ?>
        <div class="main_nav">
            <div class="container">
                <div class="row">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarDropdown"
                            aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarDropdown">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'navbar',
							'container'      => false,
							'menu_class'     => '',
							'fallback_cb'    => '__return_false',
							'items_wrap'     => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
							'depth'          => 2,
							'walker'         => new navbar_walker_nav_menu()
						) );
						?>
                    </div>
                    <div class="info_search_block">
                        <div class="youtube">
                            <a href="/#"><span><i class="fab fa-youtube"></i></span> Смотреть</a>
                        </div>
                        <div class="google_play">
                            <a href="/#"><span><i class="fab fa-google-play"></i></span> Приложение</a>
                        </div>
                        <div class="search">
                            <div class="search_block"><i class="fas fa-search"></i></div>
                            <?php navbar_search()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	<?php navbar_after(); ?>
</div>
