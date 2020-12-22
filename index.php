<?php
    session_start();
    if(isset($_SESSION['nombre'])){
        header('location: vista/moduloVista/home.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="multimedia/style.css"/> 
        <link rel="icon" href="multimedia/img/primerLogo.svg" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <p style="font-size: 25px"></p>
        <main class="mainPage">
            <section class="secLogin">
                <div class="imageLogin">
                    <div>
                        <img src="multimedia/img/segundoLogo.svg" class="imgLoginPage" style="height: 350px; width: 350px">
                    </div>
                </div>
                <form class="elementsForm" action="controlador/loginUser.php" method="post">
                    <img src="multimedia/img/primerLogo.svg" style="height: 75px;width: 75px;"/>
                    <h4 class="sizeLogin">Iniciar sesión</h4>
                    <div class="marginDiv">
                        <p class="marginP">Nombre Usuario</p>
                        <input id="userField" type="text" name="nombre" class="inputUsu browser-default" maxlength="20">
                    </div>
                    <div class="marginDiv">
                        <p class="marginP">Contraseña</p>
                        <input id="passField" type="password" name="contrasenia" class="inputUsu browser-default" maxlength="12">
                    </div>
                    <div class="marginDiv">
                        <button id="iniciarSesion" class="btnLogin">Login</button>
                    </div>
                    <div class="marginDiv aStyle">
                        <a href="vista/paginasPublicas/registrarse.php" class="linksElement">¡Crear una cuenta!</a>
                        <a href="vista/paginasPublicas/recuperarContrasenia.php" class="linksElement">Recuperar Contraseña</a>
                        <a href="#" class="linksElement">Ayuda!</a>
                    </div>
                </form>
            </section>
        </main>
        <!--<a href="vista/moduloVista/home.php">home</a><br>
        <a href="vista/paginasPublicas/recuperarContraseña.php">olvide la contraseña</a><br>
        <a href="vista/paginasPublicas/registrarse.php">registarse</a><br>-->
        <script src="multimedia/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
