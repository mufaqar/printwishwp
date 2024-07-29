<?php
// Gallery array
$Gallery = [
    [
        'img' => '/public/gallery/1.jpg'
    ],
    [
        'img' => '/public/gallery/2.jpg'
    ],
    [
        'img' => '/public/gallery/3.jpg'
    ],
    [
        'img' => '/public/gallery/4.jpg'
    ],
    [
        'img' => '/public/gallery/5.jpg'
    ],
    [
        'img' => '/public/gallery/6.jpg'
    ],
    [
        'img' => '/public/gallery/7.jpg'
    ],
    [
        'img' => '/public/gallery/8.jpg'
    ],
    [
        'img' => '/public/gallery/9.jpg'
    ],
    [
        'img' => '/public/gallery/10.jpg'
    ],
    [
        'img' => '/public/gallery/11.jpg'
    ],
    [
        'img' => '/public/gallery/12.jpg'
    ],
    [
        'img' => '/public/gallery/13.jpg'
    ],
    [
        'img' => '/public/gallery/14.jpg'
    ],
    [
        'img' => '/public/gallery/15.jpg'
    ],
    [
        'img' => '/public/gallery/16.jpg'
    ],
    [
        'img' => '/public/gallery/17.jpg'
    ],
    [
        'img' => '/public/gallery/18.jpg'
    ],
    [
        'img' => '/public/gallery/19.jpg'
    ],
    [
        'img' => '/public/gallery/20.jpg'
    ],
    [
        'img' => '/public/gallery/21.jpg'
    ],
]
    ?>
<section class='pb-10 '>
    <div class='max-w-screen-xl mx-auto px-4'>
        <div class='w-fit mx-auto'>
            <h2
                class='sm:text-2xl hidden md:block  text-xl font-semibold font-opensans text-white p-2.5 uppercase text-center mb-5 bg-secondary'>
                Gallery
            </h2>
        </div>
        <div class='relative mt-8'>
            <div class="loca_slider">
                <?php foreach ($Gallery as $item): ?>
                    <div class="px-2">
                        <img src="<?php echo get_template_directory_uri() . $item['img']; ?>" alt="image" width='500'
                            height='200' class='mx-auto' />
                    </div>
                <?php endforeach; ?>

            </div>
            <button
                class="absolute md:-left-8 -left-5 top-1/2 -mt-6 transform -translate-y-1/2 rounded-lg text-secondary p-0 text-3xl"
                onclick="slickPrev()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                    viewBox="0 0 512 512">
                    <path
                        d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"
                        fill="currentColor" />
                </svg>
            </button>
            <button
                class="absolute md:-right-8 -right-5 top-1/2 -mt-6 transform -translate-y-1/2 rounded-lg text-secondary p-0 text-3xl"
                onclick="slickNext()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                    viewBox="0 0 512 512">
                    <path
                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"
                        fill="currentColor" />
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    const slider = document.querySelector('.loca_slider');
    const settings = JSON.parse(slider.getAttribute('data-settings'));

    function slickPrev() {
        slider.slickPrev();
    }

    function slickNext() {
        slider.slickNext();
    }

    // You would need to implement the slick slider initialization here
</script>