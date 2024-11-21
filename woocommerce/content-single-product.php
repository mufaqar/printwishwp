<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

$product_price = $product->get_price();

$product_excerpt = get_the_excerpt();
$product_content = get_the_content();
$sku = $product->get_sku();
$short_description = $product->get_short_description();


?>


<section class="shadow p-3 hidden md:block">
    <div class="container mx-auto px-4 flex flex-wrap justify-center items-center gap-5">
        <a href="#"
            class="flex border-r-[2px] border-accent px-6 item-center hover:text-secondary gap-2 text-base uppercase text-accent">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" class="text-2xl text-secondary" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z">
                </path>
            </svg>
            <p>25 MINIMUM ORDER VALUE</p>
        </a>
        <a href="#"
            class="flex border-r-[2px] border-accent px-6 item-center hover:text-secondary gap-2 text-base uppercase text-accent">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny"
                viewBox="0 0 24 24" class="text-2xl text-secondary" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.972 6.251c-.967-.538-2.185-.188-2.72.777l-3.713 6.682-2.125-2.125c-.781-.781-2.047-.781-2.828 0-.781.781-.781 2.047 0 2.828l4 4c.378.379.888.587 1.414.587l.277-.02c.621-.087 1.166-.46 1.471-1.009l5-9c.537-.966.189-2.183-.776-2.72z">
                </path>
            </svg>
            <p>PRICE MATCH PROMISE</p>
        </a>
        <a href="#"
            class="flex border-r-[2px] border-accent px-6 item-center hover:text-secondary gap-2 text-base uppercase text-accent">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" class="text-2xl text-secondary" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                <path d="M3 9l4 0"></path>
            </svg>
            <p>FREE UK DELIVERY.</p>
        </a>
        <a href="#" class="flex px-6 item-center hover:text-secondary gap-2 text-base uppercase text-accent">
            <img src="<?php bloginfo('template_directory'); ?>/public/images/review-badge.svg" alt="rating" width="224"
                height="42" class="w-56" />
        </a>
    </div>
</section>



<div class="block md:hidden px-3 container mx-auto">
    <div class="mt-5 flex justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/public/images/review-badge.svg" alt="rating" width="200"
            height="37" />
    </div>

    <h2 class="text-xl md:text-3xl lg:text-4xl font-medium mt-6 md:mt-0">
        <?php the_title() ?>
    </h2>
    <p class="mt-4 font-normal text-accent">Product Code: <span class=""><?php echo $sku; ?></span></p>
