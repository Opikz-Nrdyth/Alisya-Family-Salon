<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e($title ?? 'Alisya Family Salon'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="antialiased">
    <?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'About'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/contact.blade.php ENDPATH**/ ?>