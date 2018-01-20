<?php add_theme_support( 'custom-header' ); ?>
<?php add_theme_support( 'menus' ); ?>
<?php add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'primary' => __( 'primary' ),
'prenav' => __( 'prenav' ),
'footernav' => __( 'footernav' )
)
);
}
?>
<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'category-thumb', 320, 9999 ); //300 pixels wide (and unlimited height)
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'page-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="page-widget-name">',
        'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'blog-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="page-widget-name">',
        'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'footer-sidebar',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<div class="footer-widget-name">',
        'after_title' => '</div>',
));
}

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...<div style="clear:both;"></div><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More &raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}
?>