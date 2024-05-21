<?php
/**
 * Template Name: Contact 
 */

get_header();


?>

<div class="container mx-auto px-4 sm:my-16 my-10">
    <div>
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">CONTACT US</h2>
    </div>
    <div class="flex flex-col md:flex-row gap-5 w-full">
        <div class="sm:mt-5 mt-0 md:w-96">
            <div class="sm:py-3 py-3">
                <h3 class="font-bold sm:mb-0 mb-3">Printwish</h3>
                <div class="border border-b-0 sm:mt-5 mt-0"></div>
            </div>
            <div class="sm:py-4 py-3 flex items-center">
                <i class="fa-solid fa-phone-flip text-3xl"></i>
                <div>
                    <p>
                        <span class="font-bold">Sales Enquiries Tel:</span> 0044 800 051 0821
                    </p>
                    <p><span class="font-bold">Accounts Tel:</span> 0044 800 051 0821 </p>
                </div>
            </div>
            <div class="border border-b-0 sm:mt-5 mt-0"></div>

            <div class="sm:py-4 py-3 flex items-center">
                <i class="fa-regular fa-envelope text-3xl"></i>
                <div>
                    <p>
                        <span class="font-bold">Sales:</span>
                        <Link href="mailto:sales@printwish.co.uk">sales@printwish.co.uk </Link>
                    </p>
                    <p>
                        <span class="font-bold">Enquiries:</span>
                        <Link href="mailto:enquiries@printwish.co.uk">enquiries@printwish.co.uk </Link>
                    </p>
                </div>
            </div>
            <div class="border border-b-0 sm:mt-5 mt-0"></div>
            <div class="sm:py-4 py-3">
                <p><span class="font-bold">Mon-Friday:</span> 09:00am - 05:30pm</p>
                <p><span class="font-bold">Sat/Sun:</span>Closed</p>
                <p><span class="font-bold">Bank Holidays:</span>Closed</p>

                <p class="py-5">
                    Feel free to send us a message via the from on this page and we`ll
                    get back to you as soon as possible.
                </p>
                <p>
                    Alternatively, you can always call us during hours on
                    <span class="text-green-500">0044 800 051 0821</span>
                </p>
            </div>
            <div class="border border-b-0 sm:mt-5 mt-0"></div>
            <div class="sm:py-4 py-3">
                <h3 class="font-bold">Drop Shipping</h3>
                <p class="py-4">
                    Looking for help or info related to drop shipping
                </p>
                <button class="bg-green-700 px-10 py-3 rounded-full text-white">
                    <Link href="mailto:enquiries@printwish.co.uk"> DROP SHIPPING HELP </Link>
                </button>
            </div>
        </div>
        <div class="border-l-0 border"></div>
        <div class="px-4 sm:mt-8 mt-0 w-full">
            <div>
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                    Contact us
                </h3>
                <form action="" method="post" id="contact_form">
                    <div class="flex gap-5">
                        <div class="sm:mt-8 mt-0">
                            <p class="py-7">Subject</p>
                            <p>Your Name</p>
                            <p class="py-9">Email address</p>
                            <p class="py-5">Message</p>
                        </div>
                        <div class="sm:mt-12 mt-5">
                            <select name="enquiries" id="enquiries"
                                class="border outline-none w-full max-w-96 py-2 px-2">
                                <option value="General Enquiries">General Enquiries</option>
                                <option value="Invoice/Accounts Enquiry">Invoice/Accounts Enquiry</option>
                                <option value="Price Enquiry">Price Enquiry</option>
                                <option value="Request a Call">Request a Call</option>
                            </select>
                            <br />
                            <input type="text" name="name" id="name"
                                class="border outline-none w-full max-w-96 py-2 px-2 mt-5" placeholder="Enter Your Name"
                                required>
                            <br />
                            <input type="email" name="email" id="email"
                                class="border outline-none w-full max-w-96 py-2 px-2 mt-5"
                                placeholder="Enter Email address">
                            <div>
                                <textarea name="message" id="message" rows="4"
                                    class="border mt-5 w-full max-w-[500px] outline-none py-2 px-2"
                                    placeholder="We can help" required></textarea>
                                <!-- <div class="flex gap-2">
                                    <input type="checkbox" class="mt-[3px]"  id="agree" name="agree" value="agree">
                                    <p>
                                        I agree to the terms and conditions and the privacy policy
                                    </p>
                                </div> -->
                            </div>
                            <div>
                                <input type="submit" value="Send"
                                    class="bg-green-500 py-2 px-8 hover:scale-105 rounded-full mt-5 text-white">
                            </div>
                            <div class="status"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2403.6544181327586!2d-1.1577665230314962!3d52.95464100395923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879c180afd95fcb%3A0xf14379c1cf00ba1b!2sRegus%20-%20Nottingham%20City%20Centre!5e0!3m2!1sen!2s!4v1716299348454!5m2!1sen!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>


</section>

<?php get_footer(); ?>


<script>
jQuery("#contact_form").validate({
    rules: {
        firstname: "required",
        lastname: "required",

        email: {
            required: true,
            email: true
        },
        agree: "required"
    },
    messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",

        email: "Please enter a valid email address",
        agree: "Please accept our policy"
    },
});
</script>

<script>
jQuery(document).ready(function($) {
    $("#contact_form").submit(function(e) {
        e.preventDefault();
        var enquiries = jQuery('#enquiries').val();
        var email = jQuery('#email').val();
        var name = jQuery('#name').val();
        var message = jQuery('#message').val();

        $.ajax({
            type: "post",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: {
                action: "send_email",
                enquiries: enquiries,
                name: name,
                email: email,
                message: message
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