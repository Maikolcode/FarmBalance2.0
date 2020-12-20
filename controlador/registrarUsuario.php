<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include ("sweet.php");
require ("PHPMailer/Exception.php");
require ("PHPMailer/PHPMailer.php");
require ("PHPMailer/SMTP.php");
include 'conectionDB.php';

$mail = new PHPMailer(true);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$numeroContacto = $_POST['telefono'];
$contraseña = $_POST['contrasenia'];

try {
    $sentencia = $conexion->prepare("insert into farmbalance.usuario (nombreUsuario, apellidoUsuario, correo, telefono, contrasenia) values (?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre, $apellido, $correo, $numeroContacto, $contraseña]);

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
    $mail->Subject ='Bienvenido!';
    $mail->Body = '<h4> Hey! ' . $nombre . ' te damos la bienvenida a farm balance</h4>';

    $mail->send();

    echo "<script>Swal.fire({
                icon: 'success',
                title: 'Usuario',
                text: 'Registrado exitosamente'
            });</script>";
    
} catch (Exception $ex) {
    echo 'error: ' . $ex->getMessage();
}
    
    /*$objUsuario = new Usuario();
    
    $objUsuario->setNombre($nombre = $_POST['nombre']);
    $objUsuario->setApellido($apellido = $_POST['apellido']);
    $objUsuario->setCorreo($correo = $_POST['correo']);
    $objUsuario->setNumeroContacto($numeroContacto = $_POST['telefono']);
    $objUsuario->setContraseña($contraseña = $_POST['contraseña']);*/
    
    
    