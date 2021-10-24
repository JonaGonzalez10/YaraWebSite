<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$razones = $_POST['razones'];
$aplicacion = $_POST['aplicacion'];
$macAddress = $_POST['macAddress'];


$mensajeCompleto = "Hola! Mi nombre es ".$nombre . ", mi correo electronico es " .$correo. ", y envio este formulario para solicitar la aplicación llamada " .$aplicacion. ", por lo que adjunto mi MAC Address que es el siguiente: ".$macAddress;
$mensajeCompleto.= ", y las razones por las que quisiera la aplicación es ".$razones;
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'proyecto.titulacion.eghna@gmail.com';                     //SMTP username
    $mail->Password   = 'proyectodeingenieria';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('proyecto.titulacion.eghna@gmail.com',$correo);
    $mail->addAddress('proyecto.titulacion.eghna@gmail.com', 'Proyecto De Titulacion');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PETICION DE APLICACION ' .$aplicacion;
    $mail->Body    = $mensajeCompleto;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

header('Location:mensaje-de-envio.html')
?>