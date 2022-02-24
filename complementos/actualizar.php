 <?php

    include 'conexion.php';
   
    if (isset($_POST["nombre"], $_POST["apellido"], $_POST["dni"], $_POST["telefono"], $_POST["correo"], $_POST["clave"])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $no = $_POST['no'];
        

        $sql_actual = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono', correo='$correo', clave='$clave' WHERE id_usuario = '$no'";
        $actualizar = mysqli_query($conectar, $sql_actual);

        include "cerrar.php";

        if($actualizar==false){ ?>
            <script type="text/javascript">alert ("Error al guardar registro");
            window.location.href="../listado.php";
            </script>';
            <?php
        }else{ ?>
            <script type="text/javascript">alert ("Registro actualizado satisfactoriamente");
            window.location.href="../listado.php";
            </script>;  
            <?php
        } 
    }else{ ?>
        <script type="text/javascript">alert ("Error al actualizar registro");
        window.location.href="../listado.php";
        </script>';
        <?php
    }
