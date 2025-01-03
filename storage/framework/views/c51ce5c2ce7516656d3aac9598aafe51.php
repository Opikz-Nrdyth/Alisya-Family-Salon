<div class="cards-container">
    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
            <div class="card-image">
                <img src="<?php echo e(config('app.url')); ?>/storage/<?php echo e($card['image']); ?>" alt="<?php echo e($card['titleOne']); ?>">

            </div>
            <div class="card-content">
                <div>
                    <div class="priceOne">
                        <h3><?php echo e($card['titleOne']); ?></h3>
                        <ul>
                            <?php $__currentLoopData = $card['pricesOne']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <p><?php echo e($item['name']); ?></p>
                                    <p><?php echo e($item['price']); ?></p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="priceTwo">
                        <h3><?php echo e($card['titleTwo']); ?></h3>
                        <ul>
                            <?php $__currentLoopData = $card['pricesTwo']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <p><?php echo e($item['name']); ?></p>
                                    <p><?php echo e($item['price']); ?></p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>

                <button class="book-now" onclick="handleBooking(1)">Book Now!</button>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/components/card.blade.php ENDPATH**/ ?>