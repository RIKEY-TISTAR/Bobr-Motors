<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['products']));

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

foreach (array_filter((['products']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex justify-center">
    <ul class="cards w-full grid justify-items-center lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 md:mt-8 mt-4">
        <!--[if BLOCK]><![endif]--><?php if(!$products->isEmpty()): ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="w-full h-full">
                    <?php if (isset($component)) { $__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product.product-card','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product.product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33)): ?>
<?php $attributes = $__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33; ?>
<?php unset($__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33)): ?>
<?php $component = $__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33; ?>
<?php unset($__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33); ?>
<?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php else: ?>
            <div class="col-span-3">
                <p class="text-lg">Товары не найдены</p>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
</div>


<?php /**PATH D:\APP\Laravel\autoService-2025-1.4\resources\views/components/product/product-group.blade.php ENDPATH**/ ?>