</div>
<main class='md:flex container mx-auto px-4 gap-10 mt-7 font-opensans mb-20'>
    <section class='md:w-2/5 image-slider'>
         <!-- <?php
        $product_id = $product->get_id();
        $gallery_images = $product->get_gallery_image_ids();
        $image_path = get_the_post_thumbnail_url($product_id, 'full');
        $settings = array(
            'dots' => true,
            'infinite' => true,
            'speed' => 500,
            'slidesToShow' => 1,
            'slidesToScroll' => 1
        );
        echo '<div class="slick-slider" data-settings="' . esc_attr(json_encode($settings)) . '">';
        if (!empty($gallery_images)) {
            foreach ($gallery_images as $image_id) {
                $image_url = wp_get_attachment_url($image_id);
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                echo '<div>';
                echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" width="600" height="600" class="w-full rounded-lg" />';
                echo '<h5 class="text-center font-semibold text-lg capitalize mb-3">' . esc_html($image_alt) . '</h5>';
                echo '</div>';
            }
        } else {
            echo '<img src="' . esc_url($image_path) . '" alt="' . esc_attr($product->get_name()) . '" width="600" height="600" class="w-full rounded-lg" />';
        }

        echo '</div>';
        ?> -->
       

        <div class="gallery_slider border border-gray-200 rounded-lg p-1">
            <?php

            if (!empty($gallery_images)) {
                foreach ($gallery_images as $idx => $item):
                    $image_url = wp_get_attachment_url($item);
                    $image_alt = get_post_meta($item, '_wp_attachment_image_alt', true); ?>
            <div>
                <?php
                        echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($product->get_name()) . '" width="600" height="600" class="w-full rounded-lg" />';
                        echo '<h5 class="text-center font-semibold text-lg capitalize mb-3">' . esc_html($image_alt) . '</h5>';
                        ?>
            </div>
            <?php endforeach;
            } else {

                echo '<img src="' . esc_url($image_path) . '" alt="' . esc_attr($product->get_name()) . '" width="600" height="600" class="w-full rounded-lg" />';


            } ?>
        </div>
        <div class='mt-5 md:w-full w-3/4 mx-auto text-lg text-white bg-secondary   font-medium text-center py-2.5'>
            Printed From <?php echo wc_price($product_price) ?> Ex Vat

        </div>
        <div class="md:hidden">
            <a href="#product-popup"
                class=' open-popup-link flex w-full md:w-1/3 justify-center uppercase font-medium items-center mt-6 border border-primary gap-2 py-3 bg-primary text-white px-6 hover:text-white hover:bg-secondary rounded-md'>
                Get a quote
            </a>
            <div class='font-extrabold text-secondary text-center py-2.5'>
                Minimum Order Quantity:<span class='text-black'> 25</span>
            </div>
            <div class='font-medium  md:text-center py-2.5'>
                <span class='text-secondary text-left'> Note: </span> We have flexible pricing options that can be customised to
                suit your order volume and the number of colors in your design. This allows us to offer more affordable
                and competitive rates to our valued customers. Unfortunatily, we cannot disclose prices on our website.
                To receive the most advantageous and competitive quote, please send us your order inquiry and we will
                respond promptly with our best pricing offer.
            </div>
            
        </div>

        <section class="bg-background p-6 md:p-8 mt-5 rounded-lg">
            <div class="flex flex-col items-center ">
                <!-- Toggle Buttons -->
                <div class="flex space-x-4">
                    <button id="descriptionButton"
                        class="px-4 py-2 text-secondary   border-b hover:border-secondary  focus:outline-none">
                        DESCRIPTION
                    </button>
                    <button id="detailsButton"
                        class="px-4 py-2 text-secondary   border-b hover:border-secondary  focus:outline-none">
                        DETAILS
                    </button>
                </div>
                <div id="descriptionContent" class=" p-4   hidden">
                    <div>

                        <h6 class='capitalize text-lg font-bold text-gray-600 mt-3 font-roboto'>features:</h6>
                        <div class='mt-2 pl-4 text-accent _features'><?php echo ($product_content); ?></div>
                        <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Fabric:</h6>
                        <p class='text-accent'><?php echo get_field("fabric"); ?></p>
                        <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Weight:</h6>
                        <p class='text-accent'><?php echo get_field("weight"); ?></p>
                        <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Size
                            Description:
                        </h6>
                        <?php
                        global $product;
                        $product_id = $product->get_id();
                        $product = wc_get_product($product_id);
                        $attributes = $product->get_attributes();
                        if (isset($attributes['pa_sizes'])) {
                            $terms = wc_get_product_terms($product_id, 'pa_sizes', array('fields' => 'all'));
                            if ($terms && !is_wp_error($terms)) {
                                echo '<ul class="mt-2 flex flex-wrap gap-x-2">';
                                foreach ($terms as $term) {
                                    echo '<li class="text-accent mb-1"><span class="font-bold">' . esc_html($term->name) . ' </span> ' . esc_html($term->description) . '",</li>';
                                }
                                echo '</ul>';
                            } else {
                                echo '<p class="text-accent mb-1">No sizes available</p>';
                            }
                        }
                         ?>
                        <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Washing
                            Instructions:</h6>
                        <p class='text-accent'><?php echo get_field("washing_instructions"); ?></p>

                        <div class='text-sm md:text-base text-accent mt-6 block md:hidden'>
                            <?php echo $short_description; ?>
                        </div>
                    </div>
                </div>

                <div id="detailsContent" class=" p-4   hidden">
                    <div>
                        <div>
                            <div class='flex justify-between items-center border-b py-2 border-gray-200'>
                                <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Gender:
                                </h6>
                                <p class='text-accent'><?php echo get_field("gender"); ?></p>
                            </div>
                            <div class='flex justify-between items-center border-b py-2 border-gray-200'>
                                <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Minimum
                                    Order Value is</h6>
                                <p class='text-accent'><?php echo get_field("minimum_order"); ?> Units</p>
                            </div>
                            <div class='border-b py-2 border-gray-200'>
                                <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Imprint
                                    Area:</h6>



                                <?php if (have_rows('imprint_area')): ?>
                                <?php while (have_rows('imprint_area')):
                                    the_row();

                                    // Get sub field values.
                                    $leftbreast = get_sub_field('leftbreast');
                                    $front = get_sub_field('front');
                                    $back = get_sub_field('back');



                                    ?>
                                <p class='text-accent mb-1 flex justify-between items-center'><span
                                        class='font-bold text-gray-600 '>LeftBreast:</span>
                                    <?php echo $leftbreast ?></p>

                                <p class='text-accent mb-1 flex justify-between items-center'><span
                                        class='font-bold text-gray-600 '>Front:</span>
                                    <?php echo $front ?></p>
                                <p class='text-accent mb-1 flex justify-between items-center'><span
                                        class='font-bold text-gray-600 '>Back:</span>
                                    <?php echo $back ?></p>

                                <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                            <div class=' border-b py-2 border-gray-200'>
                                <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Imprint
                                    Method:</h6>
                                <p class='text-accent'><?php echo get_field("imprint_method"); ?></p>
                            </div>
                            <div class=' border-b py-2 border-gray-200'>
                                <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>Ready
                                    To
                                    Ship:</h6>
                                <p class='text-accent'><?php echo get_field("ready_to_ship"); ?></p>
                            </div>
                            <div class=' border-b py-2 border-gray-200'>
                                <h6 class='capitalize mb-1 text-lg text-gray-600 font-semibold mt-3 font-roboto'>
                                    Packaging:
                                </h6>
                                <p class='text-accent'><?php echo get_field("packaging"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='my-7 bg-background p-8 rounded-lg flex justify-between items-center md:hidden'>
            <p class='text-lg text-accent font-roboto'>Customisations Available:</p>
            <div class='flex gap-8 '>
                <span class='flex items-center text-lg text-accent font-roboto'>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        class="text-green-500" height="28" width="28" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    Print
                </span>
            </div>
        </section>

        <section class='container mx-auto px-3 my-10 md:hidden block'>
            <h2 class="text-2xl text-center text-primary font-bold leading-4">How To Order?</h2>
            <div class="bg-[#D9EDF7] w-full mt-4 text-center py-4 font-[700] leading-[1.2em] text-[#070505] ">
                <p>Send us a quote request to get your favourite product at the best  and trade price. </p>
            </div>
            <div class="grid  text-center gap-5 font-[500] grid-cols-2 px-5">
                <div class="border w-full border-none flex flex-col items-center ">
                    <Image width="166px" height="166px"
                        src="<?php bloginfo('template_directory'); ?>/public/images/iocns-01.png" alt="" class="" />
                    <p class="text-xs md:text-base">Pick your items, select the quantity and sizes.</p>
                </div>
                <div class="border w-full border-none flex flex-col items-center">
                    <Image width="166px" height="166px"
                        src="<?php bloginfo('template_directory'); ?>/public/images/iocns-02.png" alt="" class="" />
                    <p class="text-xs md:text-base">Complete the quote form with your details, choose your
                        print positions, attach your logo, and press submit.</p>
                </div>
                <div class="border w-full border-none flex flex-col items-center">
                    <Image width="166px" height="166px"
                        src="<?php bloginfo('template_directory'); ?>/public/images/iocns-03.png" alt="" class="" />
                    <p class="text-xs md:text-base">We'll create a FREE digital proof of your design for your
                        approval.</p>
                </div>
                <div class="border w-full border-none flex flex-col items-center">
                    <Image width="166px" height="166px"
                        src="<?php bloginfo('template_directory'); ?>/public/images/iocns-04.png" alt="" class="" />
                    <p class="text-xs md:text-base">We guarantee to deliver your order by your specified date.
                    </p>
                </div>
            </div>
        </section>

    </section>
   

    <section class='md:w-3/5 text-accent'>
        <div class='hidden md:block'>
            <h2 class=' text-2xl md:text-4xl font-medium mt-6 md:mt-0'><?php the_title() ?></h2>
            <p class='mt-4 font-normal text-accent'>Product Code: <span class=''> <?php echo $sku; ?></span></p>
        </div>
        <div class="border-t w-full border-gray-300 my-8 md:block hidden"></div>
        <div class='text-sm md:text-base text-accent mt-6 md:block hidden'>
            <?php echo $short_description; ?>
        </div>
        <section class='my-7 bg-background p-8 rounded-lg md:flex justify-between items-center hidden'>
            <p class='text-lg text-accent font-roboto'>Customisations Available:</p>
            <div class='flex gap-8 '>
                <span class='flex items-center text-lg text-accent font-roboto'>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        class="text-green-500" height="28" width="28" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    Print
                </span>
            </div>
        </section>




        <a href="#product-popup"
            class='hidden open-popup-link md:flex w-full md:w-1/3 justify-center uppercase font-light items-center mt-6 border border-primary gap-2 py-3 bg-primary text-white px-6 hover:text-white hover:bg-secondary rounded-md'>
            Get a quote
        </a>

        <div class="md:w-3/5">
            <?php  delivery_time();?>
        </div>







        <div id="product-popup" class="mfp-hide bg-background shadow container mx-auto p-6 flex flex-col gap-5">

            <button
                class="close_popup uppercase font-light items-center border border-primary gap-2 w-full text-center py-3 bg-primary text-white px-6 hover:text-primary hover:bg-transparent ">Close
                The order form</button>
            <h5
                class="md:text-xl text-lg font-semibold text-accent font-roboto bg-gray-200 px-4 py-6 border rounded border-gray-400 choseColor">
                Step 1 - Choose one or more colours: *</h5>
            <?php
            // Ensure WooCommerce is active
            if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

                global $product;

                // Get the product ID
                $product_id = $product->get_id();

                // Get product object
                $product = wc_get_product($product_id);

                // Get product attributes
                $attributes = $product->get_attributes();

                // Check if 'pa_color' attribute exists
                if (isset($attributes['pa_color'])) {
                    $terms = wc_get_product_terms($product_id, 'pa_color', array('fields' => 'all'));

                    if (!empty($terms)) {
                        echo '<ul class="flex flex-wrap gap-[2px] md:gap-2 mt-4">';

                        foreach ($terms as $term) {
                            $color_code = get_term_meta($term->term_id, 'pa_color', true);
                            $color_name = $term->name;
                            $color_exists = /* Check if color exists logic */ false; // You need to implement this logic
            
                            $ccode = $term->description;

                            //print_r($term);
            
                            echo '<li  onclick="handColors(this)" code="' . esc_html($ccode) . '" class="' . ($color_exists ? 'border-green-400' : 'border-transparent') . ' p-1 hover-text border-[3px] rounded-full">';
                            echo '<div class="p-5 cursor-pointer hover:scale-105 active:scale-100 transition-all duration-200 ease-in-out rounded-full" style="background-color: #' . esc_attr($ccode) . '"></div>';
                            echo '<span class="tooltip-text whitespace-nowrap text-center" id="top">' . esc_html($color_name) . '</span>';
                            echo '</li>';
                        }

                        echo '</ul>';
                     
                    }
                }

            } else {
                echo 'WooCommerce is not active.';
            }
            ?>

            <div id="selectedColorsContainer" class="flex flex-col gap-5 ">
                <!-- Selected colors will be inserted here -->
            </div>

            <!-- ------------------------  -->
            <!-- variants  -->
            <!-- ------------------------  -->
            <div class="bg-gray-200 px-4 py-6 border rounded border-gray-400 select-position">
                <h5 class="md:text-xl text-lg font-semibold text-accent pl-2 font-roboto">Step 2 - Where must we print
                    your
                    artwork? *</h5>
                <p class="pl-2">T-Shirt Print Area</p>
            </div>

            <?php
            $baseUrl = get_bloginfo('template_url');
            $imageVariants = array(
                "Left Breast" => $baseUrl . "/public/images/tshirt-varients/left_breast.jpeg",
                "Right Breast" => $baseUrl . "/public/images/tshirt-varients/right_breast.jpeg",
                "Centre Front" => $baseUrl . "/public/images/tshirt-varients/center_chest.jpeg",
                "Centre Back" => $baseUrl . "/public/images/tshirt-varients/big_back.jpeg",
                "Left Sleeve" => $baseUrl . "/public/images/tshirt-varients/left_sleeve.jpeg",
                "Right Sleeve" => $baseUrl . "/public/images/tshirt-varients/right_sleeve.jpeg",
                "Nape of Neck" => $baseUrl . "/public/images/tshirt-varients/nape_neck.jpeg",
                "Big Front" => $baseUrl . "/public/images/tshirt-varients/big_front.jpeg"
            );

            ?>
            <div class="mt-5 grid grid-cols-2 gap-2 sm:grid-cols-3 md:grid-cols-6">
                <?php foreach ($imageVariants as $name => $path): ?>
                <button class="p-1 relative" onclick="selectOnlyVarients(this, '<?php echo $name; ?>')">
                    <div
                        class="bg-white flex flex-col items-center gap-2 border-[3px] rounded-lg p-1 py-2 border-transparent">
                        <h5 class="uppercase font-light font-roboto text-center"></h5>
                        <img alt="<?php echo $name; ?>" class="w-2/3" src="<?php echo $path; ?>"
                            style="color: transparent;">
                        <h5 class="capitalize font-light font-roboto text-center"><?php echo $name; ?></h5>
                    </div>
                </button>
                <?php endforeach; ?>
            </div>

            <div class="bg-gray-200 px-4 py-6 border rounded border-gray-400 number-of-color">
                <h5 class="md:text-xl text-lg font-semibold text-accent pl-2 font-roboto">Step 3 - Number of colours per
                    artwork *
                </h5>
            </div>
            <div class="colorLogo bg-gray-50 md:p-6 p-5 md:pt-6 pt-0 border-[1.5px] rounded-lg border-gray-50 mt-4">
            </div>

            <!-- upload Images  -->
            <div class="bg-gray-200 px-4 py-6 border rounded border-gray-400">
                <h5 class="md:text-xl text-lg font-semibold text-accent pl-2 font-roboto">Step 4- Upload your artwork
                    (Optional)
                </h5>
            </div>
            <div class="uploadImages grid md:grid-cols-2 grid-cols-1 gap-5"></div>

            <section>
                <h5 class="md:text-xl text-lg font-semibold text-accent mb-2 mt-5 font-roboto">Additional information or
                    requests
                </h5>
                <textarea id="additional"
                    class="block w-full p-3 h-80 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:border-secondary focus:outline-none"></textarea>
            </section>

            <div class="flex justify-center md:justify-end">
                <button onclick="handleAddToCart()" class=" uppercase font-light items-center border border-primary gap-2 w-full md:w-1/2 text-center py-3 text-white px-6   mt-7 rounded-lg
                            bg-primary hover:bg-transparent hover:text-primary cursor-pointer">Add to Quote</button>
            </div>
        </div>

    </section>



