
<?php

/*Este programa es llamado por el formulario para insertar un horario*/

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

//Datos para la conexion a la BD

$host= "localhost";
$user ="root";
$pw="";
$db ="medic";

if( 
isset($_POST['dia']) && !empty($_POST['dia']) &&
isset($_POST['horainicio']) && !empty($_POST['horainicio'])  &&
isset($_POST['horafin']) && !empty($_POST['horafin']) ) {

	//conectando con el servidor

	$con= new mysqli($host,$user,$pw,$db) ;//or die("problemas al conectarse con el servidor");
	echo $con->connect_error;
	$query = " INSERT INTO horario VALUES (NULL, '$_POST[dia]', '$_POST[horainicio]', '$_POST[horafin]', 'agendar' )" ;
 
	//realizando consultas
	$con->query($query);

	echo "<h1> Se ha agregado correctamente, :D!! </h1>";
	header('Location: displayinghorario2.php');
	echo $con->connect_error;
}

else
{
	echo "<h1> Problemas al insertar datos </h1>";
}

?>


