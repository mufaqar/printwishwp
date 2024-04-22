<?php

$Logos = array(
    array('img' => '/images/brand1.webp'),
    array('img' => '/images/brand2.webp'),
    array('img' => '/images/brand3.webp'),
    array('img' => '/images/brand4.webp'),
    array('img' => '/images/brand5.webp'),
    array('img' => '/images/brand6.webp'),
    array('img' => '/images/brand7.webp'),
    array('img' => '/images/brand8.webp'),
    array('img' => '/images/brand9.webp'),
    array('img' => '/images/brand10.webp'),
    array('img' => '/images/brand11.webp'),
    array('img' => '/images/brand12.webp'),
    array('img' => '/images/brand13.webp'),
    array('img' => '/images/brand14.webp')
);


?>

<section class="pt-4">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="w-fit mx-auto">
            <h2 class="sm:text-4xl text-2xl leading-6 font-bold font-opensans text-black uppercase text-center mb-5">
                BRANDS WE WORK WITH
            </h2>
            <p class="text-lg font-normal text-center text-accent font-roboto">
                Here are some household names that trust PrintWish to supply their printed clothing:
            </p>
        </div>
        <div class="mt-6">
        <div class="brand_slider">
            <?php
            if ($Logos && is_array($Logos)) {
                foreach ($Logos as $idx => $item) {
            ?>
                <div class="p-1 sm:p-2">
                    <img src="<?php bloginfo('template_directory'); ?>/public/<?php echo $item['img']; ?>" alt="image" width="200" height="200" class="mx-auto border border-gray-800 rounded-full" />
                </div>
            <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
</section>


