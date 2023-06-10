<?php

  $idUsuario= $_COOKIE["idUsuarioCookie"];
  $username= $_COOKIE["username"];

  $db = mysqli_connect("localhost", "root", "password", "healthadvisor");
  $query = " select * from medicina where idUsuario=".$idUsuario.";";//cargar las medicinas del usuario
	$result = mysqli_query($db, $query);
  $vacio="0";
 

    if($result->num_rows==0){
      $vacio=1;
    } 



    $mensaje="vacio";//mensaje que muestro
    if(isset($_GET['mensaje'])){
      $mensaje=$_GET['mensaje'];
      if($mensaje=="medicinaguardada"){
        $mensaje="Medicina guardada con éxito.";
      }else if($mensaje=="citaguardada"){
        $mensaje="Cita médica guardada con éxito.";
      }else if($mensaje=="citaeditada"){
        $mensaje="Cita médica editada con éxito.";
      }else if($mensaje=="medicinaeditada"){
        $mensaje="Medicina editada con éxito.";
      }else if($mensaje=="medicinaeliminada"){
        $mensaje="Medicina eliminada con éxito.";
      }else if($mensaje=="citaeliminada"){
        $mensaje="Cita médica eliminada con éxito.";
      }
      
      
      
      else{
        $mensaje="Usuario editado con éxito.";
      }
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

    <nav class="navbar navbar-expand-lg bg-azul">
        <div class="container-fluid">
            <div>
                <img src="./../imagenes/icono.jpg" class="icono-aplicacion" />
            </div>

            <?php
              if($mensaje!="vacio"){
            ?>


            <div class="alerta-arriba ps-2">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class=" text-center alerta-texto-arriba"> <?php echo $mensaje; ?></p>
                                

                </div>
            </div>


            <?php
            }
            ?>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center">

                    <li class="nav-item p-3">
                        <a class="nav-link botonAplicacion" href="misCitasMedicas.php">Mis citas médicas</a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link botonAplicacion " href="editarUsuario.php">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-user pe-2"></i>
                                <?php echo $username; ?>
                            </div>

                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="exterior pt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="titulo-medicinas">Mis medicinas</h1>
                </div>
                <div class="col-md-6 col-12 guardar-medicina d-flex justify-content-end align-items-center">
                    <a href="guardarMedicina.php" class="button-a botonAplicacion">Guardar medicina</a>
                </div>
            </div>


            <div class="row mt-5 medicinas p-4">
                <div class="col">
                    <div class="row">

    <!--mostrar las medicinas-->
    <?php

        if($vacio==0){
        while ($data = mysqli_fetch_assoc($result)) {
		?>


                        <div class="col-md-4 p-4">
                            <div class="interior p-4 d-flex flex-column justify-content-center align-items-center">
                                <img src="./../operaciones/image/<?php echo $data['foto']; ?>" class="imagen-medicina">
                                <h1 class="titulo-medicina">
                                    <?php echo $data['nombre']; ?>
                                </h1>
                                <p class="descripcion">
                                    <?php echo $data['dosis']; ?>
                                </p>
                                <a class="botonAplicacion" href="guardarMedicina.php?id=<?php echo $data["id"];
                                    ?>">Editar</a>
                                <a class="botonEliminar mt-2" href="./../operaciones/eliminarMedicinaOperacion.php?id=<?php echo $data["id"];
                                    ?>">Eliminar</a>
                            </div>
                        </div>





                      <!--ninguna medicina-->
                        <?php
		}}else{

    
                        ?>
                        <div class="col-md-12">
                            <div class=" p-4 d-flex flex-column justify-content-center align-items-center">
                                <h1 class="text-center">No tienes ninguna medicina guardada.</h1>
                            </div>
                        </div>

                        <?php
    }
?>




                    </div>
                </div>
            </div>



        </div>




        <style>
            .bg-azul {
                background-color: #00B6FF;
            }

            .exterior {
                background-color: #00b7ff5e;
                padding-bottom: 300px;
            }

            .guardar {
                border: none !important;
            }

            .titulo-medicinas {
                font-weight: bold;
                font-size: 55px;
            }

            .descripcion {
                color: white;
                font-size: 20px;
                text-align: center;

            }

            .titulo-medicina {
                color: white;
                font-size: 40px;
                font-weight: bold;
                margin-top: 5px;
                text-align:center;
            }

            .button-a {
                text-decoration: none;
            }

            .imagen-medicina {
                width: 200px;
                height: 200px;
                object-fit: cover;
            }

            .interior {
                background-color: #00B6FF;
                border-radius: 25px;
            }

            .medicinas {
                background-color: white;
                border-radius: 25px;
            }

            .icono-aplicacion {
                width: 80px;
                height: 80px;
                object-fit: cover;
            }

            * {
                font-family: 'Arima', cursive;
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

            


            @media only screen and (max-width: 768px) {
                .titulo-medicinas {
                    text-align: center !important;
                }

                .guardar-medicina {
                    justify-content: center !important;
                }


            }
        </style>



</body>

</html>