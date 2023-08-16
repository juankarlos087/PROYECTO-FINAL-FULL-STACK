<?php

    include_once("../../config/DBConect.php");

    $conexion = new Database;  
    $result = $conexion->DatosEstudiantes();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Listado de Estudiantes
                        <a href="../../index.php" class="btn btn-info">Volver al Inicio</a>
                        <a href="addEstudiante.php" class="btn btn-warning">Crear Estudiante</a>
                    </div>
                    <div class="card-body">
                        <?php 
                            $mensajes = array(
                                0=>"",
                                1=>"Se elimino correctamente el estudiante",
                                2=>"Se creo correctamente el estudiante",
                                3=>"Se actualizo correctamente el estudiante",
                                4=>"Se crearon correctamente las notas"
                            );

                            $mensaje_id = isset($_GET['mensaje']) ? (int)$_GET['mensaje'] : 0;
                            $mensaje='';

                            if ($mensaje_id != '') {
                                $mensaje = $mensajes[$mensaje_id];
                                $clase = 'alert-success';
                            }

                            if ($mensaje!='') echo "<div class='alert $clase' role='alert'> $mensaje </div>";
                            
                        ?> 


                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Identificacion</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Rh</th>
                                <th scope="col">Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                    foreach($result as $row) {
                                        echo "<tr>
                                                <td>".$row['id']."</td>
                                                <td>".$row['identificacion']."</td>
                                                <td>".$row['nombres']." ".$row['apellidos']."</td>
                                                <td>".$row['email']."</td>
                                                <td>".$row['telefono']."</td>
                                                <td>".$row['direccion']."</td>
                                                <td>".$row['genero']."</td>
                                                <td>".$row['rh']."</td>
                                                <td>

                                                    <a href='editEstudiante.php?id=".$row['id']."' class='btn btn-primary'>Modificar</a>
                                                    <a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Eliminar</a>
                                                </td>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <div>

    <script src="../../js/javascript.js" ></script>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>