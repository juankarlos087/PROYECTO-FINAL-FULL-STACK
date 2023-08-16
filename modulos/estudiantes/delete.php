<?php

    include_once("../../config/DBConect.php");

    $id = $_GET['id'];

    $conexion = new Database;  
    $result = $conexion->EliminarEstudiante($id);

    header("Location: estudiantes.php?mensaje=".$result);

?>