<?php

    require_once("../controlador/conexion_bbdd.php");

    // Obtenemos el id
    $id = $_GET['id'];

    $sql = "SELECT * FROM lista_tareas WHERE id=$id";
    $resultado = mysqli_query($conexion, $sql) 
            or die(mysqli_error($conexion));
    
    if($resultado){
        while($linea = $resultado->fetch_assoc()){

?>

<form method="post" action="../controlador/actualizar_tarea.php">
    
    <input type="hidden" name="id" value="<?php echo $linea['id']; ?>" />
    <input type="text" name="asignatura" placeholder="asignatura" value="<?php echo $linea['asignatura']; ?>" />
    <input type="text" name="fecha" placeholder="fecha" value="<?php echo $linea['fecha']; ?>"/>
    <input type="text" name="descripcion" placeholder="descripcion" value="<?php echo $linea['descripcion']; ?>"/>
    <input type="submit" value="Actualizar"/>
</form>

<?php

        }
    } //while

?>