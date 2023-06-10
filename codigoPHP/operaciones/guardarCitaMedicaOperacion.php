<?php
   

    include_once './../model/conexion.php';
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $lugar = $_POST["lugar"];
    $comentario = $_POST["comentario"];
    $estado="Pendiente";
  
    $idUsuario= $_COOKIE["idUsuarioCookie"];
    
    $sentencia = $bd->prepare("INSERT INTO citamedica(fecha,hora,lugar,comentario,estado,idUsuario) VALUES (?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$fecha,$hora,$lugar,$comentario,$estado,$idUsuario]);

    if ($resultado === TRUE) {
        header('Location: ./../vistas/miUsuario.php?mensaje=citaguardada');
    } else {
        
        exit();
    }
    
?>