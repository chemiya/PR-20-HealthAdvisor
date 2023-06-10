<?php


include './../model/conexion.php';
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$lugar = $_POST['lugar'];
$comentario = $_POST['comentario'];
$estado = $_POST['estado'];
$id = $_POST['id'];

$sentencia = $bd->prepare("UPDATE citamedica SET fecha = ?, hora = ?, lugar = ?, comentario=?,estado =? where id = ?;");
$resultado = $sentencia->execute([$fecha, $hora, $lugar, $comentario,$estado,$id]);

if ($resultado === TRUE) {
    header('Location: ./../vistas/miUsuario.php?mensaje=citaeditada');
} else {
    
    exit();
}

?>