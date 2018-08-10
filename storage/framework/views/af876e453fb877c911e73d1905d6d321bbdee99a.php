<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="login-logo">
            <a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'SDTS')); ?> </a>
          </div>

        <div class="register-box-body">
            <p class="login-box-msg"><?php echo e(__('Register a new membership')); ?></p>

            <form action="<?php echo e(route('register')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                <div class="form-group has-feedback">
                    <input type="text" placeholder="Full name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                    <?php if($errors->has('name')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" placeholder="Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-offset-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Register')); ?></button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?php echo e(route('login')); ?>" class="text-center"><?php echo e(__('I already have a membership')); ?></a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
    </script>
</body>

</html>