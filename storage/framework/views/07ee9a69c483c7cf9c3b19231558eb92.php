<div>
    <!-- Кнопка бургер-меню -->
    <button @click="toggleMenu" class="p-2 focus:outline-none">
        <div class="w-6 flex flex-col space-y-1">
            <span class="h-0.5 w-full bg-gray-600 transition-all duration-300 <?php if($isOpen): ?> transform rotate-45 translate-y-1.5 <?php endif; ?>"></span>
            <span class="h-0.5 w-full bg-gray-600 transition-all duration-300 <?php if($isOpen): ?> opacity-0 <?php endif; ?>"></span>
            <span class="h-0.5 w-full bg-gray-600 transition-all duration-300 <?php if($isOpen): ?> transform -rotate-45 -translate-y-1.5 <?php endif; ?>"></span>
        </div>
    </button>

    <!-- Меню (появляется/исчезает) -->
    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 <?php if(!$isOpen): ?> hidden <?php endif; ?>">
        <div class="py-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Профиль</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Настройки</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Выйти</a>
        </div>
    </div>
</div><?php /**PATH D:\APP\Laravel\autoService-2025-1.3\resources\views/livewire/burger-menu.blade.php ENDPATH**/ ?>