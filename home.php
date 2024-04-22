<?php
/**
 * Template Name: Home
 */

get_header();
?>




<?php get_template_part( 'template-parts/content', 'homebanner' ); ?>
<?php get_template_part( 'components/com', 'brands' ); ?>
<?php get_template_part( 'components/com', 'reviews' ); ?>
<?php get_template_part( 'components/com', 'categories' ); ?>
<?php get_template_part( 'components/com', 'steps' ); ?>
<?php get_template_part( 'components/com', 'featuredproduct' ); ?>
<?php get_template_part( 'components/com', 'about' ); ?>
<?php get_template_part( 'components/com', 'reviews' ); ?>
<?php

get_footer();