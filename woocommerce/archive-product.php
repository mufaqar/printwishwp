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

$term_meta = get_term_meta($term_id, 'faqs', true);

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
			<h2 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2 sm:text-left text-center">
				<?php echo esc_html($cat->name); ?>
			</h2>
			<div>
				<?php echo wp_kses_post($cat->description); ?>
			</div>
		</div>

	</div>
</section>




<?php

get_template_part('components/com', 'brands');
get_template_part('components/com', 'reviews');

?>

<div class="md:w-2/6 mx-auto">
	<?php
	// Usage
	$title = 'Delivery Title';
	$desc = 'Delivery Description';
	delivery_time($title, $desc);

	?>
</div>

<section class='py-16 relative'>
	<div class='max-w-screen-xl mx-auto px-4 '>

		<div class='w-full'>
			<div class='grid sm:grid-cols-2 md:grid-cols-5  grid-cols-2 gap-1 sm:gap-2 md:gap-4'>

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
</section><?php



get_footer('shop');