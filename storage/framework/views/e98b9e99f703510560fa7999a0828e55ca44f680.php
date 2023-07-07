

<?php $__env->startSection('containers'); ?>
<div class="container-sm mt-4">
    <h1 class="mb-5">Post Category</h1>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mx-auto mb-3 mb-3">
                <a href="/posts?category=<?php echo e($category->slug); ?>">
                    <div class="card shadow bg-dark text-white border-0">
                        <img src="http://source.unsplash.com/500x500?<?php echo e($category->name); ?>" class="card-img"
                            alt="<?php echo e($category->name); ?>">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgba(0,0,0,0.7)">
                                <?php echo e($category->name); ?>

                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/categories.blade.php ENDPATH**/ ?>