<?php
function custom_post_types(){
	register_post_type('testimonial',array(
        'supports' => array('title', 'editor'),
        'publicly_queryable' => true,
        'rewrite'=> array('slug' => 'testimonial' ),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => "Testimonials(CP)",
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'singular_name' => "Testimonial"
        ),
        'menu_icon' => 'dashicons-edit'
    ));

    register_post_type('our-process',array(
        'supports' => array('title', 'editor'),
        'rewrite'=> array('slug' => 'our-process' ),
        #'show_in_nav_menus'=>true,
        'has_archive' => false,
        'public' => true, 
        'labels' => array(
            'name' => "Processes(CP)",
            'add_new_item' => 'Add New process',
            'edit_item' => 'Edit Process',
            'all_items' => 'All Processes',
            'singular_name' => "Process"
        ),
        'menu_icon' => 'dashicons-edit'
    ));

    register_post_type('ingredient',array(
        'supports' => array('title', 'editor'),
        'publicly_queryable' => true,
        'rewrite'=> array('slug' => 'ingredient' ),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => "Ingredients(CP)",
            'add_new_item' => 'Add New ingredient',
            'edit_item' => 'Edit ingredient',
            'all_items' => 'All Ingredients',
            'singular_name' => "Ingredient"
        ),
        'menu_icon' => 'dashicons-edit'
    ));


    register_post_type('faq',array(
        'supports' => array('title', 'editor'),
        'publicly_queryable' => true,
        'rewrite'=> array('slug' => 'faq' ),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => "FAQs(CP)",
            'add_new_item' => 'Add New FAQ',
            'edit_item' => 'Edit FAQ',
            'all_items' => 'All FAQs',
            'singular_name' => "FAQ"
        ),
        'menu_icon' => 'dashicons-edit'
    ));

    register_post_type('candle',array(
        'supports' => array('title', 'editor'),
        'publicly_queryable' => true,
        'rewrite'=> array('slug' => 'candle' ),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => "Candles(CP)",
            'add_new_item' => 'Add New Candles',
            'edit_item' => 'Edit Candle',
            'all_items' => 'All Candles',
            'singular_name' => "Candle"
        ),
        'menu_icon' => 'dashicons-edit'
    ));

    register_post_type('soap',array(
        'supports' => array('title', 'editor'),
        'publicly_queryable' => true,
        'rewrite'=> array('slug' => 'soap' ),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => "Soaps(CP)",
            'add_new_item' => 'Add New Soaps',
            'edit_item' => 'Edit Soap',
            'all_items' => 'All Soaps',
            'singular_name' => "Soap"
        ),
        'menu_icon' => 'dashicons-edit'
    ));

};


?>