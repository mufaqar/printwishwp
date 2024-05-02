<?php
/**
 * Template Name: Test
 */

get_header();
?>
<style >


</style>

<canvas id="canvas"></canvas>
<div class="text-container">K</div>




<?php
// Register Shortcode

echo do_shortcode('[canvas_shortcode]');

?>




<?php

get_footer();