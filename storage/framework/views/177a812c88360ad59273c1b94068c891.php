<footer class="Contact relative bg-[#232B33] py-10 mt-14 px-10 container mx-auto">

    <h1 class="title text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold">Контакты</h1>

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1">

            <div class="Text col-span-1">
                <p class="sub title text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-8">График работы:</p>
                <p class="sub w-[70%] title text-white lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-4"><?php echo e($footer['graphic']); ?></p>
                <p class="sub w-[70%] title text-white lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-2"><?php echo e($footer['graphic-two']); ?></p>
            </div>

            <div class="Text col-span-1">

                <p class="sub title text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-8">Телефоны:</p>

                <div class="footer-soc flex gap-2 items-center mt-4">
                    <p class="sub title text-white lg:text-2xl md:text-xl  sm:text-lg  text-base font-light"><?php echo e($footer['phone']); ?></p>
                    <img class="w-[25px] h-[25px]" src="<?php echo e(url('storage', $footer['soc-images'])); ?>" alt="Фото соцсети">
                </div>

                <div class="footer-soc flex gap-2 items-center mt-2">
                    <p class="sub title text-white lg:text-2xl md:text-xl  sm:text-lg  text-base font-light"><?php echo e($footer['phone-two']); ?></p>
                    <img class="w-[25px] h-[25px]" src="<?php echo e(url('storage', $footer['soc-images-2'])); ?>" alt="Фото соцсети">
                </div>
            </div>

            <div class="Text col-span-1">
                <p class="sub title text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-8">Адрес:</p>
                <p class="sub title text-white lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-4"><?php echo e($footer['adress']); ?></p>
            </div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->      

    <div class="w-full h-[1px] bg-white my-10"></div>

    <div class="map h-[491px]">
        <script type="text/javascript" charset="utf-8" async 
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A99664c4a9f9d1acde905a4e3fc3a0105014d8c573dfcd24c3859c0bcff02c0ba&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true">
        </script>
    </div>

    <div class="w-full h-[1px] bg-white my-10"></div>

    <p class="sub title text-white lg:text-2xl md:text-xl  sm:text-lg  text-base font-light">Copyright © 2025 Bobr-Motors</p>

</footer><?php /**PATH D:\APP\Laravel\autoService-2025-1.6\resources\views/livewire/partials/footer.blade.php ENDPATH**/ ?>