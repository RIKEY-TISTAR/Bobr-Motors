<main>

    <div class="container mx-auto">

        

        <section class="bg-[#232B33] py-10 mt-24">
            <div class="p-6 mx-auto max-w-screen-md">

                <h2 class="mb-4 text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold text-center">Связь с нами</h2>

                <p class="mb-4 lg:mb-8 text-center font-medium sm:text-xl">Хотите записатся или возникла техническая проблема?</p>
                              
                <form action="<?php echo e(route('page.form-finished')); ?>" wire:submit.prevent="submitForm" method="post" class="space-y-8">
                
                    <?php echo csrf_field(); ?>
                
                    <div>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Напишите ваше имя!</p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        <label for="name" class="block text-sm font-medium mb-2">Ваше имя</label>
                        <input type="text" name="name" id="name" wire:model="name" placeholder="Имя" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md"/>
                    </div>                  
                    <div>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Напишите ваш email!</p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        <label for="email" class="block mb-2 text-sm font-medium">Ваш email</label>
                        <input type="text" name="email" id="email" wire:model="email" placeholder="Электронная почта" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md"/>
                    </div>
                    <div>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['contactNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Напишите ваш телефон!</p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        <label for="contactNumber" class="block mb-2 text-sm font-medium">Ваш телефон</label>                     
                        <input type="text" name="contactNumber" id="contactNumber" wire:model="contactNumber" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md" placeholder="+7 123-456-7890" pattern="^\+\d{1,3}\d{1,4}\d{1,4}\d{4}$" maxlength="12"/>    
                            
                        <script>
                            // Add event listener to the input field
                            document.getElementById('contactNumber').addEventListener('input', function (e) {
                                // Replace any non-numeric characters except +, -, and space
                                e.target.value = e.target.value.replace(/[^+\d\s-]/g, '');
                            });
                        </script>
                    </div>
                    <div class="sm:col-span-2">
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Ваш коментарий слишком маленький!</p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        <label for="message" class="block mb-2 text-sm font-medium">Ваш коментарий</label>
                        <textarea id="message" name="message" wire:model="message" rows="6" class="block p-2.5 w-full text-sm bg-[#1C2025] text-white rounded-lg shadow-sm border focus:border-black" placeholder="Ваш коментарий..."></textarea>
                    </div>

                    <!--[if BLOCK]><![endif]--><?php if('$success'): ?>
                    <h2 class="my-4 lg:text-4xl md:text-4xl sm:text-4xl text-3xl font-bold text-center text-sky-600"><?php echo e($success); ?></h2>                   
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <a href="<?php echo e(route('page.form-finished')); ?>">
                        <button type="submit" class="w-full mt-12 flex justify-center items-center px-3 py-2 text-sm font-medium text-center bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border">
                            Отправить
                        </button>
                    </a>
                </form>
            </div>
          </section>
    </div>

</main> 
<?php /**PATH D:\APP\Laravel\autoService-2025-1.9-full\resources\views/livewire/page-form.blade.php ENDPATH**/ ?>