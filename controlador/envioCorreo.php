<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include ("sweet.php");
require ("PHPMailer/Exception.php");
require ("PHPMailer/PHPMailer.php");
require ("PHPMailer/SMTP.php");

$mail = new PHPMailer(true);
$enviarMensaje = false;

try {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'farmbalance2020@gmail.com';
    $mail->Password = 'farm2020';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // a quien va enviado el correo
    $mail->setFrom('farmbalance2020@gmail.com', 'FarmBalance');
    $mail->addAddress($correo, $nombre);


    // coontenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Hola desde php';
    $mail->Body = '<h3> Hey! ' . $nombre . ' Estas registrado en farmBalance y dijiste esto: ' . $mensaje . '</h3>';
    
    $enviarMensaje = $mail->send();
    
    if ($enviarMensaje == true) {
        echo "<script>Swal.fire({
                icon: 'success',
                title: 'Correo',
                text: 'Enviado exitosamente',
            });</script>";
    }
    
} catch (Exception $e) {
    echo "Correo no se pudo enviar: {$mail->ErrorInfo}";
    /*echo'<script type="text/javascript">
            alert("Correo no enviado"' . $mail->ErrorInfo . ');
            window.location.href="../vista/paginasPublicas/correoPrueba.php}";
        </script>';*/
}
//window.location.href="index.php";