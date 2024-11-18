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


<?php get_template_part( 'components/header', 'bottom_banner' ); ?>

<main class="loc_banner w-full relative flex justify-center" style="background-color: #F42098">
    <img class="object-contain object-center" src="<?php echo get_template_directory_uri(); ?>/public/images/location_bg.jpg" alt="image" />
    <h2 class="absolute top-2 md:top-5 md:text-white text-2xl sm:text-4xl md:text-6xl font-semibold right-4"><?php the_title()?></h2>
</main>


<section class='container mx-auto px-4 my-10'>
    <div class='sm:mb-10 mb-5'>
        <?php if (have_rows('product_section')): ?>

            <?php while (have_rows('product_section')):
                the_row(); ?>
                <section class="grid col-span-2 lg:grid-cols-4 gap-y-10 gap-3 lg:gap-5">
                    <div class="col-span-2">
                        <h1 class='font-bold text-[#D1DE8B] text-4xl sm:text-[46px] capitalize my-4'>
                            <?php the_sub_field('title'); ?>
                        </h1>
                        <p class='font-bold text-xl text-gray-600 mb-5'>
                            <?php the_sub_field('sub_title'); ?>
                        </p>
                        <a href="<?php echo home_url('/enquire-now'); ?>" class="md:text-base text-xs bg-green-500 py-3 md:px-6 px-4 hover:bg-primary rounded-full text-white">
                            Quick Quote
                        </a>
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/loc1.jpg" alt="image" class=""/>
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/loc1.jpg" alt="image" class=""/>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="md:w-2/5 mx-auto sm:mb-10">
            <?php delivery_time(); ?>
        </div>
        <?php get_template_part('components/com', 'location_products'); ?>
        <?php get_template_part('components/com', 'gallery'); ?>
        <div class="loc_content mt-10">
            <?php
            while (have_posts()):
                the_post();

                the_content();

            endwhile; // End of the loop.
            ?>
        </div>

        <section class="bg-white sm:mb-10 mb-5">
            <div class="">
                <?php if (have_rows('faqs')): // Check if the repeater field has rows ?>
                    <h2 class="mb-6 lg:mb-8 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">
                        Frequently asked questions</h2>
                    <div class="mx-auto ">
                        <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-gray-900"
                            data-inactive-classes="text-gray-500" class="flex flex-col gap-2">
                            <?php while (have_rows('faqs')):
                                the_row(); // Loop through the rows of data ?>

                                <div class="bg-white p-3 px-5 border border-gray-200 font-opensans cursor-pointer">
                                    <h2 id="accordion-flush-heading-<?php echo get_row_index(); ?>">
                                        <button type="button"
                                            class="flex justify-between items-center w-full font-medium hover:text-secondary"
                                            data-accordion-target="#accordion-flush-body-<?php echo get_row_index(); ?>"
                                            aria-expanded="true"
                                            aria-controls="accordion-flush-body-<?php echo get_row_index(); ?>">
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
                                        <p class="mt-4 text-gray-500"><?php the_sub_field('answer'); ?></p>
                                        <!-- You can add more content or links here -->
                                    </div>
                                </div>

                            <?php endwhile; ?>

                        <?php else: ?>

                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </section>
        <?php get_template_part('components/com', 'reviews'); ?>
</section>


<?php

get_footer();