<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package printwish
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header ">

        <h1>
            <a class="entry-title text-2xl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <?php		

		if ( 'post' === get_post_type() ) :
			?>
        <div
            class="entry-meta mt-5 py-5 lg:text-base leading-normal text-accent pb-3 font-normal  tracking-normal pt-2 mb-4 border-b border-t">
            <?php
				printwish_posted_on();
				printwish_posted_by();
				?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php printwish_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'printwish' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		
		?>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->