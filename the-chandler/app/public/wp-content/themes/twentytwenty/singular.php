<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php $args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1, // Display all testimonials
    'orderby' => 'date',
    'order' => 'DESC'
);

$testimonials = new WP_Query( $args );

if ( $testimonials->have_posts() ) :
    while ( $testimonials->have_posts() ) : $testimonials->the_post();
        // Display testimonial content
        echo '<div class="testimonial">';
        echo '<h3>' . get_the_title() . '</h3>';
        echo '<div class="testimonial-content">' . get_the_content() . '</div>';
        // You can add more elements like author name, image, etc.
        echo '</div>';
    endwhile;
    wp_reset_postdata();
else :
    echo 'No testimonials found.';
endif; ?>

<?php
get_footer();
?>