<?php

/*Este programa genera los correos tanto del paciente como del medico*/

session_start();

echo "
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Cuenta</title>
        <link rel='stylesheet' href='extra.css'>
        <script src='js/jquery-2.1.4'></script>
        <link href='flaticon/flaticon.css' rel='stylesheet'/>
        <link href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Condensed' rel='stylesheet' type='text/css'> 
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

//datos del mensaje

$fromcorreo="melinopski@gmail.com";
$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$telefono =$_POST["telefono"];
$direccion =$_POST["direccion"];
$correousuario =$_POST["desc"];
$correomedico= $_SESSION["correo"];//todos los datos del doctor se guardan en una sesion
$nombremedico= $_SESSION["nombre"];
$apellidomedico=$_SESSION["apellido"];
$horainicio=$_SESSION["horainicio"];
$telefonomedico=$_SESSION["correo"];

$mensajeusuario=
"Estimad@: <strong>$nombre $apellido </strong> \n<br />".    
    "Su cita se ha generado exitosamente,a las <strong> $horainicio </strong> \n<br />".
    "su doctor <strong> $nombremedico $apellidomedico </strong> tratar&aacute; con usted al siguiente tel&eacute;fono: <strong> $telefono </strong>\n<br/>".
    "&oacute; usted puede contactarlo al correo: <strong>$correomedico</strong> .\n<br />".
    "Gracias por ocupar nuestro Sistema. :D \n<br />";

$mensajemedico=
"Estimad@: <strong>$nombremedico $apellidomedico </strong> \n<br />".    
    " Usted tiene una nueva cita con <strong> $nombre </strong>,a las <strong> 19 horas </strong>\n<br />".
    "para el ASOT 2015 el d&iacute;a 10 de Octubre comuniquese con su chica al tel&eacute;fono: <strong> 5548811040</strong>\n<br />".
    "&oacute; usted puede contactarla al correo: <strong> teamomasypunto@gmail.com</strong> .\n<br />".
    "Gracias por estar a mi lado a pesar de los berrinches que hacemos. <3  \n<br />";

//configuracion del servidor SMTP

    require("archivosformulario/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "melinopski@gmail.com";  // Correo Electrónico
    $mail->Password = "PP2014630114"; // Contraseña
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);

//Haciendo el primer mensaje
             
    $mail->From     = $fromcorreo;
    $mail->FromName = "Ticket Master "; 
    $mail->Subject  =  "Hemos confirmado su compra";
    $arraycorreos = array(  $correousuario,$correomedico);
    $arraymensajes = array(  $mensajeusuario, $mensajemedico);

    $mail->AddAddress($arraycorreos[0]);//para enviar el mensaje
    $mail->msgHTML($arraymensajes[0]); 

    if ($mail->Send()){
         echo "
         <div>
           <section id='datos'>
            <h1> Se le ha informado a su M&eacute;dico de la cita agendada</h1>
            <h3>y se han enviado los siguientes datos a su correo: $correousuario </h3>
            <h3>Nombre: $nombre </h3>
            <h3>Apellido: $apellido </h3> 
            <h3>Tel&eacute;fono: $telefono </h3>
            <h3>Direcci&oacute;n: $direccion </h3>
            <h2>Revise su correo</h2>
          </section>

          <section id='enviado'>
                <span class='flaticon-paperplane'></span>
          </section>
        </div>
        </body>
        </html>
        " ;
        $mail->SmtpClose();
    }   
    else{
         echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
    }

    $mail->SmtpClose();

//Haciendo el segundo mensaje

    $mail = new PHPMailer();
    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "melinopski@gmail.com";  // Correo Electrónico
    $mail->Password = "PP2014630114"; // Contraseña
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);        
    $mail->From     = $fromcorreo;
    $mail->FromName = "Ticket Master"; 
    $mail->Subject  =  "Hemos confirmado su compra";
      
    
    $mail->AddAddress($arraycorreos[1]);//para enviar el mensaje
    $mail->msgHTML($arraymensajes[1]); 

    if ($mail->Send()){
        echo " ";
        $mail->SmtpClose();
    }   
    else{
        echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
    }

    $mail->SmtpClose();

?>





