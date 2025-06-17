<header>

    <div class="">
        <div class="fixed top-0 left-0 right-0 w-full bg-[#228BEF] z-20">
            <div class="flex justify-between items-center bg-[#228BEF] container mx-auto">

                <a wire:navigate href="<?php echo e(route('page.home')); ?>" class="text-xl font-semibold">LOGO</a>

                <menu class="hidden space-x-10 sm:flex">
                    
                    <li>
                        <a wire:navigate href="<?php echo e(route('page.products')); ?>" class="text-xl font-medium cursor-pointer hover:bg-[#1C2025] px-2 py-2 transition delay-50">Услуги</a>
                    </li>
                    <li>
                        <a class="text-xl font-medium cursor-pointer hover:bg-[#1C2025] px-2 py-2 transition delay-50">Контакты</a>
                    </li>
                    <li>
                        <a class="text-xl font-medium cursor-pointer hover:bg-[#1C2025] px-2 py-2 transition delay-50">О нас</a>
                    </li>
                </menu>

                <div class="flex space-x-5 items-center">


                    <a wire:navigate href="<?php echo e(route('page.contacts')); ?>">
                      <button class="bg-[#1C2025] hover:bg-white hover:text-black text-white text-lg font-semibold py-2 px-3 transition delay-50 flex items-center justify-center gap-2">
                        <p class="text-xl font-medium hidden md:flex">Связатся с нами</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                      </button>
                    </a>

                    <button id="dropdownBtn" class="flex sm:hidden items-center space-x-2.5">
                      <div class="flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                      </div>
                    </button>
                
                </div>
                
            </div>
        </div>
    </div>

    <div id="dropdownList" class="hidden w-full h-auto md:h-[300px] fixed bg-[#1C2025] left-0 border-b-2 pt-20 pb-6 z-10">
        <div class="container mx-auto">
          <div class="">


            
            <ul class="flex justify-center">

              <li class="">
                <menu class="grid gap-3">
                  <li>
                      <a wire:navigate href="<?php echo e(route('page.products')); ?>" class=" text-xl font-medium cursor-pointer">Услуги</a>
                  </li>
                  <li>
                      <a class="text-xl font-medium cursor-pointer">Контакты</a>
                  </li>
                  <li>
                      <a class="text-xl font-medium cursor-pointer">О нас</a>
                  </li>
                </menu>
              </li>
  
            </ul>
          </div>
        </div>
    </div> 

</header><?php /**PATH D:\APP\Laravel\autoService-2025\resources\views/livewire/partials/header.blade.php ENDPATH**/ ?>