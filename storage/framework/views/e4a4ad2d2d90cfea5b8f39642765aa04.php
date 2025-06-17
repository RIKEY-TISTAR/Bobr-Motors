<main>

    <div class="container mx-auto">

        <div class="card">

            <div class="text">
                <h2 class="text-white   lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold mt-16"><?php echo e($product->name); ?></h2>
                <p class="text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light md:mt-2 mt-2 mb-12">Подробная информация.</p>
            </div>

            <div class="bg-[#232B33] p-10">
                <div class="grid gap-10 lg:grid-cols-6 md:grid-cols-2 grid-cols-1 h-auto">

                    <div class="img col-span-2">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="w-full h-full]">
                                <img src="<?php echo e(url('storage', $image)); ?>" class="w-full h-full" alt="">

                                <div class="decs sm:pl-0">
                                    <p class="pt-8 text-3xl font-normal text-white dark:black"> <?php echo e($product->price); ?> руб</p>  
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->      
                    </div>                  
                    
                    <div class="text col-span-4">

                        <div class="pl-2 sm:pl-0">
                          <p class="xl:text-4xl lg:text-2xl md:text-xl sm:text-2xl text-xl font-bold text-white dark:black"><?php echo e($product->name); ?></p>
                          <p class="text-[12px] font-Roboto font-bold truncate text-[#4E4E4E] uppercase w-[90px]"><?php echo e($product->brand->name); ?></p>
                          <p class="py-2 xl:text-2xl lg:text-xl md:text-xl sm:text-2xl text-xl font-normal text-[#A5A8AB] tracking-tight dark:black"> <?php echo e($product->description); ?> </p>
                        </div>                        
                          
                    </div>
                </div>


            </div>   
            
        </div>

    </div>

</main> <?php /**PATH D:\APP\Laravel Project\autoService-2025\resources\views/livewire/single-product.blade.php ENDPATH**/ ?>