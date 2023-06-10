<?php


include './../model/conexion.php';
$password = $_POST['password'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$email = $_POST['email'];
$idUsuario= $_COOKIE["idUsuarioCookie"];


$sentencia = $bd->prepare("UPDATE usuario SET password=?,fechaNacimiento=?,email=? where idUsuario = ?;");
$resultado = $sentencia->execute([$password, $fechaNacimiento, $email, $idUsuario]);

if ($resultado === TRUE) {
    header('Location: ./../vistas/miUsuario.php?mensaje=usuarioeditado');
} else {
    
    exit();
}

?>