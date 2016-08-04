<?php

/*Este programa despliega los horarios disponibles dentro de formularios para poder enviar la info seleccionada*/
//datos para la conexion

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
		<link href='estiloform1.css' rel='stylesheet'/>
		<link href="extra.css" rel="stylesheet"/>
		<link href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Condensed' rel='stylesheet' type='text/css'>
         <style>

         	input[type="text"]{
				 
				background: rgba(0,0,0,0);
				border: none; 
				font-family: 'Asap', sans-serif;
				font-weight:bold;
				color: black;
			}
        	.th{
				background-color: #2991E6;
				color:white;
				font-family: 'Asap', sans-serif;
				font-size: 18px;
			}

			h1{margin-left: 390px;}
			td{ padding: 10px; }
			table{background: ivory; margin-left: 350px;}
			body{margin-top: 30px;}

			.columna0{
				width: 30px;
			}
			.columna1{
				width: 100px;
			}
			.columna2{
				width: 80px;
			}
			.columna3{
				width: 130px;
			}

        </style>
        <hgroup>
                <h1 class='h1'>HORARIOS DISPONIBLES</h1>
        </hgroup>
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
    
<?php
echo "
	<table>
	<tr>
	<th class='th'>Id</th>
	<th class='th'>Dia</th>
	<th class='th'>Hora Inicio</th>
	<th class='th'>Hora Fin</th>
	<th class='th'>Agendar</th>
	</tr>
";
while($record= mysqli_fetch_array($result,MYSQLI_NUM)){
	$i=0;
	echo "<tr><form  action='recibe2.php' method='POST' name='form' id='form'>";//abrimos la primera fila y su form
	for($i=0;$i<5;$i++){
		
			if($i==0){//columna id
				echo "<td><input class='columna0' type ='text'  name='id'  id='id' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==1){//columna dia
				echo "<td><input class='columna1' type ='text' name='dia' id='dia' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==2){//columna horainicio
				echo "<td><input class='columna2' type ='text'  name='horainicio' id='horainicio' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==3){//columna horainicio
				echo "<td><input class='columna2' type ='text'  name='horafin' id='horafin' value=". $record[$i] ."></input> </td>";//labels
			}
			if($i==4){//columna agendar
					echo "<td ><input type ='submit' class='columna3' value=' $record[$i] '></input> </td>";
			}

	}
	echo "</form> </tr>";
}
 echo "</table>";

?>
</body>
</html>