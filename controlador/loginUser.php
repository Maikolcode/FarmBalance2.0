<?php

session_start();
include 'conectionDB.php';
include 'sweet.php';

$nombre = $_POST['nombre'];
$contraseña = $_POST['contrasenia'];
try {
    $sentencia = $conexion->prepare("SELECT * FROM farmbalance.usuario where nombreUsuario = ? and contrasenia = ?;");
    $sentencia->execute([$nombre, $contraseña]);
    $datosSentencia = $sentencia->fetch(PDO::FETCH_OBJ);
    if ($datosSentencia === FALSE) {
        echo "<script>Swal.fire({
                icon: 'error',
                title: 'Usuario',
                text: 'No existe, verifique sus datos'
            });</script>";
    } else if ($sentencia->rowCount() == 1) {
        $_SESSION['nombre'] = $datosSentencia->nombreUsuario;
        $_SESSION['apellido'] = $datosSentencia->apellidoUsuario;
        header('location: ../vista/moduloVista/home.php');
        
    }
} catch (Exception $ex) {
    echo "no existe" . $ex->getMessage();
}
