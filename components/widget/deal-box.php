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
            <img src="<?php echo $img_src; ?>" alt="<?php echo $title; ?>" width="200" height="200"
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
                <strong><?php echo "1" ?></strong> Color available
            </p>
           
            <a href="<?php the_permalink()?>"
                class='text-xs sm:text-base relative font-semibold flex justify-center text-center font-roboto uppercase bg-primary text-white px-2 md:px-6 py-1 hover:bg-transparent hover:text-primary border-primary border-2 hover:border-primary'>
                View Deal
            </a>
        </div>
    </div>
    

 


</article>

