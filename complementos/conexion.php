<?php

$servidor ="localhost";
$usuario ="root";
$pass = "";
$bd = "registro";
$conectar = mysqli_connect($servidor,$usuario,$pass,$bd);

if(mysqli_connect_errno()){

   echo 'Error de conexion' ;
    $estadoConeccion = mysqli_connect_errno();

    header("location:../login.php");
}

?>
