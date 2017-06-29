<?php
/**
	 * Plugin Name: Shaugh Custom Sidebar Widget
	 * Plugin URI:	http://chrisshaughnessy.com
	 * Description:	A custom widget for use with my hello theme
	 * Version:		1.0
	 * Author:		Chris Shaughnessy
	 * Author URI:	http://chrisshaughnessy.com
	 */

class shaugh_Hello_Sidebar_Widget extends WP_Widget {
  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'hello_sidebar_widget', 'description' => 'Sidebar content for use with hello theme' );
    parent::__construct( 'hello_sidebar_widget', 'Hello Sidebar Widget', $widget_options );
  }

    // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; 
    $facebook_url = ! empty( $instance['facebook_url'] ) ? $instance['facebook_url'] : ''; 
    $twitter_url = ! empty( $instance['twitter_url'] ) ? $instance['twitter_url'] : ''; 
    $instagram_url = ! empty( $instance['instagram_url'] ) ? $instance['instagram_url'] : ''; 
    $github_url = ! empty( $instance['github_url'] ) ? $instance['github_url'] : '';
    $blurb_title = ! empty( $instance['blurb_title'] ) ? $instance['blurb_title'] : ''; 
    $blurb_content = ! empty( $instance['blurb_content'] ) ? $instance['blurb_content'] : ''; 
    $button_text = ! empty( $instance['button_text'] ) ? $instance['button_text'] : ''; 
    $button_url = ! empty( $instance['button_url'] ) ? $instance['button_url'] : '';  
    ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <hr>
    <p>
      <label for="<?php echo $this->get_field_id( 'facebook_url' ); ?>">Facebook URL:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'facebook_url' ); ?>" name="<?php echo $this->get_field_name( 'facebook_url' ); ?>" value="<?php echo esc_attr( $facebook_url ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'twitter_url' ); ?>">Twitter URL:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'twitter_url' ); ?>" name="<?php echo $this->get_field_name( 'twitter_url' ); ?>" value="<?php echo esc_attr( $twitter_url ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'instagram_url' ); ?>">Instagram URL:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'instagram_url' ); ?>" name="<?php echo $this->get_field_name( 'instagram_url' ); ?>" value="<?php echo esc_attr( $instagram_url ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'github_url' ); ?>">Github URL:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'github_url' ); ?>" name="<?php echo $this->get_field_name( 'github_url' ); ?>" value="<?php echo esc_attr( $github_url ); ?>" />
    </p>
    <hr>
    <p>
      <label for="<?php echo $this->get_field_id( 'blurb_title' ); ?>">Blurb Title:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'blurb_title' ); ?>" name="<?php echo $this->get_field_name( 'blurb_title' ); ?>" value="<?php echo esc_attr( $blurb_title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'blurb_content' ); ?>">Blurb Content:</label>
      <textarea class="widefat" rows="6" id="<?php echo $this->get_field_id( 'blurb_content' ); ?>" name="<?php echo $this->get_field_name( 'blurb_content' ); ?>"><?php echo esc_html( $blurb_content ); ?></textarea>
    </p>
    <hr>
    <p>
      <label for="<?php echo $this->get_field_id( 'button_text' ); ?>">Button Text:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'button_text' ); ?>" name="<?php echo $this->get_field_name( 'button_text' ); ?>" value="<?php echo esc_attr( $button_text ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'button_url' ); ?>">Button URL:</label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'button_url' ); ?>" name="<?php echo $this->get_field_name( 'button_url' ); ?>" value="<?php echo esc_attr( $button_url ); ?>" />
    </p>

    <?php
  }
  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    $instance[ 'facebook_url' ] = strip_tags( $new_instance[ 'facebook_url' ] );
    $instance[ 'twitter_url' ] = strip_tags( $new_instance[ 'twitter_url' ] );
    $instance[ 'instagram_url' ] = strip_tags( $new_instance[ 'instagram_url' ] );
    $instance[ 'github_url' ] = strip_tags( $new_instance[ 'github_url' ] );
    $instance[ 'blurb_title' ] = strip_tags( $new_instance[ 'blurb_title' ] );
    $instance[ 'blurb_content' ] = strip_tags( $new_instance[ 'blurb_content' ] );
    $instance[ 'button_text' ] = strip_tags( $new_instance[ 'button_text' ] );
    $instance[ 'button_url' ] = strip_tags( $new_instance[ 'button_url' ] );
    return $instance;
  }

  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    $blog_title = get_bloginfo( 'name' );
    $tagline = get_bloginfo( 'description' );
    $facebook_url = isset( $instance['facebook_url'] ) ? $instance['facebook_url'] : false;
    $twitter_url = isset( $instance['twitter_url'] ) ? $instance['twitter_url'] : false;
    $instagram_url = isset( $instance['instagram_url'] ) ? $instance['instagram_url'] : false;
    $github_url = isset( $instance['github_url'] ) ? $instance['github_url'] : false;
    $blurb_title = isset( $instance['blurb_title'] ) ? $instance['blurb_title'] : false;
    $blurb_content = isset( $instance['blurb_content'] ) ? $instance['blurb_content'] : false;
    $button_text = isset( $instance['button_text'] ) ? $instance['button_text'] : false;
    $button_url = isset( $instance['button_url'] ) ? $instance['button_url'] : false;
    
    echo $args['before_widget']; ?>
    
    <!--Widget content -->
    <div class="widget-heading">
    	<?php echo $args[ 'before_title' ] . $blog_title . $args[ 'after_title' ]; ?>
    	<span class="description"><?php echo $tagline ?></span>
    </div> 

    <div class="social-media row">
		
		<?php if ( $facebook_url ): ?>
		<a target="_blank" href="<?php echo $facebook_url; ?>" class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		</a>
		<?php endif;?>
		
		<?php if ( $twitter_url ): ?>
		<a target="_blank" href="<?php echo $twitter_url; ?>" class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		</a>
		<?php endif;?>

		<?php if ( $instagram_url ): ?>
		<a target="_blank" href="<?php echo $instagram_url; ?>" class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
		</a>
		<?php endif;?>

		<?php if ( $github_url ): ?>
		<a target="_blank" href="<?php echo $github_url; ?>" class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-github fa-stack-1x fa-inverse"></i>
		</a>
		<?php endif;?>

	</div><!-- .social-media -->
	
	<?php if ( $blurb_title ): ?>
	<div class="widget-description">

		<h4><?php echo $blurb_title; ?></h4>
		
		<?php if ( $blurb_content ): ?>
		<p class="content"><?php echo $blurb_content; ?></p>
		<?php endif; ?>
		
	</div><!-- .sidebar-inner-description -->
	<?php endif; ?>

	<?php if ( $button_url && $button_text ): ?>
	<div class="widget-resume">
		
		<a target="_blank" href="<?php echo $button_url; ?>" class="button"><i class="fa fa-download" aria-hidden="true"></i><?php echo $button_text; ?></a>

	</div>
	<?php endif; ?>

    <?php echo $args['after_widget'];
  }

}
// Enqueue plugin styles
function shaugh_register_scripts() {
	wp_enqueue_style( 'styles', plugins_url( 'styles.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'shaugh_register_scripts' );
// Register the widget.
function shaugh_register_hello_sidebar_widget() { 
	register_widget( 'shaugh_Hello_Sidebar_Widget' );
}
add_action( 'widgets_init', 'shaugh_register_hello_sidebar_widget' );
?>