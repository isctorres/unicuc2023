<?php

    require_once '../assets/adodb5/adodb.inc.php';
    require_once '../modelos/Conexion.php';
    require_once '../modelos/mensajes_model.php';

    $opc = $_GET['opc'];
    $msjModel = new MensajesModel();
    $conexion = new Conexion();
    $con = $conexion->conectar();

    switch($opc){
        case 1: // insertar
            $msjModel->INSERTAR($con);
            break;
        case 2: // actualizar
            $msjModel->ACTUALIZAR($con);
            break;
        case 3: // eliminar
            $msjModel->ELIMINAR($con);
            break;
        case 4: // consultar
            $msjModel->GETMENSAJES($con);
    }
?>