<main>

    <div class="container mx-auto">

    <div class="bg-[#232B33] w-full mt-24 grid grid-cols-3">

        <div class="col-span-1">
            
            <div class="p-6">
                <img class="" src="<?php echo e(url('storage', $product->images[0])); ?>" alt="">
            </div>
            
            <div class="px-6 pb-6">
                <div>
                    <h5 class="xl:text-2xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white"><?php echo e($product->name); ?></h5>
                    <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white ">Категория: <?php echo e($product->category->name); ?></p>
                    <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white mb-4">Имя мастера: <?php echo e($product->brand->name); ?></p>
                </div>               
                
                <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-bold text-[#228BEF] mt-2">Цена: <?php echo e($product->price); ?> руб</p>
                
            </div>

        </div>

        <div class="col-span-2 p-6">
            <p class="xl:text-2xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white w-full mb-4">Описание:</p>
            <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white w-full"><?php echo e($product->description); ?></p>
        </div>
        
    </div>       
 
        

    </div>

</main> <?php /**PATH D:\APP\Laravel\autoService-2025-1.3\resources\views/livewire/single-product.blade.php ENDPATH**/ ?>