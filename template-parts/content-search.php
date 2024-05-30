<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package printwish
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php  
	
	$args = [get_the_ID()];
	get_template_part('components/widget/product', 'box', $args);?>



    <footer class="entry-footer">
        <?php printwish_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->