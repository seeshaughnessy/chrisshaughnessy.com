<?php 
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="hello-sidebar" class="sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'hello_sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'hello_sidebar' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>