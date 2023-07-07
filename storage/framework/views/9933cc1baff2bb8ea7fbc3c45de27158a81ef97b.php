

<?php $__env->startSection('containers'); ?>

<div class="mb-5 bg-dark"
    style="background-image:url(http://source.unsplash.com/2000x400?programming); background-repeat: no-repeat; height: 400px">
    <div class="py-5" style="background-color: rgba(0,0,0,0.7); background-blend-mode: color-burn; height: 400px">
        <div class="container py-5 text-center" style="margin-top: auto">
            <h1 class="display-5 fw-bold text-white">ABADDON</h1>
            <p class="col-md-12 fs-4 fw-bold text-white">We Will Build As Your Want.</p>
            <div class="container-sm">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="/posts" method="">
                            <?php if(request('category')): ?>
                            <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                            <?php endif; ?>
                            <?php if(request('author')): ?>
                            <input type="hidden" name="author" value="<?php echo e(request('author')); ?>">
                            <?php endif; ?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search..." name="search"
                                    value="<?php echo e(request('search')); ?>">
                                <button class="btn btn-danger" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-sm mt-4 mb-5">
    
    
    

    
    
    

    
    <?php if($posts->count()): ?>
    <div class="card mb-4 shadow border-0">
        <?php if(!empty($posts[0]->image)): ?>
        <div style="max-height: 400px; overflow: hidden;">
            <img src="<?php echo e(('storage/' .  $posts[0]->image)); ?>" class="card-img-top img-fluid"
                alt="<?php echo e($posts[0]->category->name); ?>">
        </div>
        <?php else: ?>
        <img src="http://source.unsplash.com/1200x400?<?php echo e($posts[0]->category->name); ?>" class="card-img-top"
            alt="<?php echo e($posts[0]->category->name); ?>">
        <?php endif; ?>
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a></h3>
            <p><small class="text-muted">
                    By. <a href="/posts?author=<?php echo e($posts[0]->author->username); ?>" class="text-decoration-none"><?php echo e($posts[0]->author->name); ?></a>
                    in <a href="/posts?category=<?php echo e($posts[0]->category->slug); ?>" class="text-decoration-none"><?php echo e($posts[0]->category->name); ?> </a> <?php echo e($posts[0]->created_at->diffForHumans()); ?>

                </small>
            </p>
            <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
            <a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>
    

    

    <div class="row">
        <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3 d-flex">
            <div class="card shadow border-0">
                <div class="position-absolute bg-dark text-white px-3 py-2 "
                    style="background-color: rgba(0, ,0 , 0, 0.7)">
                    <a href="/posts?category=<?php echo e($post->category->slug); ?>" class="text-white text-decoration-none"><?php echo e($post->category->name); ?></a>
                </div>

                <?php if(!empty($post->image)): ?>
                <img src="<?php echo e(('storage/' . $post->image)); ?>" alt="<?php echo e($post->category->name); ?>" class="img-fluid">
                <?php else: ?>
                <img src="http://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top"
                    alt="<?php echo e($post->category->name); ?>">
                <?php endif; ?>

                <div class="card-body">
                    <h5 class="card-title roboto-font"><?php echo e($post->title); ?></h5>
                    <p>
                        <small>
                            By.<a href="/posts?author=<?php echo e($post->author->username); ?> " class="text-decoration-none"><?php echo e($post->author->name); ?></a> <?php echo e($post->created_at->diffForHumans()); ?>

                        </small>
                    </p>
                    <p class="card-text"><?php echo e($post->excerpt); ?></p>

                </div>
                <div class="card-footer">
                    <a href="/posts/<?php echo e($post->slug); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    

    
    <?php else: ?>
    <p class="text-center fs-4">Oops Nothing Here...</p>
    <?php endif; ?>
    

    
    <div class="d-flex justify-content-center mt-3">
        <?php echo e($posts->links()); ?>

    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/posts.blade.php ENDPATH**/ ?>