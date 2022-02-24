<?php

include 'complementos/conexion.php';
$no=$_GET['no'];
$eliminar=mysqli_query($conectar, "DELETE FROM usuarios WHERE id_usuario = $no" );

include "complementos/cerrar.php";

if($eliminar==false){ ?>
    <script type="text/javascript">alert ("Error al eliminar registro");
    window.location.href="index.php";
    </script>';
    <?php
}else{ ?>
    <script type="text/javascript">alert ("Registro eliminado satisfactoriamente");
    window.location.href="listado.php";
    </script>';
    <?php
}

?>