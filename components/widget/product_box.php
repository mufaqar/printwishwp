<article class="p-1 relative">
    <div class='p-1 border border-gray-200 pb-4'>
        <a href="#"
            class='border-b-[1px] border-gray-100 p-2 md:h-[300px] cursor-pointer mb-2 flex flex-col justify-center items-center group'>
            <img src="<?php echo $img_src; ?>" alt="" width="200" height="200"
                class='object-contain h-[180px] transition-all duration-200 ease-in-out w-full mb-3 group-hover:scale-95 md:h-full' />
        </a>
        <div class='flex flex-col justify-center items-center'>
            <h5 class="min-h-[40px]">
                <a href="#" class='text-sm font-bold flex font-roboto text-accent hover:text-secondary'>
                    <span class='text-center'><?php echo $title; ?></span>
                </a>
            </h5>
            <p class='text-xs text-center text-secondary sm:text-base'>
                <strong><?php echo "32" ?></strong> Colors available
            </p>
            <p class='text-center font-bold font-roboto mb-3 text-primary'>
                Printed From <span class='text-secondary  hover:text-secondary'>£<?php echo $price; ?></span>
            </p>
            <a href="#"
                class='text-xs sm:text-base relative font-semibold flex justify-center text-center font-roboto uppercase bg-primary text-white px-2 md:px-6 py-1 hover:bg-transparent hover:text-primary border-primary border-2 hover:border-primary'>
                View Product
            </a>
        </div>
    </div>
    <div class='absolute bg-green-400 p-1 text-white px-3 top-3 right-3 text-sm '>Best Seller</div>
</article>