<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/iconoGers.png">
    <title>GERS CONTABLE</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <link href="assets/css/styleLogin.css" rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">INICIAR SESION</h3>
                            </div>
                            <div class="card-body">
                                <?php 
                                include("dbconecction/dbConection.php");
                                include("controller/controllerLogin.php");
                                ?>
                                <form method="post" role="form">
                                    <label for="correo">CORREO</label>
                                    <div class="mb-3">
                                        <input id="correo" name="correo" class="form-control" type="email" placeholder="correo:" aria-label="correo" aria-describedby="email-addon" autofocus>
                                    </div>
                                    <label for="user_password">CONTRASEÑA</label>
                                    <div class="mb-3">
                                        <input id="user_password" name="user_password" type="password" class="form-control" placeholder="contraseña:" aria-label="Password" aria-describedby="contraseña">
                                    </div>

                                    <div class="text-center">
                                        <button name="btnIngresar" type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Login" onclick="validateLoginForm()"> INGRESAR </button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6 background-image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="row mt-5">
        <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
                <script>
                    document.write(new Date().getFullYear())
                </script> GERS
            </p>
        </div>
    </div>



    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- <script>
        function validateLoginForm() {
            let correo = document.getElementById('correo').value;
            let user_password = document.getElementById('user_password').value;
            if (correo === '' || user_password === '') {
                event.preventDefault();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Campos vacios',
                    text: 'Ingresa un correo y una contraseña válidos!',
                });
                return;
            }
        }
    </script> -->
</body>

</html>