<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="bg-navy">
    <div class="col-md-offset-4">
        <nav class="navbar navbar-brand">
            <div class="container">
                    <a class="navbar-brand bg-info text-bold" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'SDTS')); ?> </a>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>