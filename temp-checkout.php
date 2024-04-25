<?php
/**
 * Template Name: Checkout 
 */

get_header();

$session_data = $GLOBALS['wp_query']->query_vars['session_data'];
if ($session_data) {
    $selected_colors = $session_data['selected_colors'];
    $selected_variants = $session_data['selected_variants'];
    $additional_info = $session_data['additional_info'];
    $product_id = $session_data['product_id'];

  
}

echo $product_id;

function create_vip_order($id) {

  global $woocommerce;

  $address = array(
      'first_name' => 'Mufaqar',
      'last_name'  => 'Islam',
      'company'    => 'Speed Society',
      'email'      => 'joe@testing.com',
      'phone'      => '760-555-1212',
      'address_1'  => '123 Main st.',
      'address_2'  => '104',
      'city'       => 'San Diego',
      'state'      => 'Ca',
      'postcode'   => '92121',
      'country'    => 'US'
  );

  // Now we create the order
  $order = wc_create_order();

  // The add_product() function below is located in /plugins/woocommerce/includes/abstracts/abstract_wc_order.php
  $order->add_product( get_product( $id ), 1 ); // This is an existing SIMPLE product
  $order->set_address( $address, 'billing' );
  //
  $order->calculate_totals();
  $order->update_status("Completed", 'Imported order', TRUE);

}

create_vip_order($product_id);


?>

<div class="relative mx-auto w-full bg-white">
        <div class="grid min-h-screen grid-cols-2">
          <div class="col-span-full py-6 px-4 sm:py-12 lg:col-span-1 lg:py-24">
            <div class="mx-auto w-full max-w-lg">
              <h1 class="relative text-2xl font-medium text-gray-700 sm:text-3xl">
                Contact Information
                <span class="mt-2 block h-1 w-10 bg-primary sm:w-20"></span>
              </h1>

              <?php //  print "<pre>";
                print_r($selected_colors);
                print_r($selected_variants);

                

                ?>
          
                <form
                  onSubmit={handleSubmit(onSubmit)}
                  class="mt-10 flex flex-col space-y-4"
                >
                  <div>
                    <label class="text-xs font-semibold text-gray-500">
                      Name
                    </label>
                    <input
                      type="text"
                    
                      id="card-name"
                      name="name"
                      placeholder="name"
                      class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500"
                    />
                  
                  </div>
                  <div>
                    <label class="text-xs font-semibold text-gray-500">
                      Email
                    </label>
                    <input
                      type="email"
                      id="email"
                    
                      name="email"
                      placeholder="john.capler@fang.com"
                      class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500"
                    />
                  
                  </div>
                  <div>
                    <label class="text-xs font-semibold text-gray-500">
                      Mobile Number (Optional)
                    </label>
                    <input
                      type="text"
                      id="card-name"
                    
                      name="mobile"
                      placeholder="mobile number"
                      class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500"
                    />
                  
                  </div>
                  <div>
                    <label class="text-xs font-semibold text-gray-500">
                      Delivery Date
                    </label>
                    <input
                      type="date"
                      placeholder="Delivery Date"                 
                     
                      class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500"
                   />
                  </div>

                  <input
                    type="submit"
                    class="mt-4 cursor-pointer inline-flex w-full items-center justify-center rounded bg-primary py-2.5 px-4 text-base font-semibold tracking-wide text-white text-opacity-80 outline-none ring-offset-2 transition hover:text-opacity-100 focus:ring-2 focus:ring-primary sm:text-lg"
                    value="Proceed to Submit your Quote"
                  />
                </form>
         
              <div class="mt-5 border p-6">
                <h3 class="font-semibold text-lg">What happens next?</h3>
                <ul class="md:text-sm text-xs list-disc pl-4 mt-2 flex flex-col gap-2">
                  <li>
                    SUBMIT YOUR QUOTE - and we will be in touch in 15-30
                    minutes.
                  </li>
                  <li>
                    We will provide free visuals proofs before the payment.
                  </li>
                  <li>
                    Once you approve the visual proof, we can then send you the
                    invoice and a secure payment link.
                  </li>
                  <li>100% money back guarantee.</li>
                  <li>Huge discounts available on bulk orders.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="relative col-span-full  flex-col py-6 pl-8 pr-4 sm:py-12 lg:col-span-1 lg:py-24">
            <h2 class="sr-only">Order summary</h2>
            <div>
              <div class="absolute inset-0 h-full w-full bg-[#1f375d] opacity-95"></div>
            </div>
            <div class="relative">
               <ul class="space-y-5">
                    <!-- <?php foreach($cartItems as $idx => $item): ?>
                        <li class="flex justify-between">
                            <div class="inline-flex">
                                <div class="ml-3">
                                    <p class="text-base font-semibold text-white">
                                        <?php echo $item['name']; ?>
                                    </p>
                                    <p class="font-medium text-white text-opacity-80">
                                        Price
                                    </p>
                                    <p class="text-xs font-medium text-gray-400">
                                        Exclude Vat
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm font-semibold text-white">
                                £ <?php echo $item['price']; ?>
                            </p>
                        </li>
                    <?php endforeach; ?> -->
                </ul>

              <div class="md:block hidden">
                <h1 class="relative text-2xl text-gray-200 mb-8 sm:text-3xl">
                  Your Quote Details
                  <span class="mt-2 block h-[3px] w-10 bg-gray-200 sm:w-20"></span>
                </h1>
                <?php


