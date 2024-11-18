<?php


// Add action for saving form data
add_action('wp_ajax_insert_order_data', 'insert_order_data');
add_action('wp_ajax_nopriv_insert_order_data', 'insert_order_data');

function insert_order_data() {   

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) ) {

 	global $woocommerce;	
		$order_data = $_POST['order_data'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$date = $_POST['date'];
		$product_id = $order_data['product_id'];

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
$order->set_address($address, 'billing');
$order->set_address($address, 'shipping');

$price = 0;

// Check if selectedDeal exists and add to order
if (isset($order_data['selectedDeal']) && !empty($order_data['selectedDeal'])) {
    $deal_price = $order_data['selectedDeal']['price'];
    $deal_qty = $order_data['selectedDeal']['qty'];
    
    // Add selectedDeal as a custom order line
    $order->add_product(wc_get_product($product_id), $deal_qty, [
        'subtotal'     => $deal_price,
        'total'        => $deal_price
    ]);

    // Add meta data for the deal
    foreach ($order->get_items() as $item_key => $item) {
        $item->add_meta_data('Deal Type', $order_data['selectedDeal']['type']);
        $item->add_meta_data('Deal Price', $deal_price);
        $item->add_meta_data('Deal Quantity', $deal_qty);
		// If the deal type is 'color', add selected colors
     
		if (isset($order_data['selected_colors']) && !empty($order_data['selected_colors'])) {
            $colors = [];
            foreach ($order_data['selected_colors'] as $color_item) {
                $colors[] = $color_item['color'] . " (Code: " . $color_item['code'] . ")";
            }
            $item->add_meta_data('Selected Colors', implode(', ', $colors));
        }

			// Add selected sizes if they exist
			if (isset($order_data['selectedSizes']) && !empty($order_data['selectedSizes'])) {
				$sizes = implode(', ', $order_data['selectedSizes']);
				$item->add_meta_data('Selected Sizes', $sizes);
			}
			 // Add URL for the variant if available
			 foreach ($order_data['selected_variants'] as $index => $variant_item) {
				$variant = $variant_item['variant'];
				$colorInLogo = $variant_item['colorInLogo'];
				$url = $variant_item['url'];
				$item->add_meta_data('Variant', $variant);
				$item->add_meta_data('Color in Logo', $colorInLogo);
				$item->add_meta_data('URL', $url);
			}
       
    }
} else {
    // No selectedDeal, proceed with the default product addition
    $order->add_product(wc_get_product($product_id), 1, [
        'subtotal'     => $price,
        'total'        => $price
    ]);

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
$order->set_status('wc-processing');
$order->save();


			

		// $order_data = $_POST['order_data'];
		// $name = $_POST['name'];
		// $email = $_POST['email'];
		// $mobile = $_POST['mobile'];
		// $date = $_POST['date'];	
		// $product_id = $order_data['product_id'];	
		
		
	

		
		// 	global $woocommerce;		  
		// 	$address = array(
		// 		'first_name' => $name,
		// 		'last_name'  => '',
		// 		'company'    => '',
		// 		'email'      => $email,
		// 		'phone'      => $mobile,
		// 		'address_1'  => '',
		// 		'address_2'  => '',
		// 		'city'       => '',
		// 		'state'      => '',
		// 		'postcode'   => '',
		// 		'country'    => 'UK'
		// 	);

		// 	$price = 0;

		// 	$order = wc_create_order();
		// 	$order->set_address( $address, 'billing' );
		// 	$order->set_address( $address, 'shipping' );
		// 	//$order->add_product( wc_get_product( $product_id ), 1  );

		// 	$order->add_product( wc_get_product( $product_id ), 1, [
		// 		'subtotal'     => $price, // e.g. 32.95
		// 		'total'        => $price, // e.g. 32.95
		// 	] );

		// 	foreach ( $order->get_items() as $item_key => $item ) {
		// 		foreach ($order->get_items() as $item_key => $item) {
		// 			foreach ($order_data['selected_colors'] as $index => $color_item) {
		// 				$color = $color_item['color'];
		// 				foreach ($color_item['selectedsize'] as $size_item) {
		// 					$size = $size_item['size'];
		// 					$quantity = $size_item['quantity'];
		// 					$variant = $order_data['selected_variants'][$index]['variant'];
		// 					$colorInLogo = $order_data['selected_variants'][$index]['colorInLogo'];
		// 					$url = $order_data['selected_variants'][$index]['url'];
		// 					$item_data =  "Color: $color <br/> Size: $size <br/>  Quantity: $quantity <br/>  Variant: $variant <br/>  Color in Logo: $colorInLogo<br/>  URL: $url . <hr/>";
		// 					$item->add_meta_data("order_data", $item_data);
						
							
		// 				}
		// 			}   
		// 		}
		// 	}
		// 	$order->calculate_totals();
		// 	$order->set_status( 'wc-processing' );
		// 	$order->save();

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
	
		// Get the original file name and sanitize it
		$original_file_name = basename($_FILES["file"]["name"]);
		
		// Remove spaces and convert to lowercase
		$sanitized_file_name = strtolower(str_replace(' ', '_', $original_file_name));
		
		$target_file = $target_dir . "/" . $sanitized_file_name;
	
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			$image_url = $upload_dir['url'] . "/" . $sanitized_file_name;
			echo $image_url;
		} else {
			echo "Error: Unable to move uploaded file.";
		}
	} else {
		echo "Error: No file uploaded or an error occurred during upload.";
	}

    wp_die();

   
}




