<?php
// Assuming $data and $image are passed as parameters to this component

$smallPrice = null; // Replace with your logic to find smallPrice
$colors_lenght = null; // Replace with your logic to find colors_length
$simplePrice = str_replace('£', '', $data['price']); // Extracting price without £

$ratingData = [
    'rating' => null, // Replace with your logic to find rating
    'ratingStarUrl' => null, // Replace with your logic to find ratingStarUrl
    'ratingStatsUrl' => null // Replace with your logic to find ratingStatsUrl
];

$openRating = false; // Default state for openRating

?>

<article class="p-1 relative">
    <div class='p-1 border border-gray-200 pb-4'>
        <a href="/product/<?php echo $data['slug']; ?>" class='border-b-[1px] border-gray-100 p-2 md:h-[300px] cursor-pointer mb-2 flex flex-col justify-center items-center group'>
            <img src="<?php echo $image; ?>" alt="<?php echo $data['title'] ?? $data['name']; ?>" width="200" height="200" class='object-contain h-[180px] transition-all duration-200 ease-in-out w-full mb-3 group-hover:scale-95 md:h-full' />
        </a>
        <div class='flex flex-col justify-center items-center'>
            <h5 class="min-h-[40px]">
                <a href="/product/<?php echo $data['slug']; ?>" class='text-sm font-bold flex font-roboto text-accent hover:text-secondary'>
                    <span class='text-center'><?php echo $data['title'] ?? $data['name']; ?></span>
                </a>
            </h5>
            <p class='text-xs text-center text-secondary sm:text-base'>
                <strong><?php echo isset($colors_lenght['options']) ? count($colors_lenght['options']) : $colors_lenght; ?></strong> Colors available
            </p>
            <p class='text-center font-bold font-roboto mb-3 text-primary'>
                Printed From <span class='text-secondary  hover:text-secondary'>£<?php echo $simplePrice; ?> </span>
            </p>
            <?php if (strlen($ratingData['ratingStarUrl']) > 2): ?>
                <div onclick="toggleRating()" class='flex flex-col -mt-3 justify-between items-center min-h-[62px]'>
                    <div class='items-center'>
                        <img src="<?php echo $ratingData['ratingStarUrl']; ?>" alt="rating" width="200" height="200" class="max-w-[120px] sm:w-full cursor-pointer" />
                    </div>
                    <div class='flex items-center mb-2 gap-1'>
                        <span class='font-normal text-sm whitespace-nowrap'><?php echo $ratingData['rating']['value']; ?> Reviews</span>
                        <button onclick="toggleRating()">
                            <?php echo $openRating ? '<IoIosArrowUp class="text-lg cursor-pointer" />' : '<IoIosArrowDown class="text-lg cursor-pointer" />'; ?>
                        </button>
                    </div>
                    <?php if ($openRating): ?>
                        <img src="<?php echo $ratingData['ratingStatsUrl']; ?>" alt="ratings" width="500" height="200" class="absolute top-[85%] right-0 z-10 drop-shadow-xl" />
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <a href="/product/<?php echo $data['slug']; ?>" class='text-xs sm:text-base relative font-semibold flex justify-center text-center font-roboto uppercase bg-primary text-white px-2 md:px-6 py-1 hover:bg-transparent hover:text-primary border-primary border-2 hover:border-primary'>
                View Product
            </a>
        </div>
    </div>
    <?php if ($data['featured']): ?>
        <div class='absolute bg-green-400 p-1 text-white px-3 top-3 right-3 text-sm '>Best Seller</div>
    <?php endif; ?>
</article>

