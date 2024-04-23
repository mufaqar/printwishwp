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



<section class='container mx-auto px-4 my-10'>
    <div class='mb-10'>
        <h1 class='font-bold text-[#D1DE8B] text-4xl sm:text-[46px] capitalize my-4'> <?php echo "title" ?></h1>
        <p class='font-bold text-xl text-gray-600'><?php echo "subTitle" ?></p>


        <h4 class='bg-primary p-3 text-center text-white font-bold text-2xl mt-10 md:text-3xl'>Our Range of Printed T-
            shirts</h4>

        <?php get_template_part( 'components/com', 'location_products' ); ?>

        <?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>



    </div>



    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 ">
            <h2
                class="mb-6 lg:mb-8 text-3xl lg:text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                Frequently asked questions</h2>
            <div class="mx-auto max-w-screen-md">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">

                    <?php if( have_rows('faqs') ): // Check if the repeater field has rows ?>

                    <?php while( have_rows('faqs') ): the_row(); // Loop through the rows of data ?>

                    <h2 id="accordion-flush-heading-<?php echo get_row_index(); ?>">
                        <button type="button"
                            class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white"
                            data-accordion-target="#accordion-flush-body-<?php echo get_row_index(); ?>"
                            aria-expanded="true" aria-controls="accordion-flush-body-<?php echo get_row_index(); ?>">
                            <span><?php the_sub_field('question'); ?></span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-<?php echo get_row_index(); ?>" class=""
                        aria-labelledby="accordion-flush-heading-<?php echo get_row_index(); ?>">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400"><?php the_sub_field('answer'); ?></p>
                            <!-- You can add more content or links here -->
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php else: ?>
                    <p>No FAQs found.</p>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </section>






</section>


<?php

get_footer();