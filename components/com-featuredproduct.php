<section class='md:py-16 py-10 relative'>
    <div class='max-w-screen-xl mx-auto px-4 '>
        <div class='w-fit mx-auto mb-10'>
            <h2 class='sm:text-4xl text-2xl font-semibold font-opensans text-accent uppercase text-center mb-5'>
                FEATURED PRODUCTS
            </h2>
        </div>
        <div class='md:mt-24 mt-20 relative'>
            <div class='products_slider'>
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10, // Retrieve all products,
                    'product_cat' => 'custom-t-shirt-printing-cheap-t-shirt-printing',
                );

                $products_query = new WP_Query($args);
                if ($products_query->have_posts()):
                    while ($products_query->have_posts()):
                        $products_query->the_post();
                        $args = [get_the_ID()];
                        // Include the template part
                        get_template_part('components/widget/product', 'box', $args);
                    endwhile;
                    wp_reset_postdata(); // Reset WordPress query
                else:
                    echo 'No products found';
                endif;
                ?>
            </div>
            <button
                class="prev absolute -top-10 right-20 transform -translate-y-1/2 bg-primary rounded-lg hover:bg-secondary text-white p-3 text-2xl ">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z">
                    </path>
                </svg>
            </button>
            <button
                class="next absolute -top-10 right-4 transform -translate-y-1/2 bg-primary rounded-lg hover:bg-secondary text-white p-3 text-2xl ">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                </svg>
            </button>
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