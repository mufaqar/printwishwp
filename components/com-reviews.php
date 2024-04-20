<?php
// Feedback array
$Feedback = [
    [
        'img' => '/images/reviews/20March-03.jpg'
    ],
    [
        'img' => '/images/reviews/20-03.jpg'
    ],
    [
        'img' => '/images/reviews/19-03.jpg'
    ],
    [
        'img' => '/images/reviews/18-03.jpg'
    ],
    [
        'img' => '/images/reviews/17-03.jpg'
    ],
    [
        'img' => '/images/reviews/15-03.jpg'
    ],
    [
        'img' => '/images/reviews/14-03.jpg'
    ],
    [
        'img' => '/images/reviews/13-03.jpg'
    ],
    [
        'img' => '/images/reviews/12-03.jpg'
    ],
    [
        'img' => '/images/reviews/11-03.jpg'
    ],
    [
        'img' => '/images/reviews/09-03.jpg'
    ],
    [
        'img' => '/images/reviews/8-03.jpg'
    ],
    [
        'img' => '/images/reviews/6-03.jpg'
    ],
    [
        'img' => '/images/reviews/5-03.jpg'
    ],
    [
        'img' => '/images/reviews/review-01.jpg'
    ],
    [
        'img' => '/images/reviews/review-02.jpg'
    ],
    [
        'img' => '/images/reviews/review-03.jpg'
    ],
    [
        'img' => '/images/reviews/review-04.jpg'
    ],
    [
        'img' => '/images/reviews/review-05.jpg'
    ],
    [
        'img' => '/images/reviews/review-06.jpg'
    ],
    [
        'img' => '/images/reviews/review-07.jpg'
    ],
    [
        'img' => '/images/reviews/review-08.jpg'
    ],
    [
        'img' => '/images/reviews/review-09.jpg'
    ]
]
    
?>


<section class='py-2 max-w-screen-xl mx-auto px-4 relative '>
    <div class='max-w-screen-xl mx-auto px-4'>
        <div class='w-fit mx-auto'>
            <h2 class='sm:text-3xl hidden md:block  text-2xl font-semibold font-opensans text-accent uppercase text-center mb-5'>
                WHAT OUR CLIENTS SAY ABOUT US
            </h2>
            <a href="/printwish-reviews">
                <img src="<?php bloginfo('template_directory'); ?>/public/images/reviews.webp" alt='reviews' height='250' width='500' class='mx-auto' />
            </a>
        </div>
        <div class='relative mt-8'>
            <div class="slider" >
                <?php foreach ($Feedback as $idx => $item): ?>
                    <div>
                        <img src="<?php bloginfo('template_directory'); ?>/public/<?php echo $item['img']; ?>" alt="image" width='500' height='200' class='mx-auto' />
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="absolute -left-10 top-1/2 -mt-6 transform -translate-y-1/2 rounded-lg text-secondary p-3 text-3xl" onclick="slickPrev()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z" fill="currentColor"/></svg></button>
            <button class="absolute -right-10 top-1/2 -mt-6 transform -translate-y-1/2 rounded-lg text-secondary p-3 text-3xl" onclick="slickNext()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="currentColor"/></svg></button>
        </div>
    </div>
</section>

<script>
    const slider = document.querySelector('.slider');
    const settings = JSON.parse(slider.getAttribute('data-settings'));
    
    function slickPrev() {
        slider.slickPrev();
    }
    
    function slickNext() {
        slider.slickNext();
    }

    // You would need to implement the slick slider initialization here
</script>
