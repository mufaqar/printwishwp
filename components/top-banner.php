<section>
    <button id="top-banner-btn" class="p-1 w-full text-white text-center text-lg" style="background: #00C6AD ; font-weight: 600; text-transform : uppercase ">Our Price Promise >>> </button>
</section>


<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <div class="flex justify-between items-center text-white font-bold md:text-2xl p-3 md:p-5" style="background: #0088CC">
            <h2>Price Promise</h2>
            <button id="close-modal" class="close-btn text-2xl md:text-3xl px-2.5 text-white" style="background: #2C2930;">&times;</button>
        </div>
        <div class="p-3 py-6 md:p-7">
            <p class="text-left text-gray-600">At Printwish, we are committed to providing the best value for our customers. If you find the same clothing and identical decoration methods, we will do our best to beat any official quotation.</p> 
            <h4 class="md:text-2xl text-left py-4 font-bold">What do I do?</h4>
            <p class="text-left text-gray-600" >Please send your official quotation to <a href="mailto:sales@printwish.co.uk" class="font-semibold" style="color: #0088CC !important">sales@printwish.co.uk</a> and we will endeavour to beat your quoted price. Shop with confidence, knowing that you’re getting the best deal without compromising on quality or service.</p>
        </div>
    </div>
</div>


<script>
    // Get the button, modal, and close button elements
    const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('top-banner-btn');
    const closeModalBtn = document.getElementById('close-modal');

    // Open the modal
    openModalBtn.addEventListener('click', () => {
        modal.style.display = 'block';
    });

    // Close the modal
    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
</script>