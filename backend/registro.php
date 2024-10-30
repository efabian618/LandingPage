<?php

if(isset($_POST)){
    // Verificar conexion con la bd
    include_once 'C:\xampp\htdocs\LandingPage\config\conexion.php';
    include_once 'C:\xampp\htdocs\LandingPage\utils\funciones.php';
    session_start();

    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $error=0;

    // Verificar que el campo name sea correcto
    if(is_numeric($name) || preg_match("/[0-9 ''()]/", $name)){
        $_SESSION["error_name"]="El Nombre es Incorrecto Simbolos O Números";
        header("location: ../index.php");
        $error++;
    }

    // Verificar que el campo lastname sea correcto
    if(is_numeric($lastname) || preg_match("/[0-9 ''()]/", $lastname)){
        $_SESSION["error_lastname"]="El Apellido es Incorrecto Simbolos O Números";
        header("location: ../index.php");
        $error++;
    }



    $verificar=ConsultarEmail($conection, $email);

    if($verificar){
        $_SESSION["error_email"]="El correro YA Existe";
        header("location: ../index.php");
        $error++;
    }

    if($error==0){
        $sql="INSERT INTO usuarios(usu_name, usu_lastname, usu_email)
        values('$name', '$lastname', '$email')";

        if(mysqli_query($conection, $sql)){
            $_SESSION["registro_exitoso"]="El Usuario se Registro Con Éxito";
            header("location: ../index.php");
        }
        else{
            $_SESSION["registro_fallo"]="El Registro Fallo, Intentelo de Nuevo";
            header("location: ../index.php");
        }
    }
}
?>