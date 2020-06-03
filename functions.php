<?php
/**
 * Enqueue parent styles
 */
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Add a sidebar.
 */
function vimeotheque_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Video sidebar', 'bridge' ),
		'id'            => 'vimeotheque-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all Vimeotheque video posts, categories and tags.', 'bridge' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	) );
}
add_action( 'widgets_init', 'vimeotheque_theme_slug_widgets_init' );

/**
 * Returns page title
 */
function vimeotheque_qode_title_text(){
	if( is_tax( cvm_get_category() ) || is_tax( cvm_get_tag() ) ){
		$taxonomy = get_queried_object();
		echo $taxonomy->name;
	}elseif( is_post_type_archive( cvm_get_post_type() ) ){
		_e( 'Videos', 'bridge' );
	}else{
		echo bridge_qode_get_title_text();
	}
}