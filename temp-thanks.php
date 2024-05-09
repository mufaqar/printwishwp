<?php
/**
 * Template Name: Thanks
 */

get_header();
?>




<div class="h-[calc(100vh-130px)]  flex flex-col justify-center items-center">
    <div class="bg-white p-6  md:mx-auto">
        <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
            <path fill="currentColor"
                d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
            </path>
        </svg>
        <div class="text-center">
            <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">
                Thanks for your enquiry!
            </h3>
            <p class="text-gray-600 my-2">
                One of our staff member will check your enquiry and get back to
                you with the best quote as soon as possible.
            </p>
            <p> Have a great day! </p>
            <div class="py-10 text-center">
                <a href="/" class="px-6 capitalize bg-secondary hover:bg-primary text-white font-medium py-3">
                back to home
                </a>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();