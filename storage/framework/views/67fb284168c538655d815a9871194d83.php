<main>

    <div class="container mx-auto">

        

        <section class="bg-[#232B33] py-10 mt-24">
            <div class="p-6 mx-auto max-w-screen-md">

                <h2 class="mb-4 text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold text-center">Связь с нами</h2>

                <p class="mb-4 lg:mb-8 text-center font-medium sm:text-xl">Хотите записатся или возникла техническая проблема?</p>

                <form action="<?php echo e(route('contact-form')); ?>" method="post" class="space-y-8">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label for="name" class="block text-sm font-medium">Ваше имя</label>
                        <input type="text" name="name" id="name" placeholder="Имя" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md"/>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium">Ваш email</label>
                        <input type="text" name="email" id="email" placeholder="Электронная почта" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md"/>
                    </div>
                    <div>
                        <label for="contactNumber" class="block mb-2 text-sm font-medium">Ваш телефон</label>
                        
                        <input type="text" name="contactNumber" id="contactNumber" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md" placeholder="+7 123-456-7890" pattern="^\+\d{1,3}\s\d{1,4}-\d{1,4}-\d{4}$" maxlength="12"/>    
                            
                        <script>
                            // Add event listener to the input field
                            document.getElementById('contactNumber').addEventListener('input', function (e) {
                                // Replace any non-numeric characters except +, -, and space
                                e.target.value = e.target.value.replace(/[^+\d\s-]/g, '');
                            });
                        </script>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium">Ваш коментарий</label>
                        <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm bg-[#1C2025] text-white rounded-lg shadow-sm border focus:border-black" placeholder="Ваш коментарий..."></textarea>
                    </div>
                    <button type="submit" class="w-full flex justify-center items-center px-3 py-2 text-sm font-medium text-center bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border">
                        Отправить
                   </button>
                </form>
            </div>
          </section>
    </div>

</main> 
<?php /**PATH D:\APP\Laravel\autoService-2025-1.7\resources\views/livewire/page-contact.blade.php ENDPATH**/ ?>