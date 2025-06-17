<main>     
    
    <section class="Hero">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $heroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="swiper-slide">
                <div class="relative z-0 mx-auto mt-10">    
                    <img class="w-full h-[450px]" src="<?php echo e(url('storage', $hero['hero-images'])); ?>" alt="Фото о компании">
                    <div class="absolute inset-0 flex items-center sm:justify-start justify-center">
                        <div class="Text sm:px-0 sm:block flex flex-col container mx-auto">
            
                            <h1 class="title text-center sm:text-left text-white lg:text-6xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($hero['title']); ?></h1>
                
                            <p class="w-[50%] sub sm:text-left title text-white lg:text-2xl md:text-xl sm:text-lg text-base font-light mt-8 text-center"><?php echo e($hero['description']); ?></p>
                
                            <button class="sm:mx-0 mx-10 bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-white text-lg font-semibold py-2 px-8 rounded transition delay-50 mt-8">
                                <a wire:navigate href="<?php echo e(route('page.contacts')); ?>" class="text-center sm:text-left lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Оставить заявку</ф>                  
                            </button>
                        </div>
                    </div>
                </div>
                </div>

                <div class="swiper-slide">
                <div class="relative z-0 mx-auto mt-10">    
                    <img class="w-full h-[450px]" src="<?php echo e(url('storage', $hero['hero-images-two'])); ?>" alt="Фото о компании">
                    <div class="absolute inset-0 flex items-center sm:justify-start justify-center">
                        <div class="Text sm:px-0 sm:block flex flex-col container mx-auto">
            
                            <h1 class="title text-center sm:text-left text-white lg:text-6xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($hero['title-two']); ?></h1>
                
                            <p class="w-[50%] sub sm:text-left title text-white lg:text-2xl md:text-xl sm:text-lg text-base font-light mt-8 text-center"><?php echo e($hero['description-two']); ?></p>
                
                            <button class="sm:mx-0 mx-10 bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-white text-lg font-semibold py-2 px-8 rounded transition delay-50 mt-8">
                                <a wire:navigate href="<?php echo e(route('page.contacts')); ?>" class="text-center sm:text-left lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Оставить заявку</a>                  
                            </button>
                        </div>
                    </div>
                </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->   

            </div> 
        </div>

    </section>

    <div class="container mx-auto">      

        <section class="Services cards-pop">
            
            <div class="text">
                <h2 class="text-white   lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold md:mt-20 mt-6">Наши услуги</h2>
                <p class="text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light md:mt-8 mt-2 mb-6">За нашими плечами сотни обслуженных автомобилей.</p>
            </div>

             <?php if (isset($component)) { $__componentOriginalea0f6c36d4a5698bf0f0250889ca052b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea0f6c36d4a5698bf0f0250889ca052b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product.product-group','data' => ['products' => $products]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product.product-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['products' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea0f6c36d4a5698bf0f0250889ca052b)): ?>
<?php $attributes = $__attributesOriginalea0f6c36d4a5698bf0f0250889ca052b; ?>
<?php unset($__attributesOriginalea0f6c36d4a5698bf0f0250889ca052b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea0f6c36d4a5698bf0f0250889ca052b)): ?>
<?php $component = $__componentOriginalea0f6c36d4a5698bf0f0250889ca052b; ?>
<?php unset($__componentOriginalea0f6c36d4a5698bf0f0250889ca052b); ?>
<?php endif; ?>

        </section>

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $callings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <section class="Contact xl:px-16 px-6 relative bg-[#232B33] py-10 mt-20 grid lg:grid-cols-2 md:grid-cols-1">

            <div class="Text col-span-1">
                <h1 class="title text-white lg:text-3xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($calling['title']); ?></h1>
                <p class="sub title text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-8"><?php echo e($calling['description']); ?></p>
            </div>
    
            <div class="Text col-span-1 lg:pt-0 pt-10">
                <div class="number-and-soc grid lg:grid-cols-2 md:grid-cols-1 lg:gap-0 gap-8">
                    <h1 class="title text-white lg:text-3xl md:text-4xl sm:text-4xl text-3xl font-bold"><?php echo e($calling['phone']); ?></h1>
                    <div class="soc flex gap-4">
                        <img class="w-[40px] h-[40px]" src="<?php echo e(url('storage', $calling['images'])); ?>" alt="">
                        
                    </div>
                </div>
                <p class="sub title text-gray-400 text-2xl font-light mt-8"><?php echo e($calling['adress']); ?></p>
                <button class="bg-[#228BEF] w-full pr-20 hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-white text-lg font-semibold py-2 px-8 rounded transition delay-50 mt-8">
                    <p class="lg:text-2xl md:text-xl  sm:text-lg  text-base font-medium">Оставить заявку</p>                  
                </button>
            </div>
    
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->  

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <section class="About-us bg-[#232B33] mt-20 grid gap-8 xl:grid-cols-2 md:grid-cols-1 justify-items-center px-6 py-6">          

            <div class="Img w-full">
                <img class="w-full md:h-[500px] h-[300px]" src="<?php echo e(url('storage', $about['images'])); ?>" alt="Фото о компании">
                
            </div>

            <div class="Text">
                <h1 class="title text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold"><?php echo e($about['title']); ?></h1>
                <p class="sub title text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-6"><?php echo e($about['description']); ?></p>
            </div>         
    
            </section>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->     

    </div>

</main> <?php /**PATH D:\APP\Laravel Project\autoService-2025\resources\views/livewire/page-home.blade.php ENDPATH**/ ?>