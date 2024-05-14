<?php
/**
 * Template Name: Enquire Now 
 */

get_header();


?>

<section>
    <div class="py-6 relative md:py-16 bg-cover bg-no-repeat bg-center"
        style="background-image: linear-gradient(0deg, rgba(0, 36, 63, 0.7), rgba(0, 36, 63, 0.7)), url();">
        <div class="container mx-auto px-4 text-white">
            <h1 class="sm:text-4xl text-4xl font-bold font-opensans capitalize mb-2 sm:text-left text-center">
                Ask for a quick quote

            </h1>
            <p>Fill in the details below and we will get back to you with a quote in 15 minutes or less </p>

        </div>

    </div>
</section>

<div class="container mx-auto px-4 sm:my-16 my-10">

    <div class="mt-10">
        <form action="" method="post" class="flex flex-col gap-5" id="enquiries_form">
            <div class="flex flex-col gap-2">
                <label for="message">What do you need?*</label>
                <p class="text-sm text-gray-500">Give us more details on your needs (eg products required, colours,
                    sizes, print positions etc).
                    Consider we have a minimum order of £50 +VAT </p>
                <textarea id="message" name="message" rows="4" class="border w-full outline-none py-2 px-2 border-gray-300 bg-gray-50"
                    placeholder="We can help"></textarea>
            </div>

            <div class="flex flex-col gap-2">
                <label for="qty">Estimated Quantity*</label>
                <input type="text" id="qty" name="qty" class="border outline-none w-full max-w-96 py-2 px-2 border-gray-300 bg-gray-50"
                    placeholder="How Many" required>
            </div>
            <div class="flex flex-col gap-2">
                <label for="artwork">Upload Your Artwork</label>
                <input type="file" id="artwork" name="artwork" class="border outline-none w-full max-w-96 py-2 px-2 border-gray-300 bg-gray-50">
            </div>
            <div class="grid md:grid-cols-2 gap-5">
                <div class="flex flex-col gap-2">
                    <label for="fname">First Name *</label>
                    <input type="text" id="fname" name="fname" class="border outline-none w-full max-w-96 py-2 px-2 border-gray-300 bg-gray-50"
                        placeholder="First Name" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" class="border outline-none w-full max-w-96 py-2 px-2 border-gray-300 bg-gray-50"
                        placeholder="Last Name">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" class="border outline-none w-full max-w-96 py-2 px-2 border-gray-300 bg-gray-50"
                        placeholder="Email address" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="phone">Telphone *</label>
                    <input type="tel" id="phone" name="phone" class="border outline-none w-full max-w-96 py-2 px-2 border-gray-300 bg-gray-50"
                        placeholder="+44.... " required>
                </div>
            </div>

            <div>
                <input type="checkbox" id="agree" name="agree" value="agree">
                <label for="agree"> I agree to the terms and conditions and the privacy policy</label>
            </div>
            <div>
                <button type="submit" class="bg-green-500 py-2 px-8 hover:bg-primary rounded-full text-white">
                    Send
                </button>
            </div>
            <div class="status py-10 border border-green-800"></div>
    </div>
    </form>


</div>
</div>

<?php get_footer(); ?>

<script>
jQuery("#contact_form").validate({
    rules: {
        firstname: "required",
        message: "required",

        email: {
            required: true,
            email: true
        },
        agree: "required"
    },
    messages: {
        firstname: "Please enter your firstname",
        message: "Please enter your message",
        email: "Please enter a valid email address",
        agree: "Please accept our policy"
    },
});
</script>
<script>
jQuery(document).ready(function($) {
    $("#enquiries_form").submit(function(e) {
        e.preventDefault();
            var qty = jQuery('#qty').val();
            var email = jQuery('#email').val();
            var fname = jQuery('#fname').val();
            var lname = jQuery('#lname').val();
            var phone = jQuery('#phone').val();            
            var message = jQuery('#message').val();
            
        $.ajax({
            type: "post",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: {
                action: "send_email_inq",
                qty : qty,
                name : fname+lname,
                email : email,
                phone : phone,
                message : message                   
            },
            success: function(data) {

             
                    $(".status").html(data.message);
              

            },
            error: function(error) {
                // Handle error response
               // console.log(error.responseText);
            }
        });
    });
});
</script>