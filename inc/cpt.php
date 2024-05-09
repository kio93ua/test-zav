<?php

add_action( 'init', 'lacross_slider' );
function lacross_slider() {
	register_post_type( 'slider', array(
		'labels'       => array(
			'name'          => __( 'Slider', 'lacross' ),
			'singular_name' => __( 'Slider', 'lacross' ),
			'add_new'       => __( 'Add new slide', 'lacross' ),
			'add_new_item'  => __( 'New slide', 'lacross' ),
			'edit_item'     => __( 'Edit', 'lacross' ),
			'new_item'      => __( 'New slide', 'lacross' ),
			'view_item'     => __( 'View', 'lacross' ),
			'menu_name'     => __( 'Slider', 'lacross' ),
			'all_items'     => __( 'All slides', 'lacross' ),
		),
		'public'       => true,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'menu_icon'    => 'dashicons-format-gallery',
		'show_in_rest' => true,
	) );
}
