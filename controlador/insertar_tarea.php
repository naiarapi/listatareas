<?php
    
    //conectarse a la base de datos
    require_once("conexion_bbdd.php");
    
    $obtener_asignatura= $_POST["asignatura"];
    $obtener_fecha= $_POST["fecha"];
    $obtener_descripcion= $_POST["descripcion"];

    if ($obtener_asignatura != "" && $obtener_fecha != "" && $obtener_descripcion != "") {
        mysqli_query($conexion, "INSERT INTO lista_tareas (asignatura, fecha, descripcion) VALUES ('$obtener_asignatura', '$obtener_fecha','$obtener_descripcion')") 
            or die(mysqli_error($conexion));
            
    } else {
        echo "todo los campos son obligatorios";
    }



?>