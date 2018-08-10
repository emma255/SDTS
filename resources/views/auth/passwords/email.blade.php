@include('header')

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="login-logo">

            <a href="{{ url('/') }}">{{ config('app.name', 'SDTS') }} </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">

            <p class="login-box-msg">{{ __('Reset Password') }}</p>

            @if (session('status'))

            <div class="alert alert-success">

                {{ session('status') }}
            </div>

            @endif

            <form action="{{ route('password.email') }}" method="post">

                @csrf

                <div class="form-group has-feedback">

                    <input type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                    value="{{ old('email') }}" required autofocus> 
                    
                    @if ($errors->has('email'))

                    <span class="has-error">

              <strong>{{ $errors->first('email') }}</strong>

          </span> 
          @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                </div>

                <div class="col-xs-offset-5">
                    
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Send Password Reset Link') }}</button>
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