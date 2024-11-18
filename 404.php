<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package printwish
 */

get_header();
?>

<div class="h-[calc(100vh-130px)]  flex flex-col justify-center items-center py-36">
    <div class="bg-white p-6  md:mx-auto">
        
        <div class="text-center">
            <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">
			Oops! That page can’t be found.
            </h3>
            <p class="text-gray-600 my-2">
			It looks like nothing was found at this location
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
