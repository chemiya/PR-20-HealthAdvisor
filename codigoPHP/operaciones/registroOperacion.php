<?php
   

    include_once './../model/conexion.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    
    $sentencia = $bd->prepare("INSERT INTO usuario(username,password,email,fechaNacimiento) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$username,$password,$email,$fechaNacimiento]);

    if ($resultado === TRUE) {
        header('Location: ./../vistas/registro.php?mensaje=registrado');
    } else {
        
        exit();
    }
    
?>