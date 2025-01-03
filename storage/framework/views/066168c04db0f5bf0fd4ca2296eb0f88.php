<div class="title-portofolio">
    <h2 class="title">Porthofolio</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati aliquid impedit consequuntur quo
        explicabo provident ipsa, quaerat, esse modi eligendi nobis quas sit dolores qui veniam enim minima!
        Quidem, soluta.</p>

</div>
<div class="photos">
    <?php if (isset($component)) { $__componentOriginala3d925ec609fc36876fbfacb2c10cadd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3d925ec609fc36876fbfacb2c10cadd = $attributes; } ?>
<?php $component = App\View\Components\Photo::resolve(['portofolio' => $portofolio] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('photo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Photo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala3d925ec609fc36876fbfacb2c10cadd)): ?>
<?php $attributes = $__attributesOriginala3d925ec609fc36876fbfacb2c10cadd; ?>
<?php unset($__attributesOriginala3d925ec609fc36876fbfacb2c10cadd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3d925ec609fc36876fbfacb2c10cadd)): ?>
<?php $component = $__componentOriginala3d925ec609fc36876fbfacb2c10cadd; ?>
<?php unset($__componentOriginala3d925ec609fc36876fbfacb2c10cadd); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/components/portofolio.blade.php ENDPATH**/ ?>