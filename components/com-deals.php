<section class="border-4 border-dashed border-primary p-2 mb-8">
    <div class="py-6 relative  bg-cover bg-no-repeat bg-center">
        <div class="container mx-auto px-4">
            <h2 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-4  sm:text-left text-center">Special Offers  </h2>
            <p class="mb-4">We have put together a collection of special deals that include our most popular selling products as reviewed by our customers.</p>

       

           <h5 class="mb-4"> What do our deals include? </h5>
            <ol class="flex flex-col gap-2">            
                <li>Fruit of the Loom Value weight t-shirts (Best Seller). You can mix colors and sizes. </li>
                <li>1 single colour print anywhere on the t-shirt up to A3 size (320mm x 410mm). </li>
                <li>FREE Set-Up therefore the next time you order your design will already be ready to go.</li>
                <li>FREE Delivery* to your doorstep (*UK mainland only).</li>
            </ul>
              
         
        </div>
    </div>

    <div class='max-w-screen-xl mx-auto px-4 '>
        <div class='w-full'>
            <div class='grid sm:grid-cols-2 md:grid-cols-5 grid-cols-2 gap-1 sm:gap-2 md:gap-4 '>
                <?php
                    $args = array(
                        'post_type'  => 'product',
                        'deals' => 'in-deal', 
                        'posts_per_page' => -1, 
                    );

                    $products_query = new WP_Query($args);
                    if ($products_query->have_posts()) :
                        while ($products_query->have_posts()) : $products_query->the_post();
                            $args = [get_the_ID()];
                            // Include the template part
                            get_template_part('components/widget/deal', 'box', $args);
                        endwhile;
                        wp_reset_postdata(); // Reset WordPress query
                    else :
                        echo 'No products found';
                    endif;
                    ?>
            </div>


        </div>
    </div>
</section>



<script>
function toggleRating(divElement) {
    var ratingInfo = divElement.querySelector('.rating-info');
    if (ratingInfo.style.display === 'none' || ratingInfo.style.display === '') {
        ratingInfo.style.display = 'block';
    } else {
        ratingInfo.style.display = 'none';
    }
}
</script>