<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header <?php echo e($item['class'] ?? ''); ?>">

    <?php echo e(is_string($item) ? $item : $item['header']); ?>


</li><?php /**PATH D:\Mystuff\Naum\Laravel\Misau-WebApp\resources\views/vendor/adminlte/partials/sidebar/menu-item-header.blade.php ENDPATH**/ ?>