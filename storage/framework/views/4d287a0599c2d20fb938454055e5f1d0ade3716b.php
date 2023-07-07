

<?php $__env->startSection('containers'); ?>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Bergabunglah Dengan Kami!</h1>
            <p class="col-lg-10 fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque et vel eius cum
                ipsam vitae officia blanditiis laudantium facilis eaque, ipsum, quas culpa error perferendis illo
                possimus quibusdam sapiente reiciendis?</p>
        </div>
        <div class="card shadow p-4 p-md-5 border rounded-3 bg-body-tertiary col-md-10 mx-auto col-lg-5">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form action="/login" method="post">
                <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
                <?php endif; ?>

                <?php if(session()->has('loginError')): ?>
                <div class="alert alert-danger alert-dismissible fade show  mb-3" role="alert">
                    <?php echo e(session('loginError')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
                <?php endif; ?>

                <?php echo csrf_field(); ?>
                <div action="/login" method="post" class="form-floating">
                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                        id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                    <label for="email">Email address</label>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                </div>

                <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>
                <hr class="my-4">
                <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
            </form>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web\coba-laravel\resources\views/login/index.blade.php ENDPATH**/ ?>