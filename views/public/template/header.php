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

  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="../../assets/css/newCss.css" rel="stylesheet" />
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
 <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>


<script>
        $(document).ready(function() {
            
            var currentUrl = window.location.href;

           
            $('.navbar-nav a').each(function() {
                var linkUrl = $(this).attr('href');

                
                if (currentUrl.includes(linkUrl)) {
                    $(this).parent().addClass('active'); 
                }
            });
        });
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../../assets/img/logo1.png" height="50px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base; ?>views/public/indexPublic.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base; ?>views/public/anticipos.php">ANTICIPOS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        LEGALIZACIÓN DE GASTOS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item"
                                href="<?php echo $url_base; ?>views/public/relacionGastos.php">RELACIÓN DE GASTOS</a></li>
                        <li><a class="dropdown-item"
                                href="<?php echo $url_base; ?>views/public/viaticos.php">VIATÍCOS</a></li>
                        <li><a class="dropdown-item"
                                href="<?php echo $url_base; ?>views/public/transportes.php">TRANSPORTE</a></li>
                        <li><a class="dropdown-item"
                                href="<?php echo $url_base; ?>views/public/otrosGastos.php">OTROS GASTOS</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base; ?>views/public/tarjetas.php">TARJETAS</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">CERRAR SESION</span>
                </a>
            </div>
        </div>
    </div>
</nav>

</body>

<div class="container">