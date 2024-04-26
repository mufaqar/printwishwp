<section><div class="py-6 relative md:py-16 bg-cover bg-no-repeat bg-center" style="background-image:linear-gradient(0deg, rgba(0, 36,63,0.7), rgba(0, 36,63,0.7)), url(/images/merge.png)"><div class="container mx-auto px-4  text-white"><h2 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2  sm:text-left text-center">Products</h2><div></div></div></div></section>

<section class='py-16 relative'>
    <div class='max-w-screen-xl mx-auto px-4 '>
        
        <div class='w-full'>
            <div class='grid sm:grid-cols-2 md:grid-cols-5  grid-cols-2 gap-1 sm:gap-2 md:gap-4'>
                <?php
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 20, // Retrieve all products
                    );

                    $products_query = new WP_Query($args);
                    if ($products_query->have_posts()) :
                        while ($products_query->have_posts()) : $products_query->the_post();
                            

                            $args = [get_the_ID()];

                            // Include the template part
                            get_template_part('components/widget/product', 'box', $args);
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