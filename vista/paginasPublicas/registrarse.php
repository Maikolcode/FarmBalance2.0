<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <main class="mainPage">
            <section class="secLogin">
                <div class="imageLogin">
                    <div>
                        <img src="../../multimedia/img/segundoLogo.svg" class="imgLoginPage" style="height: 350px; width: 350px">
                    </div>
                </div>
                <form class="elementsForm" action="../../controlador/registrarUsuario.php" method="post">
                    <h4 class="sizeLogin">Registro</h4>
                    <div class="marginDiv">
                        <p class="marginP">Nombre</p>
                        <input id="userField" type="text" name="nombre" class="inputUsu browser-default" maxlength="20">
                    </div>
                    <div class="marginDiv">
                        <p class="marginP">Apellido</p>
                        <input id="userField" type="text" name="apellido" class="inputUsu browser-default" maxlength="20">
                    </div>
                    <div class="marginDiv">
                        <p class="marginP">Correo</p>
                        <input id="userField" type="text" name="correo" class="inputUsu browser-default" maxlength="20">
                    </div>
                    <div class="marginDiv">
                        <p class="marginP">Telefono</p>
                        <input id="userField" type="text" name="telefono" class="inputUsu browser-default" maxlength="20">
                    </div>
                    <div class="marginDiv">
                        <p class="marginP">Contraseña</p>
                        <input id="passField" type="password" name="contrasenia" class="inputUsu browser-default" maxlength="12">
                    </div>
                    <div class="marginDiv">
                        <button id="iniciarSesion" type="submit" class="btnLogin">Registrarse</button>
                    </div>
                    <div class="marginDiv aStyle">
                        <a href="../../index.php" class="linksElement">Volver al login</a>
                    </div>
                </form>
            </section>
        </main>
        <!--<button onclick="alertarSw()">aqui</button>-->
    </body>
    <script>
        function alertarSw() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Parece que hay un error',
                footer: '<a href="../../index.php">Quieres volver al home?</a>',
                confirmButtonText: 'Intentar de nuevo'
            });
        }
    </script>
    <script src="../../multimedia/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../../multimedia/sweetalert2/sweetalert2.all.min.js"></script>
</html>