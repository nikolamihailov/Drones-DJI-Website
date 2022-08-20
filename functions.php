<?php
register_nav_menu('top-menu', 'Menu Top');


function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


add_theme_support( 'post-thumbnails' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

register_sidebar(array(
	'name' => __( 'Right Sidebar' ),
	'id' => 'right-sidebar',
	'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<div class="sidebar">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="header"><h6><span class="widget-title">',
	'after_title'   => '</span></h6></div>'
));


