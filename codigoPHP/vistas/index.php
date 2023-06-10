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

    <nav class="navbar navbar-expand-lg bg-azul">
        <div class="container-fluid">
            <div>
                <img src="./../imagenes/icono.jpg" class="icono-aplicacion" />
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center">

                    <li class="nav-item p-3">
                        <a class="nav-link botonAplicacion" href="identificacion.php">Iniciar sesión</a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link botonAplicacion" href="registro.php">Registro</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>








    <!--banner-->
    <div class="exterior">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                    <h1 class="titulo text-end">Cuida tu salud con HealthAdvisor</h1>


                </div>

                <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                    <img src="./../imagenes/icono.jpg" class="icono-grande" />

                </div>


            </div>


        </div>
    </div>




    <!--seccion-->
    <div class="exterior-seccion pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center titulo-seccion">Gestiona tus medicinas y citas médicas
                        con HealthAdvisor.</h1>

                </div>
            </div>


            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5 col-12 p-5">
                    <div class="interior d-flex flex-column justify-content-center align-items-center p-3">
                        <i class="fa-solid fa-pills icono-estilo"></i>
                        <h1 class="text-center mt-3 titulo-carta">Guarda tus <br> medicinas</h1>
                        <p class="texto">Con HealthAdvisor puedes
                            gestionar las medicinas
                            que tomas.</p>
                    </div>

                </div>

                <div class="col-md-5 col-12 p-5">
                    <div class="interior d-flex flex-column justify-content-center align-items-center p-3">
                        <i class="fa-solid fa-calendar-check icono-estilo"></i>
                        <h1 class="text-center mt-3 titulo-carta">Guarda tus <br> citas médicas</h1>
                        <p class="texto">Con HealthAdvisor puedes
                            gestionar tus citas
                            con el médico.</p>
                    </div>

                </div>

            </div>


        </div>
    </div>




    <!--seccion-->
    <div class="exterior-seccion">
        <div class="container pb-5">



            <div class="row ">
                <div class="col-md-12 p-3">
                    <div class="row interior-fila p-3">
                        <div class="col-md-3 col-12 d-flex flex-column justify-content-center align-items-center">
                            <i class="fa-solid fa-notes-medical icono-estilo"></i>

                        </div>

                        <div class="col-md-9 col-12 d-flex flex-column justify-content-center align-items-start">
                            <h1 class="titulo-fila">Detalles sobre las medicinas</h1>
                            <p class="texto-fila">Puedes guardar la dosis y una foto sobre
                                cada medicina que tomes.</p>

                        </div>


                    </div>

                </div>



            </div>






            <div class="row mt-5 ">
                <div class="col-md-12 p-3">
                    <div class="row interior-fila p-3">


                        <div class="col-md-9 col-12 d-flex flex-column justify-content-center align-items-start">
                            <h1 class="titulo-fila  w-100 text-end">Detalles sobre las citas médicas</h1>
                            <p class="texto-fila text-end">Puedes guardar la fecha, hora, lugar y comentario de tus
                                citas médicas. </p>

                        </div>

                        <div class="col-md-3 col-12 d-flex flex-column justify-content-center align-items-center">
                            <i class="fa-solid fa-clock icono-estilo"></i>

                        </div>


                    </div>

                </div>



            </div>


        </div>



    </div>



    <?php include 'template/footer.php' ?>





    <style>
        .bg-azul {
            background-color: #00B6FF;
        }

        .exterior {
            background-image: linear-gradient(90deg, rgba(2, 191, 176, 0.65) 0%, rgba(2, 191, 176, 0.65) 100%), url("./../imagenes/fondo.jpg");
            background-size: cover;
            padding-top: 200px;
            padding-bottom: 200px;
        }

        .texto {
            font-size: 30px;
            text-align: center;
        }

        .titulo-fila {
            font-size: 60px;
            font-weight: bold;
        }

        .exterior-seccion {
            background-color: #00b7ff5e;
        }



        .texto-fila {
            font-size: 40px;
        }

        .interior-fila {
            background-color: #00B6FF;
            border-radius: 50px;
            color: white;
        }

        .icono-estilo {
            color: white;
            font-size: 150px;
        }

        .titulo {
            font-size: 70px;
            color: white;
        }

        * {
            font-family: 'Arima', cursive;
        }

        .interior {
            background-color: #00B6FF;
            border-radius: 50px;
            color: white;
        }

        .titulo-seccion {
            font-size: 50px;
            font-weight: bold;
        }

        .icono-aplicacion {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .icono-grande {
            width: 300px;
            height: 300px;
            object-fit: cover;
        }

        .botonAplicacion {
            border-radius: 20px;
            background-color: #1025A4;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;

        }

        .titulo-carta {
            font-size: 60px;
            font-weight: bold;
        }



        .botonAplicacion:hover {
            transition: 1s;
            background-color: white;
            color: #1025A4;
        }



        @media only screen and (max-width: 768px) {
            .titulo {
                text-align: center !important;
            }

            .titulo-fila {
                text-align: center !important;
            }

            .texto-fila {
                text-align: center !important;
            }
        }
    </style>

</body>

</html>