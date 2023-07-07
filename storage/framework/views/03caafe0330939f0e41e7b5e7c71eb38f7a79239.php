<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abaddon | <?php echo e($title); ?></title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    
    <link rel="stylesheet" href="/css/style.css">

    
    
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .roboto-font {
            font-family: roboto;
        }
    </style>
</head>



    <body>
        
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        
            <?php echo $__env->yieldContent('containers'); ?>
            
        

        
        <footer class="bg-dark text-white text-center text-lg-start " style=" margin-top: auto;">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Footer Content</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                            voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ms-auto">
                        <h5 class="text-uppercase mb-0">Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="/">Abaddon</a>
            </div>
        </footer>
        
    </body>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</html><?php /**PATH D:\Web\coba-laravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>