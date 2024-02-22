<?php

include("model/Model.php");


class loginController
{
    public function login()
    {
        $objeto = new MasterModel();
        if (empty($_POST["correo"]) and empty($_POST["user_password"])) {
            echo "LOS CAMPOS ESTAN VACIOS";
        } else {
            $correo = $_POST["correo"];
            $password = $_POST["user_password"];
            $sql = "SELECT * FROM users WHERE correo = '$correo' AND user_password = '$password'; ";
            $consulta = $objeto->consult($sql);

            if ($consulta->fetch_object()) {
                redirect('views/boss/indexBoss.php');
            } else {
                echo "El usuario no existe";
            }
        }
    }

    
}


#redirect(getUrl("TransformadoresMedidoresCtsyPts", "TransformadoresMedidoresCtsyPts", "viewInsertUser"));
