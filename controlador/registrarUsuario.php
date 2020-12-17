<?php
    include 'conectionDB.php';
    include 'sweet.php';
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $numeroContacto = $_POST['telefono'];
    $contraseña = $_POST['contrasenia'];
    
    try{
        $sentencia = $conexion->prepare("insert into farmbalance.usuario (nombreUsuario, apellidoUsuario, correo, telefono, contrasenia) values (?,?,?,?,?);");
        $resultado = $sentencia->execute([$nombre,$apellido,$correo,$numeroContacto,$contraseña]);
        echo "<script>Swal.fire({
                icon: 'success',
                title: 'Usuario',
                text: 'Registrado exitosamente'
            });</script>";
    } catch (Exception $ex){
        echo 'error: '. $ex->getMessage();
    }
    
    /*$objUsuario = new Usuario();
    
    $objUsuario->setNombre($nombre = $_POST['nombre']);
    $objUsuario->setApellido($apellido = $_POST['apellido']);
    $objUsuario->setCorreo($correo = $_POST['correo']);
    $objUsuario->setNumeroContacto($numeroContacto = $_POST['telefono']);
    $objUsuario->setContraseña($contraseña = $_POST['contraseña']);*/
    
    
    