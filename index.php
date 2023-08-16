<?php 
include_once("./config/DBConect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
</head>

<body>
    <?php include_once('menu.php'); ?>  
    <center>
    <h1>Plataforma de Estudiantes y Materias</h1>

    <?php
    // Incluye el archivo de conexión y definiciones de funciones
    include_once("config/DBConect.php");

    $database = new Database();

?>

<h2>Algunos de nuestros estudiantes son:</h2>
<section class="section-flex">
    <?php
    $studentsResult = $database->DatosEstudiantes(3);

    if ($studentsResult->rowCount() > 0) {
        while ($studentRow = $studentsResult->fetch(PDO::FETCH_ASSOC)) {
            echo '<article class="character">';
            echo '<header><h4> Estudiante: ' . $studentRow["nombres"] . '</h4></header>';
            echo '<img src="./img/Morty.jpeg">';
            echo '<div class="info-character"></div>';
            echo '</article>';
        }
    } else {
        echo '<p>No hay estudiantes registrados.</p>';
    }
    ?>
</section>

<h2>Algunas de nuestras Materias son:</h2>
<section class="section-flex">
    <?php
    $subjectsResult = $database->DatosMaterias(3);

    if ($subjectsResult->rowCount() > 0) {
        while ($subjectRow = $subjectsResult->fetch(PDO::FETCH_ASSOC)) {
            echo '<article class="character">';
            echo '<header><h4> Materia: ' . $subjectRow["nombre"] . '</h4></header>';
            echo '<img src="./img/materias.jpg">';
            echo '<div class="info-character"></div>';
            echo '</article>';
        }
    } else {
        echo '<p>No hay materias registradas.</p>';
    }
    ?>
</section>

</center>
    <script src="./js/javascript.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
