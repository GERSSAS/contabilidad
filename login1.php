<?php
include_once 'lib/helpers.php';
include_once 'model/config.php';

$error = '';

if (isset($_POST['btnIngresar'])) {
    $correo = $_POST['correo'] ?? '';
    $user_password = $_POST['user_password'] ?? '';

    $conexion = new Connection();
    $pdo = $conexion->getConnect();

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE correo = :correo LIMIT 1");
        $stmt->execute([':correo' => $correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            if ($user_password === $usuario['user_password']) {
                $rol = $usuario['id_role']; 

                if ($rol == 1) {
                    header('Location: views/admin/indexAdmin.php');
                    exit();
                } elseif ($rol == 2) {
                    header('Location: views/boss/indexBoss.php');
                    exit();
                } elseif ($rol == 3) {
                    header('Location: views/public/indexPublic.php');
                    exit();
                } elseif ($rol == 4) {
                    header('Location: views/admin-ti/indexAdmin-ti.php');
                    exit();
                } else {
                    header('Location: views/general/welcomePage.php');
                    exit();
                }
            } else {
                $error = "Credenciales inválidas.";
            }
        } else {
            $error = "Credenciales inválidas.";
        }
    } catch (PDOException $e) {
        $error = "Error de conexión a la base de datos: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/iconoGers.png">
    <title>GERS CONTABLE</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <link href="assets/css/styleLogin.css" rel="stylesheet" />
</head>
<body>
<div class="login-container">
    <h1>GERS SAS</h1>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" class="formulario_login">
        <label for="correo">CORREO:</label>
        <input id="correo" name="correo" type="email" required class="form-control" placeholder="Correo:" autofocus><br>

        <label for="user_password">CONTRASEÑA:</label>
        <input id="user_password" name="user_password" type="password" required class="form-control" placeholder="Contraseña:"><br>
        
        <button name="btnIngresar" type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">INGRESAR</button>
    </form>
</div>
</body>
</html>
