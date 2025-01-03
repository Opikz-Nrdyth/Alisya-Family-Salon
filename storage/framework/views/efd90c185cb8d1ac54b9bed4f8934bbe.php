<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimoni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="<?php echo e($loop->index * 100); ?>">
        <div class="content">
            <p class="kutip">❞</p>
            <p class="message"> <?php echo e($testimoni['message']); ?> </p>

            <p class="name">──── <?php echo e($testimoni['user']['name']); ?> ────</p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="dot-indicators" id="dotIndicators">

</div>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/components/testimoni-card.blade.php ENDPATH**/ ?>