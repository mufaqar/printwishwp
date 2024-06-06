<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package printwish
 */

?>

<main class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h2 class="sm:text-4xl text-2xl font-bold font-opensans capitalize mb-2 sm:text-left text-center">
            <?php the_title() ?>
        </h2>
        <ul class="flex md:flex-row flex-col md:items-center gap-2 my-5">
            <li class="text-sm font-normal text-accent flex items-center gap-2">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                    </path>
                </svg>
                <span class="text-xs font-medium text-accent">Posted by
                    <?php the_author(); ?></span>
            </li>
            <li class="text-sm font-normal text-accent flex items-center gap-2">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2 4.75C2 3.784 2.784 3 3.75 3h4.971c.58 0 1.12.286 1.447.765l1.404 2.063c.046.069.124.11.207.11h8.471c.966 0 1.75.783 1.75 1.75V19.25A1.75 1.75 0 0 1 20.25 21H3.75A1.75 1.75 0 0 1 2 19.25Zm1.75-.25a.25.25 0 0 0-.25.25v14.5c0 .138.112.25.25.25h16.5a.25.25 0 0 0 .25-.25V7.687a.25.25 0 0 0-.25-.25h-8.471a1.75 1.75 0 0 1-1.447-.765L8.928 4.61a.252.252 0 0 0-.208-.11Z">
                    </path>
                </svg>
                <span class="text-xs font-medium text-accent"><?php echo get_the_date(); ?></span>
            </li>
        </ul>
        <div class="w-full mb-5">
            <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('services-small-thumbnail' ,array('class' => 'w-full h-full object-cover object-top'));
                                        } else { ?>
            <img src="<?php bloginfo('template_directory'); ?>/public//images/6.webp" alt="Featured Thumbnail" />
            <?php } ?>

        </div>
        <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'printwish'),
				'after' => '</div>',
			)
		);
		?>
    </div>
</main>