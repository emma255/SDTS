<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="login-logo">

            <a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'SDTS')); ?> </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">

            <p class="login-box-msg"><?php echo e(__('Reset Password')); ?></p>

            <?php if(session('status')): ?>

            <div class="alert alert-success">

                <?php echo e(session('status')); ?>

            </div>

            <?php endif; ?>

            <form action="<?php echo e(route('password.email')); ?>" method="post">

                <?php echo csrf_field(); ?>

                <div class="form-group has-feedback">

                    <input type="email" placeholder="Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
                    value="<?php echo e(old('email')); ?>" required autofocus> 
                    
                    <?php if($errors->has('email')): ?>

                    <span class="has-error">

              <strong><?php echo e($errors->first('email')); ?></strong>

          </span> 
          <?php endif; ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                </div>

                <div class="col-xs-offset-5">
                    
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Send Password Reset Link')); ?></button>
                </div>
                <!-- /.col -->
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

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