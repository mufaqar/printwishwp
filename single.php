<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package printwish
 */

get_header();
?>

<section>
    <div class="py-6 relative md:py-16 bg-cover bg-no-repeat bg-center"
        style="background-image: linear-gradient(0deg, rgba(0, 36, 63, 0.7), rgba(0, 36, 63, 0.7)), url('');">
        <div class="container mx-auto px-4 text-white">
            <h2 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2 sm:text-left text-center">
                <?php the_title()?>
            </h2>
        </div>
    </div>
</section>


<main id="primary" class="site-main">

    <div class="container lg:flex  mx-auto px-4">

        <div class="h-20 w-16 text-center pt-6">
            <span
                class="text-accent text-3xl font-medium px-2.5 py-0 bg-background block border border-secondary"><?php the_time('j'); ?></span>
            <span
                class="bg-secondary text-white font-normal text-sm py-1 leading-normal block box-border px-5"><?php the_time('M'); ?></span>
        </div>
        <div class="cont lg:ml-7">
            <?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'blog' );

					
					

				endwhile; // End of the loop.
				?>

			</div>
			</div>

</main><!-- #main -->

<?php

get_footer();