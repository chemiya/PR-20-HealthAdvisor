<?php 
   

    include './../model/conexion.php';
    $id = $_GET['id'];


    
    $sentencia = $bd->prepare("DELETE FROM medicina where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: ./../vistas/miUsuario.php?mensaje=medicinaeliminada');
    } else {
        exit();
    }
    
?>