<?php
   

    include_once './../model/conexion.php';
    /*$fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $lugar = $_POST["lugar"];
    $comentario = $_POST["comentario"];
    $estado="Pendiente";
  
    $idUsuario= $_COOKIE["idUsuarioCookie"];*/

    $nombre = $_POST["nombre"];
    $dosis = $_POST["dosis"];

    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
    $idUsuario= $_COOKIE["idUsuarioCookie"];

    //echo $folder;
    
//echo "encontrado:".$nombre." con dosis: ".$dosis;



    $sentencia = $bd->prepare("INSERT INTO medicina(nombre,dosis,foto,idUsuario) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre, $dosis,$filename,$idUsuario]);
    move_uploaded_file($tempname, $folder);

    if ($resultado === TRUE) {
        header('Location: ./../vistas/miUsuario.php?mensaje=medicinaguardada');
    } else {
        
        exit();
    }
    
?>