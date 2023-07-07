
<?php $__env->startSection('containers'); ?>

<div class="container-sm mt-4">
    <div class="card shadow mb-3 text-center">
        <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%; margin-bottom: 5%">
            <img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" class="img-thumbnail rounded-circle" height="20%" width="20%">
            <div class="card-body">
                <h3 class="card-title"><b><?php echo e($name); ?></b></h3>
                <p class="card-text"><?php echo e($email); ?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/about.blade.php ENDPATH**/ ?>