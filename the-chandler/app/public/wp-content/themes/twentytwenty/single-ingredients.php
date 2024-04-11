<?php
/*
Template Name: Single Ingredients
*/

get_header();
?>


<main id="site-content">

	<?php

    the_post();
    get_template_part( 'template-parts/content', get_post_type() );

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'ingredient',
        'posts_per_page' => 1,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $ingredients_query = new WP_Query( $args );

    if ( $ingredients_query->have_posts() ) :
        while ( $ingredients_query->have_posts() ) : $ingredients_query->the_post();
            $post_content = get_the_content();

            // extract the images
            $dom = new DOMDocument();
            $dom->loadHTML($post_content);
            $images = $dom->getElementsByTagName('img');
            $image_html = '';
            foreach ($images as $index => $img) {
                if ($index === 0) {
                    $image_html .= '<img class="centered-image" ' . $img->getAttribute('src') . '>';
                } else {
                    $post_content = str_replace($dom->saveHTML($img), '', $post_content);
                }
            }
            
            echo '<div class="ingredients">';
            echo '<div class="ingredients-content">';
            
            // Center 
            echo '<div style="text-align: center;">';
            echo '<h3>' . get_the_title() . '</h3>';
            echo '</div>';
            echo '<div style="text-align: center;">';
            echo '</div>';
            
            echo apply_filters('the_content', $image_html . $post_content); 
            $video_url = get_field('video_source_'); 
            echo '<div style="text-align: center;">';
            ?><a href="<?php echo esc_url($video_url); ?>"><h5>Click here for more information!</h5></a>
        <?php
            echo '</div>';
            echo '</div>';
            echo '</div>';
        endwhile;

        // Pagination
        echo '<div class="pagination-container">';
        echo '<div class="pagination">';
        echo paginate_links( array(
            'total' => $ingredients_query->max_num_pages,
            'current' => $paged,
            'prev_text' => ( '&laquo; Previous' ),
            'next_text' => ( 'Next &raquo;' ),
        ) );
        echo '</div>';
        echo '</div>';

        wp_reset_postdata();
    else :
        echo 'No ingredients found.';
    endif;

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
?>