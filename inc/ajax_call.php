<?php


// Add action for saving form data
add_action('wp_ajax_insert_order_data', 'insert_order_data');
add_action('wp_ajax_nopriv_insert_order_data', 'insert_order_data');

function insert_order_data() {   

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) ) {

			

		$form_data_encoded = $_POST['order_data'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$date = $_POST['date'];


		print "<pre>";
		print_r($form_data_encoded);

		echo $product_id = $form_data_encoded['product_id'];
		


		  echo "<hr/>";

		// Print or do something with the retrieved data
		echo "Name: " . $name . "<br>";
		echo "Email: " . $email . "<br>";
		echo "Mobile: " . $mobile . "<br>";
	




		

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
		

		
		
			

			global $woocommerce;		  
			$address = array(
				'first_name' => $name,
				'last_name'  => '',
				'company'    => '',
				'email'      =>  $email,
				'phone'      => $mobile,
				'address_1'  => '',
				'address_2'  => '',
				'city'       => '',
				'state'      => '',
				'postcode'   => '',
				'country'    => 'UK'
			);

			$line_item = $order_data;

			$args = $order_data;
		  
			$order = wc_create_order();
			$order->set_address( $address, 'billing' );
			$order->set_address( $address, 'shipping' );
			$order->add_product( wc_get_product( $product_id ), 1  );
			foreach ( $order->get_items() as $item_key => $item ) {

				//$item->add_meta_data( 'order_data', $order_data, false );

				foreach ($order->get_items() as $item_key => $item) {
					foreach ($order_data as $key => $value) {
						
						if (is_array($value)) {
							foreach ($value as $sub_key => $sub_value) {
								if (is_array($sub_value)) {
									foreach ($sub_value as $sub_sub_key => $sub_sub_value) {
										$item->add_meta_data("$key - $sub_key - $sub_sub_key", $sub_sub_value);
									}
								} else {
									$item->add_meta_data("$key - $sub_key", $sub_value);
								}
							}
						} else {
							$item->add_meta_data($key, $value);
						}
					}
				}



				
			}

		

			
			$order->calculate_totals();
			$order->set_status( 'wc-processing' );
			$order->save();
		  
		  
            

		echo "order Crated";
		destroy_wp_session();
		wp_redirect( home_url('/thank-you') ); 
		die($product_id);
           
    
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
