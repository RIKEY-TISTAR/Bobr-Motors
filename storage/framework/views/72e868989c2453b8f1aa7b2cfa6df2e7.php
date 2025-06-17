<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <title><?php echo e($title ?? 'Интернет магазин'); ?></title>
        <?php echo $__env->yieldPushContent('meta'); ?>      
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- //////MAIN STYLE -->
        <link rel="stylesheet" href="<?php echo e(asset('/assets/css/main-style-main.css')); ?>">
        
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body class="bg-[#1C2025] text-white">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('partials.header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2706554541-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <main id="main">
            <?php echo e($slot); ?>

        </main>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('partials.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2706554541-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        
        
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <?php if (isset($component)) { $__componentOriginal8344cca362e924d63cb0780eb5ae3ae6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6)): ?>
<?php $attributes = $__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6; ?>
<?php unset($__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8344cca362e924d63cb0780eb5ae3ae6)): ?>
<?php $component = $__componentOriginal8344cca362e924d63cb0780eb5ae3ae6; ?>
<?php unset($__componentOriginal8344cca362e924d63cb0780eb5ae3ae6); ?>
<?php endif; ?>

        
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
         var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          autoplay: {
            delay: 4500,
            disableOnInteraction: false,
          },
        });
        </script>

        
        
    </body>
</html>
<?php /**PATH D:\APP\Laravel\autoService-2025-1.9-full\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>