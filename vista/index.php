<?php
    require_once("../controlador/list_tareas.php");
    

?>

<form method= "post" action= "../controlador/insertar_tarea.php">
    <!-- En la base de datos, el campo ID es "auto-incrementable", por lo que no hace falta que se ponga 
    <input type="integer" name="id" placeholder="id"/>
    -->
    <input type="text" name="asignatura" placeholder="asignatura"/>
    <input type="text" name="fecha" placeholder="fecha"/>
    <input type="text" name="descripcion" placeholder="descripcion"/>
    <input type="submit" value="Insertar"/>
    
</form>

    
