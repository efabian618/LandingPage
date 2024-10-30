<?php

function ConsultarEmail($con, $email){
    //Consulto la tabla usuarios
    $sql="SELECT * FROM usuarios WHERE usu_email = '$email'";

    // Verifico que exista esa consulta
    if($verifi=mysqli_query($con, $sql)){
        $exist=mysqli_fetch_assoc($verifi);
        return $exist;
    }
}

?>