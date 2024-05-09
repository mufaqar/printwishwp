<?php
/**
 * Template Name: Blog
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



<main class='my-20 lg:flex lg:flex-row flex-col justify-between items-center mx-auto max-w-screen-xl px-6 md:px-6  '>
    <div class="space-y-12 ">

        <?php
                $args = array(
                    'post_type' => 'post', // Assuming your custom post type is 'post', change it if needed
                    'posts_per_page' => -1, // Display all posts
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query($args);
                ?>

        <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="container lg:flex">
            <div class="h-20 w-16 text-center">
                <span
                    class="text-accent text-3xl font-medium px-2.5 py-0 bg-background block border border-secondary"><?php the_time('j'); ?></span>
                <span
                    class="bg-secondary text-white font-normal text-sm py-1 leading-normal block box-border px-5"><?php the_time('M'); ?></span>
            </div>
            <div class="cont lg:ml-7">
                <h1>
                    <a class="lg:text-22px font-medium cursor-pointer"
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h1>
                <div
                    class="lg:text-base leading-normal text-accent pb-3 font-normal  tracking-normal pt-2 mb-4 border-b">
                    <?php the_excerpt(); ?></div>
                <div class="icons lg:flex text-black pt-1 border-b pb-4">
                    <span class="flex">
                        <li class="list-none text-base font-normal text-accent">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                                </path>
                            </svg>
                        </li>
                        <a class="text-sm font-medium text-accent lg:pl-2" href=""><?php the_author(); ?></a>
                    </span>
                    <span class="flex list-none lg:pl-2">
                        <li class="mr-6px text-lg font-normal text-accent">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 4.75C2 3.784 2.784 3 3.75 3h4.971c.58 0 1.12.286 1.447.765l1.404 2.063c.046.069.124.11.207.11h8.471c.966 0 1.75.783 1.75 1.75V19.25A1.75 1.75 0 0 1 20.25 21H3.75A1.75 1.75 0 0 1 2 19.25Zm1.75-.25a.25.25 0 0 0-.25.25v14.5c0 .138.112.25.25.25h16.5a.25.25 0 0 0 .25-.25V7.687a.25.25 0 0 0-.25-.25h-8.471a1.75 1.75 0 0 1-1.447-.765L8.928 4.61a.252.252 0 0 0-.208-.11Z">
                                </path>
                            </svg>
                        </li>
                        <a class="text-sm font-medium text-accent" href=""><?php the_category(', '); ?></a>
                    </span>

                    <a class="bg-secondary  text-xs  px-2 py-1 hover:bg-primary cursor-pointer text-white block ml-auto mr-0"
                        href="<?php the_permalink(); ?>">READ MORE...</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e('No posts found'); ?></p>
        <?php endif; ?>

    </div>

    <div class="">
        <div class="lg:ml-0 lg:w-[300px] hidden">
            <main class='items-center   max-w-screen-xl px-6 md:px-6 lg:flex lg:-mt-[590px] '>
                <div class="cont  pt-3 bg-white  border-[1px] lg:w-[250px] h-[390px] pl-[20px]">
                    <h1 class='text-[17px] font-[500] text-[#4d4d4d] leading-[32px]'>BLOG CATEGORIES</h1>

                    <div class="fot mt-10  mb-[15px] border-b-[1px] lg:w-[200px] ">
                        <h1 class='text-[17px] font-[500] mb-[15px]'>RECENT POSTS</h1>
                        <li class='font-[500] text-[17px] leading-tight list-none cursor-pointer hover:underline'>20
                            reasons why T-shirt printing is good for your business</li>
                        <p class='text-[.8em] text-[#7b858a] pt-2 font-[400] pb-[15px]'>May 3, 2021</p>
                    </div>
                    <div class="fot2 ">
                        <a class='font-[500] text-[17px] hover:underline' href="">Importance of Custom
                            T-Shirts</a><br />
                        <span class='text-[.8em] text-[#7b858a] font-[400]'>April 20, 2021</span>
                    </div>
                </div>
            </main>
        </div>
    </div>
</main>







<?php

get_footer();