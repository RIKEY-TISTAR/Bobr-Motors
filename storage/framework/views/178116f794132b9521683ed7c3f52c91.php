<div class="max-w-7xl mx-auto px-4 grid grid-cols-1 gap-12 lg:grid-cols-5 pt-10">
    <div class="w-full py-5 col-span-1">
        <p class="mb-2 text-lg font-semibold uppercase text-gray-800">Фильтры</p>
        <div class="w-full col-span-1">
            
            <div class="mb-2">
                <div class="text-lg font-semibold uppercase text-gray-800">Категории</div>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label wire:key="<?php echo e($category->id); ?>" for="<?php echo e($category->slug); ?>">
                        <input class="accent" wire:model.live="selected_categories" type="checkbox" id="<?php echo e($category->slug); ?>" value="<?php echo e($category->id); ?>">
                        <span><?php echo e($category->name); ?></span>
                    </label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            
            <div class="mb-2">
                <div class="text-lg font-semibold uppercase text-gray-800">Бренды</div>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label for="<?php echo e($brand->slug); ?>">
                    <input class="accent" wire:model.live="selected_brands" type="checkbox" id="<?php echo e($brand->slug); ?>" value="<?php echo e($brand->id); ?>">
                    <span><?php echo e($brand->name); ?></span>
                </label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            
            <div class="mb-2">
                <div class="text-lg font-semibold uppercase text-gray-800">Популярный товар</div>
                <label for="is_featured">
                    <input class="accent" wire:model.live="featured" type="checkbox" id="is_featured" value="1">
                    <span>Да</span>
                </label>
            </div>
             
             <div class="mb-2">
                <div class="text-lg font-semibold uppercase text-gray-800">Участвует в скидке</div>
                <label for="is_sale">
                    <input class="accent" wire:model.live="sale" type="checkbox" id="is_sale" value="1">
                    <span>Да</span>
                </label>
            </div>
            
            <div class="mb-2">
                <div class="text-lg font-semibold uppercase text-gray-800">Цена</div>
                <label for="">
                    <input class="accent" wire:model.live="price_range" type="range" max="530000" value="12000" step="30000" id="" value="0">
                    <span><?php echo e(Number::currency($price_range, 'RUB')); ?></span>
                </label>
            </div>
            
            <div class="mb-2">
                <div class="mb-2 text-lg font-semibold uppercase text-gray-800">Сортировать по</div>
                <select class="mb-2" wire:model.live="sort" name="" id="">
                    <option value="latest">Сначала новые</option>
                    <option value="price">Сначала недорогие</option>
                </select>
            </div>
            <div>
                <button wire:click="resetFilters" class="px-4 py-2 bg-black text-white text-center">Сбросить фильтры</button>
            </div>
        </div>
    </div>
    <div class="w-full py-5 col-span-4">
        Товары
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
        
        <?php echo e($products->links()); ?>

    </div>
</div>
<?php /**PATH D:\APP\Laravel Project\autoService-2025\resources\views/livewire/page-products.blade.php ENDPATH**/ ?>