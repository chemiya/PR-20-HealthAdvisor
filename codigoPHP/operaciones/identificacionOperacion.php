<?php
    //print_r($_POST);
    

    include_once './../model/conexion.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    $sentencia = $bd->prepare("select * from usuario where username= ? and password=?;");
    $sentencia->execute([$username,$password]);
    $usuario= $sentencia->fetch(PDO::FETCH_OBJ);

    if ($usuario) {
        setcookie("username", $usuario->username, time() + (86400 * 30), "/");
        setcookie("idUsuarioCookie", $usuario->idUsuario, time() + (86400 * 30), "/");
        header('Location: ./../vistas/miUsuario.php');

    } else {
        header('Location: ./../vistas/identificacion.php?mensaje=incorrecto');
        
    }
    
?>