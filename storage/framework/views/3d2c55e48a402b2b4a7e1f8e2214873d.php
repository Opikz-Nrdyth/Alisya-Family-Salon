<div class="container">
    <?php if (isset($component)) { $__componentOriginalf0c0e2409bc21ef6120d25e5b6a8166c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf0c0e2409bc21ef6120d25e5b6a8166c = $attributes; } ?>
<?php $component = App\View\Components\MapsPoint::resolve(['query' => ''.e($query).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('maps-point'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MapsPoint::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf0c0e2409bc21ef6120d25e5b6a8166c)): ?>
<?php $attributes = $__attributesOriginalf0c0e2409bc21ef6120d25e5b6a8166c; ?>
<?php unset($__attributesOriginalf0c0e2409bc21ef6120d25e5b6a8166c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0c0e2409bc21ef6120d25e5b6a8166c)): ?>
<?php $component = $__componentOriginalf0c0e2409bc21ef6120d25e5b6a8166c; ?>
<?php unset($__componentOriginalf0c0e2409bc21ef6120d25e5b6a8166c); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal312c28e1a4cc8111de0d53a652167fdc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal312c28e1a4cc8111de0d53a652167fdc = $attributes; } ?>
<?php $component = App\View\Components\FormContactMe::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-contact-me'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormContactMe::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal312c28e1a4cc8111de0d53a652167fdc)): ?>
<?php $attributes = $__attributesOriginal312c28e1a4cc8111de0d53a652167fdc; ?>
<?php unset($__attributesOriginal312c28e1a4cc8111de0d53a652167fdc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal312c28e1a4cc8111de0d53a652167fdc)): ?>
<?php $component = $__componentOriginal312c28e1a4cc8111de0d53a652167fdc; ?>
<?php unset($__componentOriginal312c28e1a4cc8111de0d53a652167fdc); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/components/contact.blade.php ENDPATH**/ ?>