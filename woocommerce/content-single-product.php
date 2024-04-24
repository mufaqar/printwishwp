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

defined( 'ABSPATH' ) || exit;

global $product;

$product_price = $product->get_price();




?>

<main class='md:flex container mx-auto px-4 gap-10 mt-7 font-opensans mb-20'>
    <section class='md:w-[40%] image-slider'>
        <?php			
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
			?>




        <div class='mt-5 text-lg text-black bg-background p-8 rounded-lg font-medium '>
            <h6>Printed From <strong class='text-black'><?php echo wc_price($product_price) ?></strong> ex Vat per unit
            </h6>
            <h6>Lead Time : <span class='text-black'>3-5 working days</span></h6>
            <h6>Minimum Order Value is <span class='text-black'>25 units.</span></h6>
        </div>

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


    </section>

    <section class='md:w-[60%] text-accent'>

        <div class='hidden md:block'>
            <h2 class=' text-2xl md:text-4xl font-medium mt-6 md:mt-0'>Casual Classics Promotional T-shirt</h2>
            <p class='mt-4 font-normal text-accent'>Product Code: <span class=''>CR1500</span></p>
        </div>
        <div class="pt-[1px] w-full bg-gray-300 my-8"></div>
        <div class='text-sm md:text-base text-accent'>
            The GoCustom Value Promotion Classic Tee – your perfect choice for durable, eye-catching merchandise! With a
            high-quality single-jersey ringspun cotton, this classic tee offers modern style and fit with long-lasting
            comfort at a great price. This is the ideal garment for creating merchandise that stands out in retail
            stores, promotions, large events and more.

        </div>

        <section class='my-7 bg-background p-8 rounded-lg flex justify-between items-center'>
            <p class='text-lg text-accent font-roboto'>Customisations Available:</p>
            <div class='flex gap-8 '>
                <span class='flex items-center text-lg text-accent font-roboto'>
				<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-green-500" height="28" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path></svg>
                     Print
                </span>
            </div>
        </section>


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
            echo '<section class="">';
            echo '<div class="bg-background p-3 md:p-8 rounded-lg">';
            echo '<h5 class="text-xl font-semibold text-accent font-roboto">Available Colors:</h5>';
            echo '<ul class="flex flex-wrap gap-[2px] md:gap-2 mt-4">';

            foreach ($terms as $term) {
                $color_code = get_term_meta($term->term_id, 'pa_color', true);
                $color_name = $term->name;
                $color_exists = /* Check if color exists logic */ false; // You need to implement this logic

				$ccode =  $term->description;

				//print_r($term);

                echo '<li class="' . ($color_exists ? 'border-green-400' : 'border-transparent') . ' p-1 hover-text border-[3px] rounded-full">';
                echo '<div class="p-[18px] cursor-pointer hover:scale-105 active:scale-100 transition-all duration-200 ease-in-out rounded-full" style="background-color: #' . esc_attr($ccode) . '"></div>';
                echo '<span class="tooltip-text whitespace-nowrap text-center" id="top">' . esc_html($color_name) . '</span>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</section>';
        }
    }

} else {
    echo 'WooCommerce is not active.';
}
?>

<button onclick="redirectToQuote()" class='flex w-full md:w-1/3 justify-center uppercase font-light items-center mt-6 border border-primary gap-2 py-3 bg-primary text-white px-6 hover:text-white hover:bg-secondary rounded-md'>
    Get a quote
</button>

<?php
// Usage
$title = 'Delivery Title';
$desc = 'Delivery Description';
delivery_time($title, $desc);

?>


    </section>

</main>