
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Post /</span> <?php echo e($title); ?></h4>

            <div class="card shadow">
                <div class="card-header">
                    <a href="/dashboard/categories/create" class="btn btn-primary"><i class="bx bx-plus"></i> New
                        Category</a>

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
                                    <th width="80%">Category Name</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><b><?php echo e($loop->iteration); ?></b></td>
                                    <td><?php echo e($category->name); ?></td>
                                    <td>
                                        <a href="/dashboard/categories/<?php echo e($category->slug); ?>" class="badge bg-info">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="/dashboard/categories/<?php echo e($category->slug); ?>/edit"
                                            class="badge bg-warning">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <form class="d-inline" action="/dashboard/categories/<?php echo e($category->slug); ?>"
                                            method="post"
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/dashboard/categories/index.blade.php ENDPATH**/ ?>