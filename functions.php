<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', 'thumbnail' );
}

/**
 * Add menu.
 */

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'top_menu' => ( "top_menu" ),
            'main_menu'  => ( "main_menu" ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
    }


/**
 * Add a sidebar.
 */

{
	register_sidebar( array(
		'name'          => "تبلیغات وسط",
		'id'            => 'artabaz_middle_ads',
		'description'   => "ابزارک تبلیغات وسط",
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

{
	register_sidebar( array(
		'name'          => "تبلیغات ساید بار",
		'id'            => 'artabaz_sidebar_ads',
		'description'   => "ابزارک  وسط",
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

//add post type for footer(hamian ma)
	add_action('init', 'create_post_type');

function create_post_type(){
	register_post_type( 'support',
	array(
		'labels' => array(
			'name'=>"hamian",

		),
		'public'=> true,
		'has_archive'=> true,
           
	)
	);
	
}
}

?>