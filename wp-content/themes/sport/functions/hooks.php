<?php
/*
 * theme Hooks
 * Designed to be used by a child theme.
 */

// Navbar (in `header.php`)

function navbar_before() {
	if ( ! has_action( 'navbar_before' ) ) {
		?>
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="top_bar_menu">
                        <ul>
                            <li><a href="/#">Войти</a></li>
                            <li><a href="/#">Зарегистрироваться</a></li>
                        </ul>
                    </div>
                    <div class="top_bar_social">
                        <div class="top_bar_social_title">
                            Наши соцсети
                        </div>
                        <ul>
                            <li><a href="/#"><i class="fab fa-vk"></i></a></li>
                            <li><a href="/#"><i class="fab fa-telegram"></i></a></li>
                            <li><a href="/#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<?php
	} else {
		do_action( 'navbar_before' );
	}
}

function navbar_after() {
	do_action( 'navbar_after' );
}

function navbar_brand() {
	if ( ! has_action( 'navbar_brand' ) ) {
		?>
        <div class="desktop_top">
            <div class="container">
                <div class="row desktop_top_content">
                    <div class="desktop_top_content_logo">
                        <a href="/">
                            <img src="/wp-content/uploads/2020/02/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="desktop_top_content_banner">
                        <a href="/#"><img src="/wp-content/uploads/2020/02/banner.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
		<?php
	} else {
		do_action( 'navbar_brand' );
	}
}

function navbar_search() {
	if ( ! has_action( 'navbar_search' ) ) {
		?>
        <form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform"
              action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
                <input class="form-control border-secondary" type="text" value="<?php echo get_search_query(); ?>"
                       placeholder="Поиск..." name="s" id="s">
                <div class="input-group-append">
                    <button type="submit" id="searchsubmit" value="<?php esc_attr_x( 'Search', 'theme' ) ?>"
                            class="btn btn-outline-secondary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
		<?php
	} else {
		do_action( 'navbar_search' );
	}
}


// Main

function main_before() {
	do_action( 'main_before' );
}

function main_after() {
	do_action( 'main_after' );
}

// Sidebar (in `sidebar.php` -- only displayed when sidebar has 1 widget or more)

function sidebar_before() {
	do_action( 'sidebar_before' );
}

function sidebar_after() {
	do_action( 'sidebar_after' );
}

// Footer (in `footer.php`)

function footer_before() {
	do_action( 'footer_before' );
}

function footer_after() {
	do_action( 'footer_after' );
}

function bottomline() {
	if ( ! has_action( 'bottomline' ) ) {
		?>
        <div class="container bottom_bar">
            <div class="row">
                <div class="col-12">
                    <p class="text-center text-sm-left">Copyright © <?php echo date( 'Y' ); ?> <a
                                href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a> Ltd. All rights
                        reserved.
                    </p>
                </div>
            </div>
        </div>
		<?php
	} else {
		do_action( 'bottomline' );
	}
}
