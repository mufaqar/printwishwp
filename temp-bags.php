<?php
/**
 * Template Name: Cotton Bags
 */

get_header();
?>


<section class="container mx-auto px-4">
    <div class="flex justify-center mt-6">
        <img src="<?php echo get_template_directory_uri(); ?>/images/why-chose.webp" alt="choose" width="810" height="424" />
    </div>
    
    <?php get_template_part( 'components/com', 'brands' ); ?>
    <?php get_template_part( 'components/com', 'reviews' ); ?>

    <div class="border-[3px] border-[#FF00FF] p-2">
        <h5 class="text-center font-bold md:text-2xl">
            Place Your Orders To Us And Get Upto 20% Off Prices With Free UK Shipping And Logo Setups.
        </h5>
    </div>

    <h4 class="bg-primary p-3 mt-3 text-center text-white font-bold text-2xl md:text-3xl">Cotton Tote Bags</h4>

    <div class="grid lg:grid-cols-4 md:grid-cols-3 xl:grid-cols-4 grid-cols-2 gap-5 mt-7">
    <?php
    $args = array(
        'post_type' => 'bags',
        'posts_per_page' => -1, // Adjust the number of posts if needed
    );
    $bags_query = new WP_Query($args);

    if ($bags_query->have_posts()) {
        while ($bags_query->have_posts()) {
            $bags_query->the_post();
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $title = get_the_title();
            $price = get_post_meta(get_the_ID(), 'bagsInfo_price', true); // Assuming price is stored as a custom field
            $slug = $post->post_name; // Get the post slug
            ?>
            <article class="p-1" key="<?php echo get_the_ID(); ?>">
                <div>
                    <a href="<?php echo get_permalink(); ?>" class="md:h-[300px] cursor-pointer flex flex-col justify-center items-center group">
                        <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($title); ?>" width="200" height="200" class="object-contain h-[180px] transition-all duration-200 ease-in-out w-full mb-3 group-hover:scale-95 md:h-full" />
                    </a>
                    <div class="flex flex-col justify-center items-center">
                        <h5 class="min-h-[40px]">
                            <a href="<?php echo get_permalink(); ?>" class="text-sm font-bold flex font-roboto text-accent hover:text-secondary">
                                <span class="text-center"><?php echo esc_html($title); ?></span>
                            </a>
                        </h5>
                        <p class="text-center font-bold font-roboto mb-3 text-primary">
                            <?php if ($price) { ?>
                                <span class="text-secondary font-semibold text-lg hover:text-secondary">£<?php echo esc_html($price); ?> / Each</span>
                            <?php } else { ?>
                                <span class="text-red-500 font-bold text-lg hover:text-secondary">Out of Stock</span>
                            <?php } ?>
                        </p>
                        <a href="<?php echo get_permalink(); ?>" class="text-xs sm:text-base relative font-semibold flex justify-center text-center font-roboto uppercase bg-primary text-white px-2 md:px-6 py-1 hover:bg-transparent hover:text-primary border-primary border-2 hover:border-primary">
                            View Product
                        </a>
                    </div>
                </div>
            </article>
            <?php
        }
        wp_reset_postdata();
    }
    ?>
