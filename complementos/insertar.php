<?php
    include "conexion.php";

    //Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["nombre"], $_POST["apellido"], $_POST["dni"], $_POST["telefono"], $_POST["correo"], $_POST["clave"])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
// en id-tipo voy a grabar un dato hasta cambiar el formato del formulario        
        $id_tipo = 2;
        $sql_insertar = "INSERT INTO usuarios (id_usuario, nombre, apellido, dni, telefono, correo, clave, id_tipo) VALUES (null,'$nombre', '$apellido', '$dni', '$telefono', '$correo', '$clave', '$id_tipo')";
        $insertar = mysqli_query($conectar,$sql_insertar);

        include "cerrar.php";

        if($insertar==false){ ?>
            <script type="text/javascript">alert ("Error al guardar registro");
            window.location.href="../index.php";
            </script>';
            <?php
        }else{ ?>
            <script type="text/javascript">alert ("Registro ingresado satisfactoriamente");
            window.location.href="../login.php";
            </script>;  
            <?php
        } 
    }else{ ?>
        <script type="text/javascript">alert ("Error al grabar registro");
        window.location.href="../index.php";
        </script>';
        <?php
    }

?>
