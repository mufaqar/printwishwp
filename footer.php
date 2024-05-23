<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package printwish
 */

?>

<?php
$NavLinks = [
    [
        'name' => 'Locations',
        'link' => '/locations',
    ],
    [
        'name' => 'Reviews',
        'link' => '/printwish-reviews',
    ],
    [
        'name' => 'Blog',
        'link' => '/blog',
    ],
    [
        'name' => 'Delivery Information',
        'link' => '/delivery-information',
    ],
    [
        'name' => 'Terms & Conditions',
        'link' => '/printing-terms-conditions',
    ],
];

$Categories = [

    [
        'name' => 'T-Shirts',
        'link' => 'custom-t-shirt-printing-cheap-t-shirt-printing',
    ],
    [
        'name' => 'Polo Shirts',
        'link' => 'polo',
    ],
    [
        'name' => 'SweatShirt',
        'link' => 'sweat-shirts',
    ],
    [
        'name' => 'Hoodies',
        'link' => 'hoodies',
    ],
    [
        'name' => 'Apron',
        'link' => 'aprons',
    ]
];


?>

<style>
.before_line::marker {
    color: #0088cc;
}

.before_line {
    position: relative;
}

.before_line::before {
    content: '';
    position: absolute;
    height: 1px;
    width: 12px;
    background-color: #0088cc;
    left: 4px;
    top: 12px;
}
</style>
<footer class='bg-background md:pt-12 pt-6 border-t'>
    <div class='container mx-auto px-4 relative'>
        <div class='grid md:grid-cols-4 grid-cols-1 gap-7'>
            <div>
                <h6 class='text-xl font-semibold font-opensans text-accent uppercase mb-5'>
                    About
                </h6>
                <p class='text-sm text-accent font-roboto mb-1.5'>
                    PrintWish UK Printwish UK is a leading custom apparel provider and Wholesale Company.
                </p>
                <p class='text-sm font-semibold font-roboto text-accent'>
                    WORKING DAYS/HOURS:
                    Monday to Friday | 9am to 5.30pm
                </p>
            </div>
            <div>
                <h6 class='text-xl font-semibold font-opensans text-accent uppercase mb-5'>
                    Categories
                </h6>
                <ul class='grid gap-2 list-inside list-square marker:text-secondary'>
                    <?php foreach ($Categories as $citem): ?>
                    <li
                        class="before_line relative before:content-[' '] before:h-[1px] before:w-3 before:bg-secondary before:absolute before:top-[13px] before:left-1">
                        <a href="<?php echo home_url('/'); ?><?php echo $citem['link']; ?>"
                            class="text-sm text-accent font-roboto hover:text-secondary">
                            <?php echo $citem['name']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h6 class='text-xl font-semibold font-opensans text-accent uppercase mb-5'>
                    Quick Links
                </h6>
                <ul class='grid gap-2 list-inside list-square marker:text-secondary'>
                    <?php foreach ($NavLinks as $item): ?>
                    <li
                        class="before_line relative before:content-[' '] before:h-[1px] before:w-3 before:bg-secondary before:absolute before:top-[13px] before:left-1">
                        <a href="<?php echo home_url(); ?><?php echo $item['link']; ?>"
                            class="text-sm text-accent font-roboto hover:text-secondary">
                            <?php echo $item['name']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h6 class='text-xl font-semibold font-opensans text-accent uppercase mb-5'>
                    Contact
                </h6>
                <ul class='flex flex-col gap-3'>
                    <li class="">
                        <span class="text-sm text-accent font-roboto flex gap-1">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                class="text-secondary min-w-[38px]" height="38" width="38"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z">
                                </path>
                            </svg>
                            PrintWish:
                            6th Floor, City Gate East, Tollhouse Hill, Nottingham, NG1 5FS
                        </span>
                    </li>
                    <li class="">
                        <a href="tel:00448000510821"
                            class="text-sm text-accent font-roboto hover:text-secondary flex items-center gap-1">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                class="text-secondary min-w-[20px]" height="20" width="20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                </path>
                            </svg>
                            0044 800 051 0821
                        </a>
                    </li>
                    <li class="">
                        <a href="mailto:sales@printwish.co.uk" target='_blank'
                            class="text-sm text-accent font-roboto hover:text-secondary flex items-center gap-1">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                class="text-secondary min-w-[20px]" height="20" width="20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z">
                                </path>
                                <path
                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z">
                                </path>
                            </svg>
                            sales@printwish.co.uk
                        </a>
                    </li>
                    <li class="">
                        <a href="mailto:enquiries@printwish.co.uk" target='_blank'
                            class="text-sm text-accent font-roboto hover:text-secondary flex items-center gap-1">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                class="text-secondary min-w-[20px]" height="20" width="20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z">
                                </path>
                                <path
                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z">
                                </path>
                            </svg>
                            enquiries@printwish.co.uk
                        </a>
                    </li>
                    <li class="">
                        <a href="mailto:printwish20@gmail.com" target='_blank'
                            class="text-sm text-accent font-roboto hover:text-secondary flex items-center gap-1">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                class="text-secondary min-w-[20px]" height="20" width="20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z">
                                </path>
                                <path
                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z">
                                </path>
                            </svg>
                            printwish20@gmail.com
                        </a>
                    </li>
                </ul>
                <ul class='flex sm:gap-2 gap-6 items-center mt-7'>
                    <li>
                        <a href="https://www.facebook.com/printwishuk/" target='_blank'
                            class="inline-flex items-center p-2 text-sm font-medium text-secondary bg-transparent border border-secondary hover:border-primary hover:text-primary rounded-full">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/printwishonline/?hl=en" target='_blank'
                            class="inline-flex items-center p-2 text-sm font-medium text-secondary bg-transparent border border-secondary hover:border-primary hover:text-primary rounded-full">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/printwishuk?lang=en" target='_blank'
                            class="inline-flex items-center p-2 text-sm font-medium text-secondary bg-transparent border border-secondary hover:border-primary hover:text-primary rounded-full">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCb73rrDUl5soUZsGNNZ6FYg" target='_blank'
                            class="inline-flex items-center p-2 text-sm font-medium text-secondary bg-transparent border border-secondary hover:border-primary hover:text-primary rounded-full">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,14.598V9.402c0-0.385,0.417-0.625,0.75-0.433l4.5,2.598c0.333,0.192,0.333,0.674,0,0.866l-4.5,2.598 C10.417,15.224,10,14.983,10,14.598z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Back to top button -->
        <button id="back-to-top"
            class="bg-secondary hover:bg-primary text-white font-bold py-1 px-1 rounded absolute right-0 bottom-10">
            <svg data-accordion-icon="" class="w-10 h-10 shrink-0 transform rotate-180" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div class='mt-7 border-t'>
        <div class='py-4 grid  grid-cols-1 gap-7 max-w-screen-xl mx-auto px-4 items-center'>
            <p class="block text-xs md:text-center text-accent font-roboto">
                PrintWish UK is Trading as PrintWish. Copyright 2022-24
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
<script>
// Get the button
var btn = document.getElementById('back-to-top');
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = 'block';
    } else {
        btn.style.display = 'none';
    }
};
// When the user clicks on the button, scroll to the top of the document
btn.addEventListener('click', function() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/650c13d9b1aaa13b7a781672/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->

</html>