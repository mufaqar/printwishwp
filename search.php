<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package printwish
 */

get_header();
?>






    <?php if ( have_posts() ) : ?>


		<section>
    <div class="py-6 relative md:py-16 bg-cover bg-no-repeat bg-center"
        style="background-image: linear-gradient(0deg, rgba(0, 36, 63, 0.7), rgba(0, 36, 63, 0.7)), url();">
        <div class="container mx-auto px-4 text-white">
            <h1 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2 text-center">
			<?php  
			   printf( esc_html__( 'Search Results for: %s', 'printwish' ), '<span>' . get_search_query() . '</span>' );
			?>
            </h1>
            
        </div>

    </div>
</section>




	<section class='py-16 relative'>
    <div class='max-w-screen-xl mx-auto px-4 '>

        <div class='w-full'>
            <div class='grid sm:grid-cols-2 md:grid-cols-5 grid-cols-2 gap-1 sm:gap-2 md:gap-4 '>

    <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
        </div>
    </div>
</section>



<?php

get_footer();