</main>


<script>
var SelectedColors = [];
var selectedVariants = [];


function handColors(item) {
    var ccode = item.getAttribute('code');
    var color = {
        color: item.innerText,
        code: ccode,
        selectedsize: []
    }
    SelectedColors.push(color);
    createColorList(SelectedColors)

}



function createColorList(colors) {
    var html = '';
    colors.forEach(function(color) {
        // Open the color-item div
        html +=
            '<div class="color-item border border-black justify-between bg-background p-3 md:py-4 md:px-6 rounded-lg flex flex-col ">';
        // Open the inner flex div for color display and text
        html += '<div class="flex items-center gap-2">';
        html += '<div class="p-4 rounded-full" style="background-color: #' + color.code + '; border-color: #' +
            color.code + '"></div>';
        html += '<p class="text-lg uppercase">' + color.color + '</p>';
        // Close the inner flex div
        html += '</div>';

        // Open the inner flex div for size inputs
        html +=
            '<div class="flex flex-wrap justify-between w-full items-start"><div class="flex flex-wrap items-center gap-3 my-3 ">';
        // Iterate over sizes
        ['Quantity'].forEach(function(size) {
            // Open the div for each size
            html += '<div class="flex items-center justify-center gap-2">';
            html += '<p class="text-lg text-accent font-bold">How many? </p>';
            // Open the div for the input
            html += '<div class="">';
            html += '<input type="number" name="' + size +
                '" min="0" style="max-width:100px" class="w-full bg-white border border-gray-300 p-2 py-1 placeholder:text-lg placeholder:text-gray-400 placeholder:font-semibold font-semibold focus:outline-none text-lg focus:ring-0 focus:border-gray-500 text-center rounded-full" placeholder="0" value="" onchange="updateValues(this, \'' +
                color.code + '\', \'' + size + '\')">';
            // Close the input div
            html += '</div></div><br/>';

        });
        // Close the inner flex div for size inputs
        //  html +='<p class="hidden">Available sizes: S, M, L, XL, 2XL, 3XL, 4XL.</p>';
        html += '</div>';
        // Add the button to remove the color item
        html += '<button onclick="removeColor(this)" code=' + color.code +
            '><svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z" fill="currentColor"></path></svg></button> </div>';
        // Close the color-item div
        html += '<p class=""><strong>Available sizes:</strong> S, M, L, XL, 2XL, 3XL, 4XL</p>';
        html += '</div>';
    });


    // Get the div container
    var container = document.getElementById('selectedColorsContainer');

    // Append the HTML to the container
    container.innerHTML = html;

}

