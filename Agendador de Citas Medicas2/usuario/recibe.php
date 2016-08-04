<?php

// Este programa almacena la informacion del doctor en una sesion

session_start();

$_SESSION["id"]= $_POST['id'];
$_SESSION["nombre"]= $_POST['nombre'];
$_SESSION["apellido"]= $_POST['apellido'];
$_SESSION["telefono"]= $_POST['telefono'];
$_SESSION["direccion"]= $_POST['direccion'];
$_SESSION["correo"]= $_POST['correo'];

header('Location: displayinghorario.php');

?>