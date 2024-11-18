<h4 class='bg-primary p-3 text-center text-white font-bold text-2xl sm:mt-10 mt-5 md:text-3xl'>Our Range of Printed
    T-shirts</h4>
<div class='w-full mt-5'>
    <div class='grid sm:grid-cols-2 md:grid-cols-5 relative product-grid grid-cols-2 gap-1 sm:gap-2 md:gap-4'>
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
</div>