function updateValues(inputElement, color, size) {
    var quantity = inputElement.value;
    const ci = SelectedColors.findIndex(item => item.code === color);
    const size_qty = {
        size,
        quantity
    };
    var sizes = SelectedColors[ci].selectedsize;
    var isSizeExistIndex = SelectedColors.findIndex(item => item.code === color && item.selectedsize.some(i => i
        .size === size));

    if (isSizeExistIndex !== -1) {
        // Update the quantity of the existing size
        const existingSizeIndex = SelectedColors[isSizeExistIndex].selectedsize.findIndex(i => i.size === size);

        if (existingSizeIndex !== -1) {
            // Remove the previous quantity and update with the new quantity
            SelectedColors[isSizeExistIndex].selectedsize.splice(existingSizeIndex, 1, size_qty);
        } else {
            // Add the new size_qty if the size doesn't exist
            sizes.push(size_qty);
        }
    } else {
        // Add the new size_qty if both code and size don't exist
        sizes.push(size_qty);
    }

    console.log('SelectedColors', SelectedColors);

}

function removeColor(item) {

    var colorToRemove = item.getAttribute('code');
    const remainingColors = SelectedColors.filter(function(color) {
        return color.code !== colorToRemove;
    });

    // Update the color list
    SelectedColors = [];
    SelectedColors.push(...remainingColors);
    createColorList(remainingColors);

    console.log(colorToRemove);
    console.log(SelectedColors);
}


