<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <div class="contenedor-home">
            <div class="contenedor-nav">
                <div class="nav-logo">
                    <a href="home.php"><img src="../../multimedia/img/segundoLogo.svg"/></a>
                </div>
                <div class="nav-menu">
                    <a href="../moduloVista/modulo1.php" class="modulo-uno">
                        <img src="../../multimedia/img/farmer.svg" style="height:60px; width: 65px; margin: 0 20px"/>
                        <p>Animales</p>
                    </a>
                    <a href="../moduloVista/modulo2.php" class="modulo-dos">
                        <img src="../../multimedia/img/farm.svg" style="height:60px; width: 65px; margin: 0 20px"/>
                        <p>Productos</p>
                    </a>
                    <a href="../moduloVista/nosotros.php" class="modulo-dos">
                        <img src="../../multimedia/img/primerLogo.svg" style="height:60px; width: 65px; margin: 0 20px"/>
                        <p>Nosotros</p>
                    </a>
                </div>
                <div class="nav-user" style="cursor: pointer">
                    <ul class="nav">
                        <li><p class="boton-usuario pulse">M P</p>
                            <ul>
                                <div class="contenedor-opciones">
                                    <li><a href="#"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?></a></li>
                                    <li><a href="../moduloVista/home.php">Inicio</a></li>
                                    <li><a href="../../controlador/cerrar.php">Cerrar sesión</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="../../multimedia/js/script.js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>

