<?php 
// This file handles my portfolio functions

/**
 * Add featured Image URL custom field to metabox
 * @param [type] $content [Metabox content]
 * @param [type] $post_id [Post ID]
 * @return $content 
 */
function add_featured_image_url_field ( $content, $post_id ) {
	$field_id		= 'featured_image_url';
	$field_value	= esc_attr( get_post_meta( $post_id, $field_id, true) );
	$field_text		= esc_html( 'External URL', 'generatewp' );

	$field_label = sprintf(
		'<p><label for=%1$s">%3$s</label><br><input class="widefat" type="text" name="%1$s" id="%1$s" value="%2$s"></p>',
		$field_id, $field_value, $field_text
	);

	return $content .= $field_label;
}
add_filter( "admin_post_thumbnail_html", 'add_featured_image_url_field', 10, 2 );

/**
 * Save/update featured image url field data
 * @param  [type] $post_ID [Post ID]
 * @param  [type] $post    [post]
 * @param  [type] $update  [Update]
 */
function save_featured_image_url_field( $post_ID, $post, $update ) {
	$field_id		= "featured_image_url";
	$post_meta 		= isset( $_REQUEST[ $field_id ] ) ? $_REQUEST[ $field_id ] : '';
	$field_value	= isset( $_REQUEST[ $field_id ] ) ? $post_meta : '';

	update_post_meta( $post_ID, $field_id, $field_value );
}
add_action( 'save_post', 'save_featured_image_url_field', 10, 3 );

/**
 * If featured url field is set, add href to featured Image with blank target
 * @param  string $thumb_size [pass through the featured_image post thumbnail size]
 */
function featured_image_with_url( $thumb_size= '' ) {
	$post_id = get_the_ID();
	$featured_image_url = esc_url( get_post_meta( $post_id, 'featured_image_url', true) );

	if ( $featured_image_url) {
    	echo '<p><a target="_blank" href="' . $featured_image_url . '">' . get_the_post_thumbnail( $post_id, $thumb_size ) . '</a><p>';
	} else {
    	echo the_post_thumbnail( $thumb_size );
	}
}