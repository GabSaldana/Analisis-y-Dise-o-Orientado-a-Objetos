<?php

/*Este programa despliega los medicos disponibles dentro de formularios para poder enviar la info seleccionada*/

//datos para la conexion

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
		<link href='estiloform1.css' rel='stylesheet'/>
        <link rel='stylesheet' href='extra.css'/>
        <link href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Condensed' rel='stylesheet' type='text/css'>
        <style>

        	input[type="text"]{
				 
				background: rgba(0,0,0,0);
				border: none; 
				font-family: 'Asap', sans-serif;
				font-weight:bold;
				color: black;
			}

			.columna0{
				width: 30px;
			}
			.columna1{
				width: 150px;
			}
			.columna2{
				width: 150px;
			}
			.columna3{
				width: 110px;
			}
			.columna4{
				width: 150px;
			}
			.columna5{
				width: 250px;
			}
			.columna6{
				width: 130px;
			}

			.th{
				background-color: #2991E6;
				color:white;
				font-family: 'Asap', sans-serif;
				font-size: 18px;
			}
			
			td{ padding: 10px; }
			table{background: ivory;}

        </style>

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
		 <script>
            var bgcolorlist=new Array("#F596BE","#C595F2", "#6DD0DE","#58A9AD")
            document.body.style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
    	</script>
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
	<th class='th'>Horario disponible</th>
	</tr> ";

	
	while($record= mysqli_fetch_array($result,MYSQLI_NUM)){//mientras la tabla no este vacìa traerme filas
		$i=0;
		echo "<tr><form  action='recibe.php' method='POST' name='form' id='form'>";//abrimos la primera fila y su form
		
		for($i=0;$i<7;$i++){
			
			if($i==0){//columna id
				echo "<td><input class='columna0' type ='text' name='id'  id='id' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==1){//columna nombre
				echo "<td><input class='columna1' type ='text' name='nombre' id='nombre' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==2){//columna apellido
				echo "<td><input class='columna2' type ='text' name='apellido' id='apellido'  value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==3){//columna telefono
				echo "<td><input class='columna3' type ='text'  name='telefono'  id='telefono' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==4){//columna direccion
				echo "<td><input class='columna4' type ='text' name='direccion'  id='direccion' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==5){//columna desc
				echo "<td><input class='columna5' type ='text'  name='correo' id='correo' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==6){//columna ver horario
					echo "<td ><input type ='submit' class='columna6' value=' $record[$i] '></input> </td>";
			}
		}
		echo "</form ></tr>";
	}
 	echo "</table>";
 	

?>
</body>
</html>