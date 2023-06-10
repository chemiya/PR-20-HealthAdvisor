<?php
$id=0;

  if(isset($_GET['id'])){
    $id=$_GET['id'];

    include_once './../model/conexion.php';
   

    $sentencia = $bd->prepare("select * from citamedica where id = ?;");//busco la cita
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f877ada887.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="exterior">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h1 class="text-center titulo-citas">Detalles de la cita médica</h1>
                </div>
            </div>


            <!--muestro sus valores-->
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5 col-12 p-4">
                    <div class="row interior-col d-flex justify-content-center align-items-center">
                        <div class="col-md-4 col-12 icono d-flex  justify-content-center align-items-center">
                            <i class="fa-solid fa-calendar-days icono-estilo"></i>   
                        </div>

                        <div class="col-md-8 col-12  contenido d-flex flex-column justify-content-start align-items-start">
                            <h2 class="titulo-campo">Fecha</h2>
                            <p class="texto-campo"><?php echo $citamedica->fecha; ?></p>
                        </div>
                    
                    
                    </div> 
                </div>

                <div class="col-md-5 col-12 p-4">
                    <div class="row interior-col d-flex justify-content-center align-items-center">
                        <div class="col-md-4 col-12 icono d-flex  justify-content-center align-items-center">
                            <i class="fa-solid fa-clock icono-estilo"></i>   
                        </div>

                        <div class="col-md-8 col-12  contenido d-flex flex-column justify-content-start align-items-start">
                            <h2 class="titulo-campo">Hora</h2>
                            <p class="texto-campo"><?php echo $citamedica->hora; ?></p>
                        </div>
                    
                    
                    </div> 
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5 col-12 p-4">
                    <div class="row interior-col d-flex justify-content-center align-items-center">
                        <div class="col-md-4 col-12 icono d-flex  justify-content-center align-items-center">
                            <i class="fa-solid fa-location-dot icono-estilo"></i>   
                        </div>

                        <div class="col-md-8 col-12  contenido d-flex flex-column justify-content-start align-items-start">
                            <h2 class="titulo-campo">Lugar</h2>
                            <p class="texto-campo"><?php echo $citamedica->lugar; ?></p>
                        </div>
                    
                    
                    </div> 
                </div>

                <div class="col-md-5 col-12 p-4">
                    <div class="row interior-col d-flex justify-content-center align-items-center">
                        <div class="col-md-4 col-12 icono d-flex  justify-content-center align-items-center">
                            <i class="fa-solid fa-thumbtack icono-estilo"></i>   
                        </div>

                        <div class="col-md-8 col-12  contenido d-flex flex-column justify-content-start align-items-start">
                            <h2 class="titulo-campo">Estado</h2>
                            <p class="texto-campo"><?php echo $citamedica->estado; ?></p>
                        </div>
                    
                    
                    </div> 
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-10 col-12 p-4">
                    <div class="row interior-col d-flex justify-content-center align-items-center">
                        <div class="col-md-4 col-12 icono d-flex  justify-content-center align-items-center">
                            <i class="fa-solid fa-comment icono-estilo"></i>   
                        </div>

                        <div class="col-md-8 col-12  contenido d-flex flex-column justify-content-start align-items-start">
                            <h2 class="titulo-campo">Comentario</h2>
                            <p class="texto-campo"><?php echo $citamedica->comentario; ?></p>
                        </div>
                    
                    
                    </div> 
                </div>

               
            </div>
        </div>
    </div>


    <style>
        .exterior{
        background-color: #00b7ff5e;
        padding-bottom:120px;
    }
        .interior-col{
            background-color: #00B6FF;
            padding:10px;
            border-radius:10px;
        }

        .icono-estilo{
            color:white;
            font-size:50px;
        }

        .contenido{
            color:white;
        }

        .titulo-campo{
        font-weight:bold;
        color:white;
        font-size:30px;
    }
    .texto-campo{
        
        color:white;
        font-size:25px;
    }

        * {
            font-family: 'Arima', cursive;
        }
        .titulo-citas{
    font-weight:bold;
        font-size:55px;
   }

   
   @media only screen and (max-width: 768px) {
            .contenido{
                justify-content:center !important;
                align-items:center !important;
                padding-top:5px;
            }
        }


    </style>
</body>
</html>