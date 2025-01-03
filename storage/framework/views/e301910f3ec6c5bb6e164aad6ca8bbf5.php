<nav class="navbar">
    <div class="navbar-container">
        <a href="#" class="navbar-brand"><?php echo e($brand); ?></a>
        <div class="container-links">
            <ul class="navbar-links">
                <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($link['url']); ?>"><?php echo e($link['label']); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <ul class="btn-action">
                <li>
                    <button onclick="showSearch()"><i class="fa-solid fa-magnifying-glass"></i></button>
                </li>
                <li class="menu-user">
                    <?php if(auth()->guard()->check()): ?>
                        <!-- Jika pengguna sudah login -->
                        <button class="user-initial" onclick="HandleMenuAdmin()">
                            <?php echo e(strtoupper(auth()->user()->name[0])); ?>

                        </button>

                        <div class="container-menu-user" style="display: none">
                            <?php if(auth()->check() && auth()->user()->role == 'Admin'): ?>
                                <a href="/admin"> <i class="fa-solid fa-user-tie"></i> Login Admin</a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('logout')); ?>">
                                <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i> Logout
                            </a>
                        </div>
                    <?php else: ?>
                        <!-- Jika pengguna belum login -->
                        <?php echo csrf_field(); ?>
                        <button onclick="window.location.href='/admin/login'"><i class="fa-regular fa-user"></i></button>
                    <?php endif; ?>
                </li>
            </ul>
            <div class="bars"><i class="fa-solid fa-bars"></i></div>
        </div>
    </div>
</nav>

<div class="search-container">
    <input type="text" placeholder="Search..." onblur="hideSearch()">
</div>
<?php /**PATH D:\Bank Project_24\Alisya_Family_Salon\resources\views/components/navbar.blade.php ENDPATH**/ ?>