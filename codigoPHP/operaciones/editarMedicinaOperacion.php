<?php


include './../model/conexion.php';
$nombre = $_POST['nombre'];
$dosis = $_POST['dosis'];

$id = $_POST['id'];


    $filename = $_FILES["uploadfile"]["name"];
   
    
    if($filename==NULL){
        $sentencia = $bd->prepare("UPDATE medicina SET nombre = ?, dosis = ? where id = ?;");
        $resultado = $sentencia->execute([$nombre, $dosis,  $id]);
        

        
        if ($resultado === TRUE) {
            header('Location: ./../vistas/miUsuario.php?mensaje=medicinaeditada');
        } else {
            
            exit();
        }
    }else{
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./image/" . $filename;

        $sentencia = $bd->prepare("UPDATE medicina SET nombre = ?, dosis = ?, foto = ? where id = ?;");
        $resultado = $sentencia->execute([$nombre, $dosis, $filename, $id]);
        

        move_uploaded_file($tempname, $folder);
        if ($resultado === TRUE) {
            header('Location: ./../vistas/miUsuario.php?mensaje=medicinaeditada');
        } else {
            
            exit();
        }
    }
    


/*
$sentencia = $bd->prepare("UPDATE citamedica SET fecha = ?, hora = ?, lugar = ?, comentario=?,estado =? where id = ?;");
$resultado = $sentencia->execute([$fecha, $hora, $lugar, $comentario,$estado,$id]);

if ($resultado === TRUE) {
    header('Location: ./../vistas/miUsuario.php');
} else {
    
    exit();
}*/

?>