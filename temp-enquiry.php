<?php
/**
 * Template Name: Enquire Now 
 */

get_header();


?>

<div class="container mx-auto px-4 sm:my-16 my-10">
    <div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">Enquire Now</h1>
    </div>
    <div class="mt-10">
        <form action="" method="post" class="flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label for="enquiries">Subject</label>
                <select id="enquiries" name="enquiries" class="border outline-none w-full max-w-96 py-2 px-2">
                    <option value="General Enquiries">General Enquiries</option>
                    <option value="Invoice/Accounts Enquiry">Invoice/Accounts Enquiry</option>
                    <option value="Price Enquiry">Price Enquiry</option>
                    <option value="Request a Call">Request a Call</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="border outline-none w-full max-w-96 py-2 px-2"
                    placeholder="Email address">
            </div>
            <div class="flex flex-col gap-2">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" class="border w-full outline-none py-2 px-2"
                    placeholder="We can help"></textarea>
            </div>
            <div>
                <input type="checkbox" id="terms" name="terms" value="terms">
                <label for="terms"> I agree to the terms and conditions and the privacy policy</label>
            </div>
            <div>
                <button type="submit" class="bg-green-500 py-2 px-8 hover:bg-primary rounded-full text-white">
                    Send
                </button>
            </div>
    </div>
    </form>
</div>
</div>

<?php get_footer(); ?>