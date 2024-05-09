<?php
/**
 * Template Name: Test
 */

get_header();


$order_data = array(
    'selected_colors' => array(
        array(
            'color' => 'DARK HEATHER',
            'code' => '565B5E',
            'selectedsize' => array(
                array(
                    'size' => 'S',
                    'quantity' => 44
                )
            )
        ),
        array(
            'color' => 'HELICONIA',
            'code' => 'E63B6E',
            'selectedsize' => array(
                array(
                    'size' => 'S',
                    'quantity' => 33
                )
            )
        )
    ),
    'selected_variants' => array(
        array(
            'variant' => 'Left Breast',
            'colorInLogo' => 1,
            'url' => 'http://localhost/projects/printwishwp/wp-content/uploads/2024/05/landing-minidil-red-shape.png'
        ),
        array(
            'variant' => 'Big Front',
            'colorInLogo' => 2,
            'url' => 'http://localhost/projects/printwishwp/wp-content/uploads/2024/05/CNIC Front.png'
        )
    ),
    'additional_info' => 'This is Test',
    'product_id' => 2988
);


foreach ($order_data['selected_colors'] as $index => $color_item) {
    $color = $color_item['color'];
    foreach ($color_item['selectedsize'] as $size_item) {
        $size = $size_item['size'];
        $quantity = $size_item['quantity'];
        $variant = $order_data['selected_variants'][$index]['variant'];
        $colorInLogo = $order_data['selected_variants'][$index]['colorInLogo'];
        $url = $order_data['selected_variants'][$index]['url'];
        echo "Color: $color, Size: $size, Quantity: $quantity, Variant: $variant, Color in Logo: $colorInLogo, URL: $url . <hr/>";
    }
}   



?>




<?php

get_footer();