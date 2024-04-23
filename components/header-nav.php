<header class="shadow-md">

    <nav class="bg-secondary z-50">
        <div class="grid py-4 px-4 mx-auto max-w-screen-xl lg:grid-cols-2 md:px-6">
            <form class="flex mb-4 lg:order-2 lg:mb-0">
                <label for="search-dropdown"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="hidden md:inline-flex flex-shrink-0 z-10 items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-200 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">All categories <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button>
                <div id="dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg md:rounded-l-none md:border-l-gray-50 border-l-1 md:border-l-6 border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:border-l-gray-600  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-primary-500"
                        placeholder="Search anything..." required>
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-primary-700 rounded-r-lg border border-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"><svg
                            class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg></button>
                </div>
            </form>
            <div class="flex items-center lg:order-1">
                <ul class="flex flex-row mt-0 space-x-8 text-sm font-medium">
                    <li>
                        <a href="#"
                            class="text-gray-900 dark:text-white hover:text-primary-600 dark:hover:text-primary-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdown-button-megamenu" data-collapse-toggle="megamenu"
                            class="flex justify-between items-center w-full font-medium dark:hover:text-primary-500 md:p-0 md:w-auto dark:text-white hover:text-primary-500 dark:focus:text-primary-500">Company
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-900 dark:text-white hover:text-primary-600 dark:hover:text-primary-500">Marketplace</a>
                    </li>
                    <li>
                        <a href="#"
                            class="hidden text-gray-900 dark:text-white hover:text-primary-600 md:inline dark:hover:text-primary-500">Resources</a>
                    </li>
                    <li>
                        <a href="#"
                            class="hidden text-gray-900 dark:text-white hover:text-primary-600 md:inline dark:hover:text-primary-500">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <nav id="megamenu" class="bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-600 hidden">
        <div
            class="grid py-4 px-4 mx-auto max-w-screen-xl text-gray-900 dark:text-white md:grid-cols-2 lg:grid-cols-4 md:px-6">
            <ul class="col-span-2 md:col-span-1">
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Online Stores</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>

            </ul>

        </div>
    </nav>


</header>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>