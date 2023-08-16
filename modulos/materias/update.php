<?php

    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");

    if(isset($_POST['nombre']))     $nombre = $_POST['nombre']; 
    if(isset($_POST['jornada']))     $jornada = $_POST['jornada']; 
    if(isset($_POST['profesor']))     $profesor = $_POST['profesor']; 
    if(isset($_POST['creditos']))     $creditos = $_POST['creditos']; 
    if(isset($_POST['id']))         $id = $_POST['id']; 

    $conexion = new Database;  
    $result = $conexion->updateMateria($nombre,$jornada,$profesor,$creditos,$id);

    header("Location: materias.php?mensaje=".$result);

?>