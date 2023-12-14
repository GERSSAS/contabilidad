<?php
$url_base = "http://" . $_SERVER['HTTP_HOST'] . "/contabilidad/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/iconoGers.png">
  <title>
    GERS CONTABLE
  </title>
  <!--     Fonts and icons     -->
  <link href="../../https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>


<body class="g-sidenav-show  bg-gray-100">
  <header class="header">

    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <div class="logo">
          <img src="/gers_contable/img/logo_gers_sin_fondo.png" height="40px">
        </div>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <ul class="navbar-nav ml-auto mr-md-3">
            <li class="nav-link"><a href="<?php echo $url_base; ?>views/public/indexPublic.php"> INICIO</a></li>
            <li class="nav-link"><a href="<?php echo $url_base; ?>views/public/anticipos.php">ANTICIPOS</a></li>
            <li class="nav-link"><a href="<?php echo $url_base; ?>views/public/relacionGastos.php">RELACION DE GASTOS</a></li>
            <li class="nav-link"><a href="<?php echo $url_base; ?>views/public/viaticos.php">VIATICOS</a></li>
            <li class="nav-link"><a href="<?php echo $url_base; ?>views/public/transportes.php">TRANSPORTE</a></li>
            <li class="nav-link"><a href="<?php echo $url_base; ?>views/public/otrosGastos.php">OTROS GASTOS</a></li>
          </ul>

          <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign In</span>
          </a>
          </div>
    </nav>
    



    <div class="container">