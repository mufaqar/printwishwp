<?php





function cptui_register_my_cpts() {

/**
 * Post Type: Faqs.
 */

$labels = [
	"name" => esc_html__( "Faqs", "hello-elementor" ),
	"singular_name" => esc_html__( "Faq", "hello-elementor" ),
];

$args = [
	"label" => esc_html__( "Faqs", "hello-elementor" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => true,
	"can_export" => true,
	"rewrite" => [ "slug" => "faqs", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
	"show_in_graphql" => true,
	"graphql_single_name" => "Faq",
	"graphql_plural_name" => "Faqs",
];

register_post_type( "faqs", $args );

/**
 * Post Type: Locations.
 */

$labels = [
	"name" => esc_html__( "Locations", "hello-elementor" ),
	"singular_name" => esc_html__( "Location", "hello-elementor" ),
];

$args = [
	"label" => esc_html__( "Locations", "hello-elementor" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => false,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => true,
	"can_export" => false,
	"rewrite" => [ "slug" => "locations", "with_front" => true ],
	//'rewrite' => array('slug' => '/', 'with_front' => false), 
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
	"show_in_graphql" => true,
	"graphql_single_name" => "Location",
	"graphql_plural_name" => "Locations",
];

register_post_type( "locations", $args );

/**
 * Post Type: Bags.
 */

$labels = [
	"name" => esc_html__( "Bags", "hello-elementor" ),
	"singular_name" => esc_html__( "bag", "hello-elementor" ),
];

$args = [
	"label" => esc_html__( "Bags", "hello-elementor" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => true,
	"can_export" => false,
	"rewrite" => [ "slug" => "bags", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
	"show_in_graphql" => true,
	"graphql_single_name" => "Bag",
	"graphql_plural_name" => "Bags",
];

register_post_type( "bags", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
