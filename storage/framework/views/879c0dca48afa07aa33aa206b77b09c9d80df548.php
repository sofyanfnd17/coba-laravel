<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">ABADDON</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'home') ? 'active' : ' '); ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php echo e(($active === 'about') ? 'active' : ' '); ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'posts') ? 'active' : ' '); ?>" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'categories') ? 'active' : ' '); ?>"
                        href="/categories">Categories</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\Web\coba-laravel-new\resources\views/partials/navbar.blade.php ENDPATH**/ ?>