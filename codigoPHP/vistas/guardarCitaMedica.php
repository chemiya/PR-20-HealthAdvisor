<?php
$id=0;
$accion="Guardar cita médica";
  if(isset($_GET['id'])){//obtener el id si lo hay
    $id=$_GET['id'];

    include_once './../model/conexion.php';
    $accion="Editar cita médica";

    $sentencia = $bd->prepare("select * from citamedica where id = ?;");
    $sentencia->execute([$id]);
    $citamedica= $sentencia->fetch(PDO::FETCH_OBJ);
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
        <div class="container p-5">
            <div class="row">
                <div class="col formulario">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center titulo-principal">
                                <?php echo $accion; ?>
                            </h1>
                        </div>
                    </div>

                    <!--si hay id cargas los datos en el form-->
                    <?php
                if($id!==0){


                ?>

                    <form class="formulario" method="POST" action="./../operaciones/editarCitaMedicaOperacion.php">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Fecha: </label>
                                    <input type="date" class="form-control" name="fecha"
                                        value="<?php echo $citamedica->fecha; ?>" required>
                                </div>
                            </div>

                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Hora: </label>
                                    <input type="time" class="form-control" name="hora"
                                        value="<?php echo $citamedica->hora; ?>" required>
                                </div>
                            </div>

                        </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Lugar: </label>
                                    <input type="text" class="form-control" name="lugar"
                                        value="<?php echo $citamedica->lugar; ?>" required>
                                </div>
                            </div>

                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Estado: </label>
                                    <select class="form-select" name="estado" required>
                                        <?php
                                    if($citamedica->estado=="Pendiente"){
                                        echo "<option selected>Pendiente</option>";
                                        echo "<option>Realizada</option>";
                                        echo "<option>Cancelada</option>";
                                    }else if($citamedica->estado=="Realizada"){
                                        echo "<option>Pendiente</option>";
                                        echo "<option selected>Realizada</option>";
                                        echo "<option>Cancelada</option>";
                                    }else{
                                        echo "<option>Pendiente</option>";
                                        echo "<option>Realizada</option>";
                                        echo "<option selected>Cancelada</option>";
                                    }

                                ?>

                                    </select>
                                </div>
                            </div>



                        </div>


                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-10 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Comentario: </label>
                                    <input type="hidden" name="id" value="<?php echo $citamedica->id; ?>">
                                    <textarea class="form-control" name="comentario" rows="3"
                                        required><?php echo $citamedica->comentario; ?></textarea>
                                </div>
                            </div>



                        </div>



                        <div class="row ">
                            <div class="col-md-12 p-5 d-flex justify-content-center align-items-center">
                                <button type="submit" class="botonAplicacion">
                                    <?php echo $accion; ?>
                                </button>
                            </div>
                        </div>
                    </form>


                    <!--si no hay id form para crear-->
                    <?php
                }else{

                ?>
                    <form class="formulario" method="POST" action="./../operaciones/guardarCitaMedicaOperacion.php">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Fecha: </label>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                            </div>

                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Hora: </label>
                                    <input type="time" class="form-control" name="hora" required>
                                </div>
                            </div>

                        </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Lugar: </label>
                                    <input type="text" class="form-control" name="lugar" required>
                                </div>
                            </div>

                            <div class="col-md-5 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Estado: </label>
                                    <input type="text" class="form-control" name="lugar" value="Pendiente" disabled>
                                </div>
                            </div>



                        </div>


                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-10 col-12 p-3">
                                <div class="interior">
                                    <label class="titulo-campo">Comentario: </label>
                                    <textarea class="form-control" name="comentario" rows="3" required></textarea>
                                </div>
                            </div>



                        </div>



                        <div class="row ">
                            <div class="col-md-12 p-5 d-flex justify-content-center align-items-center">
                                <button type="submit" class="botonAplicacion">
                                    <?php echo $accion; ?>
                                </button>
                            </div>
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

        .botonAplicacion {
            border-radius: 20px;
            background-color: #1025A4;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;
            border: none;
        }

        .titulo {
            font-weight: bold;
            color: white;
        }

        .titulo-campo {
            font-weight: bold;
            color: white;
            font-size: 30px;
        }

        * {
            font-family: 'Arima', cursive;
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