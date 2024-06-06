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

<!-- <section>
    <div class="py-6 relative md:py-16 bg-cover bg-no-repeat bg-center"
        style="background-image: linear-gradient(0deg, rgba(0, 36, 63, 0.7), rgba(0, 36, 63, 0.7)), url('');">
        <div class="container mx-auto px-4 text-white">
            <h2 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2 sm:text-left text-center">
                <?php the_title() ?>
            </h2>
        </div>
    </div>
</section> -->


<main id="primary" class="site-main py-10 bg-gray-100">
    <div class="container mx-auto px-4 flex md:flex-row flex-col gap-7">
        <div class="cont md:w-2/3 w-full bg-white p-5">
            <?php
            while (have_posts()):
                the_post();

                get_template_part('template-parts/content', 'blog');
            endwhile; // End of the loop.
            ?>
        </div>
        <aside class="md:w-1/3 w-full">
            <div class=''>
                <h2 class="md:text-xl text-lg font-semibold text-white text-center py-3 bg-secondary">
                    RELATED PRODUCTS
                </h2>
                <div class="bg-white p-3 flex flex-col gap-5">
                    <div class="flex md:flex-row flex-row gap-3 items-center">
                        <div class="w-1/3">
                            <img src="https://printwish.co.uk/wp-content/themes/printwishwp/public//images/6.webp"
                                alt="feature" class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <a href="#" class="text-sm font-normal text-black hover:text-primary">
                                Cami Top With Gym Pants For Women
                            </a>
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-row gap-3 items-center">
                        <div class="w-1/3">
                            <img src="https://printwish.co.uk/wp-content/themes/printwishwp/public//images/6.webp"
                                alt="feature" class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <a href="#" class="text-sm font-normal text-black hover:text-primary">
                                Cami Top With Gym Pants For Women
                            </a>
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-row gap-3 items-center">
                        <div class="w-1/3">
                            <img src="https://printwish.co.uk/wp-content/themes/printwishwp/public//images/6.webp"
                                alt="feature" class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <a href="#" class="text-sm font-normal text-black hover:text-primary">
                                Cami Top With Gym Pants For Women
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='mt-10'>
                <h2 class="md:text-xl text-lg font-semibold text-white text-center py-3 bg-secondary">
                    RECENT POSTS
                </h2>
                <div class="bg-white p-3 flex flex-col divide-y divide-black/20">
                    <div class="flex md:flex-row flex-row gap-3 items-center py-4">
                        <div class="w-1/3">
                            <img src="https://printwish.co.uk/wp-content/themes/printwishwp/public//images/6.webp"
                                alt="feature" class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <a href="#" class="text-sm font-normal text-black hover:text-primary">
                                Cami Top With Gym Pants For Women
                            </a>
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-row gap-3 items-center py-4">
                        <div class="w-1/3">
                            <img src="https://printwish.co.uk/wp-content/themes/printwishwp/public//images/6.webp"
                                alt="feature" class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <a href="#" class="text-sm font-normal text-black hover:text-primary">
                                Cami Top With Gym Pants For Women
                            </a>
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-row gap-3 items-center py-4">
                        <div class="w-1/3">
                            <img src="https://printwish.co.uk/wp-content/themes/printwishwp/public//images/6.webp"
                                alt="feature" class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <a href="#" class="text-sm font-normal text-black hover:text-primary">
                                Cami Top With Gym Pants For Women
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</main><!-- #main -->

<?php

get_footer();