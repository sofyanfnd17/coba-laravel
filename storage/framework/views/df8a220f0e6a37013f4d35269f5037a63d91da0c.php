
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Post /</span> Post Lists</h4>
            <div class="card shadow">



                <div class="card-header">
                    <a href="/dashboard/posts/create" class="btn btn-primary"><i class="bx bx-plus"></i> New Post</a>

                    <?php if(session()->has('success')): ?>
                    <div class="alert alert-success mt-3" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5%">No</th>
                                    <th class="text-center">Picture</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><b><?php echo e($loop->iteration); ?></b></td>
                                    <td>
                                        <ul
                                            class="list-unstyled users-list m-0 avatar-group d-flex justify-content-center">

                                            <?php if($post->image): ?>
                                            <div style="max-height: 400px; overflow:hidden;">
                                                <img src="<?php echo e(asset('storage/' . $post->image)); ?>"
                                                    class="rounded avatar avatar-xl pull-up img-fluid" />
                                            </div>
                                            <?php else: ?>
                                            <img src="http://source.unsplash.com/400x400?<?php echo e($post->category->name); ?>"
                                                class="rounded avatar avatar-xl pull-up" />
                                            <?php endif; ?>

                                        </ul>
                                    </td>
                                    <td><?php echo e($post->title); ?></td>
                                    <td><?php echo e($post->category->name); ?></td>
                                    <td>
                                        <a href="/dashboard/posts/<?php echo e($post->slug); ?>" class="badge bg-info">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="badge bg-warning">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <form class="d-inline" action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post"
                                            onclick="return confirm('Are you sure will delete this post?')">
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="badge bg-danger border-0"> <i
                                                    class="bx bx-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/dashboard/posts/index.blade.php ENDPATH**/ ?>