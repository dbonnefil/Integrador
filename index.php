<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/8552914272.js" crossorigin="anonymous"></script>
        <title>Integrador</title>
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
                            <a class="nav-link active" aria-current="page" href="#">La Conferencia</a>
                            <a class="nav-link" href="#oradores">Los oradores</a>
                            <a class="nav-link" href="#lugar">El lugar y la fecha</a>
                            <a class="nav-link" href="#convierte">Conviertete en orador</a>
                            <a class="nav-link compra" href="#compra">Comprar tickets</a>
                            <a class="nav-link moverdreg" href="login.php"><i class="fas fa-user"></i>Registrate!</a>
                        </div>
                    </div>
                </div>
            </nav>
        <!--Fin del Navbar-->
        
        <!-- Inicio del carusel-->
            <div class="container-fluid" style="margin: 0px; padding: 0px; padding-top: 4rem;">
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
                        <div class="carousel-caption d-sm-block">
                            <h2>Conf Bs As</h2>
                            <p>Bs As llega por primera vez a Argentina. Un evento para compartir con<br>nuestra comunidad el conocimiento y experiencia de los expertos que<br>
                            están creando el futuro de Internet. Ven a conocer a miembros del<br>evento, a otros estudiantes de Codo a Codo y los oradores de primer<br>
                            nivel que tenemos para ti. Te esperamos!</p>
                            <div class="botones">
                                <button class="btn bg-transparent"><a href="#convierte" class="orador">Quiero ser Orador</a></button>
                                <a class="btn tickets" href="#compra" role="button">Comprar tickets</a>
                            </div>
                        </div>
                    </div>
        <!--  llamada a la zona de oradores-->            
                    <a name="oradores" id="oradores"></a> 
                </div>
            </div>
        <!-- Fin del carusel -->
        </header>

        <main>
        <!-- Inicio de las cards-->
       
            <div class="centrado">
                <p class="p1">Conoce a los</p>
                <h4>ORADORES</h4>
            </div>
            <div class="card-group w-75 mx-auto">
                <div class="card p-2 mx-2 shadow p-2 mb-5 bg-body rounded">
                    <img src="imagenes/steve.jpg" class="card-img-top"  alt="Steve">
                    <div class="container d-flex w-100 mt-3 mb-0">
                        <button type="button" class="btn btn-warning botonc me-1">JavaScript</button>
                        <button type="button" class="btn btn-primary botonc ">React</button>
                    </div>
                    <div class="card-body mt-0 pt-0">
                        <h5 class="card-title">Steve Jobs</h5>
                        <p class="card-text textocard">Empresario y magnate de los negocios en el sector informático y de la industria del entretenimiento estadounidense. Fue cofundador y presidente ejecutivo de Apple12​ y máximo accionista individual de The Walt Disney Company.</p>
                    </div>
                </div>
                <div class="card p-2 mx-2 shadow p-2 mb-5 bg-body rounded">
                    <img src="imagenes/bill.jpg" class="card-img-top" alt="Bill">
                    <div class="container d-flex w-100 mt-3 mb-0">
                        <button type="button" class="btn btn-warning botonc me-1">JavaScript</button>
                        <button type="button" class="btn btn-primary botonc">React</button>
                    </div>
                    <div class="card-body  mt-0 pt-0">
                        <h5 class="card-title">Bill Gates</h5>
                        <p class="card-text textocard">Es un empresario, informático y filántropo estadounidense, conocido por haber creado y fundado junto con Paul Allen, la empresa Microsoft. De igual forma es conocido por haber creado, también con Paul Allen, el sistema operativo para computadoras Windows</p>
                    </div>
                </div>
                <div class="card p-2 mx-2 shadow p-2 mb-5 bg-body rounded">
                    <img src="imagenes/ada.jpeg" class="card-img-top" alt="Bill">
                    <div class="container d-flex w-100 mt-3 mb-0">
                        <button type="button" class="btn btn-secondary botonc me-1">Negocios</button>
                        <button type="button" class="btn btn-danger botonc">Startups</button>
                    </div>
                    <div class="card-body  mt-0 pt-0">
                        <h5 class="card-title">Ada Lovelace</h5>
                        <p class="card-text textocard">Matemática y escritora británica, célebre por su trabajo acerca de la denominada máquina analítica. Entre sus notas sobre la máquina, se encuentra lo que se reconoce hoy como el primer algoritmo destinado a ser procesado por una máquina, por lo que se la considera como la primera programadora de ordenadores</p>
                    </div>
        <!--  llamada a la pantalla dividida-->            
                    <a name="lugar" id="lugar"></a> 
                </div>
            </div>
        <!-- Fin de las cards-->

        
        <!-- Inicio Pantalla Dividida -->
            <div class="container-fluid dividida mt-2 mb-2">
                <div class="row h-100">
                    <div class="col-6 izquierda">
                        
                    </div>
                    <div class="bg-dark text-light col-6 derecha">
                        <h3 class="mt-3 mb-2">Bs As - Octubre</h3>
                        <p class="mb-3"> Buenos Aires es la provincia y localidad mas grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km<sup>2</sup> de superficie).</p>
                        <button class="btn btn-outline-light textocard" type="submit">Conoce más</button>
                    </div>
                </div>          
            </div>
        <!-- Fin Pantalla Dividida -->

        <!-- llamada a formulario oradores -->
        <a name="convierte" id="convierte"></a> 
        <!-- Inicio del formulario de oradores --> 
            <div class="centrado">
                <p class="p2">Conviertete en un</p>
                <h4>ORADOR</h4>
                <p class="p3">Anótate como orador para dar una <abbr title="charla ignite">charla ignite</abbr> . Cuéntanos de qué quieres hablar!</p>
            </div>
            <div class="container-fluid">
                <div id="mycontainer2" class="container">
                    <div class="row mb-3 nombrefv">
                        <div class="col">
                        <input type="text" class="form-control form-control-sm" style="font-size: 0.75rem;" placeholder="Nombre">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control form-control-sm" style="font-size: 0.75rem;" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control"  id="floatingTextarea2" style="height: 100px" aria-describedby="temaHelp"></textarea>
                        <label for="floatingTextarea2" style="font-size: 18px; color: rgb(121, 114, 114); padding: 0.5rem;">Sobre qué quieres hablar?</label>
                        <div id="temaHelp" class="form-text mb-3" style="font-size: 12px;">Recuerda incluir un titulo para tu charla</div>
                    </div>
                    <!--  llamada a la zona de comprar tickets, lo pongo aqui para que me de altura del encabezado sin tapar -->            
                     <a name="compra" id="compra"></a> 
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn colorbtn" type="button">Enviar</button>
                    </div>
            </div>
        <!-- Fin del formulario de oradores -->
       
        <!-- Inicio formulario de venta de tickets-->
            <div class="card-group w-50 mx-auto mt-5">
                <div class="card border-primary mx-1 p-2 borde">
                  <div class="card-body d-flex tipodscto">
                    <h5 class="card-title">Estudiante</h5>
                    <p class="card-text">Tienen un descuento</p>
                    <p class="card-text porcent">80%</p>
                    <p class="card-text documentacion">* presentar documentación</p>
                  </div>
                </div>
                <div class="card border-primary mx-1 p-2 borde">
                  <div class="card-body d-flex tipodscto">
                    <h5 class="card-title">Trainee</h5>
                    <p class="card-text">Tienen un descuento</p>
                    <p class="card-text porcent">50%</p>
                    <p class="card-text documentacion">* presentar documentación</p>
                  </div>
                </div>
                <div class="card border-primary mx-1 p-2 borde">
                  <div class="card-body d-flex tipodscto">
                    <h5 class="card-title">Junior</h5>
                    <p class="card-text">Tienen un descuento</p>
                    <p class="card-text porcent">15%</p>
                    <p class="card-text documentacion">* presentar documentación</p>
                  </div>
                </div>
            </div>

            <div class="centrado mb-2">
                <p class="p2">VENTA</p>
                <h4>VALOR DE TICKET $200</h4>
            </div>
            <form id="formulario">
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
                    <div class="row mb-3 dblockmediaq">
                    <!-- Grupo: Cantidad -->   
                        <div class="col">
                            <div class="formulario__grupo" id="grupo__cantidad">
                                <div class="formulario__grupo-input"> 
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                    <input type="text" class="form-control form-control-lg formulario__input" id="cantidad" name="cantidad" style="font-size: 1rem;" placeholder="Cantidad">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">La cantidad solo puede contener números</p>
                            </div>
                        </div>
                    <!-- Grupo: Categoria -->
                        <div class="col">
                            <div class="formulario__grupo" id="grupo__categoria">
                                <div>
                                    <label for="categoria" class="form-label">Categoría</label>
                                    <input class="form-control formulario__input" list="datalistOptions" id="categoria" name="categoria" placeholder="Estudiante" onclick="myFunction()">
                                    <datalist id="datalistOptions">
                                        <option value="Estudiante">
                                        <option value="Trainee">
                                        <option value="Junior">
                                    </datalist>
                                </div>
                                <p class="formulario__input-error">La categoría solo puede ser Estudiante, Trainee o Junior</p>
                            </div>        
                        </div>
                    </div>

                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>   

                    <div class="d-grid gap-2 mb-3">
                        <button class="btn botonpagar" type="button" id="botonpagar">Total a pagar: $</button>
                    </div>
                    <div class="d-flex botonesform">
                        <div class="d-grid gap-2 col-6 pe-2">
                            <input class="btn colorbtn btn-sm" type="reset" value="Borrar">
                        </div>   
                        <div class="d-grid gap-2 col-6 ps-2">   
                            <button class="btn colorbtn btn-sm" type="submit">Resumen</button>
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

 
    <script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    </body>
</html>