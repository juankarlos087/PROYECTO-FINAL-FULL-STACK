<?php

    include_once("../../config/DBConect.php");

    if(isset($_POST['nombres']))        $nombres = $_POST['nombres']; 
    if(isset($_POST['id']))             $id = $_POST['id']; 
    if(isset($_POST['apellidos']))      $apellidos = $_POST['apellidos']; 
    if(isset($_POST['email']))          $email = $_POST['email']; 
    if(isset($_POST['telefono']))       $telefono = $_POST['telefono']; 
    if(isset($_POST['identificacion']))       $identificacion = $_POST['identificacion']; 
    if(isset($_POST['direccion']))       $direccion = $_POST['direccion']; 
    if(isset($_POST['genero']))       $genero = $_POST['genero']; 
    if(isset($_POST['rh']))           $rh = $_POST['rh']; 

    $conexion = new Database;  
    $result = $conexion->updateEstudiante($id,$nombres,$apellidos,$email,$telefono,$identificacion,$direccion,$genero,$rh);

    header("Location: estudiantes.php?mensaje=".$result);

?>