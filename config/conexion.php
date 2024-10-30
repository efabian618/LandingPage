<?php
//validamos datos del servidor
$user="root";
$pass="";
$host="localhost";
$bd="formLandingPage";

//conetamos al base datos
$conection=mysqli_connect("$host", "$user", "$pass", "$bd");

//verificamos la conexion a base datos
if(mysqli_connect_error()){
    echo"mensaje: ".mysqli_connect_error();
}
?>
