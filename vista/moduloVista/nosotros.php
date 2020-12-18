<?php
session_start();
    if(!isset($_SESSION['nombre'])){
        header('location: ../../index.php');
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nosotros</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        
        <?php
        include ("../template/header.php");
        ?>
        <div class="contenedor-titulo">
            <h1 class="titulo-nosotros">Nosotros</h1>
            <div class="separador"></div>
        </div>
        <div class="contenedor-nosotros">
            <div class="parallax-container">
                <div class="parallax"><img src="../../multimedia/img/img-parallax.jpg" style="width:100%; height: auto"></div>
            </div>
            <div class="contenedor-textos">
                <div class="contenedor-farm">
                    <p class="titulo-farm">Conoce a Farm Balance</p>
                    <p class="texto-farm">Farm balance es un sistema que te enseña e informa sobre el cuidado y venta de los animales de tu granja. <br>
                    Ademas de ser tu mejor aliado a la hora de cuidar tu bolsillo.</p>
                </div>
                <div class="separador"></div>
                <div class="contenedor-mision">
                    <p class="titulo-farm">Misión</p>
                    <p class="texto-farm">Farm balance es un sistema que te enseña e informa sobre el cuidado y venta de los animales de tu granja.</p>
                </div>
                <div class="separador"></div>
                <div class="contenedor-vision">
                    <p class="titulo-farm">Visión</p>
                    <p class="texto-farm">Farm balance es un sistema que te enseña e informa sobre el cuidado y venta de los animales de tu granja.</p>
                </div>
                <div class="separador"></div>
            </div>
            <div class="parallax-container" style="margin-top: 35px">
                <div class="parallax"><img src="../../multimedia/img/fondo-dos.jpg" style="width:100%; height: auto"></div>
            </div>
        </div>
        <?php
        include ("../template/footer.php");
        ?>

        <script  src="../../multimedia/js/script.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>


