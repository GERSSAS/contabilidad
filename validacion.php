<?php
include_once './lib/conf/conf.php';

$conn = new mysqli($host, $user, $pass, $database);

if($conn->connect_error){
    die("conexion fallida " . $conn->connect_error);
}
    session_start();
    $correo = $_POST["correo"];
    $user_password = $_POST["user_password"];

    $sql = "SELECT * FROM users WHERE correo = '$correo' AND user_password = '$user_password'";
    $resultado = $conn->query($sql);

    $row = $resultado->fetch_assoc();
        if($row['correo'] == $correo && $row['user_password'] == $user_password){
            $_SESSION['correo'] = $correo;
            header("Location: indexAdmin.php");
        }else{
            echo "<script>alert('Usuario no registrado!');</script>";
            header("Location: login.php");
        }               
?>