<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package printwish
 */

get_header();

    global $product;

    print_r($product);
    
    $product_id = $product->get_id();
    
    echo "Product ID: " . $product_id;



$product = wc_get_product($product_id);


$product = wc_get_product($product_id);
    
    // Check if product exists
    if ($product) {
        
        // Get attributes
        $attributes = $product->get_attributes();
        
        // Loop through attributes
        foreach ($attributes as $attribute) {
            // Get attribute name and value(s)
            $attribute_name = $attribute->get_name();
            $attribute_value = $attribute->get_options();
            
            echo "Attribute Name: " . $attribute_name . "<br>";
            echo "Attribute Values: " . implode(", ", $attribute_value) . "<br><br>";
        }
        
    } else {
        echo "Product not found.";
    }
?>



<main class='md:flex container mx-auto px-4 gap-10 mt-7 font-opensans mb-20'>
    <section class='md:w-[40%] image-slider'>
        <Slider {...settings} ref={slider} class='border border-gray-200 rounded-lg p-1'>
            {
            product?.galleryImages?.nodes.length > 0 ? product?.galleryImages?.nodes.map((item: any, idx: number) => {
            return (
            <div key={idx}>
                <img src={item?.mediaItemUrl} alt={product.name} width={600} height={600}
                    class="w-full rounded-lg" />
                <h5 class='text-center font-semibold text-lg capitalize mb-3'>{item?.altText}</h5>
            </div>
            )
            }) : <img src={imagePath} alt={product.name} width={600} height={600} class="w-full rounded-lg" />
            }
        </Slider>
        <div class='mt-5 text-lg text-black bg-background p-8 rounded-lg font-medium '>
            <h6>Printed From <strong class='text-black'>{ product?.price}</strong> ex Vat per unit</h6>
            <h6>Lead Time : <span class='text-black'>3-5 working days</span></h6>
            <h6>Minimum Order Value is <span class='text-black'>25 units.</span></h6>
        </div>
        {
        product?.poductInfo?.rating?.ratingNumber && <div class='md:hidden'>
            <RatingInfo data={product?.poductInfo?.productRating} />
        </div>
        }



       

        <section class="bg-background p-6 md:p-8 mt-5 rounded-lg">




            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">DESCRIPTION</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">DETAILS</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">FAQ'S</button>
                    </li>

                </ul>
            </div>
            <div id="default-styled-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>

            </div>










        </section>

        <section class='md:w-[60%] text-accent'>
            <div class='hidden md:block'>
                <h2 class=' text-2xl md:text-4xl font-medium mt-6 md:mt-0'>Casual Classics Promotional T-shirt</h2>
                <p class='mt-4 font-normal text-accent'>Product Code: <span class=''> CR1500</span></p>
            </div>
            <div class="pt-[1px] w-full bg-gray-300 my-8" ></div>
            <div class='text-sm md:text-base text-accent' > The GoCustom Value Promotion Classic Tee – your perfect choice for durable, eye-catching merchandise! With a high-quality single-jersey ringspun cotton, this classic tee offers modern style and fit with long-lasting comfort at a great price. This is the ideal garment for creating merchandise that stands out in retail stores, promotions, large events and more. </div>
          
            <section class='my-7 bg-background p-8 rounded-lg flex justify-between items-center'>
                <p class='text-lg text-accent font-roboto'>Customisations Available:</p>
                <div class='flex gap-8 '>
                    <span class='flex items-center text-lg text-accent font-roboto'>
                        <BiCheck size={28} class='text-green-500' /> Print
                    </span>
                </div>
            </section>
            



            {
            product?.allPaColor.nodes.length > 0 &&
            <section class=''>
                <div class="bg-background p-3 md:p-8 rounded-lg ">
                    <h5 class='text-xl font-semibold text-accent font-roboto'> Available Colors:</h5>
                    <ul class='flex flex-wrap gap-[2px] md:gap-2 mt-4'>
                        {
                        product?.allPaColor.nodes?.map((clr: any, idx: number) => {
                        const colorExists = selectedProduct?.colors?.some((item: any) => item.code === clr.description);
                        return (
                        <li key={idx} class={`${colorExists ? 'border-green-400' : 'border-transparent' } p-1
                            hover-text border-[3px] rounded-full`}>
                            <div class='p-[18px] cursor-pointer hover:scale-105 active:scale-100 transition-all duration-200 ease-in-out rounded-full'
                                style={{ backgroundColor: `#${clr?.description}` }} />
                            <span class="tooltip-text whitespace-nowrap text-center" id="top">{clr?.name}</span>
                        </li>
                        )
                        })
                        }
                    </ul>

                    {/* selected color and show all sizes with each selcted color */}
                </div>



            </section>
            }
            {/* <div class="mt-6 border p-6 rounded-lg">
                <h4 class='font-semibold text-lg'>Are you looking for a discount on your order?</h4>
                <ul class="my-2 list-square pl-4">
                    <li>Get 10% discount when you order 250+</li>
                    <li>Get 15% discount when you order 750+</li>
                    <li>Get 20% discount when you order 1000+</li>
                </ul>
                <p>Request us a Quote today and get an amazing discount with every bulk order.</p>
            </div> */}
            <button onClick={()=> {
                setOrderForm(true);
                window.scrollTo({
                top: 0,
                behavior: 'smooth'
                })
                }} class='flex w-full md:w-1/3 justify-center uppercase font-light items-center mt-6 border
                border-primary gap-2 py-3 bg-primary text-white px-6 hover:text-white hover:bg-secondary rounded-md'>
                Get a quote
            </button>




            {/* <div class='text-2xl flex items-center mt-3 gap-2'>
                Total: <span class='font-semibold text-secondary text-2xl'> {totalQuantity > 0 ?
                    `£${calculatePrice(customizedMergeData, totalPrice, totalQuantity, +colorsInLogo)}` : `£0 `} <span
                        class='font-normal text-primary text-xl ml-1'>excluding VAT</span></span>
            </div> */}

            {/* {
            Number(calculatePrice(customizedMergeData, totalPrice, totalQuantity, +colorsInLogo)) > 0 && <button
                onClick={()=> { totalQuantity < product?.poductInfo?.minimumOrder ? toast.info(`Minimum Order Value is
                    ${product?.poductInfo?.minimumOrder} Units`) : customizedMergeData.length> 0 ?
                    handleAddToCart(product) : toast.warn('ADD YOUR LOGO PLEASE') }} class='flex uppercase
                    font-light items-center mt-5 border border-primary gap-2 py-3 bg-primary text-white px-6
                    hover:text-primary hover:bg-transparent rounded-full'>
                    <SlBasketLoaded /> Add to cart
            </button>
            } */}

            <DeliveryTime title="Standard" desc="" />
        </section>

</main>




<?php

get_footer();