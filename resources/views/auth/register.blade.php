@extends('layouts.start')

</head>
<div class="full-screen-background"  style="text-align:center">
    <h5 class="header-startpage">Explore Berlin - Rent your Student Room</h5>
    <div class="register-box">


    <div class="register-box-body">
        <h2>Register for Fun! 🎓</h2> 

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="input-icons {{ $errors->has('name') ? ' has-error' : '' }}">
                <i class="fa fa-user icon"> 
                </i> 
                <input type="text" class="input-field" name="name" value="{{ old('name') }}" placeholder="Full Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div  class="input-icons {{ $errors->has('email') ? ' has-error' : '' }}">
                <i class="	fas fa-mail-bulk icon"></i>
                <input type="email" class="input-field" name="email" value="{{ old('email') }}" placeholder="Email">
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
                <input type="password" class="input-field" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-icons{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <i class="fa fa-key icon"> 
                </i>
                <input type="password" name="password_confirmation" class="input-field" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">Register </button>
                
            </div>
        </form>

        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

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
</body>
</html>
