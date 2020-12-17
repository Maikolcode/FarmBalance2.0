<?php 
    include '../../controlador/conectionDB.php';
    include '../template/header.php';
    
    $sentencia = $conexion->query("SELECT * FROM farmbalance.usuario;");
    $listaUsuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<div class="row">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Numero</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaUsuario as $list){?>
                <tr>
                    <td><?= $list->idUsuario?></td>
                    <td><?= $list->nombreUsuario?></td>
                    <td><?= $list->apellidoUsuario?></td>
                    <td><?= $list->correo?></td>
                    <td><?= $list->telefono?></td>
                    <td><?= $list->contrasenia?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

