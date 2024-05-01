<?php
/**
 * Template Name: Contact 
 */

get_header();


?>

<div class="container mx-auto px-4 my-20">
    <div>
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">CONTACT US</h2>
    </div>

    <div class="flex flex-col md:flex-row gap-5 w-full">
        <div class="mt-5 md:w-96">
            <div class="py-3">
                <h3 class="font-bold">Printwish</h3>
                <div class="border border-b-0 mt-5"></div>
            </div>
            <div class="py-4 flex items-center gap-3">
                <i class="fa-solid fa-phone-flip text-3xl"></i>
                <div>
                    <p>
                        <span class="font-bold">Sales Enquiries Tel:</span> 0800 051 0821
                    </p>
                    <p><span class="font-bold">Accounts Tel:</span> 0800 051 0821 </p>
                </div>
            </div>
            <div class="border border-b-0 mt-5"></div>

            <div class="py-4 flex items-center gap-3">
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
            <div class="border border-b-0 mt-5"></div>

            <div class="py-4">
                <p><span class="font-bold">Mon-Friday:</span> 09:00am - 05:30pm</p>
                <p><span class="font-bold">Sat/Sun:</span>Closed</p>
                <p><span class="font-bold">Bank Holidays:</span>Closed</p>

                <p class="py-5">
                    Feel free to send us a message via the from on this page and we`ll
                    get back to you as soon as possible.
                </p>
                <p>
                    Alternatively, you can always call us during hours on
                    <span class="text-green-500">0800 051 0821</span>
                </p>
            </div>
            <div class="border border-b-0 mt-5"></div>

            <div class="py-4">
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
        <div class="px-4 mt-8 w-full">
            <div>
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                    Contact us
                </h3>


                <form action="" method="post">
                    <div class="flex gap-5">
                        <div class="mt-8">
                            <p class="py-7">Subject</p>
                            <p>Email address</p>
                            <p class="py-5">Message</p>
                        </div>
                        <div class="mt-12">
                            <select name="Enquiries" class="border outline-none w-full max-w-96 py-2 px-2">
                                <option value="General Enquiries">General Enquiries</option>
                                <option value="Invoice/Accounts Enquiry">Invoice/Accounts Enquiry</option>
                                <option value="Price Enquiry">Price Enquiry</option>
                                <option value="Request a Call">Request a Call</option>
                            </select>
                            <br />
                            <input type="email" name="Email" class="border outline-none w-full max-w-96 py-2 px-2 mt-5"
                                placeholder="Email address">
                            <div>
                                <textarea name="Message" rows="4"
                                    class="border mt-5 w-full max-w-[500px] outline-none py-2 px-2"
                                    placeholder="We can help"></textarea>
                                <div class="flex gap-2">
                                    <input type="checkbox" name="Terms" id="" class="mt-[3px]">
                                    <p>
                                        I agree to the terms and conditions and the privacy policy
                                    </p>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Send"
                                    class="bg-green-500 py-2 px-8 hover:scale-105 rounded-full mt-5 text-white">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>