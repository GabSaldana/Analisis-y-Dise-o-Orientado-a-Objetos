<?php

//Este programa almacena la infromacion de los horarios en la misma sesion

session_start();

$_SESSION["dia"]= $_POST['dia'];
$_SESSION["horainicio"]= $_POST['horainicio'];
$_SESSION["horafin"]= $_POST['horafin'];

header('Location: formulario.html');
?>