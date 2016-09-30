<?php

    //conectarse a la base de datos
    // require_once("conexion_bbdd.php");
     
      //modificar
    
   /* if ($_POST['radio']=='mod'){
    
    //sentencia sql para modificar
    
    $sql = mysqli_query($conexion, "UPDATE productos SET id='".$_POST['id']."', asignatura='".$_POST['asignatura']."', fecha=".$_POST['fecha']."', descripcion=".$_POST['descripcion']);
    
    $result = mysql_query($sql);
    
    if (! $result){die ('ERROR AL MODIFICAR EL REGISTRO'. mysql_error($conexion));}
    
    else{echo 'MODIFICACION EXITOSA';}
    
    }*/
    
        
    //conectarse a la base de datos
    require_once("conexion_bbdd.php");
    
    $modificar_id= $_POST["id"];
    $modificar_asignatura= $_POST["asignatura"];
    $modificar_fecha= $_POST["fecha"];
    $modificar_descripcion= $_POST["descripcion"];

    //if (isset($modificar_asignatura) && isset($omodificar_fecha) && isset($modificar_descripcion)) {
        mysqli_query($conexion, "UPDATE lista_tareas SET asignatura='" . $modificar_asignatura . "', fecha='" . $modificar_fecha . "', descripcion='" . $modificar_descripcion . "' WHERE id='" . $modificar_id . "'") 
            or die(mysqli_error($conexion));
            
        header("location: ../vista")
    //} else {
      //  echo "todo los campos son obligatorios";
    //}

?>