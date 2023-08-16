<?php

    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['jornada']))      $jornada = $_POST['jornada']; 
    if(isset($_POST['profesor']))      $profesor = $_POST['profesor']; 
    if(isset($_POST['creditos']))      $creditos = $_POST['creditos']; 

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$jornada,$profesor,$creditos);

    header("Location: materias.php?mensaje=".$result);

?>