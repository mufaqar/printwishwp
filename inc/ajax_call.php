<?php


// Add action for saving form data
add_action('wp_ajax_insert_order_data', 'insert_order_data');
add_action('wp_ajax_nopriv_insert_order_data', 'insert_order_data');

function insert_order_data() {   

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) ) {


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


		create_vip_order(2988);
            

		echo "order Crated";
           
    
        }
}




// Add action for saving form data
add_action('wp_ajax_save_form_user_data', 'save_form_user_data');
add_action('wp_ajax_nopriv_save_form_user_data', 'save_form_user_data');