// Add action for saving form data
add_action('wp_ajax_send_email', 'send_email');
add_action('wp_ajax_nopriv_send_email', 'send_email');

function send_email() {   

		$enquiries = $_POST['enquiries'];
		$message = $_POST['message'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$admin = 'sales@printwish.co.uk,mufaqar@gmail.com,printwish20@gmail.com';
		$to = 'sales@printwish.co.uk';
		$cc = $email;		
		$subject = "Contact Us | PrintWish";
		$body  = "<p><strong> Name </strong>:  ".$name."  </p>";
		$body  .= "<p><strong> Email </strong>:  ".$email."  </p>";
		$body  .= "<p><strong> Enquiries </strong>:  ".$enquiries."  </p>";
		$body  .= "<p><strong> Message </strong>:  ".$message."  </p>";
		$headers = array('Content-Type: text/html; charset=UTF-8');	
		$headers  = "From: " . $to . "\r\n";
		$headers .= "Reply-To: " . $cc . "\r\n";
		$headers .= "CC: ".$cc."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		mail( $admin, $subject, $body, $headers );
		echo wp_send_json(array('code' => 200, 'message' => __('Email sent sucessfully ')));
		wp_die();

   
}


// Add action for saving form data
add_action('wp_ajax_send_email_inq', 'send_email_inq');
add_action('wp_ajax_nopriv_send_email_inq', 'send_email_inq');

function send_email_inq() {   

		$qty = $_POST['qty'];
		$message = $_POST['message'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$admin = 'sales@printwish.co.uk,mufaqar@gmail.com,printwish20@gmail.com';
		$to = 'sales@printwish.co.uk';
		$cc = $email;		
		$subject = "Quick Quote | PrintWish";
		$body  = "<p><strong> Name </strong>:  ".$name."  </p>";
		$body  .= "<p><strong> Email </strong>:  ".$email."  </p>";
		$body  .= "<p><strong> Phone </strong>:  ".$phone."  </p>";
		$body  .= "<p><strong> qty </strong>:  ".$qty."  </p>";
		$body  .= "<p><strong> Message </strong>:  ".$message."  </p>";
		$headers = array('Content-Type: text/html; charset=UTF-8');	
		$headers  = "From: " . $to . "\r\n";
		$headers .= "Reply-To: " . $cc . "\r\n";
		$headers .= "CC: ".$cc."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		mail( $admin, $subject, $body, $headers );
		echo wp_send_json(array('code' => 200, 'message' => __('Inquiry Email sent sucessfully ')));
		wp_die();

   
}