function selectOnlyVarients(button, name) {
    var index = selectedVariants.findIndex(function(item) {
        return item.variant === name;
    });
    if (index === -1) {
        // If variant is not already selected, add it to selectedVariants array
        selectedVariants.push({
            variant: name,
            colorInLogo: 0
        });
        button.style.border = "3px solid #08c"; // Add border
    } else {
        // If variant is already selected, remove it from selectedVariants array
        selectedVariants.splice(index, 1);
        button.style.border = "none"; // Remove border
    }
    // Update the color sections in the logo
    updateColorLogo();
    handleUploadImage()
}

// Function to update color sections in the logo
function updateColorLogo() {
    var colorLogoDiv = document.querySelector('.colorLogo');
    colorLogoDiv.innerHTML = ''; // Clear existing content
    if (selectedVariants.length > 0) {
        for (var i = 0; i < selectedVariants.length; i++) {
            var variantName = selectedVariants[i].variant;
            var sectionHTML =
                '<div><h5 class="text-xl font-semibold text-accent pl-2 font-roboto mt-5 false">' +
                variantName +
                '</h5><div class="items-center justify-center mt-4 gap-2 p-0 grid md:grid-cols-7 grid-cols-2">';
            for (var j = 1; j <= 7; j++) {
                sectionHTML += '<div class="relative"><button onclick="handleColorInLogo(this)" colorinlogo="' + j +
                    '"  name="' + variantName +
                    '" class="w-full text-center p-2 cursor-pointer sm:px-8 text-lg bg-white rounded border-2 border-gray-100 hover:border-main"><img alt="' +
                    j + '" width="200" height="200"  src="<?php echo $baseUrl ?>/public/images/colors/' + j +
                    '.jpg">Colours</button></div>';
            }
            sectionHTML += '</div></div>';
            colorLogoDiv.insertAdjacentHTML('beforeend', sectionHTML);
        }
    }
}

