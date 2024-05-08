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
		


		  echo "<hr/>";

		// Print or do something with the retrieved data
		echo "Name: " . $name . "<br>";
		echo "Email: " . $email . "<br>";
		echo "Mobile: " . $mobile . "<br>";
	




		function create_vip_order($id) {

			global $woocommerce;		  
			$address = array(
				'first_name' => 'Mufaqar',
				'last_name'  => 'Islam',
				'company'    => 'Softs Gens',
				'email'      => 'mufaqar@gmail.com',
				'phone'      => '760-555-1212',
				'address_1'  => '123 Main st.',
				'address_2'  => '104',
				'city'       => 'San Diego',
				'state'      => 'Ca',
				'postcode'   => '92121',
				'country'    => 'UK'
			);
		  
			$order = wc_create_order();
			$order->set_address( $address, 'billing' );
			$order->set_address( $address, 'shipping' );
			$order->add_product( wc_get_product( $id ), 1 );
			$order->calculate_totals();
			$order->set_status( 'wc-processing' );
			$order->save();
		  
		  }


		//create_vip_order(2988);
            

		echo "order Crated";
           
    
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
