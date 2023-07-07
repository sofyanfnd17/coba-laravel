

<?php $__env->startSection('containers'); ?>

<h1 class="mb-5"><?php echo e($title); ?></h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="" method="">
            <input type="text" class="form-control" placeholder="Search..." name="search"
                value="<?php echo e(request('search')); ?>">
            <button class="btn btn-danger" type="submit">Search</button>
        </form>
    </div>
</div>

<?php if($posts->count()): ?>
<div class="card mb-4">
    <img src="http://source.unsplash.com/1200x400?<?php echo e($posts[0]->category->name); ?>" class="card-img-top"
        alt="<?php echo e($posts[0]->category->name); ?>">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="<?php echo e($posts[0]->title); ?>" class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a></h3>

        <p><small class="text-muted">
                By. <a href="/authors/<?php echo e($posts[0]->author->username); ?>" class="text-decoration-none"><?php echo e($posts[0]->author->name); ?></a>
                in <a href="/categories/<?php echo e($posts[0]->category->slug); ?>" class="text-decoration-none"><?php echo e($posts[0]->category->name); ?> </a> <?php echo e($posts[0]->created_at->diffForHumans()); ?>

            </small>
        </p>

        <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>

        <a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-primary">Read more</a>

    </div>
</div>

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute bg-dark text-white px-3 py-2"
                    style="background-color: rgba(0, ,0 , 0, 0.7)"><a href="/categories/<?php echo e($post->category->slug); ?>"
                        class="text-white text-decoration-none"><?php echo e($post->category->name); ?></a>
                </div>
                <img src="http://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top"
                    alt="<?php echo e($post->category->name); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($post->title); ?></h5>
                    <p>
                        <small>
                            By.<a href="/authors/<?php echo e($post->author->username); ?> " class="text-decoration-none"><?php echo e($post->author->name); ?></a> <?php echo e($post->created_at->diffForHumans()); ?>

                        </small>
                    </p>
                    <p class="card-text"><?php echo e($post->excerpt); ?></p>
                    <a href="/posts/<?php echo e($post->slug); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php else: ?>
<p class="text-center fs-4">Oops Nothing Here...</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/category.blade.php ENDPATH**/ ?>