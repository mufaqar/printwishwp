<?php
/**
 * Template Name: Locations
 */

get_header();
?>


<section class="container mx-auto px-4 my-16">
    <h4 class="text-secondary text-2xl md:text-3xl">Locations</h4>
    <ul class="grid mt-8 grid-col-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
        <?php
        $args = array(
            'post_type' => 'locations', 
            'posts_per_page' => -1
        );

        $locations_query = new WP_Query($args);

        if ($locations_query->have_posts()) :
            $idx = 1;
            while ($locations_query->have_posts()) : $locations_query->the_post();
        ?>
        <li>
            <span class="text-gray-500 mr-1"><?php echo $idx; ?>.</span>
            <a href="<?php the_permalink(); ?>"
                class="cursor-pointer tracking-wider font-light hover:underline text-secondary capitalize">
                T-Shirt Printing <?php the_title(); ?>
            </a>
        </li>
        <?php
                $idx++;
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </ul>
</section>

<?php get_template_part( 'components/com', 'reviews' ); ?>
<?php

get_footer();