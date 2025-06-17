    <div class="container mx-auto mt-24 grid grid-cols-5 gap-5">

        <div class="Services cards-pop w-full col-span-4">
                
                <div class="text">
                    <h2 class="text-white   lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold">Наши мастера</h2>
                    <p class="text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-2">За нашими плечами сотни обслуженных автомобилей.</p>
                </div>

                <?php if (isset($component)) { $__componentOriginal051d00ac98812afeaa2e98d3a1479bf2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal051d00ac98812afeaa2e98d3a1479bf2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product.product-group-brand','data' => ['products' => $products]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product.product-group-brand'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['products' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal051d00ac98812afeaa2e98d3a1479bf2)): ?>
<?php $attributes = $__attributesOriginal051d00ac98812afeaa2e98d3a1479bf2; ?>
<?php unset($__attributesOriginal051d00ac98812afeaa2e98d3a1479bf2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal051d00ac98812afeaa2e98d3a1479bf2)): ?>
<?php $component = $__componentOriginal051d00ac98812afeaa2e98d3a1479bf2; ?>
<?php unset($__componentOriginal051d00ac98812afeaa2e98d3a1479bf2); ?>
<?php endif; ?>

                
                <?php echo e($products->links()); ?>

        </div>
    </div><?php /**PATH D:\APP\Laravel\autoService-2025-1.5\resources\views/livewire/page-products-brand.blade.php ENDPATH**/ ?>