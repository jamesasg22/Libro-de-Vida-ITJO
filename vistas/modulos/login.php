<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

		<title> <?php echo APP_TITLE; ?></title>
    <link rel="icon" type="image/png" href="<?php echo $url; ?>vistas/img/favicon/icono.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="<?php echo $url; ?>vistas/css/fonts/style.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo $url; ?>vistas/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $url; ?>vistas/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo $url; ?>vistas/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo $url; ?>vistas/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo $url; ?>vistas/css/style.css" rel="stylesheet">

</head>

<body class="login-page">

  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Espere...</p>
    </div>
  </div>


  <div class="login-box">
    <div class="logo">
      <a href="login"><?php echo APP_TITLE ?> <b>ITJO</b></a>
      <small><?php echo APP_COPY ?> </small>
    </div>
    <div class="card">
      <div class="body">
        <form id="sign_in" method="POST">
          <div class="msg">
            <h4>Iniciar Sesión</h4>
          </div>
          <hr>
          <p class="msg">Elija la seccional que coordina</p>
          <div class="input-group">
            <span class="input-group-addon">
            <i class="icon-account_circle" style="font-size:30px;"></i>
            </span>
            <div class="">
              <select name="ingSeccional" class="selectpicker" data-width="100%">
                  <option value="null">Seccional</option>
                  <option value="1">Primero</option>
                  <option value="2">Segundo</option>
                  <option value="3">Tercero</option>
                  <option value="4">Dirversificado</option>
                </select>
            </div>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon">
            <i class="icon-lock" style="font-size:30px;"></i>
            </span>
            <div class="form-line">
              <input type="password" class="form-control" name="ingPassword" placeholder="Password" required>
            </div>
          </div>
          <div class="row">

            <?php

              $login = new ControladorUsuarios();
              $login -> ctrIngresoUsuario();

              ?>

            <div class="col-xs-6 col-md-offset-3">
              <center>
                <button class="btn btn-block bg-pink waves-effect" type="submit">Ingresar</button>
              </center>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
  </div>

  <!-- Jquery Core Js -->
  <script src="<?php echo $url; ?>vistas/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="<?php echo $url; ?>vistas/plugins/bootstrap/js/bootstrap.js"></script>
  <script src="<?php echo $url; ?>vistas/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="<?php echo $url; ?>vistas/plugins/node-waves/waves.js"></script>

  <!-- Validation Plugin Js -->
  <script src="<?php echo $url; ?>vistas/plugins/jquery-validation/jquery.validate.js"></script>

  <!-- Custom Js -->
  <script src="<?php echo $url; ?>vistas/js/admin.js"></script>
  <script src="<?php echo $url; ?>vistas/js/pages/examples/sign-in.js"></script>
</body>
</html>
