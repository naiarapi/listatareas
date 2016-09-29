<?php

    //conectarse a la base de datos
    require_once("conexion_bbdd.php");
    
        // realizamos la consulta SQL
        $sql_consulta = ("SELECT * FROM lista_tareas");
        $resultado = $conexion->query($sql_consulta);
        
        while($linea = $resultado->fetch_assoc()){
            echo $linea["asignatura"] . " - " . $linea["fecha"] . " - " . $linea["descripcion"] . "</br>";
        }

?>