// Initially update the color sections in the logo
updateColorLogo();

function handleColorInLogo(props) {
    const vName = props.getAttribute('name');
    const CIL = props.getAttribute('colorinlogo');
    const index = selectedVariants.findIndex(item => item.variant === vName);

    if (index !== -1) {
        selectedVariants[index].colorInLogo = CIL;
        console.log(selectedVariants); // Output the updated selected variants array

        // Loop through buttons to remove red border from all buttons
        const buttons = document.querySelectorAll('button[name="' + vName + '"]');
        buttons.forEach(button => {
            button.style.border = '1px solid #CCCCCC'; // Set default border
        });

        // Add red border to the button with matching colorInLogo
        props.style.border = '3px solid #08c';
    } else {
        console.error('Variant not found in selectedVariants array');
    }
}


function handleUploadImage() {
    var colorLogoDiv = document.querySelector('.uploadImages');
    colorLogoDiv.innerHTML = ''; // Clear existing content

    if (selectedVariants.length > 0) {
        for (var i = 0; i < selectedVariants.length; i++) {
            var sectionHTML = '<div class="bg-white p-4 rounded-xl">';
            sectionHTML +=
                '<div class="flex flex-col md:flex-row w-full h-32 bg-gray-50 border-2 border-gray-300 border-dashed rounded-lg items-center justify-center md:p-0 p-5">';
            sectionHTML += '<input class="sm:w-auto w-full" type="file" name="image" id="fileInput' + i +
                '" accept="image/*">';
            sectionHTML += '<div id="upload-status' + i + '"></div>'
            sectionHTML += '</div></div>';
            colorLogoDiv.insertAdjacentHTML('beforeend', sectionHTML);
        }
    }
}

