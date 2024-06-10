<?php
get_header();

while (have_posts()) :
    the_post();
    $bag = get_post();
    $featured_image_url = get_the_post_thumbnail_url($bag->ID, 'full');
    $bags_info = get_post_meta($bag->ID, 'bagsInfo', true);
?>

<div>
    <section class="shadow-lg p-3 md:block">
        <div class="container mx-auto flex flex-nowrap justify-between items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/freeukdelivery-1.png.webp" alt="image"
                width="154" height="45" class="w-28 sm:w-[154px]" />
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/nosetup-1.png.webp" alt="image" width="109"
                height="45" class="w-24 sm:w-[109px]" />
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/pricemat-1.png.webp" alt="image" width="118"
                height="45" class="w-24 sm:w-[118px]" />
        </div>
    </section>
    <figure class="flex justify-center my-2 md:hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/stars.png" alt="stars" width="1024" height="315" />
    </figure>
    <section class="py-4 marker:md:py-16">
        <div class="max-w-screen-xl mx-auto px-4 flex md:flex-row flex-col gap-5">
            <div class="md:w-1/4 w-full">
                <h2 class="text-2xl font-bold text-center md:text-left text-blue-500">
                    <?php echo esc_html($bag->post_title); ?>
                </h2>
                <img src="<?php echo esc_url($featured_image_url); ?>" alt="cotton" width="665" height="665" />

               

                
                <ul>
                    <?php if (!empty($bags_info)) : ?>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Lead time:</strong>  <?php echo get_field( "lead_time" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Material:</strong> <?php echo get_field( "material" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Product Size:</strong> <?php echo get_field( "product_size" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Print Area:</strong> <?php echo get_field( "print_area" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Carry Shoulder Straps size:</strong>
                        <?php echo get_field( "carry_shoulder_straps_size" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Weight:</strong> <?php echo get_field( "weight" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Capacity:</strong> <?php echo get_field( "capacity" ); ?>
                    </li>
                    <li class="capitalize mb-1 text-base text-gray-600 font-roboto">
                        <strong>Print Options:</strong> <?php echo get_field( "print_options" ); ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="md:w-2/4 w-full">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/stars.png" alt="stars"
                    class="hidden md:block" width="1024" height="315" />
                <h2 class="font-semibold bg-primary text-white text-2xl text-center py-1.5 mb-4 px-4">
                    Printed From £<?php echo get_field( "price" ); ?> Each Ex Vat
                </h2>
                <p class="text-lg text-gray-600 font-roboto">
                    <span class="!font-semibold !text-secondary">Note:</span> We have flexible pricing options that
                    can be customised to suit your order volume and the number of colors in your design. This allows us
                    to offer more affordable and competitive rates to our valued customers. Unfortunately, we cannot
                    disclose prices on our website. To receive the most advantageous and competitive quote, please send
                    us your order inquiry and we will respond promptly with our best pricing offer.
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/order.jpg" alt="order" width="1920"
                    height="1007" class="my-5" />
                <p class="text-lg text-gray-600 font-roboto">
                    Now that we are all having to pay for plastic bags for our shopping trips it makes sense to have a
                    Print Wish Promo Shoulder Tote Bag on hand, which can be used again and again. Easy to print onto
                    the 100% cotton surface up to a maximum size of 280×320mm. This bag is great to add to your retail
                    collection or for promoting your Company name, brand or service. Printwish made custom bags with
                    some unique features which can easily attract the customers. Printed tote bags are becoming popular
                    and it is a fashionable item for customers. If you want cheap branded tote bags with custom message
                    or image then contact us, we will provide you with cheap rates. Printwish have a great variety of
                    different colors, sizes, and styles of tote bags. Promotional cotton bags are made with outstanding
                    fabric. You can promote your business at cheap rates so, place an order right away.
                </p>
            </div>
            <div class="md:w-1/4 w-full">
                <div class="bg-primary p-5">
                    <h2 class="font-semibold text-white text-2xl text-center">
                        Quote Form
                    </h2>
                    <p class="font-medium text-white text-base text-center">
                        To Ask a Question, Start an Order, or Get a Quote, Please Fill in The Contact Form Below
                    </p>
                </div>
                <div class="mt-5">
                    <form class="grid gap-5" method="post"
                        action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="quote_form">
                        <input type="hidden" name="title" value="<?php echo esc_attr($bag->post_title); ?>"
                            id="title" />
                        <div>
                            <label for="name" class="block mb-2 text-base font-medium text-gray-900">Your
                                name</label>
                            <input type="text" name="name" id="name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Your Name" required />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-base font-medium text-gray-900">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="name@flowbite.com" required />
                        </div>
                        <div>
                            <label for="quantity"
                                class="block mb-2 text-base font-medium text-gray-900">Quantity</label>
                            <select name="quantity" id="quantity"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base focus:ring-primary focus:border-primary block w-full p-2.5">
                                <option value="50-99">50-99</option>
                                <option value="100-249">100-249</option>
                                <option value="250-499">250-499</option>
                                <option value="500-999">500-999</option>
                            </select>
                        </div>
                        <div>
                            <label for="customQuantity"
                                class="block mb-2 text-base font-medium text-gray-900">Custom Quantity</label>
                            <input type="number" name="customQuantity" id="customQuantity"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Custom Quantity" required />
                        </div>
                        <div>
                            <label for="artwork" class="block mb-2 text-base font-medium text-gray-900">Upload Your
                                Artwork</label>
                            <input type="file" name="artwork" id="artwork"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base focus:ring-primary focus:border-primary block w-full p-2.5"
                                required />
                        </div>
                        <div>
                            <label for="message"
                                class="block mb-2 text-base font-medium text-gray-900">Message</label>
                            <textarea name="message" id="message" rows="4"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Leave a comment..."></textarea>
                        </div>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-primary font-medium text-base w-full px-5 py-2.5 text-center">Get
                            A Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
endwhile;

get_footer();
?>