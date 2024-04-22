<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package printwish
 */

get_header();
?>


<?php get_template_part( 'template-parts/content', 'homebanner' ); ?>
<?php get_template_part( 'components/com', 'brands' ); ?>
<?php get_template_part( 'components/com', 'reviews' ); ?>
<?php get_template_part( 'components/com', 'categories' ); ?>

<?php get_template_part( 'components/com', 'steps' ); ?>


<Steps />
<?php get_template_part( 'components/com', 'about' ); ?>

<?php get_template_part( 'components/com', 'reviews' ); ?>






<?php

get_footer();