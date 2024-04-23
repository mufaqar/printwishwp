<?php
/**
 * Template Name: Delivery Information
 */

get_header();
?>

<?php

$Data = [
    [
        'id' => '1',
        'title' => 'What are the delivery days & hours?',
        'content' => 'Dispatches are made from Monday to Friday between 9:00 and 19:00. But if you’re in need of delivery outside of this schedule, we also offer special out-of-hours services. Please, contact us to find out more.'
    ],
    [
        'id' => '2',
        'title' => 'How much does delivery cost?',
        'content' => 'It is hard to give you an exact price as this entirely depends on how heavy the package is. The more garments you order, the more the price varies. Materials also affect the end result as these have different weights; it will always cost more to transport a hoodie than a vest, for example. But just to give you an idea, a next day delivery of 20 tees will be around £7.99.'
    ],
    [
        'id' => '3',
        'title' => 'Do you deliver outside the UK?',
        'content' => 'Yes. Garments can be dispatched internationally to a certain number of territories. Keep in mind that pricing for this type of orders are on a case by case basis and import taxes (plus any other cost related to offshore deliveries) are the customer’s responsibility.'
    ],
    [
        'id' => '4',
        'title' => 'Do you require a signature on delivery?',
        'content' => 'Yes. In order for garments to arrive safely, all packages are sent via tracked courier services which require someone’s signature upon delivery.'
    ],
    [
        'id' => '5',
        'title' => 'My package came in damaged. What do I do?',
        'content' => 'As soon as possible, take some pictures of the damage and submit a claim using the Contact form or get in touch directly with your account manager. Keep in mind that our customers’ orders travel in quite resilient double-walled boxes. This means that even if they get bumped during transit, it will probably be just cosmetic and won’t affect the contents.'
    ],
    [
        'id' => '6',
        'title' => 'Is the delivery 100% guaranteed to arrive on time?',
        'content' => 'Trust us when we say that we do everything in our power to make sure all packages arrive on time. Unfortunately, there are still rare cases where unexpected issues with courier services may cause delays'
    ]
];




$Data2 = [
    [
        'id' => '1',
        'Name' => 'Turnaround Times',
        'description' => 'Choose the delivery service that best adapts to your situation:',
        'Day' => 'Standard: 5-10 days',
        'Varenty' => 'Express: 2-4 days'
    ],
    [
        'id' => '2',
        'Name' => 'Order Tracking',
        'description' => 'Stay on top of your order thanks to notification emails and tracking systems for the chosen courier as soon as your garments leave our warehouses.',
        'Day' => '',
        'Varenty' => ''
    ],
    [
        'id' => '3',
        'Name' => 'Delivery Hours',
        'description' => 'Deliveries are made during weekdays from 9:00 to 19:00, but flexibility &amp; Saturday delivery can be possible depending on order details.',
        'Day' => '',
        'Varenty' => ''
    ]
];
?>

<div class="items-center mx-auto max-w-screen-xl px-6 md:px-6 mt-6">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class='text-[#0088cc] font-[400] leading-[40px] text-[30px] pb-[32px]'>Delivery Information</h2>
            <p class='text-[#7b858a] pb-[1.25rem] font-[400]'>We meet tough deadlines with speedy turn around & quick
                delivery</p>
        </div>
        <div class="lg:flex lg:space-x-5 mb-[20px]">
            <?php
            foreach ($Data2 as $item) {
            ?>
            <div class="box  lg:w-[33%] bg-[#0088CC] text-white rounded-[10px]">
                <div class=" text-center">
                    <h3 class='text-[30px] font-[400] text-white leading-[40px] pb-[20px] pt-4'>
                        <?php echo $item['Name']; ?></h3>
                    <p class='m-auto lg:w-[320px] leading-[27px] pb-[20px]'><?php echo $item['description']; ?></p>
                    <p class='pb-[20px] leading-[27px]'><?php echo $item['Day']; ?></p>
                    <p class='pb-[2rem] leading-[27px]'><?php echo $item['Varenty']; ?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="cont">
        <div class="lg:flex">
            <div class="hea">
                <h2 class='font-[400] text-[30px] text-[#1d2127] pb-[32px]'>Shipping F.A.Q.</h2>
                <p class='text-[#1e2d35] pb-[1.25rem]'>Find below the most asked questions regarding our shipping
                    services:</p>
                <div class="box bg-[#f8f8f8]  lg:w-[680px] rounded-md">
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <?php foreach ($Data as $item): ?>
                        <h2 id="accordion-flush-heading-<?php echo $item['id']; ?>">
                            <button type="button"
                                class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 py-5"
                                data-accordion-target="#accordion-flush-body-<?php echo $item['id']; ?>"
                                aria-expanded="false" aria-controls="accordion-flush-body-<?php echo $item['id']; ?>">
                                <span><?php echo htmlspecialchars($item['title']); ?></span>
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-<?php echo $item['id']; ?>" class="hidden"
                            aria-labelledby="accordion-flush-heading-<?php echo $item['id']; ?>">
                            <div class="p-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    <?php echo nl2br(htmlspecialchars($item['content'])); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="ml-5 ">
                <img class='w-[530px]' width="528" height="622"
                    src="<?php echo get_template_directory_uri(); ?>/public/images/bg.png" alt="" />
            </div>
        </div>
    </div>
    <div class="footer text-center mt-5 ">
        <h2 class='text-[30px] text-[#7b858a]'>Our preferred couriers</h2>
        <div class="couriers grid grid-cols-4  items-center m-auto  lg:ml-20 mt-3">
            <img width="166" height="166" class='lg:w-40'
                src="<?php echo get_template_directory_uri(); ?>/public/images/uk.png" alt="" />
            <img width="166" height="166" class='lg:w-52 lg:mr-12'
                src="<?php echo get_template_directory_uri(); ?>/public/images/mail.png" alt="" />
            <img width="166" height="166" class='lg:w-52'
                src="<?php echo get_template_directory_uri(); ?>/public/images/dp.png" alt="" />
            <img width="166" height="166" class='lg:w-52'
                src="<?php echo get_template_directory_uri(); ?>/public/images/exp.png" alt="" />
        </div>
    </div>
</div>

<?php
get_footer();
?>