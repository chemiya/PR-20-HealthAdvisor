<?php

//busco el usuario de la cookie
    $idUsuario= $_COOKIE["idUsuarioCookie"];
 

    include_once './../model/conexion.php';
    

    $sentencia = $bd->prepare("select * from usuario where idUsuario = ?;");
    $sentencia->execute([$idUsuario]);
    $usuario= $sentencia->fetch(PDO::FETCH_OBJ);




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="exterior">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center  paddings">


                <div class="col-md-5 formulario ">
                    <div class=" d-flex flex-column justify-content-center align-items-center">

                        <h1 class="titulo-principal mt-3">Editar usuario</h1>
                    </div>


                    <!--en el formulario pongo los valores del usuario-->
                    <form class="p-4" method="POST" action="./../operaciones/editarUsuarioOperacion.php">

                        <div class="mb-3">
                            <label class="titulo-campo">Contraseña: </label>
                            <input type="password" value="<?php echo $usuario->password; ?>" class="form-control"
                                name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="titulo-campo">Email: </label>
                            <input type="email" value="<?php echo $usuario->email; ?>" class="form-control" name="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="titulo-campo">Fecha de nacimiento: </label>
                            <input type="date" value="<?php echo $usuario->fechaNacimiento; ?>" class="form-control"
                                name="fechaNacimiento" required>
                        </div>

                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button class="botonAplicacion">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>


    <style>
        .exterior {
            background-color: #00b7ff5e;
        }

        .formulario {
            background-color: #00B6FF;
            border-radius: 50px;
            padding: 30px;
        }

        .paddings {
            padding-top: 170px;
            padding-bottom: 170px;
        }

        .botonAplicacion {
            border-radius: 20px;
            background-color: #1025A4;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;
            border: none;
        }

        * {
            font-family: 'Arima', cursive;
        }

        .titulo-campo {
            font-weight: bold;
            color: white;
            font-size: 30px;
        }

        .titulo-principal {
            font-weight: bold;
            font-size: 55px;
            color: white;
        }

        .botonAplicacion:hover {
            transition: 1s;
            background-color: white;
            color: #1025A4;
        }
    </style>
</body>

</html>