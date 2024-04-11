<?php
/*
Template Name: Single Testimonial
*/

get_header();
?>


<main id="site-content">

	<?php

    the_post();
    get_template_part( 'template-parts/content', get_post_type() );

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 2, 
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $testimonial_query = new WP_Query( $args );

    if ( $testimonial_query->have_posts() ) :
        while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post();
            echo '<div class="testimonial-box">';
            echo '<div class="testimonial testimonial-centered">';
            echo '<div class="testimonial-content">' . get_the_content() . '</div>';
            echo '<h3>' . the_field('reviewer_name') . '</h3>';
            echo '<h3>' . the_field('reviewtestimonial') . '</h3>';
            echo '</div>';
            echo '</div>';
        endwhile;

        // Pagination links
        echo '<div class="pagination pagination-centered">';
        echo paginate_links( array(
            'total' => $testimonial_query->max_num_pages,
            'current' => $paged,
            'prev_text' => ( '&laquo; Previous' ),
            'next_text' => ( 'Next &raquo;' ),
        ) );
        echo '</div>';

        wp_reset_postdata();
    else :
        echo 'No testimonials found.';
    endif;

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
?>