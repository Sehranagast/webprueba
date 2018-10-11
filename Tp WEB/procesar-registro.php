<?php
// archivo que procesa los datos enviados del formulario
/*
    1- Chequear si los datos obligatorios para crear el usuario estan llegando (NO VALE USAR EL ATRIBUTO REQUIRED DE LOS INPUT)
    2- Si no llegan los datos, redirijan al usuario al formulario
        2b- Pasenle un mensaje de error

    3- Si todo sale bien, manden al usuario a un nuevo archivo "gracias.php" que muestre un mensajito de "Gracias [nombre][apellido]([usuario]) por darte de alta".  
*/

if(empty($_POST["usuario"]) || empty($_POST["password"])){
    // redirigir al usuario al formulario (le faltan completar datos)
    header("Location:registro.php?error=true");
    die();
}

$usuario = $_POST["usuario"];

header("Location:gracias.php?usuario=$usuario");

