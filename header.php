<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package printwish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged, $post;
			
				wp_title( '|', true, 'right' );
			
				// Add the blog name.
				bloginfo( 'name' );
			
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
			
				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'wpv' ), max( $paged, $page ) );
            ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/public/favicon.ico">
    <?php wp_head(); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SDRXNDYY1L"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-SDRXNDYY1L');
    </script>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="shadow-md sticky top-0 z-50">
        <?php get_template_part( 'components/top', 'banner' ); ?>
        <?php get_template_part( 'components/header', 'top' ); ?>
        <?php get_template_part( 'components/header', 'nav' ); ?>
    </header>


<button class="fixed_qoute">
<a href="http://localhost/dev1/enquire-now" class="md:text-base text-xs fixed bottom-5 right-20 bg-green-500 py-2 md:px-6 px-4 hover:bg-primary rounded-full text-white">
    Quick Quote
</a>
</button>