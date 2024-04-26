<?php   $p_id =  $args[0];
            $product = wc_get_product($p_id);
            $img = wp_get_attachment_image_src(get_post_thumbnail_id($p_id), 'full');
            $img_src = $img[0];
            $title = get_the_title();
            $price = $product->get_price_html();

?>

<article class="p-1 relative">
    <div class='p-1 border border-gray-200 pb-4'>
        <a href="<?php the_permalink()?>"
            class='border-b-[1px] border-gray-100 p-2 md:h-[300px] cursor-pointer mb-2 flex flex-col justify-center items-center group'>
            <img src="<?php echo $img_src; ?>" alt="" width="200" height="200"
                class='object-contain h-[180px] transition-all duration-200 ease-in-out w-full mb-3 group-hover:scale-95 md:h-full' />
        </a>
        <div class='flex flex-col justify-center items-center'>
            <h5 class="min-h-[40px]">
                <a href="<?php the_permalink()?>"
                    class='text-sm font-bold flex font-roboto text-accent hover:text-secondary'>
                    <span class='text-center'><?php echo $title; ?></span>
                </a>
            </h5>
            <p class='text-xs text-center text-secondary sm:text-base'>
                <strong><?php echo "32" ?></strong> Colors available
            </p>
            <p class='text-center font-bold font-roboto mb-3 text-primary'>
                Printed From <span class='text-secondary  hover:text-secondary'>£<?php echo $price; ?></span>
            </p>





            <?php if (have_rows('product_rating')): ?>
            <?php while (have_rows('product_rating')): the_row(); ?>





            <div onClick="toggleRating(this)"  class="flex flex-col -mt-3 justify-between items-center min-h-[62px]">
                <div class="items-center">
                    <img src="<?php the_sub_field('star_image'); ?>" alt="rating"
                        class="max-w-[120px] sm:w-full cursor-pointer" width="200" height="200">
                </div>
                <div class="flex items-center mb-2 gap-1">
                    <span class="font-normal text-sm whitespace-nowrap"><?php the_sub_field('rating_number'); ?>
                        Reviews</span>
                    
                    <button><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-lg cursor-pointer" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg></button>
                </div>
                <div class="rating-info" style="display: none;">
                    <img src="<?php the_sub_field('rating_image'); ?>" alt="ratings"
                        class="absolute top-[85%] right-0 z-10 drop-shadow-xl" width="500" height="200">
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>


            <a href="<?php the_permalink()?>"
                class='text-xs sm:text-base relative font-semibold flex justify-center text-center font-roboto uppercase bg-primary text-white px-2 md:px-6 py-1 hover:bg-transparent hover:text-primary border-primary border-2 hover:border-primary'>
                View Product
            </a>
        </div>
    </div>
    <div class='absolute bg-green-400 p-1 text-white px-3 top-3 right-3 text-sm '>Best Seller</div>
</article>

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