<?php
    require_once("../controlador/list_tareas.php");

?>

<form method= "post" action= "../controlador/insertar_tarea.php">
    <input type="text" name="asignatura" placeholder="asignatura"/>
    <input type="text" name="fecha" placeholder="fecha"/>
    <input type="text" name="descripcion" placeholder="descripcion"/>
    <input type="submit" value="Insertar"/>
</form>