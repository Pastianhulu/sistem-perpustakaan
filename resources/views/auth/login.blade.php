<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> RSIA PRAMALIESA </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/DataTables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asets/dist/css/skins/_all-skins.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b> RSIA </b> PRAMALIESA </a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Login Admin</p>

      <!-- FORM UNTUK LOGIN -->
      <form action="aksi_login_admin.php" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="txtusername" placeholder="Email / User Name">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="txtpassword" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" name="btnlogin" class="btn btn-primary btn-block btn-flat">LOGIN</button> <br><br>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>