<?php
/**
 * Template Name: Test
 */

get_header();
?>

<?php









// 	$response = wp_remote_get(
// 		'https://testnet-info.kaanch.network/', 
// 		array(
// 			'timeout' => 600, // Adjust timeout in seconds (default is 5)
// 			'stream'  => true, // Set to true to handle large responses
// 		)
// 	);

//     print "<pre>";
//    print_r($response);


//     // Check for errors
//     if (is_wp_error($response)) {
//         // Display error message
//         echo "Failed to retrieve data from the API. Please try again later.";
//     } else {
//         // Parse JSON response
//         $body = wp_remote_retrieve_body($response);
//         $data = json_decode($body);

//         print_r($data);

//         // Check if data is valid
//         if ($data) {
//             // Define shortcode functions for each element
//             function total_supply_shortcode() {
//                 global $data;
//                 return $data->totalSupply;
//             }
//             add_shortcode('total_supply', 'total_supply_shortcode');

//             function total_account_shortcode() {
//                 global $data;
//                 return $data->totalAccount;
//             }
//             add_shortcode('total_account', 'total_account_shortcode');

//             // Add other shortcode functions here...

//         } else {
//             echo "No data available from the API.";
//         }
//     }







// echo do_shortcode('[total_token]');



?>

<?php

get_footer();