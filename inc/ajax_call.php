<?php


// Add action for saving form data
add_action('wp_ajax_insert_order_data', 'insert_order_data');
add_action('wp_ajax_nopriv_insert_order_data', 'insert_order_data');

function insert_order_data() {   

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) ) {

			

		$order_data = $_POST['order_data'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$date = $_POST['date'];	
		$product_id = $order_data['product_id'];		

		// $order_data = array(
		// 	'selected_colors' => array(
		// 		array(
		// 			'color' => 'DARK HEATHER',
		// 			'code' => '565B5E',
		// 			'selectedsize' => array(
		// 				array(
		// 					'size' => 'S',
		// 					'quantity' => 44
		// 				)
		// 			)
		// 		),
		// 		array(
		// 			'color' => 'HELICONIA',
		// 			'code' => 'E63B6E',
		// 			'selectedsize' => array(
		// 				array(
		// 					'size' => 'S',
		// 					'quantity' => 33
		// 				)
		// 			)
		// 		)
		// 	),
		// 	'selected_variants' => array(
		// 		array(
		// 			'variant' => 'Left Breast',
		// 			'colorInLogo' => 1,
		// 			'url' => 'http://localhost/projects/printwishwp/wp-content/uploads/2024/05/landing-minidil-red-shape.png'
		// 		),
		// 		array(
		// 			'variant' => 'Big Front',
		// 			'colorInLogo' => 2,
		// 			'url' => 'http://localhost/projects/printwishwp/wp-content/uploads/2024/05/CNIC Front.png'
		// 		)
		// 	),
		// 	'additional_info' => 'This is Test',
		// 	'product_id' => 2988
		// );		
		
			

			global $woocommerce;		  
			$address = array(
				'first_name' => $name,
				'last_name'  => '',
				'company'    => '',
				'email'      => $email,
				'phone'      => $mobile,
				'address_1'  => '',
				'address_2'  => '',
				'city'       => '',
				'state'      => '',
				'postcode'   => '',
				'country'    => 'UK'
			);

			$order = wc_create_order();
			$order->set_address( $address, 'billing' );
			$order->set_address( $address, 'shipping' );
			$order->add_product( wc_get_product( $product_id ), 1  );
			foreach ( $order->get_items() as $item_key => $item ) {
				foreach ($order->get_items() as $item_key => $item) {
					foreach ($order_data['selected_colors'] as $index => $color_item) {
						$color = $color_item['color'];
						foreach ($color_item['selectedsize'] as $size_item) {
							$size = $size_item['size'];
							$quantity = $size_item['quantity'];
							$variant = $order_data['selected_variants'][$index]['variant'];
							$colorInLogo = $order_data['selected_variants'][$index]['colorInLogo'];
							$url = $order_data['selected_variants'][$index]['url'];
							$item_data =  "Color: $color <br/> Size: $size <br/>  Quantity: $quantity <br/>  Variant: $variant <br/>  Color in Logo: $colorInLogo<br/>  URL: $url . <hr/>";
							$item->add_meta_data("order_data", $item_data);
						}
					}   
				}
			}
			$order->calculate_totals();
			$order->set_status( 'wc-processing' );
			$order->save();
			//echo "order Crated";
			destroy_wp_session();
			$redirect_url = home_url('/thank-you');
			echo json_encode(array('success' => true ,'redirect_url' => $redirect_url ));						
			die();
    
        }
}





// Add action for saving form data
add_action('wp_ajax_upload_mediafiles', 'upload_mediafiles');
add_action('wp_ajax_nopriv_upload_mediafiles', 'upload_mediafiles');

function upload_mediafiles() {   

	if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $upload_dir = wp_upload_dir();
        $target_dir = $upload_dir['path'];
        $target_file = $target_dir . "/" . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $image_url = $upload_dir['url'] . "/" . basename($_FILES["file"]["name"]);
            echo $image_url;
        } else {
            echo "Error: Unable to move uploaded file.";
        }
    } else {
        echo "Error: No file uploaded or an error occurred during upload.";
    }

    wp_die();

   
}
