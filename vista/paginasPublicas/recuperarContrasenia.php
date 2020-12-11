<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
                <form class="elementsForm" action="../../controlador/logicaFarm.php" method="post">
                    <img src="../../multimedia/img/primerLogo.svg" style="height: 75px;width: 75px;"/>
                    <h4 class="sizeLogin" style="margin-bottom: 50px">Recuperar contraseña</h4>
                    <div class="marginDiv">
                        <p class="marginP">Correo electronico</p>
                        <input id="userField" type="text" class="inputUsu browser-default" maxlength="20">
                    </div>
                    <div class="marginDiv">
                        <button id="iniciarSesion" class="btnLogin" style="margin-top: 20px">Recuperar</button>
                    </div>
                    <div class="marginDiv aStyle">
                        <a href="correoPrueba.php" class="linksElement">Test Mensaje</a>
                        <a href="../../index.php" class="linksElement">Ir a login</a>
                    </div>
                </form>
            </section>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>


