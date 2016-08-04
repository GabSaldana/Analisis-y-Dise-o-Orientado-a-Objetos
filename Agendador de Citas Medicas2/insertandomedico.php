<?php

/*Este programa es llamado por el formulario para insertar un medico*/

echo "
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Cuenta</title>
        <link rel='stylesheet' href='css/extra.css'>
  </head>
  <body>
	<ul class='bg-bubbles'>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
  </body>
</html>
";

//verificando que se hayan enviado los datos

$host= "localhost";
$user ="root";
$pw="";
$db ="medic";

if( 
isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['apellido'])  &&
isset($_POST['direccion']) && !empty($_POST['direccion']) &&
isset($_POST['telefono']) && !empty($_POST['telefono']) &&
isset($_POST['desc']) && !empty($_POST['desc'])   ) {

	//conectando con el servidor

	$con= new mysqli($host,$user,$pw,$db) ;//or die("problemas al conectarse con el servidor");
	echo $con->connect_error;
 	$query = " INSERT INTO medico VALUES (NULL, '$_POST[nombre]', '$_POST[apellido]', '$_POST[telefono]', '$_POST[direccion]', '$_POST[desc]', 'verhorario' )" ;
 
	//realizando consultas
	$con->query($query);

	echo "<h1> Se ha agregado correctamente, </h1> :D!!";
	header('Location: displayingmedico2.php');
	echo $con->connect_error;
}

else
{
	echo "<h1> Problemas al insertar datos </h1>";
}

?>


