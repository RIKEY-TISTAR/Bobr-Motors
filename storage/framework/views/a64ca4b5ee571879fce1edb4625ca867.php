<main>     
    
    <section class="Hero">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $heroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="swiper-slide">
                <div class="relative z-0 mx-auto mt-10">

                    <img class="w-full h-[550px] object-cover" src="<?php echo e(url('storage', $hero['hero-images'])); ?>" alt="Фото о компании">

                    <div class="absolute inset-0 flex items-center sm:justify-start justify-center  px-4">
                        <div class="Text sm:px-0 sm:block flex flex-col container mx-auto sm:justify-center">
            
                            <h1 class="title text-center md:text-left text-white lg:text-6xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($hero['title']); ?></h1>
                
                            <p class="title text-white lg:text-2xl md:text-xl sm:text-lg text-base font-light mt-4 mb-8 md:w-[50%] text-center md:text-left mx-4 sm:mx-0"><?php echo e($hero['description']); ?></p>
                
                            <a href="<?php echo e(route('page.form')); ?>">
                                <button class=" bg-[#228BEF] w-full md:w-auto hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-white text-lg font-semibold py-2 px-8 rounded transition delay-50">
                                    <p class="text-center lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Оставить заявку</p>                  
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="swiper-slide">
                <div class="relative z-0 mx-auto mt-10"> 

                    <img class="w-full h-[550px] object-cover" src="<?php echo e(url('storage', $hero['hero-images-two'])); ?>" alt="Фото о компании">

                    <div class="absolute inset-0 flex items-center sm:justify-start justify-center  px-4">
                        <div class="Text sm:px-0 sm:block flex flex-col container mx-auto">
            
                            <h1 class="title text-center md:text-left text-white lg:text-6xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($hero['title-two']); ?></h1>
                
                            <p class="title text-white lg:text-2xl md:text-xl sm:text-lg text-base font-light mt-4 mb-8 md:w-[50%] text-center md:text-left mx-4 sm:mx-0"><?php echo e($hero['description-two']); ?></p>
                
                            <a href="<?php echo e(route('page.form')); ?>">
                                <button class=" bg-[#228BEF] w-full md:w-auto hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-white text-lg font-semibold py-2 px-8 rounded transition delay-50">
                                    <p class="text-center lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Оставить заявку</p>                  
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->   

            </div> 
        </div>

    </section>

    <div class="container mx-auto px-4">             

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <section class="About-us bg-[#232B33] grid gap-8 xl:grid-cols-2 md:grid-cols-1 justify-items-center px-6 py-6">          

                <div class="Img w-full">
                    <img class="w-full md:h-[500px] h-[300px] object-cover" src="<?php echo e(url('storage', $about['images'])); ?>" alt="Фото о компании">
                
                </div>

                <div class="Text">
                    <h1 class="title text-center sm:text-left text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($about['title']); ?></h1>
                    <p class="sub title text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-6"><?php echo e($about['description']); ?></p>
                </div>         
    
            </section>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->     

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $callings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <section class="mt-12 px-6 py-6 bg-[#232B33]">

                <h1 class="title text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold text-center md:text-left">Почему мы?</h1>

                <div class="container mx-auto max-w-5xl flex gap-10 lg:gap-36 flex-wrap items-start justify-center md:justify-between py-10">
                    <div class="grid gap-4 justify-items-center text-center md:flex-1">
                        <div class=" rounded-full border-8 border-sky-400 p-4 ">
                            <img class="w-[60px] h-[60px] object-cover" src="<?php echo e(url('storage', $calling['image'])); ?>" alt="">
                        </div>
                        <h3 class="lg:text-3xl md:text-2xl sm:text-xl text-lg font-bold"><?php echo e($calling['title']); ?></h3>
                        <p class="text-white lg:text-xl md:text-xl  sm:text-lg  text-base font-light"><?php echo e($calling['desc']); ?></p>
                    </div>
                    <div class="grid gap-4 justify-items-center text-center md:flex-1">
                        <div class=" rounded-full border-8 border-sky-400 p-4 ">
                            <img class="w-[60px] h-[60px] object-cover" src="<?php echo e(url('storage', $calling['image-two'])); ?>" alt="">
                        </div>
                        <h3 class="lg:text-3xl md:text-2xl sm:text-xl text-lg font-bold"><?php echo e($calling['title-two']); ?></h3>
                        <p class="text-white lg:text-xl md:text-xl  sm:text-lg  text-base font-light"><?php echo e($calling['desc-two']); ?></p>
                    </div>
                    <div class="grid gap-4 justify-items-center text-center md:flex-1">
                        <div class=" rounded-full border-8 border-sky-400 p-4 ">
                            <img class="w-[60px] h-[60px] object-cover" src="<?php echo e(url('storage', $calling['image-thre'])); ?>" alt="">

                        </div>
                        <h3 class="lg:text-3xl md:text-2xl sm:text-xl text-lg font-bold"><?php echo e($calling['title-thre']); ?></h3>
                        <p class="text-white lg:text-xl md:text-xl  sm:text-lg  text-base font-light"><?php echo e($calling['desc-thre']); ?></p>
                    </div>
                </div>   
                
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->  

    </div>

</main> <?php /**PATH D:\APP\Laravel\autoService-2025-1.9-full\resources\views/livewire/page-home.blade.php ENDPATH**/ ?>