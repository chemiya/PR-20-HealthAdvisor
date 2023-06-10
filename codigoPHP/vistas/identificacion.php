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
                    <div class="icono-div d-flex flex-column justify-content-center align-items-center">
                        <img src="./../imagenes/icono.jpg" class="icono-aplicacion" />
                        <h1 class="titulo-principal mt-3">Inicia sesión</h1>
                    </div>


                    <form class="p-4" method="POST" action="./../operaciones/identificacionOperacion.php">
                        <div class="mb-3">
                            <label class="titulo-campo">Username: </label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="titulo-campo">Contraseña: </label>
                            <input type="password" class="form-control" name="password" required>
                        </div>


                        <!--mensaje incorrecto-->
                        <?php 
                        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'incorrecto'){
                     ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="text-center pt-3 alerta"> Usuario y contraseña incorrectos.</p>

                        </div>
                        <?php 
                        }
                        ?>

                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button class="botonAplicacion">Identificarse</button>
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
            padding-top: 100px;
            padding-bottom: 100px;
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

        .alerta {
            font-weight: bold;
            font-size: 20px;
        }

        .titulo-principal {
            font-weight: bold;
            color: white;
            font-size: 50px;
            text-align: center;
        }

        .titulo-campo {
            font-weight: bold;
            color: white;
            font-size: 30px;
        }

        * {
            font-family: 'Arima', cursive;
        }

        .icono-aplicacion {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
    </style>

</body>

</html>