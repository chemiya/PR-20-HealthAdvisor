<?php
    include_once "./../model/conexion.php";
    $idUsuario= $_COOKIE["idUsuarioCookie"];
    $sentencia = $bd -> query("select * from citamedica where idUsuario=".$idUsuario.";");
    $citasmedicas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $vacio="0";
 
    //obtener las citas medicas y comprobar si tiene alguna
    if(count($citasmedicas)==0){
        $vacio=1;
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
    <script src="https://kit.fontawesome.com/f877ada887.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="exterior">
        <div class="container">
            <div class="row">
                <div class="col pt-5 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="titulo-citas text-center">Mis citas médicas</h1>

                    <a class=" botonAplicacion button-a mt-2 mb-4" href="guardarCitaMedica.php">Guardar cita médica</a>

                </div>




            </div>



            <div class="row ninguna">
                            <!--recorrer las citas medicas poniendo sus datos-->
                             <?php 
                            if($vacio==0){
                                foreach($citasmedicas as $dato){ 
                            ?>

                <div class="col-md-4 p-3">
                    <a class="carta" href="detalleCita.php?id=<?php echo $dato->id; ?>"><!--al hacer click-->
                        <div class="interior ">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div
                                    class="col-md-3 icono  d-flex flex-column justify-content-center align-items-center p-2">
                                    <i class="fa-solid fa-calendar-days icono-estilo"></i>
                                </div>
                                <div class="col-md-9 texto  d-flex flex-column justify-content-center pt-3">
                                    <p class="dato">
                                        <?php echo $dato->fecha; ?>
                                    </p>


                                </div>



                            </div>

                            <div class="row d-flex justify-content-center align-items-center">
                                <div
                                    class="col-md-3 icono  d-flex flex-column justify-content-center align-items-center p-2">
                                    <i class="fa-solid fa-clock icono-estilo"></i>
                                </div>
                                <div class="col-md-9 texto  d-flex flex-column justify-content-center pt-3">
                                    <p class="dato">
                                        <?php echo $dato->hora; ?>
                                    </p>


                                </div>



                            </div>


                            <div class="row d-flex justify-content-center align-items-center">
                                <div
                                    class="col-md-3 icono  d-flex flex-column justify-content-center align-items-center p-2">
                                    <i class="fa-solid fa-thumbtack icono-estilo"></i>
                                </div>
                                <div class="col-md-9 texto  d-flex flex-column justify-content-center pt-3">
                                    <p class="dato">
                                        <?php echo $dato->estado; ?>
                                    </p>


                                </div>



                            </div>


                            <div class="row d-flex justify-content-center align-items-center">
                                <div
                                    class="col-md-3 icono  d-flex flex-column justify-content-center align-items-center p-2">
                                    <i class="fa-solid fa-location-dot icono-estilo"></i>
                                </div>
                                <div class="col-md-9 texto  d-flex flex-column justify-content-center pt-3">
                                    <p class="dato">
                                        <?php echo $dato->lugar; ?>
                                    </p>


                                </div>



                            </div>


                            <div class="row">
                                <div class="col-12  d-flex flex-column justify-content-center align-items-center">
                                    <a class="botonAplicacion"
                                        href="guardarCitaMedica.php?id=<?php echo $dato->id; ?>">Editar</a>

                                        <a class="botonEliminar mt-2"
                                        href="./../operaciones/eliminarCitaMedicaOperacion.php?id=<?php echo $dato->id; ?>">Eliminar</a>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>





                            <!--si no tienen nungina-->
                            <?php 
                                }}else{
                            ?>

                <div class="col-12 ninguna">
                    <h1 class="text-center">No tienes ninguna cita médica.</h1>

                </div>


                            <?php

                                }

                                ?>



            </div>

        </div>

    </div>


    <style>
        .exterior {
            background-color: #00b7ff5e;
            padding-bottom: 500px;
        }

        .ninguna {
            background-color: white;
            border-radius: 25px;
            padding: 30px;
        }

        .botonEliminar {
                border-radius: 20px;
                background-color: red;
                color: white;
                padding: 10px;
                font-weight: bold;
                font-size: 25px;
                border: none;
                text-decoration: none;
            }

            .botonEliminar:hover {
              
                background-color:#cc0000;
            }


        .icono-estilo {
            color: white;
            font-size: 30px;
        }

        .interior {
            background-color: #00B6FF;
            padding: 10px;
            border-radius: 10px;
        }

        .interior:hover {
            transform: scale(1.05);
            border: 3px solid #1025A4;
        }

        .button-a {
            text-decoration: none;
        }

        .texto {
            font-size: 20px;
            color: white;
            font-weight: bold;
        }

        * {
            font-family: 'Arima', cursive;
        }

        .carta {
            text-decoration: none;
        }

        .botonAplicacion {
            border-radius: 20px;
            background-color: #1025A4;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;
            border: none;
            text-decoration: none;
        }

        .botonAplicacion:hover {
            transition: 1s;
            background-color: white;
            color: #1025A4;
        }

        .titulo-citas {
            font-weight: bold;
            font-size: 55px;
        }


        @media only screen and (max-width: 768px) {
            .dato {
                text-align: center !important;
            }


        }
    </style>

</body>

</html>