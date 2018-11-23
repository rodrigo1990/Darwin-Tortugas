<?php  
	require("../class.phpmailer.php");

	$mensaje = $_POST['mensaje'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
  $tipo_evento = $_POST['tipo_evento'];
  $fecha = $_POST['fecha'];
  $email = $_POST['email'];

	$cuerpo = "";
	$mail = new PHPMailer();
    $mail->Host = "localhost";
    $mail->IsHTML(true);
			
    $cuerpo  = "
      <table style='font-size:1rem;margin-left: auto;margin-right: auto;font-family:arial;border-radius:10px;background-color: #f3f3ff;border:30px solid #f3f3ff;text-align:center; '>";

    $cuerpo.="<tr>
              <td>
              <img src='http://www.deudaonline.com.ar/imagenes/logo.png' style='width:300px;margin-left:auto;margin-right:auto;display:block'>
              </td>
            </tr>";

   
    $cuerpo .="<tr>";
      $cuerpo .="<td style='text-align:center'>";
        $cuerpo .= "<b>Nombre</b>: ".$nombre."<br>";
        $cuerpo .= "<b>Telefono</b>: ".$telefono."<br>";
        $cuerpo .= "<b>Tipo de evento</b>: ".$tipo_evento."<br>";
        $cuerpo .= "<b>Fecha</b>: ".$fecha."<br>";
        $cuerpo .= "<b>Email</b>: ".$email."<br>";
        $cuerpo .= "<b>Comentarios</b>: ".$mensaje."<br>";
        
      $cuerpo .="</td>";
    $cuerpo .="</tr>";
  
    $cuerpo.="</table>";


  $mail->From = "info@c1250353.ferozo.com";
  	$mail->FromName = "Darwin Tortugas Web";
	 $mail->Subject = "Consulta via sitio web";
    $mail->AddAddress("mcd77.1990@gmail.com","Deuda Online");
    $mail->Body = $cuerpo;
     $mail->AltBody = "";
     $mail->Send();



?>