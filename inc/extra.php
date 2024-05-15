<?php
function delivery_time() {
    // Get current date and time
    $current_date = new DateTime();

    // Check if the current time is between 9 am and 11 pm
    $current_hour = $current_date->format('G');
    $is_working_hours = ($current_hour >= 9 && $current_hour <= 23);

    // Calculate next business day
    $result_date = get_next_business_day($current_date, $is_working_hours ? 5 : 6);

    // Format result date
    $result_date_formatted = $result_date->format('l, F jS');

    // Calculate countdown
    $current_time = current_time('timestamp');
    $delivery_time = $result_date->getTimestamp();
    $remaining_time = $delivery_time - $current_time;

    if ($remaining_time < 0) {
        $remaining_time = 0;
    }

    $hours = floor($remaining_time / 3600);
    $minutes = floor(($remaining_time % 3600) / 60);
    $seconds = $remaining_time % 60;

    // Output HTML
    echo '<div class="border p-6 mt-8 md:max-w-[420px] shadow rounded-md text-sm">';
    echo '<div class="flex justify-between items-center">';
    echo '<h6 class="font-semibold">Delivery Time</h6>';
    echo '<img src="'.get_template_directory_uri().'/public/images/dpd.png" alt="icon" width="45" height="45" />';
    echo '</div>';
    echo '<p class="mt-2 max-w-[300px]">Delivery Details</p>';
    echo '<p class="my-1">Arrives <span class="font-semibold text-secondary">' . esc_html($result_date_formatted) . '</span></p>';
    echo '<p>Order within <span class="text-secondary">' . esc_html($hours) . 'hrs ' . esc_html($minutes) . 'mins ' . esc_html($seconds) . 'sec</span></p>';
    echo '</div>';
}

function get_next_business_day($start_date, $days_to_add) {
    $current_date = clone $start_date;
    while ($days_to_add > 0) {
        $current_date->modify('+1 day');
        // Skip Saturday (6) and Sunday (0)
        if ($current_date->format('N') != 6 && $current_date->format('N') != 7) {
            $days_to_add--;
        }
    }
    return $current_date;
}
?>