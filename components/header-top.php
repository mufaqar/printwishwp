<nav class="bg-black text-white  ">
    <div class="flex justify-center lg:justify-between items-center mx-auto container px-4 md:px-6 py-2.5">
        <a href="/" class="lg:flex items-center hidden w-[10%]">
            <Img src="<?php bloginfo('template_directory'); ?>/public/images/logo.png" alt="logo" width="140px"
                height="37px" />
        </a>
        <div class='w-full lg:w-3/5'>

            <div class='text-slider'>
                <?php
                $text_array = array("FREE UK SHIPPING ON ALL ORDERS.", "MONEY BACK GUARANTEED", "SUPER FAST TURNAROUNDS");
                foreach ($text_array as $i => $text):
                    ?>
                    <div class='slick-slide' key='<?php echo $i; ?>'>
                        <div class='text-xs sm:text-base font-semibold text-center'>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

        </div>
        <div class="hidden items-center lg:flex justify-between ">
            <ul class='flex gap-2 items-center'>
                <li class='hidden sm:block'>
                    <a href="tel:00448000510821" class='text-sm font-medium  hover:text-secondary hover:underline'>
                        0044 800 051 0821
                    </a>
                </li>
                <ul class='flex sm:gap-2 gap-1 items-center'>
                    <li class='border border-white hover:border-transparent rounded-lg'>
                        <a href="https://www.facebook.com/printwishuk/"
                            class="inline-flex items-center p-2 text-sm font-medium  hover:text-secondary rounded-lg hover:bg-background">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>
                    </li>
                    <li class='border border-white hover:border-transparent rounded-lg'>
                        <a href="https://www.instagram.com/printwishonline/?hl=en"
                            class="inline-flex items-center p-2 text-sm font-medium text-white hover:text-secondary rounded-lg hover:bg-background">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                    </li>
                    <li class='border border-white hover:border-transparent rounded-lg'>
                        <a href="https://twitter.com/printwishuk?lang=en"
                            class="inline-flex items-center p-2 text-sm font-medium text-white hover:text-secondary rounded-lg hover:bg-background">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                        </a>
                    </li>
                    <li class='border border-white hover:border-transparent rounded-lg'>
                        <a href="https://www.youtube.com/channel/UCb73rrDUl5soUZsGNNZ6FYg"
                            class="inline-flex items-center p-2 text-sm font-medium text-white hover:text-secondary rounded-lg hover:bg-background">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                            </svg>
                        </a>
                    </li>
                </ul>


            </ul>
        </div>
    </div>
</nav>