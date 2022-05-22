<?php
include("conexion.php");

    if (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['end']) ){

        $title = $_POST['title'];
        $color = $_POST['color'];
        $start = $_POST['fecha_start'].' '.$_POST['start'];
        $end = $_POST['fecha_end'].' '.$_POST['end'];


        $sentencia = "INSERT INTO events(title, color,start, end) values ('$title', '$color','$start', '$end')";
        
        echo $sentencia;
        // $consulta = $conexion->prepare($sentencia);

        $consulta = $conexion->query($sentencia);
    }
 
	header('Location: '.getenv('HTTP_REFERER'));
?>