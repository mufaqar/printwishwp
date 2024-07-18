<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');

$cat = get_queried_object();
$term_id = get_queried_object_id();
$term = get_queried_object();
$term_faqs = get_field('faqs', $term);

// foreach ($term_faqs as $faq) {
// 	print_r($faq);
// }


$term_content= get_term_meta($term_id, 'content', true);



// Get the thumbnail URL for the term
$thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);


if (!empty($thumbnail_id)) {
	$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');

	$cat_thumbnail = $thumbnail_url[0];
}

?>

<section>
    <div class="py-6 relative md:py-16 bg-cover bg-no-repeat bg-center"
        style="background-image: linear-gradient(0deg, rgba(0, 36, 63, 0.7), rgba(0, 36, 63, 0.7)), url(<?php echo $cat_thumbnail ?>);">
        <div class="container mx-auto px-4 text-white">
            <h1 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2 sm:text-left text-center">
                <?php echo esc_html($cat->name); ?>
            </h1>
            <div class="cat_text">
                <?php echo wp_kses_post($cat->description); ?>
            </div>
        </div>

    </div>
</section>






<section class='sm:py-16 py-10 relative'>
    <div class='max-w-screen-xl mx-auto px-4 '>

    <?php

get_template_part('components/com', 'brands');
get_template_part('components/com', 'reviews');

?>



        <div class="md:w-2/6 mx-auto mb-10">
            <?php	delivery_time();	?>
        </div>

        <div class='w-full'>
            <div class='grid sm:grid-cols-2 md:grid-cols-5 relative product-grid grid-cols-2 gap-1 sm:gap-2 md:gap-4'>



                <?php

				if (woocommerce_product_loop()) {
					//woocommerce_product_loop_start();
				
					if (wc_get_loop_prop('total')) {
						while (have_posts()) {
							the_post();

							/**
							 * Hook: woocommerce_shop_loop.
							 */
							do_action('woocommerce_shop_loop');

							//wc_get_template_part( 'content', 'product' );
							$args = [get_the_ID()];

							// Include the template part
							get_template_part('components/widget/product', 'box', $args);
						}
					}

					//woocommerce_product_loop_end();
				
					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action('woocommerce_after_shop_loop');
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action('woocommerce_no_products_found');
				}

				?>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto px-1 my-2 w-full">
        <div class='category_pages mt-10'>
            <?php echo $term_content ?>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto px-1 my-2 w-full">

        <?php





	?>


        <?php if (!empty($term_faqs)) { ?>

        <section class="bg-white mb-10">
            <div class="">
                <h2 class="mb-6 lg:mb-8 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">
                    Frequently asked questions</h2>
                <div class="mx-auto ">
                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-gray-900"
                        data-inactive-classes="text-gray-500" class="flex flex-col gap-2">

                        <?php foreach ($term_faqs as $key => $faq) { 
						
						$question = $faq['question'];
						$answer = $faq['answer'];
						?>

                        <div class="bg-white p-3 px-5 border border-gray-200 font-opensans cursor-pointer">
                            <h2 id="accordion-flush-heading-<?php echo $key; ?>">
                                <button type="button"
                                    class="flex justify-between items-center w-full font-medium hover:text-secondary"
                                    data-accordion-target="#accordion-flush-body-<?php echo $key; ?>"
                                    aria-expanded="true" aria-controls="accordion-flush-body-<?php echo $key; ?>">
                                    <span><?php echo $question ?></span>
                                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-<?php echo $key; ?>" class=""
                                aria-labelledby="accordion-flush-heading-<?php echo $key; ?>">
                                <p class="mt-4 text-gray-500"><?php echo $answer ?></p>
                                <!-- You can add more content or links here -->
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                </div>

            </div>
        </section>

        <?php } 
        
        
        
      
        
        
        
        
        
        
        
        
        ?>


    


</section>
</div>
</section>
<?php
get_footer('shop');