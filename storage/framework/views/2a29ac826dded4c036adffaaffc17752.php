    <div class="container mx-auto mt-24 grid grid-cols-5 gap-5">

        <div class="w-full col-span-1 bg-[#232B33] p-6"> 

            <p class="text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold text-center">Фильтры</p>

            <div class="w-full md:mt-4 mt-2 mb-6">
                
                <div class="mb-2">
                    <div class="text-white lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Категории:</div>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <label wire:key="<?php echo e($category->id); ?>" for="<?php echo e($category->slug); ?>">
                                <input class="accent-sky-600" wire:model.live="selected_categories" type="checkbox" id="<?php echo e($category->slug); ?>" value="<?php echo e($category->id); ?>">
                                <span class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-light" ><?php echo e($category->name); ?></span>
                            </label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                
                <div class="mb-2">
                    <div class="text-white lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Мастера:</div>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <label for="<?php echo e($brand->slug); ?>">
                            <input class="accent" wire:model.live="selected_brands" type="checkbox" id="<?php echo e($brand->slug); ?>" value="<?php echo e($brand->id); ?>">
                            <span class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-light"><?php echo e($brand->name); ?></span>
                        </label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                
                <div class="mb-2">
                    <div class="text-white lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Популярный товар:</div>
                    <label for="is_featured">
                        <input class="accent" wire:model.live="featured" type="checkbox" id="is_featured" value="1">
                        <span class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-light">Да</span>
                    </label>
                </div>
                 
                 <div class="mb-2">
                    <div class="text-white lg:text-2xl md:text-xl sm:text-lg text-base font-medium">Скидка:</div>
                    <label for="is_sale">
                        <input class="accent" wire:model.live="sale" type="checkbox" id="is_sale" value="1">
                        <span class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-light">Да</span>
                    </label>
                </div>
                
                
                
                
        
            </div>

            <button wire:click="resetFilters" class="w-full px-4 py-2  bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-center">Сбросить фильтры</button>

        </div>

        <div class="Services cards-pop w-full col-span-4">
                
                <div class="text">
                    <h2 class="text-white   lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold">Наши услуги</h2>
                    <p class="text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-2">За нашими плечами сотни обслуженных автомобилей.</p>
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

                
                <?php echo e($products->links()); ?>

        </div>
    </div><?php /**PATH D:\APP\Laravel\autoService-2025-1.5\resources\views/livewire/page-products.blade.php ENDPATH**/ ?>