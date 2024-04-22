<?php
// Define the Categories array
$Categories = array(
    array(
        'id' => 1,
        'name' => 'T-SHIRTS',
        'img' => '/images/1.webp',
        'link' => 'custom-t-shirt-printing-cheap-t-shirt-printing'
    ),
    array(
        'id' => 2,
        'name' => 'Polo Shirts',
        'img' => '/images/2.webp',
        'link' => 'polo'
    ),
    array(
        'id' => 3,
        'name' => 'SweatShirt',
        'img' => '/images/3.webp',
        'link' => 'sweat-shirts'
    ),
    array(
        'id' => 4,
        'name' => 'Hoodies',
        'img' => '/images/4.webp',
        'link' => 'hoodies'
    ),
    array(
        'id' => 5,
        'name' => 'Apron',
        'img' => '/images/5.webp',
        'link' => 'aprons'
    ),
    array(
        'id' => 6,
        'name' => 'Hi-Ves Vests',
        'img' => '/images/6.webp',
        'link' => 'hivis'
    ),
    array(
        'id' => 7,
        'name' => 'Beanie/Caps',
        'img' => '/images/7.png',
        'link' => 'embroidered-beanies-embroidered-caps-embroidered'
    ),
    array(
        'id' => 8,
        'name' => 'Cotton Bags',
        'img' => '/images/8.webp',
        'link' => 'cotton-bags-cheap-branded-tote-bags'
    )
);
?>

<section class='pb-10'>
    <div class='max-w-screen-xl mx-auto'>
        <h2 class='sm:text-4xl text-2xl font-semibold font-opensans text-accent uppercase text-center mb-5'>
            BEST SELLING CATEGORIES
        </h2>
        <div class='grid md:grid-cols-3 lg:grid-cols-4 grid-cols-2 gap-7 mt-10 p-4 md:p-8 bg-gray-100'>
            <?php
            if ($Categories && is_array($Categories)) {
                foreach ($Categories as $idx => $item) {
            ?>
            <div class=''>
                <a href='<?php echo $item['link']; ?>'>
                    <img src='<?php bloginfo('template_directory'); ?>/public/<?php echo $item['img']; ?>' alt='image'
                        width='300' height='300' class='object-fill w-full mx-auto mb-3' />
                    <div class=''>
                        <p class='md:text-2xl font-bold text-accent hover:text-secondary text-center'>
                            <?php echo $item['name']; ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>

