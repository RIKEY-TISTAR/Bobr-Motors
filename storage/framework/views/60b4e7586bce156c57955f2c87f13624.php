<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH D:\APP\Laravel\autoService-2025-1.5\vendor\filament\forms\src\/../resources/views/components/grid.blade.php ENDPATH**/ ?>