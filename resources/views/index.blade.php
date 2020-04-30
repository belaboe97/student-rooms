@extends('layouts.start')

</head>
<body>
<div class="full-screen-background"  style="text-align:center">
    <h5 class="header-startpage">Explore Berlin - Rent your Student Room</h5>
    <div class="login-box">
        <form method="post" action="{{ url('/login') }}">
            @csrf
            <h2>Log in to see all student rooms! 🎓</h2> 
            
              <div class="input-icons {{ $errors->has('email') ? ' has-error' : '' }}">
                <i class="fa fa-user icon"> 
                </i> 
                <input type="email" class="input-field"  name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="input-icons {{ $errors->has('password') ? ' has-error' : '' }}">
                <i class="fa fa-key icon"> 
                </i>
                <input type="password" class="input-field" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
 
           
            <button type="submit" class="btn btn-primary btn-lg btn-block">Login </button>
            
            <a href="{{ url('/password/reset') }}" class="justify-text-center col-12 mt-4">I forgot my password</a><br>
            <a href="{{ url('/register') }}" class="justify-text-center col-12 mt-1">Register a new membership</a>

               
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</div>
</body>
</html>
