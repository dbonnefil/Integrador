<?php

include 'complementos/conexion.php';
$consulta = mysqli_query($conectar, "SELECT * FROM usuarios" );

?>

<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/listado.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
       
        <title>Integrador - Listado</title>
    </head>

    <body>
        <header>
        <!-- Inicio del Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fijo">
                <div class="container-fluid navegador">
                
                    <a class="navbar-brand" href="#"><img src="imagenes/codoacodo.png" style="width: 130px; height: auto;" alt="logo"> Conf Bs As</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbarinic" id="navbarNavAltMarkup">
                        <div class="navbar-nav moverd">
                            <a class="nav-link active" aria-current="page" href="index.php">La Conferencia</a>
                            <a class="nav-link" href="login.php">Registro</a>
    <!--                       <a class="nav-link" href="#lugar">El lugar y la fecha</a>
                            <a class="nav-link" href="#convierte">Conviertete en orador</a>
                            <a class="nav-link compra" href="#compra">Comprar tickets</a>-->
                        </div>
                    </div>
                </div>
            </nav>
            
        </header>

        <main>

            <div class="row">
                <div class="col text-center">
            
                    <h5>Listado de Usuarios Registrados</h5>
                </div>
            </div>
            <div class="row">
            
            </div>
            <div class="row" id="mi_tabla"  >
                <div class="col  pt-2">
                    

                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Teléfono</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            while( $tabla = mysqli_fetch_array($consulta)){ ?>
                            
                            <tr>
                                <td> <?php echo $tabla['id_usuario']; ?> </td>
                                <td> <?php echo $tabla['nombre']; ?> </td>
                                <td> <?php echo $tabla['apellido']; ?> </td>
                                <td> <?php echo $tabla['correo']; ?> </td>
                                <td> <?php echo $tabla['telefono']; ?> </td>
                                <td> <?php echo "<a href='modificar.php?no=".$tabla['id_usuario']."'><button type='button' class='btn btn-success btn-sm'>Modificar</button></a>"?></td>
                                <td> <?php echo "<a href='eliminar.php?no=".$tabla['id_usuario']."'><button type='button' class='btn btn-danger btn-sm'>Eliminar</button></a>"?></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </main>

        <?php
            include "complementos/footer.php";
        ?>   

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!--        <script src="js/login.js"></script> -->
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    </body>
</html>