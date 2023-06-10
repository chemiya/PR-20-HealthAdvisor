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


                <div class="col-md-6 formulario ">
                    <div class="icono-div d-flex flex-column justify-content-center align-items-center">
                        <img src="./../imagenes/icono.jpg" class="icono-aplicacion" />
                        <h1 class="titulo-principal mt-3">Regístrate ahora en HealthAdvisor</h1>
                    </div>

                    <div class="row">
                        <div class="col">


                        <!--mensaje registrado-->
                            <?php 
                        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
                            ?>
                           


                            <div class="alerta-arriba ps-2">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class=" text-center alerta-texto-arriba">Te has registrado con éxito.</p>
                                    <a href="index.php"><button class="botonAplicacion">Volver</button></a>

                                </div>
                            </div>
                            <?php 
                        }else{
                            ?>

                            <div class="row">
                                <div class="col">
                                    <form class="p-4" method="POST" action="./../operaciones/registroOperacion.php">
                                        <div class="mb-3">
                                            <label class="titulo-campo">Username: </label>
                                            <input type="text" class="form-control" name="username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="titulo-campo">Contraseña: </label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="titulo-campo">Email: </label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="titulo-campo">Fecha de nacimiento: </label>
                                            <input type="date" class="form-control" name="fechaNacimiento" required>
                                        </div>

                                        <div class="d-flex justify-content-center align-items-center mt-4">
                                            <button class="botonAplicacion">Registrarse</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>








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
            padding-top: 120px;
            padding-bottom: 120px;
        }

        .botonAplicacion {
            border-radius: 20px;
            background-color: #1025A4;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;
            border:none;
        }

        .botonAplicacion:hover {
            transition: 1s;
            background-color: white;
            color: #1025A4;
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

        * {
            font-family: 'Arima', cursive;
        }

        .alerta {
            font-weight: bold;
            font-size: 25px;
        }

        .alerta-arriba{
              background-color:green;
              margin-left:10px;
              padding:10px;
              border-radius:10px;
            }

            .alerta-texto-arriba{
              color:white;
              font-weight: bold;
              font-size: 25px;
              padding-top:12px;

            }



        .icono-aplicacion {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
    </style>
</body>

</html>