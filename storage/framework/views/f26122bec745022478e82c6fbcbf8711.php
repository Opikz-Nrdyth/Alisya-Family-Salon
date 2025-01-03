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
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
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
            <div>
                <h1 class="title" data-aos="fade-up">About Alisya Family Salon</h1>
                <p class="text-content text-about" data-aos="fade-up" data-aos-delay="100">Alisya Family Salon adalah
                    salon rambut yang
                    menawarkan layanan
                    kecantikan
                    terbaik
                    dalam
                    penataan, pewarnaan,
                    dan pemotongan rambut modern dengan harga terjangkau</p>
            </div>

            <div>
                <h1 class="title" data-aos="fade-up" data-aos-delay="300">Alasan mengapa anda harus mencoba layanan
                    kami :</h1>

                <div class="flex point">
                    <div class="flex" data-aos="fade-up" data-aos-delay="500">
                        <img class="img-point" src="<?php echo e(asset('images/cerry.png')); ?>" alt="cerry">
                        <p class="text-content">Stylist kami meningkatkan
                            kecantikan alami Anda di
                            setiap kunjungan dan
                            menciptakan tampilan baru
                            untuk Anda.</p>
                    </div>

                    <div class="flex" data-aos="fade-up" data-aos-delay="700">
                        <img class="img-point" src="<?php echo e(asset('images/apple.png')); ?>" alt="cerry">
                        <p class="text-content">Kami menggunakan produk
                            premium dengan teknik
                            terbaru dalam suasana yang
                            elegan dan santai.</p>
                    </div>

                    <div class="flex" data-aos="fade-up" data-aos-delay="900">
                        <img class="img-point" src="<?php echo e(asset('images/strawberry.png')); ?>" alt="cerry">
                        <p class="text-content">Jadikan setiap kunjungan
                            sebagai momen istimewa
                            dengan hasil yang
                            memanjakan mata dan hati,
                            sesuai dengan gaya unik
                            Anda.</p>
                    </div>
                </div>
            </div>
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
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/about.blade.php ENDPATH**/ ?>