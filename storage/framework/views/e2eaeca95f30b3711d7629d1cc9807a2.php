<header>

    <div class="">
        <div class="fixed top-0 left-0 right-0 w-full bg-[#228BEF] z-20">
            <div class="flex justify-between items-center bg-[#228BEF] container mx-auto">

                <a wire:navigate href="<?php echo e(route('page.home')); ?>" class="text-xl font-semibold">LOGO</a>

                <menu class="space-x-2 flex">

                    <li>
                        <a wire:navigate href="<?php echo e(route('page.products')); ?>" >
                            <button class="bg-[#1C2025] hover:bg-white hover:text-black text-white text-lg font-semibold py-2 px-3 transition delay-50 flex items-center justify-center gap-2">
                                <p class="text-xl font-medium md:flex sm:hidden">Наши услги</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car-icon lucide-car"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                            </button>
                        </a>
                    </li>
                    
                    <li>
                        <a wire:navigate href="<?php echo e(route('page.contacts')); ?>">
                            <button class="bg-[#1C2025] hover:bg-white hover:text-black text-white text-lg font-semibold py-2 px-3 transition delay-50 flex items-center justify-center gap-2">
                                <p class="text-xl font-medium md:flex sm:hidden">Связатся с нами</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </button>
                        </a>
                    </li>
                    
                </menu>              

                
                
            </div>
        </div>
    </div>

    

</header><?php /**PATH D:\APP\Laravel\autoService-2025-1.3\resources\views/livewire/partials/header.blade.php ENDPATH**/ ?>