<?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="photo-item" data-aos="zoom-in" data-aos-delay="<?php echo e($loop->index * 100); ?>">
        <img src="<?php echo e($item['image']); ?>" alt="Portofolio Image">
        <p><?php echo e($item['description']); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/components/photo.blade.php ENDPATH**/ ?>