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

$product_slug = $product->get_slug();


?>



<?php get_template_part( 'components/header', 'bottom_banner' ); ?>



<div class="block md:hidden px-3 container mx-auto">
    <div class="mt-5 flex justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/public/images/review-badge.svg" alt="rating" width="200"
            height="37" />
    </div>

    <h2 class="text-xl md:text-3xl lg:text-4xl font-medium mt-6 md:mt-0 text-primary">
        Special Offers on Personalised Clothes
    </h2>

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
        <!-- <div class='mt-5 md:w-full w-3/4 mx-auto text-lg text-white bg-secondary   font-medium text-center py-2.5'>
            Printed From <?php //echo wc_price($product_price) ?> Ex Vat

        </div> -->
        <!-- <div class="md:hidden">
            <a href="#product-popup"
                class=' open-popup-link flex w-full md:w-1/3 justify-center uppercase font-medium items-center mt-6 border border-primary gap-2 py-3 bg-primary text-white px-6 hover:text-white hover:bg-secondary rounded-md'>
                Deal No 1
            </a>
           
            
        </div> -->




    </section>


    <section class='md:w-3/5 text-accent'>

         <h2 class="text-primary text-2xl  md:pt-0 py-5 ">What do our deals include?</h2>

        <div class='text-sm md:text-base text-accent md:block '>
           
            <ul class="list-disc list-inside text-base flex flex-col gap-2">
                <?php if ($product_slug == 'colors-t-shirt' || $product_slug == 'white-t-shirt'): ?>
                    <li>Fruit of the Loom Value weight t-shirts (Best Seller). You can mix colours and sizes.</li>
                    <li>1 Single Colour print anywhere on the t-shirt up to A3 size (320mm x 410mm).</li>
                    <li>Free Set-Up therefore the next time you order, your design will already be ready to go.</li>
                    <li>Free Delivery* to your doorstep (*UK mainland only).</li>
                <?php endif; ?>
            </ul>


        </div>

        <div class=" gap-4 mt-4">
            <?php

            if ($product_slug == 'colors-t-shirt') {

                ?>
                <div class="deal_box">
                    <h2>Deal No 1</h2>
                    <p>50 Colour t-shirts for £254 Ex Vat. (£304.80 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="304.80" data-type="color" data-qty="50"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 2</h2>
                    <p>100 Colour t-shirts for £412 Ex Vat. (£494.40 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="494.40" data-type="color" data-qty="100"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 3</h2>
                    <p>250 Colour t-shirts for £850 Ex Vat. (£1020 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="1020" data-type="color" data-qty="250"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 4
                    </h2>
                    <p>500 Colour t-shirts for £1570 Ex Vat. (£1884 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="1884" data-type="color" data-qty="500"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 5</h2>
                    <p>1000 Colour t-shirts for £2930 Ex Vat. (£3516 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="3516" data-type="color" data-qty="1000"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 6</h2>
                    <p>1500 Colour t-shirts for £4305 Ex Vat. (£5166 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="5166" data-type="color" data-qty="1500"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 7</h2>
                    <p>2500 Colour t-shirts for £6925 Ex Vat. (£8310 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="8310" data-type="color" data-qty="2500"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <?php

            } elseif ($product_slug == 'white-t-shirt') {
                ?>


                <div class="deal_box">
                    <h2>Deal No 1</h2>
                    <p>50 White t-shirts for £234 Ex Vat. (£280.80 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="280.80" data-type="white" data-qty="50"
                    onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 2</h2>
                    <p>100 White t-shirts for £374 Ex Vat. (£448.80 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="448.80" data-type="white" data-qty="100"
                    onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 3</h2>
                    <p>250 White t-shirts for £745 Ex Vat. (£894 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="894" data-type="white" data-qty="250"
                    onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 4
                    </h2>
                    <p>500 White t-shirts for £1380 Ex Vat. (£1656 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="1656" data-type="white" data-qty="500"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 5</h2>
                    <p>1000 White t-shirts for £2550 Ex Vat. (£3060 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="3060" data-type="white" data-qty="1000"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 6</h2>
                    <p>1500 White t-shirts for £3735 Ex Vat. (£4482 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="4482" data-type="white" data-qty="1500"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

                <div class="deal_box">
                    <h2>Deal No 7</h2>
                    <p>2500 White t-shirts for £6500 Ex Vat. (£7800 Inc. Vat)</p>
                    <p class="deal_notice">Every thing included price.</p>
                    <button class="add-to-quote-button" data-price="7800" data-type="white" data-qty="2500"
                        onclick="handleAddToCart(this)">Select this Deal</button>
                </div>

            <?php } ?>
        </div>




        <div class="md:w-3/5">
            <?php delivery_time(); ?>
        </div>







        <div id="product-popup" class="mfp-hide bg-background shadow container mx-auto p-6 flex flex-col gap-5">

            <button
                class="close_popup uppercase font-light items-center border border-primary gap-2 w-full text-center py-3 bg-primary text-white px-6 hover:text-primary hover:bg-transparent ">Close
                The order form</button>

            <h5
                class="md:text-xl text-lg font-semibold text-accent font-roboto bg-gray-200 px-4 py-6 border rounded border-gray-400">
                Your T-shirt Deal: *
            </h5>

            <div id="selected-deal" class="text-lg font-semibold text-accent">
                <!-- Selected deal will be displayed here -->
                 This is Deals
            </div>


            <h5 class="md:text-xl text-lg font-semibold text-accent font-roboto bg-gray-200 px-4 py-6 border rounded border-gray-400 choseColor">
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
                            $color_exists = false;            
                            $ccode = $term->description;
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
                <h5 class="md:text-xl text-lg font-semibold text-accent pl-2 font-roboto">Step 2 - Where must we print  your   artwork? *</h5>
                <p class="pl-2">You can select 1 print position only.</p>
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
                <button onclick="handleOrder(this)" class=" uppercase font-light items-center border border-primary gap-2 w-full md:w-1/2 text-center py-3 text-white px-6   mt-7 rounded-lg
                            bg-primary hover:bg-transparent hover:text-primary cursor-pointer">PROCEED TO DEAL QUOTE</button>
            </div>
        </div>

    </section>



</main>



<?php get_template_part('components/com', 'reviews'); ?>

<script>
    let SelectedColors = [];
    let selectedVariants = [];
    let selectedDeal = {};
    let selectedSizes = [];
  
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
        colors.forEach(function (color) {
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
            // ['Quantity'].forEach(function (size) {
            //     // Open the div for each size
            //     html += '<div class="flex items-center justify-center gap-2">';
            //     html += '<p class="text-lg text-accent font-bold">Quanity </p>';
            //     // Open the div for the input
            //     html += '<div class="">';
            //     html += '<input type="number" name="' + size +
            //         '" min="0" style="max-width:100px" class="w-full bg-white border border-gray-300 p-2 py-1 placeholder:text-lg placeholder:text-gray-400 placeholder:font-semibold font-semibold focus:outline-none text-lg focus:ring-0 focus:border-gray-500 text-center rounded-full" placeholder="0" value="' +
            //         (selectedDeal.type === "white" ? selectedDeal.qty : '') +
            //         '" onchange="updateValues(this, \'' +
            //         color.code + '\', \'' + size + '\')">';
            //     // Close the input div
            //     html += '</div></div><br/>';

            // });
            
           
        html += '</div>';
            // Add the button to remove the color item
            html += '<button onclick="removeColor(this)" code=' + color.code +
                '><svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z" fill="currentColor"></path></svg></button> </div>';
            // Close the color-item div

            html += '</div>';
           
        });



        // Get the div container
        var container = document.getElementById('selectedColorsContainer');

        
        html += `<div class="product-sizes mt-5">
                            <h5 class="text-xl font-semibold">Available Sizes</h5>
                         
                                <div class="flex flex-wrap gap-4">
                                    <label class="flex items-center gap-2">
                                        <input type="checkbox" name="sizes[]" value="S">
                                        <span>Small</span>
                                    </label>
                                    <label class="flex items-center gap-2">
                                        <input type="checkbox" name="sizes[]" value="M">
                                        <span>Medium</span>
                                    </label>
                                    <label class="flex items-center gap-2">
                                        <input type="checkbox" name="sizes[]" value="L">
                                        <span>Large</span>
                                    </label>
                                    <label class="flex items-center gap-2">
                                        <input type="checkbox" name="sizes[]" value="XL">
                                        <span>XL</span>
                                    </label>
                                    <label class="flex items-center gap-2">
                                        <input type="checkbox" name="sizes[]" value="2XL">
                                        <span>2XL</span>
                                    </label>
                                    
                                </div>
                     
                        </div> `;
            html += '</div>';
            html += '<p>Kindly provide the sizes in the Additional Information section</p>';

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
        const remainingColors = SelectedColors.filter(function (color) {
            return color.code !== colorToRemove;
        });
        // Update the color list
        SelectedColors = [];
        SelectedColors.push(...remainingColors);
        createColorList(remainingColors);
    }

    function getSelectedSizes() {       
                document.querySelectorAll('input[name="sizes[]"]:checked').forEach((checkbox) => {
                    selectedSizes.push(checkbox.value);
                });
            return selectedSizes;
    }



    function selectOnlyVarients(button, name) {
    var index = selectedVariants.findIndex(function(item) {
        return item.variant === name;
    });
    if (index === -1) {
        // If variant is not already selected, add it to selectedVariants array
        selectedVariants.push({
            variant: name,
            colorInLogo: 1
        });
        button.style.border = "3px solid #08c"; // Add border
    } else {
        // If variant is already selected, remove it from selectedVariants array
        selectedVariants.splice(index, 1);
        button.style.border = "none"; // Remove border
    }
    // Update the color sections in the logo
   // updateColorLogo();
    handleUploadImage()
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

    
   

    // Function to disable further color selection when the product is white-t-shirt
    function disableColorSelection() {
        const colorItems = document.querySelectorAll('.color-item');
        colorItems.forEach(item => {
            item.style.pointerEvents = 'none';  // Disable clicking
            item.style.opacity = '0.5';         // Make it look disabled
        });

        console.log("Color selection disabled for white-t-shirt.");
    }


    const handleAddToCart = (button) => {
        const price = button.getAttribute('data-price');
        const type = button.getAttribute('data-type');
        const qty = button.getAttribute('data-qty');
        // Store selected deal information
        selectedDeal = {
            type: type,
            price: price,
            qty: qty
        };   
        const dealNumber = button.closest('.deal_box').querySelector('h2').innerText.split(' ')[1];    
        const selectedDealContainer = document.getElementById('selected-deal');
        selectedDealContainer.innerHTML = `Deal : ${qty} ${type.charAt(0).toUpperCase() + type.slice(1)} T-shirts for £${price}`;
        const chooseColorHeading = document.querySelector('.choseColor');
        if (type === 'white') {
        chooseColorHeading.innerHTML = "Step 1: Select a Colour:* <p class='text-sm'>This product has only 1 colour option [White]. </p>";
        // Optionally disable color selection for white t-shirts
        disableColorSelection();
    } else {
        chooseColorHeading.innerHTML = "Step 1 - You can mix colours and sizes.*";
        enableColorSelection();  // Optionally re-enable color selection for colored t-shirts
    }
    };

    function Order(selectedDeal, selectedSizes) {
        var productId = <?php echo $product_id ?>;
        var additionalInfoTextarea = document.getElementById('additional').value;
        localStorage.setItem("SelectedColors", JSON.stringify(SelectedColors));
        localStorage.setItem("selectedVariants", JSON.stringify(selectedVariants));
        localStorage.setItem("selectedSizes", JSON.stringify(selectedSizes)); 
        localStorage.setItem("selectedDeal", JSON.stringify(selectedDeal)); 
        localStorage.setItem("additionalInfo", JSON.stringify(additionalInfoTextarea));
        localStorage.setItem("ProductID", JSON.stringify(productId));       
       

        // Prepare data to send
        var data = {
            'action': 'store_data_in_wp_session',
            'SelectedColors': SelectedColors,
            'selectedVariants': selectedVariants,
            'additionalInfo': additionalInfoTextarea,
            'selectedSizes': selectedSizes, 
            'selectedDeal': selectedDeal, 
            'ProductID': productId,

        };
        
        jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function (response) {
            if (response.success) {
                window.location.href = response.data.redirect_url;
            } else {
                console.error('Error occurred:', response.data);
            }
        });
    }

   

    const handleOrder= (button) => { 
        const selectedSizes = getSelectedSizes(); 
            // Ensure all required data is selected before submitting
        if (SelectedColors.length > 0 && selectedVariants.length > 0 && selectedSizes.length > 0) {
            // Package the data into a single array for AJAX submission
            const finalOrderData = {
                SelectedColors,
                selectedVariants,
                selectedSizes,
                selectedDeal
            };
            
            console.log("Final selectedDeal", finalOrderData.selectedDeal);
            
            // Send data via AJAX or store it as needed
             Order(finalOrderData.selectedDeal, finalOrderData.selectedSizes);

        } else {
            alert("Please complete all required selections.");
        }

        


    };



    jQuery(document).ready(function ($) {

        $(document).on('change', '[id^=fileInput]', function () {
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
                success: function (response) {
                    selectedVariants[index].url = response;
                    console.log(selectedVariants);
                    uploadStatus.html('<img src="' + response +
                        '" alt="Uploaded Image" width="75" height="75">');
                },
                error: function (xhr, status, error) {
                    uploadStatus.html('Error uploading image: ' + error);
                }
            });
        }




        $('.add-to-quote-button').on('click', function (e) {
            e.preventDefault(); // Prevent the default action

            // Open Magnific Popup manually
            $.magnificPopup.open({
                items: {
                    src: '#product-popup', // The ID of the popup content
                },
                type: 'inline', // Popup type
                midClick: true // Allows popup to be opened on middle mouse click or CTRL+click
            });
        });
        // Add event listener to the close button
        $('.close_popup').on('click', function () {
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

        $('.tab-link').click(function (event) {
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