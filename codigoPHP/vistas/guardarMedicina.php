<?php
$id=0;
$accion="Guardar medicina";
  if(isset($_GET['id'])){//obtener el id si lo hay
    $id=$_GET['id'];
   

    include_once './../model/conexion.php';
    $accion="Editar medicina";

    $sentencia = $bd->prepare("select * from medicina where id = ?;");
    $sentencia->execute([$id]);
    $medicina= $sentencia->fetch(PDO::FETCH_OBJ);
}



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

                        <h1 class="titulo-principal mt-3">
                            <?php echo $accion; ?>
                        </h1>
                    </div>


                    <!--si hay id en el form cargas los datos-->
                    <?php
                if($id!==0){


                    ?>

                    <form class="p-4" method="POST" enctype="multipart/form-data"
                        action="./../operaciones/editarMedicinaOperacion.php">
                        <div class="mb-3">
                            <label class="titulo-campo">Nombre de la medicina: </label>
                            <input type="text" value="<?php echo $medicina->nombre; ?>" class="form-control"
                                name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label class="titulo-campo">Dosis: </label>
                            <input type="hidden" name="id" value="<?php echo $medicina->id; ?>">
                            <input type="text" value="<?php echo $medicina->dosis; ?>" class="form-control" name="dosis"
                                required>
                        </div>
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-start">
                            <label class="titulo-campo">Foto: </label>
                            <img src="./../operaciones/image/<?php echo $medicina->foto; ?>" class="imagen-medicina">
                            <input type="file" class="form-control mt-2" name="uploadfile">
                            <p class="alerta">Se mantiene la actual si no adjuntas otra</p>
                        </div>

                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button class="botonAplicacion" type="submit">
                                <?php echo $accion; ?>
                            </button>
                        </div>
                    </form>









                    <!--si no formulario para crear-->
                    <?php
                }else{

                    ?>

                    <form class="p-4" method="POST" enctype="multipart/form-data"
                        action="./../operaciones/guardarMedicinaOperacion.php">
                        <div class="mb-3">
                            <label class="titulo-campo">Nombre de la medicina: </label>
                            <input type="text" placeholder="Paracetamol, Ibuprofeno..." class="form-control"
                                name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label class="titulo-campo">Dosis: </label>
                            <input type="text" placeholder="1 cada 12 horas, 1 al levantarse..." class="form-control"
                                name="dosis" required>
                        </div>
                        <div class="mb-3">
                            <label class="titulo-campo">Foto: </label>
                            <input type="file" class="form-control" name="uploadfile" required>
                        </div>

                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button class="botonAplicacion" type="submit">
                                <?php echo $accion; ?>
                            </button>
                        </div>
                    </form>




                    <?php

                }
                    ?>

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

        .titulo-campo {
            font-weight: bold;
            color: white;
            font-size: 30px;
        }

        .titulo-principal {
            font-weight: bold;
            color: white;
            font-size: 50px;
            text-align: center;
        }

        .paddings {
            padding-top: 130px;
            padding-bottom: 130px;
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

        .botonAplicacion:hover {
            transition: 1s;
            background-color: white;
            color: #1025A4;
        }

        .imagen-medicina {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .alerta {
            font-size: 20px;
            color: white;
        }

        * {
            font-family: 'Arima', cursive;
        }
    </style>
</body>

</html>