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
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/services.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/portofolio.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/testimonials.css')); ?>">
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
<?php $component = App\View\Components\Layout::resolve(['title' => 'Home Page'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!-- Hero Section -->
        <div class="flex justify-around items-center container">
            <div class="brand" data-aos="zoom-in-up">
                <h1 class="brand-name">Welcome to</h1>
                <h1 class="brand-name">Alisya Family Salon</h1>
                <p class="line-text">
                    ━━━━━
                    <img src="<?php echo e(asset('images/scissors.svg')); ?>" alt="scissors" width="90px">
                    ━━━━━
                </p>
            </div>
            <div class="img-thumbnail">
                <img src="<?php echo e(asset('images/thumbnail.png')); ?>" alt="thumbnail">
            </div>
        </div>

        <!-- About Section -->
        <div id="about">
            <?php if (isset($component)) { $__componentOriginalff6de83cb070587833d4f86022c57961 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff6de83cb070587833d4f86022c57961 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.about','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $attributes = $__attributesOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__attributesOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $component = $__componentOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__componentOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>
        </div>

        <!-- Services Section -->
        <div id="services">
            <h2 class="title">Layanan Kami</h2>
            <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['cards' => $cards] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $attributes = $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $component = $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
        </div>

        <!-- Portfolio Section -->
        <div id="porthofolio">
            <?php if (isset($component)) { $__componentOriginald6e8aab60428d554c0adbccead2b7f98 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6e8aab60428d554c0adbccead2b7f98 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.portofolio','data' => ['portofolio' => $portofolio]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portofolio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['portofolio' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($portofolio)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald6e8aab60428d554c0adbccead2b7f98)): ?>
<?php $attributes = $__attributesOriginald6e8aab60428d554c0adbccead2b7f98; ?>
<?php unset($__attributesOriginald6e8aab60428d554c0adbccead2b7f98); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald6e8aab60428d554c0adbccead2b7f98)): ?>
<?php $component = $__componentOriginald6e8aab60428d554c0adbccead2b7f98; ?>
<?php unset($__componentOriginald6e8aab60428d554c0adbccead2b7f98); ?>
<?php endif; ?>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonial-container" id="testimonials">
            <div class="testimonial-wrapper">
                <h2 class="title">Testimonial Pelanggan Kami yang Setia</h2>
                <div class="track-card-testimoni" id="sliderTrack">
                    <?php if (isset($component)) { $__componentOriginal4bcee657ecdcd3a7c7e46f4e19dae18b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bcee657ecdcd3a7c7e46f4e19dae18b = $attributes; } ?>
<?php $component = App\View\Components\TestimoniCard::resolve(['testimonials' => $testimonials] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('testimoni-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TestimoniCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bcee657ecdcd3a7c7e46f4e19dae18b)): ?>
<?php $attributes = $__attributesOriginal4bcee657ecdcd3a7c7e46f4e19dae18b; ?>
<?php unset($__attributesOriginal4bcee657ecdcd3a7c7e46f4e19dae18b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bcee657ecdcd3a7c7e46f4e19dae18b)): ?>
<?php $component = $__componentOriginal4bcee657ecdcd3a7c7e46f4e19dae18b; ?>
<?php unset($__componentOriginal4bcee657ecdcd3a7c7e46f4e19dae18b); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="dot-indicators" id="dotIndicators"></div>
        </div>


        <!-- Contact Section -->
        <h2 class="title">Hubungi Kami</h2>
        <div class="contact-container" id="contact">
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
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/welcome.blade.php ENDPATH**/ ?>