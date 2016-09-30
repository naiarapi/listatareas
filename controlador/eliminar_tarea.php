<?php

    //conectarse a la base de datos
    require_once("conexion_bbdd.php");
    
    //sentencia sql para eliminar
    
    $sql = "DELETE FROM productos WHERE id=".$_POST['id']."";
    
    $result = mysql_query($sql);
    
    if (! $result){die ('ERROR AL ELIMINAR EL REGISTRO'. mysql_error($conexion));}
    
    else{
        echo "REGISTRO ELIMINADO CON EXITO";
    }


          

?>