<?php

include("model/Model.php");

class anticiposController
{
    public function CrearAnticipo()
    {
        $objeto = new MasterModel();

        $periodo = $_POST["periodo"];
        $ciudad = $_POST["ciudad"];
        $moneda = $_POST["moneda"];
        $fecha_solicitud = $_POST["fecha_solicitud"];
        $fecha_entrega = $_POST["fecha_entrega"];
        $efectivo = $_POST["efectivo"];
        $consignar = $_POST["consignar"];
        $id_jefe = $_POST["jefe"];
        $valor_total = $_POST["total_anticipo"];
        $currentDate = date("Y-m-d");
        $id_anticipo = uniqid();

        $sql = "INSERT INTO registro_anticipos (id_anticipo,  user_id, id_jefe, periodo, ubicacion, moneda, fecha_solicitud, fecha_entrega, efectivo, consignar, valor_total, estado_anticipo, fecha_creacion_anticipo)
        VALUES ('$id_anticipo', '2', '$id_jefe', '$periodo', '$ciudad', '$moneda', '$fecha_solicitud', '$fecha_entrega', '$efectivo', '$consignar', '$valor_total', 'Desaprobado', '$currentDate')";
       
        #echo $nombreUsuario;
        $consulta = $objeto->insert($sql);

        if ($consulta == 1){
            echo $consulta;
        } else {
            echo "error ". $consulta;
        }

    }

    public function verAnticipo(){

        $objeto = new MasterModel();

        $id = $_GET["id"];
        echo $id;

        $sql = "SELECT * FROM registro_anticipos WHERE id_jefe='" . $id . "'";
        $consulta = $objeto->insert($sql);


		include_once 'views/boss/anticipos.php';
    }

}


#redirect(getUrl("TransformadoresMedidoresCtsyPts", "TransformadoresMedidoresCtsyPts", "viewInsertUser"));
