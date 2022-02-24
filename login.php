<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
        <title>Integrador - Registro</title>
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
                            <a class="nav-link" href="listado.php">Listado</a>
    <!--                       <a class="nav-link" href="#lugar">El lugar y la fecha</a>
                            <a class="nav-link" href="#convierte">Conviertete en orador</a>
                            <a class="nav-link compra" href="#compra">Comprar tickets</a>-->
                        </div>
                    </div>
                </div>
            </nav>
        <!--Fin del Navbar-->
        
        <!-- Inicio del carusel-->
        <!--    <div class="container-fluid" style="margin: 0px; padding: 0px; padding-top: 4rem;">
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/ba1.jpg" class="d-block w-100 img123" alt="BsAr1">
                        </div>
                        <div class="carousel-item">
                        <img src="imagenes/ba2.jpg" class="d-block w-100 img123" alt="BsAr2">
                        </div>
                        <div class="carousel-item">
                        <img src="imagenes/ba3.jpg" class="d-block w-100 img123" alt="BsAr3">
                        </div>
                        <div class="carousel-caption-login d-sm-block">
                            <div class="container container-login">
                                <div class="registro">
                                    <p>Inicia tu sesión</p>
                                    <a class="btn tickets" href="" role="button">Ingresa</a>
                                </div>
                                <div class="registro">
                                    <p>!Se parte es muy fácil!</p>
                                    <a class="btn tickets" href="#registro" role="button">Regístrate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        <!-- Fin del carusel -->
        </header>

        <main>
    <!--      <a name="registro" id="registro"></a>-->                   
            <div class="centrado mb-2">
                <h5>REGISTRO</h5>
            </div>
            <form id="formulario" action="complementos/insertar.php"  method="POST" onsubmit="return valida(this)">
                <div class="container-fluid" >
                    <div id="mycontainer" class="container">
                        <div class="row mb-3 dblockmediaq">
                            <!-- Grupo: Nombre -->
                            <div class="col">
                                <div class="formulario__grupo" id="grupo__nombre">
                                    <div class="formulario__grupo-input">
                                        <input type="text" class="form-control form-control-lg formulario__input" name="nombre" id="nombre" style="font-size: 1rem;" placeholder="Nombre">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre tiene que ser de 1 a 16 dígitos y solo puede contener letras.</p>
                                </div>
                            </div>
                            <!-- Grupo: Apellido -->
                            <div class="col">
                                <div class="formulario__grupo" id="grupo__apellido">    
                                    <div class="formulario__grupo-input">   
                                        <input type="text" class="form-control form-control-lg formulario__input" name="apellido" id="apellido" style="font-size: 1rem;" placeholder="Apellido">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El apellido tiene que ser de 1 a 16 dígitos y solo puede contener letras.</p>   
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 dblockmediaq">
                            <!-- Grupo: DNI -->
                            <div class="col">
                                <div class="formulario__grupo" id="grupo__dni">
                                    <div class="formulario__grupo-input">
                                        <input type="text" class="form-control form-control-lg formulario__input" name="dni" id="dni" style="font-size: 1rem;" placeholder="DNI">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El DNI tiene que ser de 1 a 8 dígitos y solo puede contener números.</p>
                                </div>
                            </div>
                            <!-- Grupo: Telefono -->
                            <div class="col">
                                <div class="formulario__grupo" id="grupo__telefono">    
                                    <div class="formulario__grupo-input">   
                                        <input type="text" class="form-control form-control-lg formulario__input" name="telefono" id="telefono" style="font-size: 1rem;" placeholder="Teléfono">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El teléfono debe tener 7 a 14 dígitos numéricos .</p>   
                                </div>
                            </div>
                        </div>                    
                        <!-- Grupo: Correo Electronico -->
                        <div class="row mb-3">
                            <div class="col">
                                <div class="formulario__grupo" id="grupo__correo">
                                    <div class="formulario__grupo-input"> 
                                        <input type="email" class="form-control form-control-lg formulario__input" name="correo" id="correo"style="font-size: 1rem;" placeholder="Correo">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Grupo: Password -->   
                        <div class="row mb-3">
                            <div class="col">
                                <div class="formulario__grupo" id="grupo__clave">
                                    <div class="formulario__grupo-input"> 
                                        <input type="password" class="form-control form-control-lg formulario__input" id="clave" name="clave" style="font-size: 1rem;" placeholder="Contraseña">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">La Contraseña debe tener de 4 a 12 caracteres </p>
                                </div>
                            </div>
                        </div>

                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>   

                        <div class="d-flex botonesform">
                            <div class="d-grid gap-2 col-6 pe-2">
                                <input class="btn colorbtn btn-sm" type="reset" value="Borrar">
                            </div>   
                            <div class="d-grid gap-2 col-6 ps-2">   
                                <button class="btn colorbtn btn-sm" type="submit">Registrarse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
        </main>


     
        <?php
            include "complementos/footer.php";
        ?>   
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
        <script src="js/login.js"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    </body>
</html>