// Get WooCommerce product data
$product = wc_get_product($product_id);

// Check if the product exists
if ($product) {
  
    $product_title = $product->get_name();
    $product_sku = $product->get_sku();
  
}
?>

<div class='flex items-start gap-2 border p-2'>
    
<img src="<?php echo wp_get_attachment_url( $product->get_image_id(), 'large' ); ?>" class="w-40" />
    <div class='ml-4 border-l-[1px] pl-4'>
        <h5 class="md:text-white font-medium"><?php echo $product_title; ?></h5>
        <h5 class="md:text-white font-medium">SKU: <span class='font-extralight'><?php echo $product_sku; ?></span></h5>
        <div class="md:text-white font-medium">Color: <div class='font-extralight'>
            <!-- <?php foreach ($variations as $variation): ?>
                <div><?php echo $variation['attributes']['attribute_pa_color']; ?>:
                    <span><?php echo $variation['attributes']['attribute_pa_size']; ?> (<?php echo $variation['max_qty']; ?>), </span>
                </div>
            <?php endforeach; ?> -->
        </div>
    </div>
</div>
              </div>
            </div>
            <div class="relative mt-10 text-white">
              <h3 class="mb-5 text-lg font-bold">Support</h3>
              <p class="text-sm font-semibold">0800 051 0821</p>
              <p class="mt-1 text-sm font-semibold">
                <Link href="mailto:enquiries@printwish.co.uk">
                  enquiries@printwish.co.uk
                </Link>
                <span class="font-light">(Email)</span>
              </p>
              <p class="mt-1 text-sm font-semibold">
                <Link href="mailto:sales@printwish.co.uk">
                  sales@printwish.co.uk
                </Link>
                <span class="font-light">(Email)</span>
              </p>
            </div>

            <div class="relative mt-10 flex">
              <p class="flex flex-col">
                <span class="text-sm font-bold text-white">
                  Money Back Guarantee
                </span>
                <span class="text-xs font-medium text-white">
                  within 30 days of purchase
                </span>
              </p>
            </div>

            <div class="relative mt-10">
              <div class="my-5 h-0.5 w-full !bg-white/30" />
              <h3 class="font-semibold text-lg text-white">
                Request For Quote
              </h3>
              <p class="text-gray-200 mt-4">
                Your personal data will be used to process your order, support
                your experience throughout this website, and for other purposes
                described in our privacy policy.
              </p>
             
            </div>
          </div>
        </div>
      </div>

<?php

get_footer();