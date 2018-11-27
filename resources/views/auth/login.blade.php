<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INCOS - EL ALTO | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminLTE/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/adminLTE/css/skins/skin-green.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/adminLTE/plugins/iCheck/square/green.css"> 
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>INCOS - EL ALTO</b></a>
        <img src="/images/incos.png" width="20%" height="20%" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Iniciar Sesion</p>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                <input id="usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" placeholder="Usuario" required autofocus>
                    @if ($errors->has('usuario'))
                        <span class="help-block">
                            <strong>{{ $errors->first('usuario') }}</strong>
                        </span>
                    @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            {{-- <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xs-6">
                    {{-- <button type="submit" class="btn btn-primary btn-block btn-flat">Cancelar</button> --}}
                    <a class="btn btn-primary bg-green-gradient btn-block btn-flat" href="/">
                        CANCELAR
                    </a>
                </div>
                <!-- /.col -->
                <div class="col-xs-6">
                  <button type="submit" class="btn btn-primary bg-green-gradient btn-block btn-flat">INGRESAR</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminLTE/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="/adminLTE/plugins/iCheck/icheck.min.js"></script>
</body>
</html>