<?php
session_start();
    if(!isset($_SESSION['nombre'])){
        header('location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/> 
    </head>
    <body>  
        <?php
            include('../template/header.php');
        ?>
        <h1>hola mundo</h1>
        <?php
            include('../template/footer.php');
        ?>
    </body>
</html>

