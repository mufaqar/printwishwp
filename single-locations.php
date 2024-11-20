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

<section style="background:#F42098">
    <div class="container mx-auto relative">
        <Image src="<?php bloginfo('template_directory'); ?>/public/images/location_bg.jpg" alt="slide-1.webp" width="1920px"
            height="620px" class='object-cover w-full h-full object-center mx-auto' />
            <h2 class="top-2 absolute right-4 md:top-5 text-white sm:text-4xl md:text-6xl font-semibold ">
            <?php the_title()?></h2>
        </div>
    </div>
</section>


<section class='container mx-auto px-4 mb-10 mt-4 loc'>
    <div class='sm:mb-10 mb-5'>
        <?php if (have_rows('product_section')): ?>

            <?php while (have_rows('product_section')):
                the_row(); ?>
                
                <section class="grid col-span-2 lg:grid-cols-4 gap-y-10 gap-3 lg:gap-6">
                    <div class="col-span-2">
                        <h1 class='font-bold text-[#D1DE8B] text-2xl sm:text-[46px] capitalize my-4'>
                            <?php the_sub_field('title'); ?>
                        </h1>
                        <p class=' text-black mb-8'>
                            <?php the_sub_field('sub_title'); ?>
                        </p>
                        <a href="<?php echo home_url('/enquire-now'); ?>" class="font-bold text-xl bg-green-500 py-3 md:px-6 px-4 hover:bg-primary rounded-full text-white">
                            Quick Quote
                        </a>
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/loc1.jpg" alt="image" class="h-full object-cover"/>
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/loc2.jpg" alt="image" class="h-full object-cover"/>
                    </div>
                </section>

                <section class="mt-10">
                    <h1 class='font-bold text-[#D1DE8B] text-2xl sm:text-[46px] capitalize my-4'>
                        Our Printed T-Shirt Ranges
                    </h1>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-5 mt-8">
                        <a href="/custom-t-shirt-printing-cheap-t-shirt-printing">
                            <div class="r_wrapper">
                                <img src="https://d3q2yfvvgjmjhk.cloudfront.net/city_pages/mens-tees-2.jpg" alt=""/>
                                <h5 class="text-sm md:text-base px-2 md:px-5 ">Mens T-Shirts</h5>
                            </div>
                        </a>
                        <a href="/custom-t-shirt-printing-cheap-t-shirt-printing">
                            <div class="r_wrapper">
                                <img src="https://d3q2yfvvgjmjhk.cloudfront.net/city_pages/womens-tees-2.jpg" alt=""/>
                                <h5 class="text-sm md:text-base px-2 md:px-5">Womens T-Shirts</h5>
                            </div>
                        </a>
                        <a href="/custom-t-shirt-printing-cheap-t-shirt-printing">
                            <div class="r_wrapper">
                                <img src="https://d3q2yfvvgjmjhk.cloudfront.net/city_pages/kids-tees-2.jpg" alt=""/>
                                <h5 class="text-sm md:text-base px-2 md:px-5">Kids T-Shirts</h5>
                            </div>
                        </a>
                        <a href="/custom-t-shirt-printing-cheap-t-shirt-printing">
                            <div class="r_wrapper">
                                <img src="https://d3q2yfvvgjmjhk.cloudfront.net/city_pages/sports-tees-2.jpg" alt=""/>
                                <h5 class="text-sm md:text-base px-2 md:px-5">Sports T-Shirts</h5>
                            </div>
                        </a>
                    </div>
                </section>

                <section class="grid col-span-2 lg:grid-cols-4 mt-10 gap-y-10 gap-3 lg:gap-8">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/loc2.jpg" alt="image" class="h-full object-cover"/>
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/loc1.jpg" alt="image" class="h-full object-cover"/>
                    </div>    
                    <div class="col-span-2">
                        <h1 class='font-bold text-[#D1DE8B] text-2xl sm:text-[46px] capitalize my-4'>
                            Quick Delivery
                        </h1>
                        <p class=' text-black mb-8'>
                        Most <?php the_title()?> embroidery and printing orders can be delivered within 7-14 days however we will always do our best to work to your timescale. If your order is needed for a specific date then please get in touch using the links at the top of this page and speak to our experienced staff, they'll let you know if we are currently in a position to expedite your order. They can of course also advise you on the best t-shirts, polo shirts, sweatshirts, hoodies etc for your custom logo and arrange a quote.
                        </p>
                        <a href="<?php echo home_url('/enquire-now'); ?>" class="font-bold text-xl bg-green-500 py-3 md:px-6 px-4 hover:bg-primary rounded-full text-white">
                            Quick Quote
                        </a>
                    </div>
                </section>

                <section class="my-10">
                    <h1 class='font-bold text-[#D1DE8B] text-2xl sm:text-[46px] capitalize my-4'>
                        Printing and Embroidery Services in <?php the_title()?>
                    </h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-5 md:gap-6">
                        <div class="service_wrapper">
                            <h5>Embroidery</h5>
                            <p>Embroidery is the most durable and popular decoration option.  An embroidery is typically a left chest size although nape of the neck, sleeve and back embroidery is also possible.  Embroidery can be in multi colours at no extra cost.  Embroidery is stitched directly through the garment and is therefore extremely durable.</p>
                        </div>
                        <div class="service_wrapper">
                            <h5>Screen Printing</h5>
                            <p>Screen printing offers a hard wearing soft finish and is perfect for larger orders of 50 garments plus.  Screen printing is used for printing in 1 or 2 colours and is best suited for small detail or larger print areas.  A mesh silk screen is developed and then each colour is printed onto the garment.</p>
                        </div>
                        <div class="service_wrapper">
                            <h5>DTG</h5>
                            <p>Direct to Garment Printing is the method of printing where you print directly onto the material of the garment. It allows the garment to feel softer & the print becomes part of the garment. DTG printing can be printed in full colour and is best printed onto cotton or poly/cotton garments.</p>
                        </div>
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