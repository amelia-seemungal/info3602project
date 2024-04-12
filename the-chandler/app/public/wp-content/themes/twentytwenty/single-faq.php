<?php
/*
Template Name: Single FAQ
*/

get_header();
?>


<main id="site-content">

	<?php

    the_post();
    get_template_part( 'template-parts/content', get_post_type() );

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'faq',
        'posts_per_page' => 20, 
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'ASC'
    );
    // query testingg
    $args2 = array(
        'post_type' => 'faq',
        'posts_per_page' => 20, // argument to only show post that are not related to Soap
        'paged' => $paged,
        'meta_key'=>'type_of_product',
        'meta_compare' => '!=',
        'meta_value'=>'Soap',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    );


    $faq_query = new WP_Query( $args );

    if ( $faq_query->have_posts() ) :
        while ( $faq_query->have_posts() ) : $faq_query->the_post();
            echo '<div class="faq-box">';
            echo '<div class="faq faq-centered">';
            echo '<div class="faq-content">' . get_the_content() . '</div>';
            echo '<h1 class="question-title">' . the_field('question') . '</h1>'; 
            echo '<h3>' . the_field('answer') . '</h3>';
            echo '</div>';
            echo '</div>';
        endwhile;

        // Pagination 
        echo '<div class="pagination pagination-centered">';
        echo paginate_links( array(
            'total' => $faq_query->max_num_pages,
            'current' => $paged,
            'prev_text' => __( '&laquo; Previous' ),
            'next_text' => __( 'Next &raquo;' ),
        ) );
        echo '</div>';

        wp_reset_postdata();
    else :
        echo 'No faqs found.';
    endif;
    ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
?>