</div>


    <h4 class="bg-primary p-3 mt-3 text-center text-white font-bold text-2xl md:text-3xl">Gallery</h4>
    <!-- Uncomment the line below if you have a GallerySlider shortcode -->
    <!-- <?php echo do_shortcode('[gallery_slider gallery="' . get_field('gallery') . '"]'); ?> -->

    <section class="my-10">
        <h2 class="font-semibold text-xl md:text-2xl">Get Customized Tote Bags for all your Needs!</h2>
        <p class="my-4 text-gray-600 !font-light">Print Wish designs Customised tote bags for every type of requirement. With our technologically advanced design tools, we are motivated to bring our customers innovative designs with great quality. Tote bags are versatile enough to be used for different purposes. We have expertise in manufacturing a large number of Printed tote bags that can be used for different business and personal purposes.</p>
        <p class="my-4 text-gray-600 !font-light">We accommodate your requirements and manufacture Personalised tote bags with unique features that serve the purpose you are looking for. Whether you want to promote your business or want a customised bag for regular use, we will materialise your creativity.</p>
        <p class="my-4 text-gray-600 !font-light">Explore our wide range of designing and printing options for a Cotton Tote Bag that looks aesthetic and is also an environmentally safe option.</p>
        <h2 class="font-semibold text-xl md:text-2xl">Tote Bags for Marketing and Promotions</h2>
        <p class="my-4 text-gray-600 !font-light">Make your business stand out and make an impression among the customers with Customised tote bags with your logo and brand name. A tote bag can be a great advertising tool, especially in the decade when sustainable options are not only the need of the moment but also much favoured and widely accepted.</p>
        <p class="my-4 text-gray-600 !font-light">Opt for personalised Tote bags that will have your business or brand name and logo that you can give out complimentarily with your products. This will be an affordable marketing initiative so that anywhere the bag is taken, your business gets promoted. Make use of this remarkable advertising opportunity and witness your business scale to new heights.</p>
        <p class="my-4 text-gray-600 !font-light">Personalised tote bags can be great for promotions and highlighting your brand identity to customers. Marketing is no wonder the most essential component of a successful business and you should leave no stone unturned to make the business flourish. Although, a very new trend, tote bags have managed to be an influential marketing tool.</p>
        <p class="my-4 text-gray-600 !font-light">Many businesses are adopting the Cotton Tote Bag as part of the brand distinguishing as using these bags for product delivery is a very elegant and sophisticated choice. It can help you build an impression on the customers and project your brand as a premier one.</p>
        <p class="my-4 text-gray-600 !font-light">Print your promotional Printed tote bags today!</p>
        <h2 class="font-semibold text-xl md:text-2xl">Add a zing to your fashion with Personalised tote bags</h2>
        <p class="my-4 text-gray-600 !font-light">Do you love fashion trends that keep you away from the crowd? Are you someone who loves personalised fashion goals? You are at the right place then. We at Print Wish, print all that you wish for. Make your regular tote bags interesting and awe-inspiring with our category of Printed tote bags.</p>
        <p class="my-4 text-gray-600 !font-light">We are capable of designing all that you can imagine. Get amazed by our superior quality print and 100% personalised quality tote bags that will have heads turning. Whether you want to print your picture or a motivating quote, we will pay complete attention to your demand and deliver satisfactory products.</p>
        <p class="my-4 text-gray-600 !font-light">If you are someone who loves having a unique collection of bags, we will love to design your Natural Tote Bags as per your requirement so that you have the access to an exclusive collection for your family and friends.</p>
        <p class="my-4 text-gray-600 !font-light">Visit our website today and order customised tote bags in bulk or fewer multiples to make a style statement to create recognisable brand awareness.</p>
        <h2 class="font-semibold text-xl md:text-2xl">Customized Tote bags at an affordable price</h2>
        <p class="my-4 text-gray-600 !font-light">Are you planning to optimize your tote bags for creating a brand identity? We will help you do so. Visit our website and customize tote bags in small or large volumes for business purposes. We bring to you affordable customization options without compromising on quality. We are technically sound and creatively compassionate to understand your ideas and materialise them as per your requirement.</p>
        <p class="my-4 text-gray-600 !font-light">We bring you cheap but branded tote bags that can be created in various sizes, shapes, colours, or designs. We help you create promotional bags at significantly affordable rates that could help your business grow and sales escalate.</p>
        <p class="my-4 text-gray-600 !font-light">Print Wish designs Customised tote bags that are durable and high in quality but are lighter on your wallet. Visit our website today and order in bulk for your business promotions and brand awareness.</p>
        <p class="my-4 text-gray-600 !font-light">Forget paying a lumpsum amount in the name of customization, as we are bringing you budget-friendly printing and customization options for both bulk and small orders.</p>
        <h2 class="font-semibold text-xl md:text-2xl">How to place your order?</h2>
        <p class="my-4 text-gray-600 !font-light">We have devised an easy and simple procedure for you to place an order. Just fill in our form and we will get back to you in 1 hour with a lucrative deal. Our prices for Printed tote bags are the most reasonable in the market.</p>
        <p class="my-4 text-gray-600 !font-light">You can also enjoy a significant discount on ordering in bulk. Our minimum order amount is 50 pieces and there is no maximum order limit. Whatever your order quantity is, we complete the order with the same passion and quality.</p>
        <p class="my-4 text-gray-600 !font-light">Print Wish is renowned for fast and quality service and we make sure that your orders get delivered in 3 to 5 working days. Alternatively, you can also avail of our express delivery options in 48 hours with an extra charge.</p>
        <p class="my-4 text-gray-600 !font-light">So, what are you waiting for? Visit our website, check out our products and make an impression with our Personalised tote bags.</p>
        <h2 class="font-semibold text-xl md:text-2xl">Why us?</h2>
        <p class="my-4 text-gray-600 !font-light">Print Wish is bringing a revolution in the customizable fabric segment with its quality products, affordable printing, various quantity option, and simple ordering procedure. We have a versatile collection of cheap and branded Natural tote bags that can be customised as per your requirement.</p>
        <p class="my-4 text-gray-600 !font-light">With a rating of 4.98 stars based on 12355 reviews of happy and satisfied customers, we are on the way to becoming the most reliable and trusted fabric printing and customization company.</p>
        <p class="my-4 text-gray-600 !font-light">With affordable rates and quality products, we have changed the customer experience for Personalised tote bags. From business needs to personal uses, we are experts in customised products and are the best option for you in the UK.</p>
        <p class="my-4 text-gray-600 !font-light">Visit our website, reach out to us, and get your quote today!</p>
    </section>
</section>




<?php  get_footer();