function Order() {
    var productId = <?php echo $product_id ?>;
    var additionalInfoTextarea = document.getElementById('additional').value;
    localStorage.setItem("SelectedColors", JSON.stringify(SelectedColors));
    localStorage.setItem("selectedVariants", JSON.stringify(selectedVariants));
    localStorage.setItem("additionalInfo", JSON.stringify(additionalInfoTextarea));
    localStorage.setItem("ProductID", JSON.stringify(productId));
    // Prepare data to send
    var data = {
        'action': 'store_data_in_wp_session',
        'SelectedColors': SelectedColors,
        'selectedVariants': selectedVariants,
        'additionalInfo': additionalInfoTextarea,
        'ProductID': productId
    };
    // Send AJAX request to WordPress backend
    jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
        if (response.success) {
            window.location.href = response.data.redirect_url;
        } else {
            console.error('Error occurred:', response.data);
        }
    });
}

const handleAddToCart = () => {

    if (SelectedColors.length < 1) {
        const heading = document.querySelector(".choseColor");
        heading.classList.add("border-red-600")
    }

    if (selectedVariants.length < 1) {
        const heading = document.querySelector(".select-position");
        heading.classList.add("border-red-600")
    }

    if (selectedVariants?. [0]?.colorInLogo === 0) {
        const heading = document.querySelector(".number-of-color");
        heading.classList.add("border-red-600")
    }

    if (selectedVariants?. [0]?.colorInLogo !== 0) {
        const heading = document.querySelector(".number-of-color");
        heading.classList.remove("border-red-600")
    }

    if (SelectedColors.length > 0 && selectedVariants.length > 0 && selectedVariants?. [0]?.colorInLogo !== 0) {
        Order()
    }

}



