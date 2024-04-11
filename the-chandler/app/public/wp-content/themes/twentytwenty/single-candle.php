
<?php
/*
Template Name: Single Candle
*/

get_header();
?>

<main id="site-content">

    <?php

    the_post();
    get_template_part('template-parts/content', get_post_type());

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'candle',
        'posts_per_page' => 2, 
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $candle_query = new WP_Query($args);

    if ($candle_query->have_posts()) :
        while ($candle_query->have_posts()) : $candle_query->the_post();
            $post_content = get_the_content();
            echo '<div class="product-box">';
            // Centering
            echo '<div style="text-align: center;">';
            echo '<h3>' . get_the_title() . '</h3>';
            echo '</div>';

            $dom = new DOMDocument();
            $dom->loadHTML($post_content);
            $images = $dom->getElementsByTagName('img');
            $image_html = '';
            foreach ($images as $index => $img) {
                if ($index === 0) {
                    $image_html = '<img class="centered-image" src="' . $img->getAttribute('src') . '">';
                    break; 
                }
            }

            echo '<div class="product-content">';
            echo apply_filters('the_content', $post_content); 
            echo '</div>';

            // Ingredients
            echo '<div class="product-info">';
            echo '<h4>Ingredients</h4>';
            echo '<ul>';
            $relatedIngredients = get_field('related_ingredients');
            if ($relatedIngredients) {
                foreach ($relatedIngredients as $ingredient) :
                    echo '<li><a href="' . get_the_permalink($ingredient) . '">' . get_the_title($ingredient) . '</a></li>';
                endforeach;
            } else {
                echo '<li>No ingredients found.</li>';
            }
            echo '</ul>';
            echo '</div>';

            // Fragrances
            echo '<div class="product-info">';
            echo '<h4>Fragrances</h4>';
            echo '<ul>';
            $relatedFragrances = get_field('fragrance_relation');
            if ($relatedFragrances) {
                foreach ($relatedFragrances as $fragrance) :
                    echo '<li><a href="' . get_the_permalink($fragrance) . '">' . get_the_title($fragrance) . '</a></li>';
                endforeach;
            } else {
                echo '<li>No fragrances found.</li>';
            }
            echo '</ul>';
            echo '</div>';

            echo '</div>';

        endwhile;

        // Pagination
        echo '<div class="pagination" style="text-align: center;">';
        echo paginate_links(array(
            'total' => $candle_query->max_num_pages,
            'current' => $paged,
            'prev_text' => __('&laquo; Previous'),
            'next_text' => __('Next &raquo;'),
        ));
        echo '</div>';


        wp_reset_postdata();
    else :
        echo 'No candle found.';
    endif;

    ?>

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
?>
