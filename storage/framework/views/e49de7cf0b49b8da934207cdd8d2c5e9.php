<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="max-w-lg bg-[#232B33] w-full h-full">
            
    <div class="flex justify-center items-center p-6">
        <img class="h-[200px] lg:h-[300px] w-full object-cover" src="<?php echo e(url('storage', $product->images[0])); ?>" alt="">
    </div>
    <div class="px-6 w-full">
        <div class="h-[60px]">
            <h5 class="xl:text-xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white"><?php echo e($product->name); ?></h5>
            
        </div>

        <p class="xl:text-lg lg:text-lg md:text-lg sm:text-2xl text-xl font-normal text-white">Краткое описание:</p>

        <div class="">
            <p class="xl:text-lg lg:text-lg md:text-sm sm:text-2xl text-xl font-normal text-gray-700 dark:text-gray-400"><?php echo e($product['sub-title']); ?></p>
    
            <p class="xl:text-lg lg:text-lg md:text-sm sm:text-2xl text-xl font-normal text-gray-700 dark:text-gray-400"><?php echo e($product['sub-title-two']); ?></p>

            <p class="xl:text-lg lg:text-lg md:text-sm sm:text-2xl text-xl font-normal text-gray-700 dark:text-gray-400"><?php echo e($product['sub-title-thre']); ?></p>
        </div>

        <div class="pb-6">
            <p class="xl:text-lg lg:text-lg md:text-lg sm:text-2xl text-xl font-bold text-[#228BEF] mt-2 mb-4"><?php echo e($product->price); ?> руб</p>

            <a href="<?php echo e(route('single.product', $product->slug)); ?>">
                <button class="w-full bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border xl:text-xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white py-2 px-8 rounded transition delay-50">
                    Подробнее                
                </button>
            </a>      
        </div>
              
    </div>
</div><?php /**PATH D:\APP\Laravel\autoService-2025-1.7\resources\views/components/product/product-card.blade.php ENDPATH**/ ?>