jQuery(document).ready(function($) {




    $(document).on('change', '[id^=fileInput]', function() {
        var fileInputId = $(this).attr('id');
        var fileIndex = fileInputId.replace('fileInput', '');
        handleFileInputChange(this, fileIndex);
        console.log(fileInputId);

    });

    function handleFileInputChange(input, index) {
        var formData = new FormData();
        var file = input.files[0];
        formData.append('action', 'upload_mediafiles');
        formData.append('file', file);

        var uploadStatus = $('#upload-status' + index);

        $.ajax({
            type: "POST",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                selectedVariants[index].url = response;
                console.log(selectedVariants);
                uploadStatus.html('<img src="' + response +
                    '" alt="Uploaded Image" width="75" height="75">');
            },
            error: function(xhr, status, error) {
                uploadStatus.html('Error uploading image: ' + error);
            }
        });
    }




    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: false
    });
    // Add event listener to the close button
    $('.close_popup').on('click', function() {
        // Get the Magnific Popup instance and close the popup
        $.magnificPopup.close();
    });



    const descriptionButton = document.getElementById('descriptionButton');
  const detailsButton = document.getElementById('detailsButton');
  const descriptionContent = document.getElementById('descriptionContent');
  const detailsContent = document.getElementById('detailsContent');

  descriptionButton.addEventListener('click', function () {
    // Toggle visibility for description content
    descriptionContent.classList.toggle('hidden');
    // Hide details content if description is being shown
    if (!descriptionContent.classList.contains('hidden')) {
      detailsContent.classList.add('hidden');
    }
  });

  detailsButton.addEventListener('click', function () {
    // Toggle visibility for details content
    detailsContent.classList.toggle('hidden');
    // Hide description content if details are being shown
    if (!detailsContent.classList.contains('hidden')) {
      descriptionContent.classList.add('hidden');
    }
  });



    $('.tab-content').hide();
    $('.tab-content:first').show("");
    $('.tab-link:first').addClass(' text-blue-700 border-b border-secondary');

    $('.tab-link').click(function(event) {
        event.preventDefault();
        var tab_id = $(this).attr('href');

        $('.tab-link').removeClass('  text-blue-700 border-b border-secondary');
        $(this).addClass('  text-blue-700 border-b border-secondary');

        $('.tab-content').hide();
        $(tab_id).show();
    });
    if ($(window).width() < 768) {
        $('.tab-content').hide();
        $('.tab-content:first').hide();
    } else {
        $('.tab-content').hide();
        $('.tab-content:first').show();
        $('.tab-link:first').addClass('text-blue-700 border-b border-secondary');
    }

});
</script>