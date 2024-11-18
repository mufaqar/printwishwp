<?php
/**
 * Template Name: Reviews
 */

get_header();
?>


<section class="container mx-auto px-4 my-16">
    <h4 class="text-secondary text-center text-2xl md:text-3xl"><?php the_title()?></h4>

</section>

<?php get_template_part( 'components/com', 'reviews' ); ?>
<?php

get_footer();