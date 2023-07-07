

<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-4 col-xl-12 order-0 mb-4">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Post /</span> Post</h4>

            <div class="card shadow">
                <div class="card-body">
                    <h1 class="mb-3"><?php echo e($post->title); ?></h1>

                    <a href="/dashboard/posts" class="btn btn-success">
                        <i class="bx bx-left-arrow-alt"></i> Back
                    </a>
                    <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="btn btn-warning">
                        <i class="bx bx-edit"></i> Edit
                    </a>
                    <form class="d-inline" action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post"
                        onclick="return confirm('Are you sure will delete this post?')">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger">Delete <i class="bx bx-trash"></i></button>
                    </form>

                    <?php if(!empty($post->image)): ?>
                    <div class=" text-center" style="max-height: 400px; overflow:hidden;">
                        <img src="<?php echo e(asset('storage/' .  $post->image)); ?>" alt="<?php echo e($post->category->name); ?>"
                            class="img-fluid mt-3">
                    </div>
                    <?php else: ?>
                    <div class=" text-center">
                        <img src="http://source.unsplash.com/1500x400?<?php echo e($post->category->name); ?>"
                            alt="<?php echo e($post->category->name); ?>" class="img-fluid mt-3">
                    </div>
                    <?php endif; ?>

                    <article class="my-3 fs-5 col-lg-12">
                        <?php echo $post->body; ?>

                    </article>

                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/dashboard/posts/show.blade.php ENDPATH**/ ?>