<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="hold-transition login-page">
  <div class="login-box">

    <div class="login-logo">
      <a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'SDTS')); ?> </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo e(route('login')); ?>" method="post">

        <?php echo csrf_field(); ?>

        <div class="form-group has-feedback">
          <input type="email" placeholder="Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
            value="<?php echo e(old('email')); ?>" required autofocus> <?php if($errors->has('email')): ?>
          <span class="has-error">
              <strong><?php echo e($errors->first('email')); ?></strong>
          </span> <?php endif; ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password"
            required> <?php if($errors->has('password')): ?>
          <span class="has-error">
              <strong><?php echo e($errors->first('password')); ?></strong>
          </span> <?php endif; ?>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck col-md-offset-2">
              <label>
                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>

              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="<?php echo e(route('password.request')); ?>"><?php echo e(__('I forgot my password')); ?></a><br>
      <a href="<?php echo e(route('register')); ?>" class="text-center"><?php echo e(__('Register a new membership')); ?></a>

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