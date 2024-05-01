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

<header class="shadow-md">
    <nav class="bg-secondary z-50">
        <div class="grid py-4 px-4 mx-auto container lg:grid-cols-2 md:px-6 gap-4 items-center">
            <div class="flex justify-between lg:order-2 lg:mb-0 items-center">
                <div class="md:hidden flex items-center gap-2 text-white">
                    <button id="menu-toggle" class="cursor-pointer">
                        <svg id="menu-icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG for menu closed state -->
                            <path id="menu-icon-closed" class="block" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h8m-8 6h16"></path>
                            <!-- SVG for menu open state (hidden initially) -->
                            <path id="menu-icon-open" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- <button id="menu-toggle" class="cursor-pointer">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16"></path>
                        </svg>
                    </button> -->
                    <a href="tel:08000510821">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M877.1 238.7L770.6 132.3c-13-13-30.4-20.3-48.8-20.3s-35.8 7.2-48.8 20.3L558.3 246.8c-13 13-20.3 30.5-20.3 48.9 0 18.5 7.2 35.8 20.3 48.9l89.6 89.7a405.46 405.46 0 0 1-86.4 127.3c-36.7 36.9-79.6 66-127.2 86.6l-89.6-89.7c-13-13-30.4-20.3-48.8-20.3a68.2 68.2 0 0 0-48.8 20.3L132.3 673c-13 13-20.3 30.5-20.3 48.9 0 18.5 7.2 35.8 20.3 48.9l106.4 106.4c22.2 22.2 52.8 34.9 84.2 34.9 6.5 0 12.8-.5 19.2-1.6 132.4-21.8 263.8-92.3 369.9-198.3C818 606 888.4 474.6 910.4 342.1c6.3-37.6-6.3-76.3-33.3-103.4zm-37.6 91.5c-19.5 117.9-82.9 235.5-178.4 331s-213 158.9-330.9 178.4c-14.8 2.5-30-2.5-40.8-13.2L184.9 721.9 295.7 611l119.8 120 .9.9 21.6-8a481.29 481.29 0 0 0 285.7-285.8l8-21.6-120.8-120.7 110.8-110.9 104.5 104.5c10.8 10.8 15.8 26 13.3 40.8z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="flex md:w-full">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-accent sr-only ">Your
                        Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="hidden md:inline-flex flex-shrink-0 z-10 items-center  py-2.5 px-4 text-sm font-medium text-center text-accent bg-gray-100 border border-gray-200 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 "
                        type="button">
                        All Categories
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="dropdown"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow absolute top-[108px] ">
                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdown-button">
                            <?php
                            if ($Categories && is_array($Categories)) {
                                foreach ($Categories as $idx => $item) {
                                    ?>
                                    <li>
                                        <a href="<?php echo $item['link']; ?>" class="flex p-3 rounded-lg hover:bg-gray-50 ">
                                            <?php echo $item['name']; ?>
                                        </a>
                                    </li>

                                    <?php
                                }
                            }
                            ?>

                        </ul>
                    </div>
                    <a class="flex items-center md:hidden" href="/">
                        <Img src="<?php bloginfo('template_directory'); ?>/public/images/logo.png" alt="logo"
                            width="140px" height="37px" />
                    </a>
                    <div class=" md:bg-transparent  w-full md:relative hidden md:block">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full text-sm text-accent bg-gray-50 rounded-lg md:rounded-l-none md:border-l-gray-50 border-l-1 md:border-l-6 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                            placeholder="Search anything..." required="" value="">
                        <button type="submit"
                            class="absolute right-4 top-10 md:top-0 md:right-0 p-2.5 text-sm font-medium text-white bg-primary rounded-r-lg border border-primary hover:bg-primary/90 focus:ring-4 focus:outline-none focus:ring-primary ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center gap-2 mr-4 md:ml-12">
                    <button class="md:hidden">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            class="text-white" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="menu" class="items-center lg:order-1 hidden md:block">
                <ul class="flex flex-col md:flex-row mt-0 gap-6 md:gap-8 text-sm font-medium ">
                    <li>
                        <a class="text-white hover:text-primary" aria-current="page" href="<?php echo home_url(''); ?>">
                            Home
                        </a>
                    </li>
                    <li class="relative">
                        <button
                            class="flex justify-between items-center w-full font-medium md:p-0 md:w-auto text-white hover:text-primary">
                            Categories
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <a class="text-white hover:text-primary" href="<?php echo home_url('/about-us'); ?>">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a class="text-white hover:text-primary md:inline " href="<?php echo home_url('/product'); ?>">
                            Products
                        </a>
                    </li>
                    <li>
                        <a class="text-white hover:text-primary md:inline"
                            href="<?php echo home_url('/contact-us'); ?>">
                            Contact
                        </a>
                    </li>
                    <li class="relative">
                        <button
                            class="flex justify-between items-center w-full font-medium md:p-0 md:w-auto text-white hover:text-primary">
                            Locations
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul class="md:absolute md:mr-5 z-50 !bg-secondary !w-44 pt-4 md:pt-7 hidden submenu">
                            <?php
                            if ($Categories && is_array($Categories)) {
                                foreach ($Categories as $idx => $item) {
                                    ?>
                                    <li>
                                        <a href="<?php echo $item['link']; ?>" class="flex p-3 rounded-lg hover:bg-gray-50 ">
                                            <?php echo $item['name']; ?>
                                        </a>
                                    </li>

                                    <?php
                                }
                            }
                            ?>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <nav class="bg-secondary z-50">
        <div class="grid py-4 px-4 mx-auto max-w-screen-xl lg:grid-cols-2 md:px-6">
            <form class="flex mb-4 lg:order-2 lg:mb-0">
                <label for="search-dropdown"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only ">Your Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="hidden md:inline-flex flex-shrink-0 z-10 items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-200 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                    type="button">All categories <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button>
                <div id="dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                    <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Mockups</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Templates</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Design</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100">Logos</button>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full text-sm text-accent bg-gray-50 rounded-lg md:rounded-l-none md:border-l-gray-50 border-l-1 md:border-l-6 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                        placeholder="Search anything..." required>
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-primary rounded-r-lg border border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary-300"><svg
                            class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg></button>
                </div>
            </form>
            <div class="flex items-center lg:order-1">

                <?php
                // wp_nav_menu(array(
                //         'theme_location' => 'main',
                //         'menu_class'     => 'nav-list', // Add a custom class to the menu
                //         'walker'         => new Tailwind_Nav_Walker(),
                //     ));
                

                ?>


                <ul id="menu" class="flex flex-row mt-0 space-x-8 text-sm font-medium">
                    <li>
                        <a href="<?php echo home_url(''); ?>"
                            class="text-white hover:text-primary"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdown-button-megamenu" data-collapse-toggle="megamenu"
                            class="flex justify-between items-center w-full font-medium md:p-0 md:w-auto text-white hover:text-primary ">Categories
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/about-us'); ?>"
                            class="text-white hover:text-primary">About
                            Us</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/product'); ?>"
                            class="hidden text-white  hover:text-primary md:inline">Products</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/contact-us'); ?>"
                            class="hidden text-white  hover:text-primary md:inline">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/locations'); ?>"
                            class="hidden text-white  hover:text-primary md:inline">Locations</a>


                            <ul class="col-span-2 md:col-span-1 absolute top-[10rem] bg-white hidden submenu">
                                    <?php
                                    if ($Categories && is_array($Categories)) {
                                        foreach ($Categories as $idx => $item) {
                                            ?>
                                    <li>
                                        <a href="<?php echo $item['link']; ?>"
                                            class="flex p-3 rounded-lg hover:bg-gray-50 ">
                                            <?php echo $item['name']; ?>
                                        </a>
                                    </li>

                                    <?php
                                        }
                                    }
                                    ?>

                                    </ul> 
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <nav id="megamenu" class="bg-white border-b border-gray-200 hidden">
        <div
            class="grid py-4 px-4 mx-auto max-w-screen-xl text-gray-900  md:grid-cols-2 lg:grid-cols-4 md:px-6">
            <ul class="col-span-2 md:col-span-1">

                <?php
                if ($Categories && is_array($Categories)) {
                    foreach ($Categories as $idx => $item) {
                        ?>
                <li>
                    <a href="<?php echo $item['link']; ?>"
                        class="flex p-3 rounded-lg hover:bg-gray-50">
                        <?php echo $item['name']; ?>
                    </a>
                </li>

                <?php
                    }
                }
                ?>

            </ul>

        </div>
    </nav> -->


</header>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menu-toggle');
        const menuIconClosed = document.getElementById('menu-icon-closed');
        const menuIconOpen = document.getElementById('menu-icon-open');

        menuToggle.addEventListener('click', function () {
            // Toggle the visibility of the menu icons
            menuIconClosed.classList.toggle('hidden');
            menuIconOpen.classList.toggle('hidden');
            // Toggle the visibility of the menu
            menu.classList.toggle('hidden');
        });
    });


    // document.addEventListener("DOMContentLoaded", function () {
    //     var menuItems = document.querySelectorAll("#menu > li");

    //     menuItems.forEach(function (item) {
    //         var submenu = item.querySelector(".submenu");
    //         item.addEventListener("mouseenter", function () {
    //             submenu.style.display = "block";
    //         });

    //     });
    // });
</script>