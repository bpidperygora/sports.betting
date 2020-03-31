<?php

class WP_Widget_Top_Bookmakers extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'widget_recent_entries',
			'description'                 => __( 'Your site&#8217;s most recent Posts.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'recent-posts', __( 'Top Bookmakers' ), $widget_ops );
		$this->alt_option_name = 'widget_recent_entries';
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
		}
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

		$r = new WP_Query(
			apply_filters(
				'widget_posts_args',
				array(
					'post_type'           => 'bookmakers',
					'orderby'             => 'menu_order',
					'posts_per_page'      => $number,
					'no_found_rows'       => true,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				),
				$instance
			)
		);

		if ( ! $r->have_posts() ) {
			return;
		}
		?>
		<?php echo $args['before_widget']; ?>
		<?php
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
        <div class="top_bookmakers_content">
            <ul class="top_bookmakers_content_list">
				<?php foreach ( $r->posts as $recent_post ) : ?>
					<?php
					$post_title   = get_the_title( $recent_post->ID );
					$title        = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
					$small_ico    = get_field( 'small_ico', $recent_post->ID );
					$rating       = get_field( 'rating', $recent_post->ID );
					$bonus        = get_field( 'set_bonus', $recent_post->ID );
					?>
                    <li>
                        <div class="top_bookmakers_content_list_item">
                            <div class="top_bookmakers_content_list_item_img">
                                <img src="<?php echo $small_ico; ?>" alt="<?php echo $title; ?>">
                            </div>
                            <div class="top_bookmakers_content_list_item_content">
                                <div class="top_bookmakers_content_list_item_content_title">
                                    <h5><?php echo $title; ?></h5>
                                </div>
                                <div class="top_bookmakers_content_list_item_content_bonus">
                                    <h5>Бонус до <?php echo $bonus ?> RUB</h5>
                                </div>
                                <div class="top_bookmakers_content_list_item_content_go">
                                    <button><a href="<?php the_permalink( $recent_post->ID ); ?>">Сделать ставку</a></button>
                                </div>
                                <div class="top_bookmakers_content_list_item_content_rating">
                                    <i class="fas fa-star"></i> <?php echo $rating; ?>
                                </div>
                            </div>
                        </div>
						<?php if ( $show_date ) : ?>
                            <span class="post-date"><?php echo get_the_date( '', $recent_post->ID ); ?></span>
						<?php endif; ?>
                    </li>
				<?php endforeach; ?>
            </ul>
            <div class="top_bookmakers_content_button">
                <button>
                    <a href="/#">Посмотреть все<i class="fas fa-chevron-right"></i></a>
                </button>
            </div>
        </div>
		<?php
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = (int) $new_instance['number'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;

		return $instance;
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
		?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
            <input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>"
                   name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1"
                   value="<?php echo $number; ?>" size="3"/></p>

        <p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?>
                  id="<?php echo $this->get_field_id( 'show_date' ); ?>"
                  name="<?php echo $this->get_field_name( 'show_date' ); ?>"/>
            <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label>
        </p>
		<?php
	}
}


// Регистрация класса виджета
add_action( 'widgets_init', 'my_register_widgets' );
function my_register_widgets() {
	register_widget( 'WP_Widget_Top_Bookmakers' );
}
