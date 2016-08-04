<?php

/*Este programa recoge los datos de nuestra relacion medico y la muestra en una tabla html*/


//datos para la conexion a la BD

$host= "localhost";
$user ="root";
$pw="";
$db ="medic";
$link="displayinghorario.php";

//conectando con el servidor

$con= new mysqli($host,$user,$pw,$db);
if(!$con) { 
    die(mysqli_error()); 
}

echo $con->connect_error;
$query = " SELECT * FROM medico";
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
			
			td{ padding: 10px; }
			table{margin-left: 280px; background-color: ivory;}
			h1{margin-left: 300px;}
			#back{
				 font-size: 20px;
				 position: absolute;
				}

        </style>

	</head>
	<body background="fondos/medicalicons.jpg">
		<hgroup>
        	<h1 class='h1' align='center'>M&eacute;dicos disponibles</h1>
    	</hgroup>
<?php
	
	echo "
	<table border-radius: 40px border-collapse: collapse >
	<tr>
	<th class='th' >ID</th>
	<th class='th'>Nombres</th>
	<th class='th'>Apellidos</th>
	<th class='th'>Tel&eacute;fono</th>
	<th class='th'>Direcci&oacute;n</th>
	<th class='th'>Email</th>
	</tr> ";
	
	while($record= mysqli_fetch_array($result,MYSQLI_NUM)){
		$i=0;
		echo "<tr>";
		for($i=0;$i<6;$i++){
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