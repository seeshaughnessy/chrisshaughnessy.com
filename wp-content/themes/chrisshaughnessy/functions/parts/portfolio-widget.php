<?php 
// This file handles my portfolio sidebar

// Register and load the widget
function cas_load_widget() {
	register_widget( 'cas_portfolio_widget' );
}
add_action( 'widgets_init', 'cas_load_widget' );

// Creating the widget 
class cas_portfolio_widget extends WP_Widget {

	function __construct() {
		parent::__construct(

			// Base ID of your widget
			'cas_portfolio_widget', 

			// Widget name will appear in UI
			__('Portfolio Widget', 'chris_shaughnessy'), 

			// Widget description
			array( 'description' => __( 'This widget adds portfolio post types to the sidebar', 'chris_shaughnessy' ), ) 
			);
	}

	/**
	 * Create front end for widget
	 * @param  [type] $args     [Widget arguments]
	 * @param  [type] $instance [Current instance of the widget]
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		 // Create and run custom loop
		 $filter = array( 
		 	'post_type' => 'portfolio',
		 	'posts_per_page' => 5,
		 	'post__not_in' => array( get_the_ID() )
		 	);

		 $custom_posts = new WP_Query( $filter );
		 // $custom_posts->query( $args );

		 while ($custom_posts->have_posts()) : $custom_posts->the_post();

		 ?>

		 <a href="<?php the_permalink(); ?>"><li id="<?php the_ID(); ?>" class="portfolio-item"><?php the_post_thumbnail( 'medium' ); ?><h5><?php the_title(); ?></h5></li></a>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php

		// echo __( 'Hello, World!', 'chris_shaughnessy' );
		echo $args['after_widget'];
	}

	/**
	 * Widget Backend
	 * @param  [type] $instance [Current instance]
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'chris_shaughnessy' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
	
	/**
	 * Updating widget replacing old instances with new
	 * @param  [type] $new_instance [New instance]
	 * @param  [type] $old_instance [Old instance]
	 * @return [type]               [Updated instance]
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here