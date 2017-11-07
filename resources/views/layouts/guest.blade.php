<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('pageTitle') </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('elements.admin.guest.stylesheet')
  @yield('stylesheet')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  @include('errors.validations')
  @include('errors.flash')
  <div class="login-logo">
    <a href=""><b>Admin</b> Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    @yield('content')

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('elements.admin.guest.javascript')
@yield('javascript')
</script>
</body>
</html>
