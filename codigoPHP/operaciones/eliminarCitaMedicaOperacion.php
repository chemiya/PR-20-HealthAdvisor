<?php 
   

    include './../model/conexion.php';
    $id = $_GET['id'];


    
    $sentencia = $bd->prepare("DELETE FROM citamedica where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: ./../vistas/miUsuario.php?mensaje=citaeliminada');
    } else {
        exit();
    }
    
?>