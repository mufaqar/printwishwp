<section class='py-16 relative'>
    <div class='max-w-screen-xl mx-auto px-4 '>
        <div class='w-fit mx-auto mb-10'>
            <h2 class='sm:text-4xl text-2xl font-semibold font-opensans text-accent uppercase text-center mb-5'>
                FEATURED PRODUCTS
            </h2>
        </div>
        <div class='mt-24 relative'>

        <div class='products_slider'>
    <?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10, // Retrieve all products
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