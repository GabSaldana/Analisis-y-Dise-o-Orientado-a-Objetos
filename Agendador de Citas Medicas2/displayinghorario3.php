
<?php

/*Este programa recoge los datos de nuestra relacion horario y la muestra en una tabla html*/


//datos para la conexion a la BD

$host= "localhost";
$user ="root";
$pw="";
$db ="medic";
$link="formulario.html";

//conectando con el servidor

$con= new mysqli($host,$user,$pw,$db);
if(!$con) { 
    die(mysqli_error()); 
}

echo $con->connect_error;
$query = " SELECT * FROM horario";
$result= $con->query($query);
if(!$result) { 
    echo "error al conectar la BD";
}

echo $con->connect_error;
?>
<html>
	<head>
		<link href='css/estiloform.css' rel='stylesheet'/>
		<link href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Condensed' rel='stylesheet' type='text/css'>	
        <style>
        	.th{
				background-color: #2991E6;
				color:white;
				font-family: 'Asap', sans-serif;
				font-size: 18px;
			}

			h1{
				margin-left: 400px;
				margin-top: 50px;
			}

			table{margin-left: 350px; background-color: ivory;}

			body{

				margin-top: 30px;
			}
			#back{
				 font-size: 20px;
				 position: absolute;
				}
        </style>
        <hgroup>
                <h1 class='h1'>HORARIOS DISPONIBLES</h1>
        </hgroup>
    </head>
    <body background="fondos/medicalicons.jpg">
 <?php
	echo "
	<table  >
	<tr>
	<th class='th'>Id</th>
	<th class='th'>Dia</th>
	<th class='th'>Hora Inicio</th>
	<th class='th'>Hora Fin</th>
	</tr>
	";
while($record= mysqli_fetch_array($result,MYSQLI_NUM)){
	$i=0;
	echo "<tr>";
	for($i=0;$i<4;$i++){
		
		echo "<td>" . $record[$i] . "</td>" ;
	}
	echo "</tr>";
}
 echo "</table>";

?>
</body>
<footer>
	<input type="submit" name="back" value="volver" id="back" onclick="history.go(-1)" />
</footer>
</html>