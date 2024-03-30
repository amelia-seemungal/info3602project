<?php 
    function chandler_post_types1(){
        register_post_type('product', array(
            'public'=>true,
            'labels'=> array(
                'name' => "Products",
                'add_new_item'=> 'Add New Product',
                'edit_items'=> 'Edit Product',
                'all_items' => 'All Products',
                'singular_name' => 'Product'
            ),
            'menu_icon'=> 'dashicons-products',
            'rewrite'=> array('slug'=>'products'),
            'has_archive'=> true,
            'supports'=> array('title', 'editor', 'excerpt')
        ));
    }
    add_action('init', 'chandler_post_types1');

    function chandler_post_types2(){
        register_post_type('testimonial', array(
            'public'=>true,
            'labels'=> array(
                'name' => "Testimonials",
                'add_new_item'=> 'Add New Testimonial',
                'edit_items'=> 'Edit Testimonial',
                'all_items' => 'All Testimonials',
                'singular_name' => 'Testimonial'
            ),
            'menu_icon'=> 'dashicons-star-filled',
            'rewrite'=> array('slug'=>'testimonials'),
            'has_archive'=> true,
            'supports'=> array('title', 'editor', 'excerpt')
        ));
    }
    add_action('init', 'chandler_post_types2');

    function chandler_post_types3(){
        register_post_type('ingredient', array(
            'public'=>true,
            'labels'=> array(
                'name' => "Ingredients",
                'add_new_item'=> 'Add New Ingredient',
                'edit_items'=> 'Edit Ingredient',
                'all_items' => 'All Ingredients',
                'singular_name' => 'Ingredient'
            ),
            'menu_icon'=> 'dashicons-list-view',
            'rewrite'=> array('slug'=>'ingredients'),
            'has_archive'=> true,
            'supports'=> array('title', 'editor', 'excerpt')
        ));
    }
    add_action('init', 'chandler_post_types3');

    function chandler_post_types4(){
        register_post_type('fragrance', array(
            'public'=>true,
            'labels'=> array(
                'name' => "Fragrances",
                'add_new_item'=> 'Add New Fragrance',
                'edit_items'=> 'Edit Fragrance',
                'all_items' => 'All Fragrances',
                'singular_name' => 'Fragrance'
            ),
            'menu_icon'=> 'dashicons-pressthis',
            'rewrite'=> array('slug'=>'ingredients'),
            'has_archive'=> true,
            'supports'=> array('title', 'editor', 'excerpt')
        ));
    }
    add_action('init', 'chandler_post_types4'); 
?>