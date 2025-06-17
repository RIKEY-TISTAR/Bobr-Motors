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
        <img class="h-[300px] w-full" src="<?php echo e(url('storage', $product->brand->image[0])); ?>" alt="">
    </div>
    <div class="px-6 w-full">
        <div class="h-[70px]">
            <h5 class="xl:text-xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white"><?php echo e($product->brand->name); ?></h5>
        </div>

        <p class="xl:text-lg lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white">Краткое описание:</p>

        <p class="xl:text-xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white"><?php echo e($product->brand->description); ?></p>        
              
    </div>
</div><?php /**PATH D:\APP\Laravel\autoService-2025-1.5\resources\views/components/product/product-card-brand.blade.php ENDPATH**/ ?>